<?php # some functions for handling thread pages


/*****************************************
 * Note!  mysqli_connect.inc.php must be
 *        called before this script is 
 *        included
 *****************************************/


// count_forum_threads - counts the total number of threads belonging to a forum
function count_forum_threads($dbc, $forum_id) {

    // Count the total threads for forum_id
    $s = $dbc->query("SELECT COUNT(thread_id) as thread_count FROM threads WHERE forum_id = $forum_id");
    $result = $s->fetch_array(MYSQLI_ASSOC);

    return $result['thread_count'];
}


// count_thread_posts - counts the number of posts belonging to a thread
function count_thread_posts($dbc, $thread_id) {
    
    // Count the total threads for forum_id
    $s = $dbc->query("SELECT COUNT(post_id) as post_count FROM posts WHERE thread_id = $thread_id");
    $result = $s->fetch_array(MYSQLI_ASSOC);

    return $result['post_count'];
}


// count_posts - counts the number of posts made by the user
function count_posts($dbc, $user_id) {

    $s = $dbc->query("SELECT COUNT(*) AS post_number FROM posts where user_id=$user_id");
    $result = $s->fetch_array(MYSQLI_ASSOC);

    return $result['post_number'];
}

// count_messages - counts the number of messages made on a user profile page
function count_messages($dbc, $user_id) {

    $s = $dbc->query("SELECT COUNT(*) AS message_number FROM comments where user_id=$user_id");
    $result = $s->fetch_array(MYSQLI_ASSOC);

    return $result['message_number'];
}


// page_emblem - displays the html page emblem
function page_emblem($page, $pages, $url) {

    // Make the link string
    if ($page == 1) {
        $link = '';
    } else {
        $link .= '&nbsp; <a href="' . $url . '&page=' . $page - 1 . '"><</a>';
    }

    // Add in all of the number links, highlighting the current page
    for ($i = 1; $i <= $pages; $i++) {
        if ($i == $page) {
            $link .= '&nbsp;<strong>' . $i . '</strong></a>';
        } else {
            $link .= '&nbsp;<a href="' . $url . '&page=' . $i . '">' . $i . '</a>';
        }
    }

    // If pages is greater than 4, append elipse and page link
    if ($pages > 4) {
        $link .= '&nbsp;<a href="' . $url . '&page=' . $pages . '"> &nbsp; ... &nbsp;' . $pages . '</a>';
    } 

    if ($pages > 1) {
        $link .= '&nbsp; <a href="' . $url . '&page=' . ($page + 1) . '">></a>&nbsp;';
    } else {
        $link .= '&nbsp;';
    }

    $emblem = '<div style="display: inline-block; float: right">
                <div class="page_number">
                    Page ' . $page . ' of ' . $pages . '
                </div>
                <div id="page_number_links">
                    ' . $link . '
                </div>
               </div>';

    return $emblem;
}


