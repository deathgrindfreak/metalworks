#!/usr/bin/env python
# -*- coding: utf-8 -*-

# Author: Cooper Bell
# Date: June 26 2014

# This script is designed to scrape all of the thread and post information from the metal archives
# However, I'm sure with very little modification it could work for any forum, to the general overall
# structure of web forums

import urllib2
import pprint

# URL info for the site
base = "http://www.metal-archives.com/board/"
f_script = "viewforum.php"
t_script = "viewtopic.php"


class scraper:

    def __init__(self, base_url, forum_script, thread_script, forum_var = "f", thread_var = "t"):
        """ __init__ - Default constructor

        Args:
        base_url -- The base url for the site
        forum_script -- Name of the forum script
        forum_var -- Name of the forum GET variable
        thread_script -- Name of the thread script
        thread_var -- Name of the thread GET variable
        """

        self.base_url = base_url
        self.forum_script = forum_script
        self.forum_var = forum_var
        self.thread_script = thread_script
        self.thread_var = thread_var


    def scrape_forums(self, forum_id, page):
        """ scrape_forum - scrapes the forum page

        Args:
        forum_id -- the forum id for the website
        page -- the page number for the website
        """

        # Number of threads per page
        THREADS_PER_PAGE = 30


        # Get the forum page
        if (page == 1):
            request = urllib2.urlopen(self.base_url + self.forum_script + "?f=" + str(forum_id))

        else:
            request = urllib2.urlopen(self.base_url + self.forum_script + "?f=" + str(forum_id) +
                                 "&start=" + str(THREADS_PER_PAGE * (page - 1)))


        # Arrays for holding thread and total threads
        threads = []
        thread = []

        # Boolean for checking if line is past topics
        past_topics = False;

        # whether to scrape a
        scrape_a = True

        # whether to scrape the thread id
        scrape_id = True

        # HTML string containing the thread_id
        t_id_str = 'href="./viewtopic.php?f=' + str(forum_id) + '&amp;t='

        # Read the page
        for line in request:

            # Check for topics header
            if '<td class="row3" colspan="6"><b class="gensmall">Topics</b></td>' in line:
                past_topics = True;

            # If we've moved past the topics header
            if past_topics:

                if '</tr>' in line:
                    threads.append(thread)
                    thread = []

                # if line starts with td
                if '<td' in line:
                    scrape_a = True

                # if the line starts with a tr
                if '<tr' in line:
                    scrape_id = True

                # Find the first link
                if '<a' in line and scrape_a:
                    line = self.a_slice(line)
                    scrape_a = False
                    thread.append(line)

                # Get the thread id
                if t_id_str in line and scrape_id:
                    line = line[line.find(t_id_str) + len(t_id_str):line.find('&amp;', line.find(t_id_str) + len(t_id_str))]
                    thread.append(line)
                    scrape_id = False


                # Find the end of the threads page and break
                if '<tr align="center">' in line:
                    break


        # remove the first element (empty one)
        del threads[0]

        # Close the page
        request.close()

        return threads


    def a_slice(self, string, start=''):
        """a_slice - splits a string containing an a html element

        Args:
        string -- the input string
        """

        return string[string.find('>', string.find('<a' + start)) + 1:string.find('</a>')]


    def scrape_threads(self, forum_id, thread_id, page):
        """ scrape_threads - scrapes the thread page

        Args:
        forum_id -- the forum id for the website
        thread_id -- the thread id for the website
        page -- the page number for the thread page
        """

        # Number of threads per page
        POSTS_PER_PAGE = 40


        # Get the forum page
        if (page == 1):
            url = self.base_url + self.thread_script + "?f=" + str(forum_id) + "&t=" + str(thread_id)
        else:
            url = self.base_url + self.thread_script + "?f=" + str(forum_id) + "&t=" + str(thread_id) + "&start=" + str(POSTS_PER_PAGE * (page - 1))


        request = urllib2.urlopen(url)

        # Arrays for holding post and total posts
        posts = []
        post = []

        pages = 0

        # Read the page
        for line in request:

            # Check for profile td
            if '<td valign="top" class="profile">' in line:
                posts.append(post)
                post = []

            if '' in line:
                pages = line[:]

            # Find and scrape the post user
            if '<span class="bold sml">' in line:
                post.append(line[line.find('>', line.find('>', line.find('>') + len('>') + 1) + len('>') + 1) + 1:len(line) - len('</a></a></span><br />') - 1])


            # Find and scrape the user info line
            if 'Joined' in line and 'Location' in line:

                # scrape the joined date
                post.append(line[line.find('<br /><b>Joined:</b>') + len('<br /><b>Joined:</b>') + 1:line.find('<br />', line.find('<br />') + len('<br>'))])

                # scrape the location for the user
                post.append(line[line.find('<br /><b>Location:</b>') + len('<br /><b>Location:</b>') + 1:-1])

            elif 'Joined' in line and not 'Location' in line:
                post.append('N/A')

                # scrape the joined date
                post.append(line[line.find('<br /><b>Joined:</b>') + len('<br /><b>Joined:</b>') + 1:line.find('<br />', line.find('<br />') + len('<br>'))])

            # Find and scrape the posted date
            if 'Posted' in line:
                post.append(line[line.find('<b>Posted:</b>') + len('<b>Posted:</b>'):line.find('&nbsp;')])

            # Find and scrape the post content
            if '<div class="postbody">' in line:
                post.append(line[line.find('<div class="postbody">') + len('<div class="postbody">'):len(line) - len('</div>') - 1])


        # Close the page
        request.close()

        return posts



# Instantiate the scraper class
scrape = scraper(base, f_script, t_script)


#for page in range(1, 17):
#    posts = scrape.scrape_threads(1, 44082, page)

print "INSERT INTO users (username, pass, email, joined, location, hash, active) VALUES"
for page in range(1, 512):
    threads = scrape.scrape_forums(1, page)
    for thread in threads:
        if (len(thread) == 4):
            print "(" + thread[2] + ", sha1(\'" + thread[2] + "\'), " + thread[2] + "@example.com, " + "NOW(), 'N/A', md5(FLOOR(RAND() * 1000)), 1)"
            print "(" + thread[3] + ", sha1(\'" + thread[3] + "\'), " + thread[3] + "@example.com, " + "NOW(), 'N/A', md5(FLOOR(RAND() * 1000)), 1)"