// show_posts - generates all html per page for a thread 
function show_posts($dbc, $thread_id, $page_num) {
    
    // Define the number of posts per page as a constant
    define("POSTS_PER_PAGE", 15);


    // Convert to the users timezone
    if (isset($_COOKIE['user_tz'])) {
        $correct_joined = "CONVERT_TZ(users.joined, '-06:00', '" . $_COOKIE['user_tz'] . "')";
        $correct_posted = "CONVERT_TZ(posted_on, '-06:00', '" . $_COOKIE['user_tz'] . "')";
    } else {
        $correct_joined = 'users.joined';
        $correct_posted = 'posted_on';
    }


    // Get all info for posts for the thread
    $q = "SELECT users.username, users.user_id, users.thumb_url, DATE_FORMAT($correct_joined, '%M %D, %Y %l:%i %p') as joined, users.location, 
                 message, DATE_FORMAT($correct_posted, '%M %D, %Y %l:%i %p') as date, posts.post_id, threads.subject, posts.edited
        FROM posts 
        INNER JOIN threads ON posts.thread_id=$thread_id AND threads.thread_id=$thread_id 
        INNER JOIN users ON users.user_id=posts.user_id
        ORDER BY posted_on";


    // Execute the query
    $s = $dbc->query($q);

    // Fetch the first row from the array
    $result = $s->fetch_array(MYSQLI_ASSOC);
    

    // Get the thread title and thread author
    $thread_title = $result['subject'];
    $thread_author = $result['username'];
    
    // Get the total number of pages required (15 posts per page)
    $pages = floor(count_thread_posts($dbc, $thread_id) / POSTS_PER_PAGE) + 1;


    // html for the header information
    echo           '<td valign="middle"> 
                        <h1 style="padding: 0; margin: 0; margin-bottom: 3px; font-size: 26px">' . $thread_title . '</h1>
                        <span style="font-size: 12px">by ' . $thread_author . '</span>
                    </td>
                </tr>
            </tbody>
        </table>
        ' . page_emblem($page_num, $pages, 'showthread.php?t=' . $thread_id) . '
    </div>';

    
    // The number of the post in the thread
    $number = POSTS_PER_PAGE * ($page_num - 1);

    // Number that must iterate until 15 * ($page_num - 1) + 1 post is reached
    $post = 0;

    // Print all of the posts for the thread
    do {

        // Loop until the first post for the page is reached
        if ($post >= POSTS_PER_PAGE * ($page_num - 1)) {
        
            // Set variables for post
            $body = $result['message'];
            $user = $result['username'];
            $user_id = $result['user_id']; 
            $avatar = $result['thumb_url'];
            $joined = $result['joined'];
            $location = $result['location'];
            $date = $result['date'];
            $post_id = $result['post_id'];
            $number += 1;
            
            // Count the number of posts for each user
            $posts = count_posts($dbc, $user_id);

            // html for the new thread reply
            echo '<div id="thread">
                    
                    <div id="thread_header" style="width: 930px">
                    <table cellpadding="0" cellspacing="0" width="98%">
                        <tr>
                            <td><span id="user_name"><a href="member.php?u=' . $user_id . '">' . $user . '</a></span></td>
                            <td align="right" valign="middle" style="color: #fff" width="290px">';

            // Check if the post has been edited
            if ($result['edited'] == 1) {
                echo '[Edited]&nbsp;';
            }

            echo     $date . ' &nbsp;#<strong>' . $number . '
                            </strong></td>
                        </tr>
                    </table>
                    </div>

                    <div id="thread_body">
                    <table cellpadding="10" cellspacing="0" border="0" width="100%" align="center">
                        <tbody>

                            <tr valign="top">
                            <td width="21%" style="height: 100%; border-right: 1px solid #ccc">
                                <div>
                                    <a href="member.php?u=' . $user_id . '" id="avatar_link">
                                        <img src="images/avatars/' . $avatar . '" class="avatar" height="90px"; width="90px" name="avatar"/>
                                    </a>
                                    <div id="user_emblem">Posts: ' . $posts . '</div>
                                    <p style="font-size: 10px"><span style="font-weight: bold">Joined:</span> ' . $joined . '<br/>
                                                                <span style="font-weight: bold">From:</span> ' . $location . '</p>
                                </div>
                            </td>
                            <td colspan="2">
                                <div id="thread_text">' . $body . '</div>
                            </td>
                            </tr>

                        </tbody>
                    </table>';

        // Show the edit button if the user is logged in
        if ($_COOKIE['user_id'] == $user_id) {

            echo '<a href="editpost.php?p=' . $post_id . '&t=' . $thread_id . '&page=' . $page_num . '">
                    <div class="nav_button" style="width: 45px; height: 22px; float: right; margin: 0px 0px 0px 0px">Edit</div>
                  </a>';
        } 

        echo '</div>
                   
                   <!-- for vertical spacing -->
                   <div style="margin-bottom: 25px;"></div>
               
              </div>';
        }

        // Increment the post count
        $post += 1;

    } while ( ($post < POSTS_PER_PAGE * $page_num) && ($result = $s->fetch_array(MYSQLI_ASSOC)) != NULL );
}


// show_threads - echo table rows for all threads belonging to forum_id
function show_threads($dbc, $forum_id, $page_num) {
    
    // Define the number of threads per page as a constant
    define("THREADS_PER_PAGE", 30);

    // Get the total number of pages required (30 threads per page)
    $pages = floor(count_forum_threads($dbc, $forum_id) / THREADS_PER_PAGE) + 1;

    // Get the title of the forum
    $s = $dbc->query("SELECT forum_subject FROM forums WHERE forum_id = $forum_id");
    $r = $s->fetch_array(MYSQLI_ASSOC);

    // Title of the forum
    $title = $r['forum_subject'];

    // Close the connection
    $s->close();


    // Echo the part of the html for the page emblem
    echo            '<td valign="middle" style="padding-right: 40px">' . page_emblem($page_num, $pages, 'forum.php?f=' . $forum_id) . '</td>
                </tr>
            </tbody>
        </table>
        <div id="forum_container">
            <div id="main_forum_header"><span style="font-size: 24px; font-weight: bold">' . $title . '</span></div>
            <table class="tborder" cellpadding="6" cellspacing="0" border="0" width="100%" align="center">
                <tbody>
                    <tr class="thead">
                        <td class="thead" width="100%">Thread / Thread Author</td>
                        <td class="thead" width="170px" align="left" nowrap="nowrap" style="padding-left: 30px">Last Post</td>
                        <td class="thead" width="90px" align="center" nowrap="nowrap">Replies</td>
                        <td class="thead" width="80px" align="center" nowrap="nowrap">Views</td>
                    </tr>';


    // I have no idea how to find the latest author in the query below, so I'm just going to do a separate one
    // Also, it pretty much took me forever, since there's both an inner join and a subquery.  Pretty awesome though.
    $q = "SELECT username, users.user_id, p2.thread_id
          FROM users
          INNER JOIN (
              SELECT thread_id, user_id, posted_on
              FROM posts
              ORDER BY thread_id, posted_on DESC
          ) as p2
          ON p2.user_id = users.user_id
          GROUP BY thread_id";

    $f = $dbc->query($q);

    // Initialize the author array
    $latest_author = array();
    $latest_author_id = array();
    
    // Number that must iterate until 15 * ($page_num - 1) + 1 thread is reached
    $thread = 0;

    // Push the query results as key values pairs
    while ( ($thread < THREADS_PER_PAGE * $page_num) && ($f_result = $f->fetch_array(MYSQLI_ASSOC)) != NULL) {

        // Loop until the first thread for the page is reached
        if ($thread >= THREADS_PER_PAGE * ($page_num - 1)) {
            $latest_author[$f_result['thread_id']] = $f_result['username'];
            $latest_author_id[$f_result['thread_id']] = $f_result['user_id'];
        }
        
        // Increment the thread count
        $thread += 1;
    }

    // Close the connection
    $f->close();


    // Convert to the users timezone
    if (isset($_COOKIE['user_tz'])) {
        $correct_posted = "CONVERT_TZ(posts.posted_on, '-06:00', '" . $_COOKIE['user_tz'] . "')";
    } else {
        $correct_posted = 'posts.posted_on';
    }

    // Find all threads that belong to the forum_id
    $q = "SELECT threads.thread_id, subject, users.user_id, users.username, COUNT(post_id) - 1 as replies,
                 MAX(DATE_FORMAT($correct_posted, '%M %D, %Y %l:%i %p')) as date, threads.views
          FROM threads
          INNER JOIN posts USING (thread_id)
          INNER JOIN users ON threads.user_id=users.user_id
          WHERE forum_id = $forum_id
          GROUP BY thread_id DESC";

    // Execute the query
    $s = $dbc->query($q);

    // Reinitialize thread variable
    $thread = 0;

    // Echo all of the table rows to the page
    while ( ($thread < THREADS_PER_PAGE * $page_num) && ($result = $s->fetch_array(MYSQLI_ASSOC)) != NULL ) {

        // Loop until the first thread for the page is reached
        if ($thread >= THREADS_PER_PAGE * ($page_num - 1)) {

            $thread_id = $result['thread_id'];
            $thread_title = $result['subject'];
            $thread_author_id = $result['user_id']; 
            $thread_author = $result['username']; 
            $replies = $result['replies'];
            $latest_date = $result['date'];
            $views = $result['views'];

            echo '<tr class="thread_row">
                    <td class="thread_row" width="100%" align="left">
                        <p style="padding: 1px"><a href="showthread.php?t=' . $thread_id . '&page=1">'. $thread_title . '</a></p>
                        <p style="font-size: 10px; padding: 1px">
                            by <a href="member.php?u=' . $thread_author_id . '">
                            <span style="font-weight: bold">' . $thread_author . '</span></a>
                        </p>
                    </td>
                    <td class="thread_row" width="170px" align="center" nowrap="nowrap">
                        <div style="margin: 0 auto; text-align: left">
                            <p style="font-size: 10px; padding: 1px;">' . $latest_date . '</p>
                            <p style="font-size: 10px; padding: 1px">
                                by <a href="member.php?u=' . $latest_author_id[$thread_id] . '">
                                <span style="font-weight: bold">' . $latest_author[$thread_id] . '</span></a>
                            </p>
                        </div>
                    </td>
                    <td class="thread_row" width="90px" align="center" nowrap="nowrap">' . $replies . '</td>
                    <td class="thread_row" width="80px" align="center" nowrap="nowrap">' . $views . '</td>
                </tr>';
        }
        
        // Increment the thread count
        $thread += 1;
    }

    // Close the connection
    $s->close();
}



// Returns the last post info for the last post emblem
function last_post($dbc, $forum_id) {
    
    // Convert to the users timezone
    if (isset($_COOKIE['user_tz'])) {
        $correct_posted = "CONVERT_TZ(posts.posted_on, '-06:00', '" . $_COOKIE['user_tz'] . "')";
    } else {
        $correct_posted = 'posts.posted_on';
    }

    $q = "SELECT threads.thread_id, subject, users.username, users.user_id, DATE_FORMAT($correct_posted, '%M %D, %Y %l:%i %p') as date 
          FROM threads
          INNER JOIN posts ON posts.thread_id=threads.thread_id
          INNER JOIN users ON users.user_id=threads.user_id
          WHERE forum_id=$forum_id
          ORDER BY date DESC
          LIMIT 1";

    $s = $dbc->query($q);

    $result = $s->fetch_array(MYSQLI_ASSOC);

    // Assign some variables
    $link = 'showthread.php?t=' . $result['thread_id'] . '&page=1';
    $title = $result['subject'];
    $user = $result['username'];
    $user_id = $result['user_id'];
    $date = $result['date'];


    // Truncate title if necessary
    if (strlen($title) > 30) {
        $title = substr($title, 0, 30) . '...';
    }


    echo '<div style="font-size: 12px; font-weight: bold"><a href="' . $link . '">' . $title . '</a></div>
        <div style="font-size: 10px;>
            <span style="float: left">by <a href = "member.php?u=' . $user_id . '">' . $user . '</a></span>
            <span style="float: right">' . $date . '</span>
        </div>';
}


// display_comments - displays the comments for the user
function display_comments($dbc, $user_id) {

    // Count the number of comments for the user
    $s = $dbc->query("SELECT COUNT(*) AS count FROM comments WHERE user_id = $user_id");
    $result = $s->fetch_array(MYSQLI_ASSOC);
    $s->close();

    // If someone has left a comment for the user
    if ($result['count'] > 0) {

        // Echo the part of the html for the page emblem
        echo '<table cellpadding="0" cellspacing="0" border="0" id="header_table">
                    <tbody>
                        <tr class="thead">
                            <td class="thead">
                                <div style="float: left">Comments</div>
                                <div style="float: right">' . page_emblem($page_num, $pages, 'forum.php?f=' . $forum_id) . '</div>
                            </td>
                        </tr>';


        $q = "SELECT c.posted_by, DATE_FORMAT(c.posted_on, '%M %D, %Y %l:%i %p') as posted_on, c.comment, u.username, u.thumb_url
            FROM comments as c
            INNER JOIN users as u on u.user_id = c.posted_by
            WHERE c.user_id = $user_id
            ORDER BY posted_on DESC";

        $s = $dbc->query($q);

        while ($result = $s->fetch_array(MYSQLI_ASSOC)) {
            
            echo '<tr>
                    <td>
                        <div id="comment">
                            <div style="float: left">
                                <img src="images/avatars/' . $result['thumb_url'] . '" class="avatar" style="border-radius: 10px; margin-bottom: 10px" height="90px" width="90px" name="avatar"/>
                            </div>
                            <div style="float: right; width: 560px">
                                <div id="comment_top_info">
                                    <div style="float: left">
                                        <a href="member.php?u=' . $result['posted_by'] . '">
                                            <strong>' . $result['username'] . '</strong>
                                        </a>
                                    </div>
                                    <div style="float: right">' . $result['posted_on'] . '</div>
                                </div>
                                <div style="float: left; margin: 5px auto auto 5px;">' . $result['comment'] . '</div>
                            </div>
                        </div>
                    </td>
                </tr>';
        }
            // End of the comments table
            echo '</tbody>
                </table>';
    }
}



// search_threads - echo table rows for a search string
function search_threads($dbc, $search, $page_num) {
    
    // Define the number of threads per page as a constant
    define("THREADS_PER_PAGE", 30);

    $q = "SELECT COUNT(*) AS count
          FROM threads
          WHERE MATCH(subject) AGAINST('" . $search . "')";

    // Execute the query
    $s = $dbc->query($q);
    $result = $s->fetch_array(MYSQLI_ASSOC);

    // Get the total number of pages required (30 threads per page)
    $pages = floor($result['count'] / THREADS_PER_PAGE) + 1;
    

    // Echo the part of the html for the page emblem
    echo            '<td valign="middle" style="padding-right: 40px">' . page_emblem($page_num, $pages, 'forum_search.php?') . '</td>
                </tr>
            </tbody>
        </table>
        <div id="forum_container">
            <div id="main_forum_header">Thread Search: <span style="font-size: 24px; font-weight: bold">' . ucwords($search) . '</span></div>
                <table class="tborder" cellpadding="6" cellspacing="0" border="0" width="100%" align="center">
                    <tbody>
                        <tr class="thead">
                            <td class="thead" width="100%">Thread / Thread Author</td>
                            <td class="thead" width="170px" align="left" nowrap="nowrap" style="padding-left: 30px">Last Post</td>
                            <td class="thead" width="90px" align="center" nowrap="nowrap">Replies</td>
                            <td class="thead" width="80px" align="center" nowrap="nowrap">Views</td>
                        </tr>';


    // I have no idea how to find the latest author in the query below, so I'm just going to do a separate one
    // Also, it pretty much took me forever, since there's both an inner join and a subquery.  Pretty awesome though.
    $q = "SELECT username, users.user_id, p2.thread_id
          FROM users
          INNER JOIN (
              SELECT thread_id, user_id, posted_on
              FROM posts
              ORDER BY thread_id, posted_on DESC
          ) as p2
          ON p2.user_id = users.user_id
          GROUP BY thread_id";

    $f = $dbc->query($q);

    // Initialize the author array
    $latest_author = array();
    $latest_author_id = array();
    
    // Number that must iterate until 15 * ($page_num - 1) + 1 thread is reached
    $thread = 0;

    // Push the query results as key values pairs
    while ( ($thread < THREADS_PER_PAGE * $page_num) && ($f_result = $f->fetch_array(MYSQLI_ASSOC)) != NULL) {

        // Loop until the first thread for the page is reached
        if ($thread >= THREADS_PER_PAGE * ($page_num - 1)) {
            $latest_author[$f_result['thread_id']] = $f_result['username'];
            $latest_author_id[$f_result['thread_id']] = $f_result['user_id'];
        }
        
        // Increment the thread count
        $thread += 1;
    }

    // Close the connection
    $f->close();


    // Convert to the users timezone
    if (isset($_COOKIE['user_tz'])) {
        $correct_posted = "CONVERT_TZ(posts.posted_on, '-06:00', '" . $_COOKIE['user_tz'] . "')";
    } else {
        $correct_posted = 'posts.posted_on';
    }

    // Find all threads that belong to the forum_id
    $q = "SELECT threads.thread_id, subject, users.user_id, users.username, COUNT(post_id) - 1 as replies,
                 MAX(DATE_FORMAT($correct_posted, '%M %D, %Y %l:%i %p')) as date, threads.views
          FROM threads
          INNER JOIN posts USING (thread_id)
          INNER JOIN users ON threads.user_id=users.user_id
          WHERE MATCH(subject) AGAINST('" . $search . "') 
          GROUP BY thread_id DESC";

    // Execute the query
    $s = $dbc->query($q);

    // If a result is returned
    if ($s->num_rows > 0) {

        // Reinitialize thread variable
        $thread = 0;

        // Echo all of the table rows to the page
        while ( ($thread < THREADS_PER_PAGE * $page_num) && ($result = $s->fetch_array(MYSQLI_ASSOC)) != NULL ) {

            // Loop until the first thread for the page is reached
            if ($thread >= THREADS_PER_PAGE * ($page_num - 1)) {

                $thread_id = $result['thread_id'];
                $thread_title = $result['subject'];
                $thread_author_id = $result['user_id']; 
                $thread_author = $result['username']; 
                $replies = $result['replies'];
                $latest_date = $result['date'];
                $views = $result['views'];

                echo '<tr class="thread_row">
                        <td class="thread_row" width="100%" align="left">
                            <p style="padding: 1px"><a href="showthread.php?t=' . $thread_id . '&page=1">'. $thread_title . '</a></p>
                            <p style="font-size: 10px; padding: 1px">
                                by <a href="member.php?u=' . $thread_author_id . '">
                                <span style="font-weight: bold">' . $thread_author . '</span></a>
                            </p>
                        </td>
                        <td class="thread_row" width="170px" align="center" nowrap="nowrap">
                            <div style="margin: 0 auto; text-align: left">
                                <p style="font-size: 10px; padding: 1px;">' . $latest_date . '</p>
                                <p style="font-size: 10px; padding: 1px">
                                    by <a href="member.php?u=' . $latest_author_id[$thread_id] . '">
                                    <span style="font-weight: bold">' . $latest_author[$thread_id] . '</span></a>
                                </p>
                            </div>
                        </td>
                        <td class="thread_row" width="90px" align="center" nowrap="nowrap">' . $replies . '</td>
                        <td class="thread_row" width="80px" align="center" nowrap="nowrap">' . $views . '</td>
                    </tr>';
            }
            
            // Increment the thread count
            $thread += 1;
        }

    } else {
        
        echo '<tr class="thread_row">
                <td class="thread_row" width="100%" align="right">
                <span style="font-size: 20px; font-weight: bold; padding-right: 70px">No Result</span>
                </td>
              </tr>';
    }

    // Close the connection
    $s->close();
}
