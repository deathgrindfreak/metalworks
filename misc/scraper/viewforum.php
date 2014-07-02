<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-gb" xml:lang="en-gb">
<head>

<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<meta http-equiv="content-language" content="en-gb" />
<meta http-equiv="content-style-type" content="text/css" />
<meta http-equiv="imagetoolbar" content="no" />
<meta name="resource-type" content="document" />
<meta name="distribution" content="global" />
<meta name="copyright" content="2000, 2002, 2005, 2007 phpBB Group" />
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />

<title>Encyclopaedia Metallum: The Metal Archives &bull; View forum - Metal Discussion</title>



<link rel="stylesheet" href="./styles/subclone/theme/stylesheet.css" type="text/css" />

<script type="text/javascript">
// <![CDATA[


function popup(url, width, height, name)
{
	if (!name)
	{
		name = '_popup';
	}

	window.open(url.replace(/&amp;/g, '&'), name, 'height=' + height + ',resizable=yes,scrollbars=yes,width=' + width);
	return false;
}

function jumpto()
{
	var page = prompt('Enter the page number you wish to go to:', '1');
	var per_page = '30';
	var base_url = './viewforum.php?f=1&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34';

	if (page !== null && !isNaN(page) && page == Math.floor(page) && page > 0)
	{
		if (base_url.indexOf('?') == -1)
		{
			document.location.href = base_url + '?start=' + ((page - 1) * per_page);
		}
		else
		{
			document.location.href = base_url.replace(/&amp;/g, '&') + '&start=' + ((page - 1) * per_page);
		}
	}
}

/**
* Find a member
*/
function find_username(url)
{
	popup(url, 760, 570, '_usersearch');
	return false;
}

/**
* Mark/unmark checklist
* id = ID of parent container, name = name prefix, state = state [true/false]
*/
function marklist(id, name, state)
{
	var parent = document.getElementById(id);
	if (!parent)
	{
		eval('parent = document.' + id);
	}

	if (!parent)
	{
		return;
	}

	var rb = parent.getElementsByTagName('input');
	
	for (var r = 0; r < rb.length; r++)
	{
		if (rb[r].name.substr(0, name.length) == name)
		{
			rb[r].checked = state;
		}
	}
}



// ]]>
</script>
</head>
<body class="ltr">

<a name="top"></a>

<div id="wrapheader">

	<div id="logodesc">
		<table width="100%" cellspacing="0">
		<tr>
			<td><a href="./index.php?sid=b86ddae9ae3919b1c6ddf53f6f52fa34"><img src="./styles/subclone/theme/images/site_logo.jpg" /></a></td>
			<td width="100%" class="center"><span class="genmed"><h1><a href="/">Encyclopaedia Metallum: The Metal Archives</a></h1><span class="gen">Message board</span><br /><br />
                        <a href="./faq.php?sid=b86ddae9ae3919b1c6ddf53f6f52fa34"><img src="./styles/subclone/theme/images/icon_mini_faq.gif" width="12" height="13" alt="*" /> FAQ</a>
				&nbsp; &nbsp;<a href="./search.php?sid=b86ddae9ae3919b1c6ddf53f6f52fa34"><img src="./styles/subclone/theme/images/icon_mini_search.gif" width="12" height="13" alt="*" /> Search</a>&nbsp; &nbsp;<a href="/user/signup"><img src="./styles/subclone/theme/images/icon_mini_register.gif" width="12" height="13" alt="*" /> Register</a>
					
                                <a href="./ucp.php?mode=login&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34">&nbsp; <img src="./styles/subclone/theme/images/icon_mini_login.gif" width="12" height="13" alt="*" /> Login</a>&nbsp;
                                
				<br />
                  </td>
		</tr>
		</table>
	</div>
</div>

<div id="wrapcentre">
	<br style="clear: both;" />
	<div id="pageheader">
		<h2><a class="titles" href="./viewforum.php?f=1&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34">Metal Discussion</a></h2>
                <span class="gensmall floatleft nowrap"><b><a href="#" onclick="jumpto(); return false;" title="Click to jump to page…">Go to page</a> <strong>1</strong><span class="page-sep">, </span><a href="./viewforum.php?f=1&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34&amp;start=30">2</a><span class="page-sep">, </span><a href="./viewforum.php?f=1&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34&amp;start=60">3</a><span class="page-sep">, </span><a href="./viewforum.php?f=1&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34&amp;start=90">4</a><span class="page-sep">, </span><a href="./viewforum.php?f=1&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34&amp;start=120">5</a><span class="page-dots"> ... </span><a href="./viewforum.php?f=1&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34&amp;start=15330">512</a> &nbsp;<a href="./viewforum.php?f=1&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34&amp;start=30">Next</a></b></span>


	<span class="gensmall floatright">Moderators: <a href="./memberlist.php?mode=viewprofile&amp;u=5872&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34" style="color: #AA0000;" class="username-coloured">Nightgaunt</a>, <a href="./memberlist.php?mode=viewprofile&amp;u=109063&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34" style="color: #AA0000;" class="username-coloured">Metantoine</a>, <a href="./memberlist.php?mode=viewprofile&amp;u=18189&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34" style="color: #AA0000;" class="username-coloured">Napero</a>, <a href="./memberlist.php?mode=viewprofile&amp;u=100219&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34" style="color: #AA0000;" class="username-coloured">OneRodeToAsaBay</a>, <a href="./memberlist.php?mode=viewprofile&amp;u=2&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34" style="color: #996600;" class="username-coloured">HellBlazer</a>, <a href="./memberlist.php?mode=viewprofile&amp;u=12276&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34" style="color: #AA0000;" class="username-coloured">failsafeman</a>, <a href="./memberlist.php?mode=viewprofile&amp;u=11&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34" style="color: #993300;" class="username-coloured">Esoteric</a>, <a href="./memberlist.php?mode=viewprofile&amp;u=3&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34" style="color: #996600;" class="username-coloured">Morrigan</a>, <a href="./memberlist.php?mode=viewprofile&amp;u=40829&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34" style="color: #AA0000;" class="username-coloured">Derigin</a>, <a href="./memberlist.php?mode=viewprofile&amp;u=119149&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34" style="color: #AA0000;" class="username-coloured">dreadmeat</a>, <a href="./memberlist.php?mode=viewprofile&amp;u=74&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34" style="color: #AA0000;" class="username-coloured">MMisantropo</a></span>

	</div>

	<br clear="all" /><br />


<div id="pagecontent">


		<table width="100%" cellspacing="1">
		<tr>
			
				<td width="1%"><a href="./posting.php?mode=post&amp;f=1&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34"><img src="./styles/subclone/imageset/en/button_topic_new.gif" alt="Post new topic" title="Post new topic" /></a></td>
                                <td><p class="breadcrumbs floatleft"><a href="./index.php?sid=b86ddae9ae3919b1c6ddf53f6f52fa34">Forum Index</a> &#187; <a href="./viewforum.php?f=12&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34">Music Talk</a> &#187; <a href="./viewforum.php?f=1&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34">Metal Discussion</a></p></td>
                                <td class="floatright"><form method="post" name="search" action="./search.php?sid=b86ddae9ae3919b1c6ddf53f6f52fa34"><span class="gensmall">Search for:</span> <input class="post" type="text" name="keywords" size="20" /> <input class="btnlite" type="submit" value="Go" /></form></td>
			
		</tr>
		</table>
	
		<table class="forumindex" width="100%" cellspacing="1">

		<tr>
			
				<th colspan="2">&nbsp;Topics&nbsp;</th>
			
			<th>&nbsp;Author&nbsp;</th>
			<th>&nbsp;Replies&nbsp;</th>
			<th>&nbsp;Views&nbsp;</th>
			<th>&nbsp;Last post&nbsp;</th>
		</tr>

		
				<tr>
					<td class="row3" colspan="6"><b class="gensmall">Announcements</b></td>
				</tr>
			

			<tr>
				<td class="row1" width="25" align="center"><img src="./styles/subclone/imageset/announce_read_locked.gif" width="34" height="22" alt="This topic is locked, you cannot edit posts or make further replies." title="This topic is locked, you cannot edit posts or make further replies." /></td>
				
				<td class="row1" onmouseover="this.style.backgroundColor='#000000'; this.style.cursor='hand';" onmouseout="this.style.backgroundColor=&quot;&quot;" onclick="window.location.href='./viewtopic.php?f=1&amp;t=100491&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34'" style="cursor: pointer; ">
					
					 <a title="Posted: Fri Aug 16, 2013 11:22 pm" href="./viewtopic.php?f=1&amp;t=100491&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34" class="sml bold">Rules and guidelines. Previously unwritten, now written!</a>
					
				</td>
				<td class="row1" width="130" align="center"><p class="topicauthor"><a href="./memberlist.php?mode=viewprofile&amp;u=104316&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34" style="color: #AA0000;" class="username-coloured">Zodijackyl</a></p></td>
				<td class="row1" width="50" align="center"><p class="topicdetails">0</p></td>
				<td class="row1" width="50" align="center"><p class="topicdetails">3852</p></td>
				<td class="row1" width="140" align="center">
					<p class="topicdetails" style="white-space: nowrap;">Fri Aug 16, 2013 11:22 pm</p>
					<p class="topicdetails" style="white-space: nowrap;"><a href="./memberlist.php?mode=viewprofile&amp;u=104316&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34" style="color: #AA0000;" class="username-coloured">Zodijackyl</a>
						<a href="./viewtopic.php?f=1&amp;t=100491&amp;p=2302843&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34#p2302843"><img src="./styles/subclone/imageset/icon_topic_latest.gif" width="18" height="9" alt="View the latest post" title="View the latest post" /></a>
					</p>
				</td>
			</tr>

		
				<tr>
					<td class="row3" colspan="6"><b class="gensmall">Topics</b></td>
				</tr>
			

			<tr>
				<td class="row1" width="25" align="center"><img src="./styles/subclone/imageset/sticky_read.gif" width="34" height="22" alt="No unread posts" title="No unread posts" /></td>
				
				<td class="row1" onmouseover="this.style.backgroundColor='#000000'; this.style.cursor='hand';" onmouseout="this.style.backgroundColor=&quot;&quot;" onclick="window.location.href='./viewtopic.php?f=1&amp;t=92986&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34'" style="cursor: pointer; ">
					
					 <a title="Posted: Tue Mar 31, 2009 9:13 am" href="./viewtopic.php?f=1&amp;t=92986&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34" class="sml bold">CD Identification, Matrix &amp; Bootleg Help Thread</a>
					
						<p class="gensmall"> [ <img src="./styles/subclone/imageset/icon_post_target.gif" width="12" height="9" alt="Go to page" title="Go to page" /> <a href="./viewtopic.php?f=1&amp;t=92986&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34">1</a><span class="page-dots"> ... </span><a href="./viewtopic.php?f=1&amp;t=92986&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34&amp;start=1200">31</a><span class="page-sep">, </span><a href="./viewtopic.php?f=1&amp;t=92986&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34&amp;start=1240">32</a><span class="page-sep">, </span><a href="./viewtopic.php?f=1&amp;t=92986&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34&amp;start=1280">33</a> ] </p>
					
				</td>
				<td class="row1" width="130" align="center"><p class="topicauthor"><a href="./memberlist.php?mode=viewprofile&amp;u=91968&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34">MDeth</a></p></td>
				<td class="row1" width="50" align="center"><p class="topicdetails">1298</p></td>
				<td class="row1" width="50" align="center"><p class="topicdetails">70432</p></td>
				<td class="row1" width="140" align="center">
					<p class="topicdetails" style="white-space: nowrap;">Wed Jun 25, 2014 6:06 pm</p>
					<p class="topicdetails" style="white-space: nowrap;"><a href="./memberlist.php?mode=viewprofile&amp;u=119149&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34" style="color: #AA0000;" class="username-coloured">dreadmeat</a>
						<a href="./viewtopic.php?f=1&amp;t=92986&amp;p=2425140&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34#p2425140"><img src="./styles/subclone/imageset/icon_topic_latest.gif" width="18" height="9" alt="View the latest post" title="View the latest post" /></a>
					</p>
				</td>
			</tr>

		

			<tr>
				<td class="row1" width="25" align="center"><img src="./styles/subclone/imageset/sticky_read.gif" width="34" height="22" alt="No unread posts" title="No unread posts" /></td>
				
				<td class="row1" onmouseover="this.style.backgroundColor='#000000'; this.style.cursor='hand';" onmouseout="this.style.backgroundColor=&quot;&quot;" onclick="window.location.href='./viewtopic.php?f=1&amp;t=102592&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34'" style="cursor: pointer; ">
					
					 <a title="Posted: Fri Dec 13, 2013 12:56 am" href="./viewtopic.php?f=1&amp;t=102592&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34" class="sml bold">[Stupid] genre question megathread (is x a real genre?)</a>
					
						<p class="gensmall"> [ <img src="./styles/subclone/imageset/icon_post_target.gif" width="12" height="9" alt="Go to page" title="Go to page" /> <a href="./viewtopic.php?f=1&amp;t=102592&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34">1</a><span class="page-dots"> ... </span><a href="./viewtopic.php?f=1&amp;t=102592&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34&amp;start=240">7</a><span class="page-sep">, </span><a href="./viewtopic.php?f=1&amp;t=102592&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34&amp;start=280">8</a><span class="page-sep">, </span><a href="./viewtopic.php?f=1&amp;t=102592&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34&amp;start=320">9</a> ] </p>
					
				</td>
				<td class="row1" width="130" align="center"><p class="topicauthor"><a href="./memberlist.php?mode=viewprofile&amp;u=104316&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34" style="color: #AA0000;" class="username-coloured">Zodijackyl</a></p></td>
				<td class="row1" width="50" align="center"><p class="topicdetails">356</p></td>
				<td class="row1" width="50" align="center"><p class="topicdetails">19499</p></td>
				<td class="row1" width="140" align="center">
					<p class="topicdetails" style="white-space: nowrap;">Wed Jun 25, 2014 8:16 am</p>
					<p class="topicdetails" style="white-space: nowrap;"><a href="./memberlist.php?mode=viewprofile&amp;u=257932&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34">Rompestromper</a>
						<a href="./viewtopic.php?f=1&amp;t=102592&amp;p=2424936&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34#p2424936"><img src="./styles/subclone/imageset/icon_topic_latest.gif" width="18" height="9" alt="View the latest post" title="View the latest post" /></a>
					</p>
				</td>
			</tr>

		

			<tr>
				<td class="row1" width="25" align="center"><img src="./styles/subclone/imageset/sticky_read.gif" width="34" height="22" alt="No unread posts" title="No unread posts" /></td>
				
				<td class="row1" onmouseover="this.style.backgroundColor='#000000'; this.style.cursor='hand';" onmouseout="this.style.backgroundColor=&quot;&quot;" onclick="window.location.href='./viewtopic.php?f=1&amp;t=44082&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34'" style="cursor: pointer; ">
					
					 <a title="Posted: Sun Nov 02, 2008 1:49 pm" href="./viewtopic.php?f=1&amp;t=44082&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34" class="sml bold">Help Me Remember/ID this Song/Album/Band Megathread</a>
					
						<p class="gensmall"> [ <img src="./styles/subclone/imageset/icon_post_target.gif" width="12" height="9" alt="Go to page" title="Go to page" /> <a href="./viewtopic.php?f=1&amp;t=44082&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34">1</a><span class="page-dots"> ... </span><a href="./viewtopic.php?f=1&amp;t=44082&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34&amp;start=560">15</a><span class="page-sep">, </span><a href="./viewtopic.php?f=1&amp;t=44082&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34&amp;start=600">16</a><span class="page-sep">, </span><a href="./viewtopic.php?f=1&amp;t=44082&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34&amp;start=640">17</a> ] </p>
					
				</td>
				<td class="row1" width="130" align="center"><p class="topicauthor"><a href="./memberlist.php?mode=viewprofile&amp;u=100859&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34">MercyfulSatyr</a></p></td>
				<td class="row1" width="50" align="center"><p class="topicdetails">659</p></td>
				<td class="row1" width="50" align="center"><p class="topicdetails">94401</p></td>
				<td class="row1" width="140" align="center">
					<p class="topicdetails" style="white-space: nowrap;">Sat Jun 21, 2014 7:27 pm</p>
					<p class="topicdetails" style="white-space: nowrap;"><a href="./memberlist.php?mode=viewprofile&amp;u=117816&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34">Crypt666</a>
						<a href="./viewtopic.php?f=1&amp;t=44082&amp;p=2423820&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34#p2423820"><img src="./styles/subclone/imageset/icon_topic_latest.gif" width="18" height="9" alt="View the latest post" title="View the latest post" /></a>
					</p>
				</td>
			</tr>

		

			<tr>
				<td class="row1" width="25" align="center"><img src="./styles/subclone/imageset/sticky_read.gif" width="34" height="22" alt="No unread posts" title="No unread posts" /></td>
				
				<td class="row1" onmouseover="this.style.backgroundColor='#000000'; this.style.cursor='hand';" onmouseout="this.style.backgroundColor=&quot;&quot;" onclick="window.location.href='./viewtopic.php?f=1&amp;t=59640&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34'" style="cursor: pointer; ">
					
					 <a title="Posted: Sun Dec 06, 2009 11:09 pm" href="./viewtopic.php?f=1&amp;t=59640&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34" class="sml bold">I want to find a metal shop in (your city here).</a>
					
						<p class="gensmall"> [ <img src="./styles/subclone/imageset/icon_post_target.gif" width="12" height="9" alt="Go to page" title="Go to page" /> <a href="./viewtopic.php?f=1&amp;t=59640&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34">1</a><span class="page-dots"> ... </span><a href="./viewtopic.php?f=1&amp;t=59640&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34&amp;start=920">24</a><span class="page-sep">, </span><a href="./viewtopic.php?f=1&amp;t=59640&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34&amp;start=960">25</a><span class="page-sep">, </span><a href="./viewtopic.php?f=1&amp;t=59640&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34&amp;start=1000">26</a> ] </p>
					
				</td>
				<td class="row1" width="130" align="center"><p class="topicauthor"><a href="./memberlist.php?mode=viewprofile&amp;u=9942&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34">ogmetal</a></p></td>
				<td class="row1" width="50" align="center"><p class="topicdetails">1000</p></td>
				<td class="row1" width="50" align="center"><p class="topicdetails">128344</p></td>
				<td class="row1" width="140" align="center">
					<p class="topicdetails" style="white-space: nowrap;">Thu Jun 19, 2014 6:51 pm</p>
					<p class="topicdetails" style="white-space: nowrap;"><a href="./memberlist.php?mode=viewprofile&amp;u=257761&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34">James Bester</a>
						<a href="./viewtopic.php?f=1&amp;t=59640&amp;p=2423240&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34#p2423240"><img src="./styles/subclone/imageset/icon_topic_latest.gif" width="18" height="9" alt="View the latest post" title="View the latest post" /></a>
					</p>
				</td>
			</tr>

		

			<tr>
				<td class="row1" width="25" align="center"><img src="./styles/subclone/imageset/sticky_read.gif" width="34" height="22" alt="No unread posts" title="No unread posts" /></td>
				
				<td class="row1" onmouseover="this.style.backgroundColor='#000000'; this.style.cursor='hand';" onmouseout="this.style.backgroundColor=&quot;&quot;" onclick="window.location.href='./viewtopic.php?f=1&amp;t=45318&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34'" style="cursor: pointer; ">
					
					 <a title="Posted: Tue Dec 09, 2008 3:06 am" href="./viewtopic.php?f=1&amp;t=45318&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34" class="sml bold">Weekly Metal Analysis (read and understand original post!)</a>
					
						<p class="gensmall"> [ <img src="./styles/subclone/imageset/icon_post_target.gif" width="12" height="9" alt="Go to page" title="Go to page" /> <a href="./viewtopic.php?f=1&amp;t=45318&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34">1</a><span class="page-dots"> ... </span><a href="./viewtopic.php?f=1&amp;t=45318&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34&amp;start=600">16</a><span class="page-sep">, </span><a href="./viewtopic.php?f=1&amp;t=45318&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34&amp;start=640">17</a><span class="page-sep">, </span><a href="./viewtopic.php?f=1&amp;t=45318&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34&amp;start=680">18</a> ] </p>
					
				</td>
				<td class="row1" width="130" align="center"><p class="topicauthor"><a href="./memberlist.php?mode=viewprofile&amp;u=7144&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34">rexxz</a></p></td>
				<td class="row1" width="50" align="center"><p class="topicdetails">719</p></td>
				<td class="row1" width="50" align="center"><p class="topicdetails">128104</p></td>
				<td class="row1" width="140" align="center">
					<p class="topicdetails" style="white-space: nowrap;">Sat May 17, 2014 6:54 pm</p>
					<p class="topicdetails" style="white-space: nowrap;"><a href="./memberlist.php?mode=viewprofile&amp;u=163781&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34">jeanshack</a>
						<a href="./viewtopic.php?f=1&amp;t=45318&amp;p=2411743&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34#p2411743"><img src="./styles/subclone/imageset/icon_topic_latest.gif" width="18" height="9" alt="View the latest post" title="View the latest post" /></a>
					</p>
				</td>
			</tr>

		

			<tr>
				<td class="row1" width="25" align="center"><img src="./styles/subclone/imageset/topic_read_hot.gif" width="34" height="22" alt="No unread posts" title="No unread posts" /></td>
				
				<td class="row1" onmouseover="this.style.backgroundColor='#000000'; this.style.cursor='hand';" onmouseout="this.style.backgroundColor=&quot;&quot;" onclick="window.location.href='./viewtopic.php?f=1&amp;t=105728&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34'" style="cursor: pointer; ">
					
					 <a title="Posted: Sun Jun 22, 2014 1:10 pm" href="./viewtopic.php?f=1&amp;t=105728&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34" class="sml bold">Watain in Brooklyn, NY</a>
					
						<p class="gensmall"> [ <img src="./styles/subclone/imageset/icon_post_target.gif" width="12" height="9" alt="Go to page" title="Go to page" /> <a href="./viewtopic.php?f=1&amp;t=105728&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34">1</a><span class="page-sep">, </span><a href="./viewtopic.php?f=1&amp;t=105728&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34&amp;start=40">2</a> ] </p>
					
				</td>
				<td class="row1" width="130" align="center"><p class="topicauthor"><a href="./memberlist.php?mode=viewprofile&amp;u=125324&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34">aloof</a></p></td>
				<td class="row1" width="50" align="center"><p class="topicdetails">69</p></td>
				<td class="row1" width="50" align="center"><p class="topicdetails">1803</p></td>
				<td class="row1" width="140" align="center">
					<p class="topicdetails" style="white-space: nowrap;">Thu Jun 26, 2014 8:57 am</p>
					<p class="topicdetails" style="white-space: nowrap;"><a href="./memberlist.php?mode=viewprofile&amp;u=3389&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34" style="color: #993300;" class="username-coloured">Abominatrix</a>
						<a href="./viewtopic.php?f=1&amp;t=105728&amp;p=2425320&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34#p2425320"><img src="./styles/subclone/imageset/icon_topic_latest.gif" width="18" height="9" alt="View the latest post" title="View the latest post" /></a>
					</p>
				</td>
			</tr>

		

			<tr>
				<td class="row1" width="25" align="center"><img src="./styles/subclone/imageset/topic_read_hot.gif" width="34" height="22" alt="No unread posts" title="No unread posts" /></td>
				
				<td class="row1" onmouseover="this.style.backgroundColor='#000000'; this.style.cursor='hand';" onmouseout="this.style.backgroundColor=&quot;&quot;" onclick="window.location.href='./viewtopic.php?f=1&amp;t=65462&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34'" style="cursor: pointer; ">
					
					 <a title="Posted: Tue Apr 20, 2010 5:00 pm" href="./viewtopic.php?f=1&amp;t=65462&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34" class="sml bold">Your Latest Album Purchase(s)</a>
					
						<p class="gensmall"> [ <img src="./styles/subclone/imageset/icon_post_target.gif" width="12" height="9" alt="Go to page" title="Go to page" /> <a href="./viewtopic.php?f=1&amp;t=65462&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34">1</a><span class="page-dots"> ... </span><a href="./viewtopic.php?f=1&amp;t=65462&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34&amp;start=21120">529</a><span class="page-sep">, </span><a href="./viewtopic.php?f=1&amp;t=65462&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34&amp;start=21160">530</a><span class="page-sep">, </span><a href="./viewtopic.php?f=1&amp;t=65462&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34&amp;start=21200">531</a> ] </p>
					
				</td>
				<td class="row1" width="130" align="center"><p class="topicauthor"><a href="./memberlist.php?mode=viewprofile&amp;u=153143&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34">Lemmyapu</a></p></td>
				<td class="row1" width="50" align="center"><p class="topicdetails">21230</p></td>
				<td class="row1" width="50" align="center"><p class="topicdetails">1318918</p></td>
				<td class="row1" width="140" align="center">
					<p class="topicdetails" style="white-space: nowrap;">Thu Jun 26, 2014 8:52 am</p>
					<p class="topicdetails" style="white-space: nowrap;"><a href="./memberlist.php?mode=viewprofile&amp;u=165196&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34">GratifiedGoat</a>
						<a href="./viewtopic.php?f=1&amp;t=65462&amp;p=2425317&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34#p2425317"><img src="./styles/subclone/imageset/icon_topic_latest.gif" width="18" height="9" alt="View the latest post" title="View the latest post" /></a>
					</p>
				</td>
			</tr>

		

			<tr>
				<td class="row1" width="25" align="center"><img src="./styles/subclone/imageset/topic_read.gif" width="34" height="22" alt="No unread posts" title="No unread posts" /></td>
				
				<td class="row1" onmouseover="this.style.backgroundColor='#000000'; this.style.cursor='hand';" onmouseout="this.style.backgroundColor=&quot;&quot;" onclick="window.location.href='./viewtopic.php?f=1&amp;t=105196&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34'" style="cursor: pointer; ">
					
					 <a title="Posted: Thu May 15, 2014 9:14 pm" href="./viewtopic.php?f=1&amp;t=105196&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34" class="sml bold">Belphegor- Conjuring the Dead</a>
					
						<p class="gensmall"> [ <img src="./styles/subclone/imageset/icon_post_target.gif" width="12" height="9" alt="Go to page" title="Go to page" /> <a href="./viewtopic.php?f=1&amp;t=105196&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34">1</a><span class="page-sep">, </span><a href="./viewtopic.php?f=1&amp;t=105196&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34&amp;start=40">2</a> ] </p>
					
				</td>
				<td class="row1" width="130" align="center"><p class="topicauthor"><a href="./memberlist.php?mode=viewprofile&amp;u=202867&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34">MalignantTyrant</a></p></td>
				<td class="row1" width="50" align="center"><p class="topicdetails">40</p></td>
				<td class="row1" width="50" align="center"><p class="topicdetails">1050</p></td>
				<td class="row1" width="140" align="center">
					<p class="topicdetails" style="white-space: nowrap;">Thu Jun 26, 2014 8:38 am</p>
					<p class="topicdetails" style="white-space: nowrap;"><a href="./memberlist.php?mode=viewprofile&amp;u=66267&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34">lord_ghengis</a>
						<a href="./viewtopic.php?f=1&amp;t=105196&amp;p=2425312&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34#p2425312"><img src="./styles/subclone/imageset/icon_topic_latest.gif" width="18" height="9" alt="View the latest post" title="View the latest post" /></a>
					</p>
				</td>
			</tr>

		

			<tr>
				<td class="row1" width="25" align="center"><img src="./styles/subclone/imageset/topic_read.gif" width="34" height="22" alt="No unread posts" title="No unread posts" /></td>
				
				<td class="row1" onmouseover="this.style.backgroundColor='#000000'; this.style.cursor='hand';" onmouseout="this.style.backgroundColor=&quot;&quot;" onclick="window.location.href='./viewtopic.php?f=1&amp;t=105760&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34'" style="cursor: pointer; ">
					
					 <a title="Posted: Tue Jun 24, 2014 8:00 pm" href="./viewtopic.php?f=1&amp;t=105760&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34" class="sml bold">Metal With Surf Rock Influences</a>
					
				</td>
				<td class="row1" width="130" align="center"><p class="topicauthor"><a href="./memberlist.php?mode=viewprofile&amp;u=161661&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34">jugchord07</a></p></td>
				<td class="row1" width="50" align="center"><p class="topicdetails">17</p></td>
				<td class="row1" width="50" align="center"><p class="topicdetails">584</p></td>
				<td class="row1" width="140" align="center">
					<p class="topicdetails" style="white-space: nowrap;">Thu Jun 26, 2014 8:19 am</p>
					<p class="topicdetails" style="white-space: nowrap;"><a href="./memberlist.php?mode=viewprofile&amp;u=192&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34">Turner</a>
						<a href="./viewtopic.php?f=1&amp;t=105760&amp;p=2425308&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34#p2425308"><img src="./styles/subclone/imageset/icon_topic_latest.gif" width="18" height="9" alt="View the latest post" title="View the latest post" /></a>
					</p>
				</td>
			</tr>

		

			<tr>
				<td class="row1" width="25" align="center"><img src="./styles/subclone/imageset/topic_read.gif" width="34" height="22" alt="No unread posts" title="No unread posts" /></td>
				
				<td class="row1" onmouseover="this.style.backgroundColor='#000000'; this.style.cursor='hand';" onmouseout="this.style.backgroundColor=&quot;&quot;" onclick="window.location.href='./viewtopic.php?f=1&amp;t=102459&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34'" style="cursor: pointer; ">
					
					 <a title="Posted: Wed Dec 04, 2013 2:34 pm" href="./viewtopic.php?f=1&amp;t=102459&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34" class="sml bold">Dawn's entire discography to be reissued, new album coming</a>
					
				</td>
				<td class="row1" width="130" align="center"><p class="topicauthor"><a href="./memberlist.php?mode=viewprofile&amp;u=61606&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34">androdion</a></p></td>
				<td class="row1" width="50" align="center"><p class="topicdetails">36</p></td>
				<td class="row1" width="50" align="center"><p class="topicdetails">1969</p></td>
				<td class="row1" width="140" align="center">
					<p class="topicdetails" style="white-space: nowrap;">Thu Jun 26, 2014 8:10 am</p>
					<p class="topicdetails" style="white-space: nowrap;"><a href="./memberlist.php?mode=viewprofile&amp;u=192&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34">Turner</a>
						<a href="./viewtopic.php?f=1&amp;t=102459&amp;p=2425305&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34#p2425305"><img src="./styles/subclone/imageset/icon_topic_latest.gif" width="18" height="9" alt="View the latest post" title="View the latest post" /></a>
					</p>
				</td>
			</tr>

		

			<tr>
				<td class="row1" width="25" align="center"><img src="./styles/subclone/imageset/topic_read.gif" width="34" height="22" alt="No unread posts" title="No unread posts" /></td>
				
				<td class="row1" onmouseover="this.style.backgroundColor='#000000'; this.style.cursor='hand';" onmouseout="this.style.backgroundColor=&quot;&quot;" onclick="window.location.href='./viewtopic.php?f=1&amp;t=105777&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34'" style="cursor: pointer; ">
					
					 <a title="Posted: Thu Jun 26, 2014 12:47 am" href="./viewtopic.php?f=1&amp;t=105777&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34" class="sml bold">Voodoo Gods - death metal supergroup</a>
					
				</td>
				<td class="row1" width="130" align="center"><p class="topicauthor"><a href="./memberlist.php?mode=viewprofile&amp;u=134065&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34">Pale_Pilgrim</a></p></td>
				<td class="row1" width="50" align="center"><p class="topicdetails">5</p></td>
				<td class="row1" width="50" align="center"><p class="topicdetails">160</p></td>
				<td class="row1" width="140" align="center">
					<p class="topicdetails" style="white-space: nowrap;">Thu Jun 26, 2014 8:04 am</p>
					<p class="topicdetails" style="white-space: nowrap;"><a href="./memberlist.php?mode=viewprofile&amp;u=19386&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34">shouvince</a>
						<a href="./viewtopic.php?f=1&amp;t=105777&amp;p=2425302&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34#p2425302"><img src="./styles/subclone/imageset/icon_topic_latest.gif" width="18" height="9" alt="View the latest post" title="View the latest post" /></a>
					</p>
				</td>
			</tr>

		

			<tr>
				<td class="row1" width="25" align="center"><img src="./styles/subclone/imageset/topic_read.gif" width="34" height="22" alt="No unread posts" title="No unread posts" /></td>
				
				<td class="row1" onmouseover="this.style.backgroundColor='#000000'; this.style.cursor='hand';" onmouseout="this.style.backgroundColor=&quot;&quot;" onclick="window.location.href='./viewtopic.php?f=1&amp;t=105782&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34'" style="cursor: pointer; ">
					
					 <a title="Posted: Thu Jun 26, 2014 7:26 am" href="./viewtopic.php?f=1&amp;t=105782&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34" class="sml bold">Colin Larkin's Top 50 Heavy Metal Albums</a>
					
				</td>
				<td class="row1" width="130" align="center"><p class="topicauthor"><a href="./memberlist.php?mode=viewprofile&amp;u=258077&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34">davidjohn81</a></p></td>
				<td class="row1" width="50" align="center"><p class="topicdetails">0</p></td>
				<td class="row1" width="50" align="center"><p class="topicdetails">41</p></td>
				<td class="row1" width="140" align="center">
					<p class="topicdetails" style="white-space: nowrap;">Thu Jun 26, 2014 7:26 am</p>
					<p class="topicdetails" style="white-space: nowrap;"><a href="./memberlist.php?mode=viewprofile&amp;u=258077&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34">davidjohn81</a>
						<a href="./viewtopic.php?f=1&amp;t=105782&amp;p=2425298&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34#p2425298"><img src="./styles/subclone/imageset/icon_topic_latest.gif" width="18" height="9" alt="View the latest post" title="View the latest post" /></a>
					</p>
				</td>
			</tr>

		

			<tr>
				<td class="row1" width="25" align="center"><img src="./styles/subclone/imageset/topic_read_hot.gif" width="34" height="22" alt="No unread posts" title="No unread posts" /></td>
				
				<td class="row1" onmouseover="this.style.backgroundColor='#000000'; this.style.cursor='hand';" onmouseout="this.style.backgroundColor=&quot;&quot;" onclick="window.location.href='./viewtopic.php?f=1&amp;t=102903&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34'" style="cursor: pointer; ">
					
					 <a title="Posted: Thu Jan 02, 2014 3:19 pm" href="./viewtopic.php?f=1&amp;t=102903&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34" class="sml bold">Your favorite Doom metal albums</a>
					
						<p class="gensmall"> [ <img src="./styles/subclone/imageset/icon_post_target.gif" width="12" height="9" alt="Go to page" title="Go to page" /> <a href="./viewtopic.php?f=1&amp;t=102903&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34">1</a><span class="page-sep">, </span><a href="./viewtopic.php?f=1&amp;t=102903&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34&amp;start=40">2</a><span class="page-sep">, </span><a href="./viewtopic.php?f=1&amp;t=102903&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34&amp;start=80">3</a> ] </p>
					
				</td>
				<td class="row1" width="130" align="center"><p class="topicauthor"><a href="./memberlist.php?mode=viewprofile&amp;u=108384&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34">Lord_Malice</a></p></td>
				<td class="row1" width="50" align="center"><p class="topicdetails">82</p></td>
				<td class="row1" width="50" align="center"><p class="topicdetails">4080</p></td>
				<td class="row1" width="140" align="center">
					<p class="topicdetails" style="white-space: nowrap;">Thu Jun 26, 2014 6:55 am</p>
					<p class="topicdetails" style="white-space: nowrap;"><a href="./memberlist.php?mode=viewprofile&amp;u=237850&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34">Back Stabbath</a>
						<a href="./viewtopic.php?f=1&amp;t=102903&amp;p=2425295&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34#p2425295"><img src="./styles/subclone/imageset/icon_topic_latest.gif" width="18" height="9" alt="View the latest post" title="View the latest post" /></a>
					</p>
				</td>
			</tr>

		

			<tr>
				<td class="row1" width="25" align="center"><img src="./styles/subclone/imageset/topic_read.gif" width="34" height="22" alt="No unread posts" title="No unread posts" /></td>
				
				<td class="row1" onmouseover="this.style.backgroundColor='#000000'; this.style.cursor='hand';" onmouseout="this.style.backgroundColor=&quot;&quot;" onclick="window.location.href='./viewtopic.php?f=1&amp;t=105780&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34'" style="cursor: pointer; ">
					
					 <a title="Posted: Thu Jun 26, 2014 5:49 am" href="./viewtopic.php?f=1&amp;t=105780&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34" class="sml bold">Black Sabbath</a>
					
				</td>
				<td class="row1" width="130" align="center"><p class="topicauthor"><a href="./memberlist.php?mode=viewprofile&amp;u=258074&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34">jaickstom</a></p></td>
				<td class="row1" width="50" align="center"><p class="topicdetails">1</p></td>
				<td class="row1" width="50" align="center"><p class="topicdetails">65</p></td>
				<td class="row1" width="140" align="center">
					<p class="topicdetails" style="white-space: nowrap;">Thu Jun 26, 2014 6:05 am</p>
					<p class="topicdetails" style="white-space: nowrap;"><a href="./memberlist.php?mode=viewprofile&amp;u=177974&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34">DoomMetalAlchemist</a>
						<a href="./viewtopic.php?f=1&amp;t=105780&amp;p=2425287&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34#p2425287"><img src="./styles/subclone/imageset/icon_topic_latest.gif" width="18" height="9" alt="View the latest post" title="View the latest post" /></a>
					</p>
				</td>
			</tr>

		

			<tr>
				<td class="row1" width="25" align="center"><img src="./styles/subclone/imageset/topic_read_hot.gif" width="34" height="22" alt="No unread posts" title="No unread posts" /></td>
				
				<td class="row1" onmouseover="this.style.backgroundColor='#000000'; this.style.cursor='hand';" onmouseout="this.style.backgroundColor=&quot;&quot;" onclick="window.location.href='./viewtopic.php?f=1&amp;t=48307&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34'" style="cursor: pointer; ">
					
					 <a title="Posted: Tue Mar 10, 2009 5:07 am" href="./viewtopic.php?f=1&amp;t=48307&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34" class="sml bold">Now playing, part 4 | Include a short comment with your NP</a>
					
						<p class="gensmall"> [ <img src="./styles/subclone/imageset/icon_post_target.gif" width="12" height="9" alt="Go to page" title="Go to page" /> <a href="./viewtopic.php?f=1&amp;t=48307&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34">1</a><span class="page-dots"> ... </span><a href="./viewtopic.php?f=1&amp;t=48307&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34&amp;start=58480">1463</a><span class="page-sep">, </span><a href="./viewtopic.php?f=1&amp;t=48307&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34&amp;start=58520">1464</a><span class="page-sep">, </span><a href="./viewtopic.php?f=1&amp;t=48307&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34&amp;start=58560">1465</a> ] </p>
					
				</td>
				<td class="row1" width="130" align="center"><p class="topicauthor"><a href="./memberlist.php?mode=viewprofile&amp;u=18189&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34" style="color: #AA0000;" class="username-coloured">Napero</a></p></td>
				<td class="row1" width="50" align="center"><p class="topicdetails">58584</p></td>
				<td class="row1" width="50" align="center"><p class="topicdetails">1243285</p></td>
				<td class="row1" width="140" align="center">
					<p class="topicdetails" style="white-space: nowrap;">Thu Jun 26, 2014 5:43 am</p>
					<p class="topicdetails" style="white-space: nowrap;"><a href="./memberlist.php?mode=viewprofile&amp;u=155253&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34">Paganbasque</a>
						<a href="./viewtopic.php?f=1&amp;t=48307&amp;p=2425283&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34#p2425283"><img src="./styles/subclone/imageset/icon_topic_latest.gif" width="18" height="9" alt="View the latest post" title="View the latest post" /></a>
					</p>
				</td>
			</tr>

		

			<tr>
				<td class="row1" width="25" align="center"><img src="./styles/subclone/imageset/topic_read_hot.gif" width="34" height="22" alt="No unread posts" title="No unread posts" /></td>
				
				<td class="row1" onmouseover="this.style.backgroundColor='#000000'; this.style.cursor='hand';" onmouseout="this.style.backgroundColor=&quot;&quot;" onclick="window.location.href='./viewtopic.php?f=1&amp;t=105718&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34'" style="cursor: pointer; ">
					
					 <a title="Posted: Sun Jun 22, 2014 4:43 am" href="./viewtopic.php?f=1&amp;t=105718&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34" class="sml bold">METALLICA &quot;Lords of Summer&quot;</a>
					
						<p class="gensmall"> [ <img src="./styles/subclone/imageset/icon_post_target.gif" width="12" height="9" alt="Go to page" title="Go to page" /> <a href="./viewtopic.php?f=1&amp;t=105718&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34">1</a><span class="page-sep">, </span><a href="./viewtopic.php?f=1&amp;t=105718&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34&amp;start=40">2</a><span class="page-sep">, </span><a href="./viewtopic.php?f=1&amp;t=105718&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34&amp;start=80">3</a> ] </p>
					
				</td>
				<td class="row1" width="130" align="center"><p class="topicauthor"><a href="./memberlist.php?mode=viewprofile&amp;u=213763&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34">The Lions Den</a></p></td>
				<td class="row1" width="50" align="center"><p class="topicdetails">92</p></td>
				<td class="row1" width="50" align="center"><p class="topicdetails">2750</p></td>
				<td class="row1" width="140" align="center">
					<p class="topicdetails" style="white-space: nowrap;">Thu Jun 26, 2014 4:46 am</p>
					<p class="topicdetails" style="white-space: nowrap;"><a href="./memberlist.php?mode=viewprofile&amp;u=192&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34">Turner</a>
						<a href="./viewtopic.php?f=1&amp;t=105718&amp;p=2425276&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34#p2425276"><img src="./styles/subclone/imageset/icon_topic_latest.gif" width="18" height="9" alt="View the latest post" title="View the latest post" /></a>
					</p>
				</td>
			</tr>

		

			<tr>
				<td class="row1" width="25" align="center"><img src="./styles/subclone/imageset/topic_read.gif" width="34" height="22" alt="No unread posts" title="No unread posts" /></td>
				
				<td class="row1" onmouseover="this.style.backgroundColor='#000000'; this.style.cursor='hand';" onmouseout="this.style.backgroundColor=&quot;&quot;" onclick="window.location.href='./viewtopic.php?f=1&amp;t=105742&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34'" style="cursor: pointer; ">
					
					 <b>Poll: </b> <a title="Posted: Tue Jun 24, 2014 3:26 am" href="./viewtopic.php?f=1&amp;t=105742&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34" class="sml bold">Fates Warning: The Spectre Within vs. Awaken the Guardian</a>
					
				</td>
				<td class="row1" width="130" align="center"><p class="topicauthor"><a href="./memberlist.php?mode=viewprofile&amp;u=257962&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34">Jrg13</a></p></td>
				<td class="row1" width="50" align="center"><p class="topicdetails">36</p></td>
				<td class="row1" width="50" align="center"><p class="topicdetails">860</p></td>
				<td class="row1" width="140" align="center">
					<p class="topicdetails" style="white-space: nowrap;">Thu Jun 26, 2014 3:47 am</p>
					<p class="topicdetails" style="white-space: nowrap;"><a href="./memberlist.php?mode=viewprofile&amp;u=179005&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34">inhumanist</a>
						<a href="./viewtopic.php?f=1&amp;t=105742&amp;p=2425263&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34#p2425263"><img src="./styles/subclone/imageset/icon_topic_latest.gif" width="18" height="9" alt="View the latest post" title="View the latest post" /></a>
					</p>
				</td>
			</tr>

		

			<tr>
				<td class="row1" width="25" align="center"><img src="./styles/subclone/imageset/topic_read.gif" width="34" height="22" alt="No unread posts" title="No unread posts" /></td>
				
				<td class="row1" onmouseover="this.style.backgroundColor='#000000'; this.style.cursor='hand';" onmouseout="this.style.backgroundColor=&quot;&quot;" onclick="window.location.href='./viewtopic.php?f=1&amp;t=105763&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34'" style="cursor: pointer; ">
					
					 <a title="Posted: Wed Jun 25, 2014 1:28 am" href="./viewtopic.php?f=1&amp;t=105763&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34" class="sml bold">How much do lyrics matter?</a>
					
				</td>
				<td class="row1" width="130" align="center"><p class="topicauthor"><a href="./memberlist.php?mode=viewprofile&amp;u=251328&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34">TheDarkHarvest</a></p></td>
				<td class="row1" width="50" align="center"><p class="topicdetails">27</p></td>
				<td class="row1" width="50" align="center"><p class="topicdetails">550</p></td>
				<td class="row1" width="140" align="center">
					<p class="topicdetails" style="white-space: nowrap;">Thu Jun 26, 2014 3:24 am</p>
					<p class="topicdetails" style="white-space: nowrap;"><a href="./memberlist.php?mode=viewprofile&amp;u=11003&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34">Kutulu</a>
						<a href="./viewtopic.php?f=1&amp;t=105763&amp;p=2425259&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34#p2425259"><img src="./styles/subclone/imageset/icon_topic_latest.gif" width="18" height="9" alt="View the latest post" title="View the latest post" /></a>
					</p>
				</td>
			</tr>

		

			<tr>
				<td class="row1" width="25" align="center"><img src="./styles/subclone/imageset/topic_read_hot.gif" width="34" height="22" alt="No unread posts" title="No unread posts" /></td>
				
				<td class="row1" onmouseover="this.style.backgroundColor='#000000'; this.style.cursor='hand';" onmouseout="this.style.backgroundColor=&quot;&quot;" onclick="window.location.href='./viewtopic.php?f=1&amp;t=105699&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34'" style="cursor: pointer; ">
					
					 <a title="Posted: Fri Jun 20, 2014 10:40 pm" href="./viewtopic.php?f=1&amp;t=105699&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34" class="sml bold">Best And Worst Choruses In Metal.</a>
					
						<p class="gensmall"> [ <img src="./styles/subclone/imageset/icon_post_target.gif" width="12" height="9" alt="Go to page" title="Go to page" /> <a href="./viewtopic.php?f=1&amp;t=105699&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34">1</a><span class="page-sep">, </span><a href="./viewtopic.php?f=1&amp;t=105699&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34&amp;start=40">2</a> ] </p>
					
				</td>
				<td class="row1" width="130" align="center"><p class="topicauthor"><a href="./memberlist.php?mode=viewprofile&amp;u=200879&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34">Metal_Jaw</a></p></td>
				<td class="row1" width="50" align="center"><p class="topicdetails">74</p></td>
				<td class="row1" width="50" align="center"><p class="topicdetails">2190</p></td>
				<td class="row1" width="140" align="center">
					<p class="topicdetails" style="white-space: nowrap;">Thu Jun 26, 2014 1:47 am</p>
					<p class="topicdetails" style="white-space: nowrap;"><a href="./memberlist.php?mode=viewprofile&amp;u=243949&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34">Necrostalker</a>
						<a href="./viewtopic.php?f=1&amp;t=105699&amp;p=2425234&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34#p2425234"><img src="./styles/subclone/imageset/icon_topic_latest.gif" width="18" height="9" alt="View the latest post" title="View the latest post" /></a>
					</p>
				</td>
			</tr>

		

			<tr>
				<td class="row1" width="25" align="center"><img src="./styles/subclone/imageset/topic_read.gif" width="34" height="22" alt="No unread posts" title="No unread posts" /></td>
				
				<td class="row1" onmouseover="this.style.backgroundColor='#000000'; this.style.cursor='hand';" onmouseout="this.style.backgroundColor=&quot;&quot;" onclick="window.location.href='./viewtopic.php?f=1&amp;t=105675&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34'" style="cursor: pointer; ">
					
					 <a title="Posted: Wed Jun 18, 2014 8:10 pm" href="./viewtopic.php?f=1&amp;t=105675&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34" class="sml bold">Free Copy of Extremity Retained Book</a>
					
				</td>
				<td class="row1" width="130" align="center"><p class="topicauthor"><a href="./memberlist.php?mode=viewprofile&amp;u=200729&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34">FJ Receptor</a></p></td>
				<td class="row1" width="50" align="center"><p class="topicdetails">4</p></td>
				<td class="row1" width="50" align="center"><p class="topicdetails">369</p></td>
				<td class="row1" width="140" align="center">
					<p class="topicdetails" style="white-space: nowrap;">Thu Jun 26, 2014 1:29 am</p>
					<p class="topicdetails" style="white-space: nowrap;"><a href="./memberlist.php?mode=viewprofile&amp;u=180731&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34">TheMysticWombat</a>
						<a href="./viewtopic.php?f=1&amp;t=105675&amp;p=2425231&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34#p2425231"><img src="./styles/subclone/imageset/icon_topic_latest.gif" width="18" height="9" alt="View the latest post" title="View the latest post" /></a>
					</p>
				</td>
			</tr>

		

			<tr>
				<td class="row1" width="25" align="center"><img src="./styles/subclone/imageset/topic_read.gif" width="34" height="22" alt="No unread posts" title="No unread posts" /></td>
				
				<td class="row1" onmouseover="this.style.backgroundColor='#000000'; this.style.cursor='hand';" onmouseout="this.style.backgroundColor=&quot;&quot;" onclick="window.location.href='./viewtopic.php?f=1&amp;t=105754&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34'" style="cursor: pointer; ">
					
					 <a title="Posted: Tue Jun 24, 2014 12:23 pm" href="./viewtopic.php?f=1&amp;t=105754&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34" class="sml bold">The Most Gore / Gruesome Extreme Metal lyrics</a>
					
				</td>
				<td class="row1" width="130" align="center"><p class="topicauthor"><a href="./memberlist.php?mode=viewprofile&amp;u=245483&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34">Morsay</a></p></td>
				<td class="row1" width="50" align="center"><p class="topicdetails">9</p></td>
				<td class="row1" width="50" align="center"><p class="topicdetails">439</p></td>
				<td class="row1" width="140" align="center">
					<p class="topicdetails" style="white-space: nowrap;">Thu Jun 26, 2014 1:18 am</p>
					<p class="topicdetails" style="white-space: nowrap;"><a href="./memberlist.php?mode=viewprofile&amp;u=144924&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34">Wilytank</a>
						<a href="./viewtopic.php?f=1&amp;t=105754&amp;p=2425229&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34#p2425229"><img src="./styles/subclone/imageset/icon_topic_latest.gif" width="18" height="9" alt="View the latest post" title="View the latest post" /></a>
					</p>
				</td>
			</tr>

		

			<tr>
				<td class="row1" width="25" align="center"><img src="./styles/subclone/imageset/topic_read.gif" width="34" height="22" alt="No unread posts" title="No unread posts" /></td>
				
				<td class="row1" onmouseover="this.style.backgroundColor='#000000'; this.style.cursor='hand';" onmouseout="this.style.backgroundColor=&quot;&quot;" onclick="window.location.href='./viewtopic.php?f=1&amp;t=105755&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34'" style="cursor: pointer; ">
					
					 <a title="Posted: Tue Jun 24, 2014 12:39 pm" href="./viewtopic.php?f=1&amp;t=105755&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34" class="sml bold">Pallbearer release first track from &quot;Foundations of Burden&quot;</a>
					
				</td>
				<td class="row1" width="130" align="center"><p class="topicauthor"><a href="./memberlist.php?mode=viewprofile&amp;u=151818&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34">Metal81</a></p></td>
				<td class="row1" width="50" align="center"><p class="topicdetails">21</p></td>
				<td class="row1" width="50" align="center"><p class="topicdetails">527</p></td>
				<td class="row1" width="140" align="center">
					<p class="topicdetails" style="white-space: nowrap;">Wed Jun 25, 2014 10:36 pm</p>
					<p class="topicdetails" style="white-space: nowrap;"><a href="./memberlist.php?mode=viewprofile&amp;u=146211&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34">narsilianshard</a>
						<a href="./viewtopic.php?f=1&amp;t=105755&amp;p=2425204&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34#p2425204"><img src="./styles/subclone/imageset/icon_topic_latest.gif" width="18" height="9" alt="View the latest post" title="View the latest post" /></a>
					</p>
				</td>
			</tr>

		

			<tr>
				<td class="row1" width="25" align="center"><img src="./styles/subclone/imageset/topic_read.gif" width="34" height="22" alt="No unread posts" title="No unread posts" /></td>
				
				<td class="row1" onmouseover="this.style.backgroundColor='#000000'; this.style.cursor='hand';" onmouseout="this.style.backgroundColor=&quot;&quot;" onclick="window.location.href='./viewtopic.php?f=1&amp;t=105661&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34'" style="cursor: pointer; ">
					
					 <a title="Posted: Tue Jun 17, 2014 7:10 pm" href="./viewtopic.php?f=1&amp;t=105661&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34" class="sml bold">What makes the worst songs truly the worst?</a>
					
				</td>
				<td class="row1" width="130" align="center"><p class="topicauthor"><a href="./memberlist.php?mode=viewprofile&amp;u=117794&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34">LVB</a></p></td>
				<td class="row1" width="50" align="center"><p class="topicdetails">28</p></td>
				<td class="row1" width="50" align="center"><p class="topicdetails">1667</p></td>
				<td class="row1" width="140" align="center">
					<p class="topicdetails" style="white-space: nowrap;">Wed Jun 25, 2014 8:32 pm</p>
					<p class="topicdetails" style="white-space: nowrap;"><a href="./memberlist.php?mode=viewprofile&amp;u=65988&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34">Empyreal</a>
						<a href="./viewtopic.php?f=1&amp;t=105661&amp;p=2425175&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34#p2425175"><img src="./styles/subclone/imageset/icon_topic_latest.gif" width="18" height="9" alt="View the latest post" title="View the latest post" /></a>
					</p>
				</td>
			</tr>

		

			<tr>
				<td class="row1" width="25" align="center"><img src="./styles/subclone/imageset/topic_read_hot.gif" width="34" height="22" alt="No unread posts" title="No unread posts" /></td>
				
				<td class="row1" onmouseover="this.style.backgroundColor='#000000'; this.style.cursor='hand';" onmouseout="this.style.backgroundColor=&quot;&quot;" onclick="window.location.href='./viewtopic.php?f=1&amp;t=104238&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34'" style="cursor: pointer; ">
					
					 <a title="Posted: Sun Mar 16, 2014 6:53 pm" href="./viewtopic.php?f=1&amp;t=104238&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34" class="sml bold">Overkill reveals new album title: &quot;White Devil Armory&quot;</a>
					
						<p class="gensmall"> [ <img src="./styles/subclone/imageset/icon_post_target.gif" width="12" height="9" alt="Go to page" title="Go to page" /> <a href="./viewtopic.php?f=1&amp;t=104238&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34">1</a><span class="page-sep">, </span><a href="./viewtopic.php?f=1&amp;t=104238&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34&amp;start=40">2</a> ] </p>
					
				</td>
				<td class="row1" width="130" align="center"><p class="topicauthor"><a href="./memberlist.php?mode=viewprofile&amp;u=69896&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34" style="color: #993300;" class="username-coloured">Diamhea</a></p></td>
				<td class="row1" width="50" align="center"><p class="topicdetails">59</p></td>
				<td class="row1" width="50" align="center"><p class="topicdetails">3554</p></td>
				<td class="row1" width="140" align="center">
					<p class="topicdetails" style="white-space: nowrap;">Wed Jun 25, 2014 4:26 pm</p>
					<p class="topicdetails" style="white-space: nowrap;"><a href="./memberlist.php?mode=viewprofile&amp;u=184481&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34">Hastein45</a>
						<a href="./viewtopic.php?f=1&amp;t=104238&amp;p=2425102&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34#p2425102"><img src="./styles/subclone/imageset/icon_topic_latest.gif" width="18" height="9" alt="View the latest post" title="View the latest post" /></a>
					</p>
				</td>
			</tr>

		

			<tr>
				<td class="row1" width="25" align="center"><img src="./styles/subclone/imageset/topic_read_hot.gif" width="34" height="22" alt="No unread posts" title="No unread posts" /></td>
				
				<td class="row1" onmouseover="this.style.backgroundColor='#000000'; this.style.cursor='hand';" onmouseout="this.style.backgroundColor=&quot;&quot;" onclick="window.location.href='./viewtopic.php?f=1&amp;t=105623&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34'" style="cursor: pointer; ">
					
					 <a title="Posted: Sun Jun 15, 2014 9:17 am" href="./viewtopic.php?f=1&amp;t=105623&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34" class="sml bold">Is metal getting worse, or ...</a>
					
						<p class="gensmall"> [ <img src="./styles/subclone/imageset/icon_post_target.gif" width="12" height="9" alt="Go to page" title="Go to page" /> <a href="./viewtopic.php?f=1&amp;t=105623&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34">1</a><span class="page-sep">, </span><a href="./viewtopic.php?f=1&amp;t=105623&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34&amp;start=40">2</a><span class="page-sep">, </span><a href="./viewtopic.php?f=1&amp;t=105623&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34&amp;start=80">3</a> ] </p>
					
				</td>
				<td class="row1" width="130" align="center"><p class="topicauthor"><a href="./memberlist.php?mode=viewprofile&amp;u=223140&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34">Smitty</a></p></td>
				<td class="row1" width="50" align="center"><p class="topicdetails">91</p></td>
				<td class="row1" width="50" align="center"><p class="topicdetails">4176</p></td>
				<td class="row1" width="140" align="center">
					<p class="topicdetails" style="white-space: nowrap;">Wed Jun 25, 2014 3:47 pm</p>
					<p class="topicdetails" style="white-space: nowrap;"><a href="./memberlist.php?mode=viewprofile&amp;u=246082&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34">overtenmy</a>
						<a href="./viewtopic.php?f=1&amp;t=105623&amp;p=2425090&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34#p2425090"><img src="./styles/subclone/imageset/icon_topic_latest.gif" width="18" height="9" alt="View the latest post" title="View the latest post" /></a>
					</p>
				</td>
			</tr>

		

			<tr>
				<td class="row1" width="25" align="center"><img src="./styles/subclone/imageset/topic_read.gif" width="34" height="22" alt="No unread posts" title="No unread posts" /></td>
				
				<td class="row1" onmouseover="this.style.backgroundColor='#000000'; this.style.cursor='hand';" onmouseout="this.style.backgroundColor=&quot;&quot;" onclick="window.location.href='./viewtopic.php?f=1&amp;t=105591&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34'" style="cursor: pointer; ">
					
					 <a title="Posted: Thu Jun 12, 2014 12:23 pm" href="./viewtopic.php?f=1&amp;t=105591&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34" class="sml bold">Sólstafir - Ótta (Aug 29th)</a>
					
				</td>
				<td class="row1" width="130" align="center"><p class="topicauthor"><a href="./memberlist.php?mode=viewprofile&amp;u=217489&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34">Bishop_Drugsalot</a></p></td>
				<td class="row1" width="50" align="center"><p class="topicdetails">8</p></td>
				<td class="row1" width="50" align="center"><p class="topicdetails">524</p></td>
				<td class="row1" width="140" align="center">
					<p class="topicdetails" style="white-space: nowrap;">Wed Jun 25, 2014 12:27 pm</p>
					<p class="topicdetails" style="white-space: nowrap;"><a href="./memberlist.php?mode=viewprofile&amp;u=217489&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34">Bishop_Drugsalot</a>
						<a href="./viewtopic.php?f=1&amp;t=105591&amp;p=2425008&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34#p2425008"><img src="./styles/subclone/imageset/icon_topic_latest.gif" width="18" height="9" alt="View the latest post" title="View the latest post" /></a>
					</p>
				</td>
			</tr>

		

			<tr>
				<td class="row1" width="25" align="center"><img src="./styles/subclone/imageset/topic_read_locked.gif" width="34" height="22" alt="This topic is locked, you cannot edit posts or make further replies." title="This topic is locked, you cannot edit posts or make further replies." /></td>
				
				<td class="row1" onmouseover="this.style.backgroundColor='#000000'; this.style.cursor='hand';" onmouseout="this.style.backgroundColor=&quot;&quot;" onclick="window.location.href='./viewtopic.php?f=1&amp;t=83530&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34'" style="cursor: pointer; ">
					
					 <a title="Posted: Thu Sep 08, 2011 10:29 am" href="./viewtopic.php?f=1&amp;t=83530&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34" class="sml bold">Nargaroth Hate</a>
					
						<p class="gensmall"> [ <img src="./styles/subclone/imageset/icon_post_target.gif" width="12" height="9" alt="Go to page" title="Go to page" /> <a href="./viewtopic.php?f=1&amp;t=83530&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34">1</a><span class="page-sep">, </span><a href="./viewtopic.php?f=1&amp;t=83530&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34&amp;start=40">2</a> ] </p>
					
				</td>
				<td class="row1" width="130" align="center"><p class="topicauthor"><a href="./memberlist.php?mode=viewprofile&amp;u=182148&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34">Phantomi</a></p></td>
				<td class="row1" width="50" align="center"><p class="topicdetails">49</p></td>
				<td class="row1" width="50" align="center"><p class="topicdetails">3735</p></td>
				<td class="row1" width="140" align="center">
					<p class="topicdetails" style="white-space: nowrap;">Wed Jun 25, 2014 10:03 am</p>
					<p class="topicdetails" style="white-space: nowrap;"><a href="./memberlist.php?mode=viewprofile&amp;u=130970&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34" style="color: #AA0000;" class="username-coloured">iamntbatman</a>
						<a href="./viewtopic.php?f=1&amp;t=83530&amp;p=2424963&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34#p2424963"><img src="./styles/subclone/imageset/icon_topic_latest.gif" width="18" height="9" alt="View the latest post" title="View the latest post" /></a>
					</p>
				</td>
			</tr>

		

			<tr>
				<td class="row1" width="25" align="center"><img src="./styles/subclone/imageset/topic_read.gif" width="34" height="22" alt="No unread posts" title="No unread posts" /></td>
				
				<td class="row1" onmouseover="this.style.backgroundColor='#000000'; this.style.cursor='hand';" onmouseout="this.style.backgroundColor=&quot;&quot;" onclick="window.location.href='./viewtopic.php?f=1&amp;t=105646&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34'" style="cursor: pointer; ">
					
					 <a title="Posted: Mon Jun 16, 2014 6:58 pm" href="./viewtopic.php?f=1&amp;t=105646&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34" class="sml bold">Artists that outdo their influences.</a>
					
						<p class="gensmall"> [ <img src="./styles/subclone/imageset/icon_post_target.gif" width="12" height="9" alt="Go to page" title="Go to page" /> <a href="./viewtopic.php?f=1&amp;t=105646&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34">1</a><span class="page-sep">, </span><a href="./viewtopic.php?f=1&amp;t=105646&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34&amp;start=40">2</a> ] </p>
					
				</td>
				<td class="row1" width="130" align="center"><p class="topicauthor"><a href="./memberlist.php?mode=viewprofile&amp;u=175532&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34">ObservationSlave</a></p></td>
				<td class="row1" width="50" align="center"><p class="topicdetails">49</p></td>
				<td class="row1" width="50" align="center"><p class="topicdetails">2352</p></td>
				<td class="row1" width="140" align="center">
					<p class="topicdetails" style="white-space: nowrap;">Wed Jun 25, 2014 7:47 am</p>
					<p class="topicdetails" style="white-space: nowrap;"><a href="./memberlist.php?mode=viewprofile&amp;u=255691&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34">bug_man</a>
						<a href="./viewtopic.php?f=1&amp;t=105646&amp;p=2424932&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34#p2424932"><img src="./styles/subclone/imageset/icon_topic_latest.gif" width="18" height="9" alt="View the latest post" title="View the latest post" /></a>
					</p>
				</td>
			</tr>

		

			<tr>
				<td class="row1" width="25" align="center"><img src="./styles/subclone/imageset/topic_read.gif" width="34" height="22" alt="No unread posts" title="No unread posts" /></td>
				
				<td class="row1" onmouseover="this.style.backgroundColor='#000000'; this.style.cursor='hand';" onmouseout="this.style.backgroundColor=&quot;&quot;" onclick="window.location.href='./viewtopic.php?f=1&amp;t=105735&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34'" style="cursor: pointer; ">
					
					 <a title="Posted: Mon Jun 23, 2014 1:25 pm" href="./viewtopic.php?f=1&amp;t=105735&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34" class="sml bold">Hellfest 2014 Footage</a>
					
				</td>
				<td class="row1" width="130" align="center"><p class="topicauthor"><a href="./memberlist.php?mode=viewprofile&amp;u=146211&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34">narsilianshard</a></p></td>
				<td class="row1" width="50" align="center"><p class="topicdetails">6</p></td>
				<td class="row1" width="50" align="center"><p class="topicdetails">421</p></td>
				<td class="row1" width="140" align="center">
					<p class="topicdetails" style="white-space: nowrap;">Wed Jun 25, 2014 7:33 am</p>
					<p class="topicdetails" style="white-space: nowrap;"><a href="./memberlist.php?mode=viewprofile&amp;u=61606&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34">androdion</a>
						<a href="./viewtopic.php?f=1&amp;t=105735&amp;p=2424929&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34#p2424929"><img src="./styles/subclone/imageset/icon_topic_latest.gif" width="18" height="9" alt="View the latest post" title="View the latest post" /></a>
					</p>
				</td>
			</tr>

		

			<tr>
				<td class="row1" width="25" align="center"><img src="./styles/subclone/imageset/topic_read_hot.gif" width="34" height="22" alt="No unread posts" title="No unread posts" /></td>
				
				<td class="row1" onmouseover="this.style.backgroundColor='#000000'; this.style.cursor='hand';" onmouseout="this.style.backgroundColor=&quot;&quot;" onclick="window.location.href='./viewtopic.php?f=1&amp;t=104634&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34'" style="cursor: pointer; ">
					
					 <a title="Posted: Thu Apr 10, 2014 1:44 pm" href="./viewtopic.php?f=1&amp;t=104634&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34" class="sml bold">Judas Priest announces new album coming soon</a>
					
						<p class="gensmall"> [ <img src="./styles/subclone/imageset/icon_post_target.gif" width="12" height="9" alt="Go to page" title="Go to page" /> <a href="./viewtopic.php?f=1&amp;t=104634&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34">1</a><span class="page-dots"> ... </span><a href="./viewtopic.php?f=1&amp;t=104634&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34&amp;start=280">8</a><span class="page-sep">, </span><a href="./viewtopic.php?f=1&amp;t=104634&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34&amp;start=320">9</a><span class="page-sep">, </span><a href="./viewtopic.php?f=1&amp;t=104634&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34&amp;start=360">10</a> ] </p>
					
				</td>
				<td class="row1" width="130" align="center"><p class="topicauthor"><a href="./memberlist.php?mode=viewprofile&amp;u=10536&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34">mjollnir</a></p></td>
				<td class="row1" width="50" align="center"><p class="topicdetails">371</p></td>
				<td class="row1" width="50" align="center"><p class="topicdetails">15875</p></td>
				<td class="row1" width="140" align="center">
					<p class="topicdetails" style="white-space: nowrap;">Wed Jun 25, 2014 12:15 am</p>
					<p class="topicdetails" style="white-space: nowrap;"><a href="./memberlist.php?mode=viewprofile&amp;u=199188&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34">Metallic Shock</a>
						<a href="./viewtopic.php?f=1&amp;t=104634&amp;p=2424842&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34#p2424842"><img src="./styles/subclone/imageset/icon_topic_latest.gif" width="18" height="9" alt="View the latest post" title="View the latest post" /></a>
					</p>
				</td>
			</tr>

		
		<tr align="center">
			
				<td class="cat" colspan="6">
			
					<form method="post" action="./viewforum.php?f=1&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34"><span class="gensmall">Display topics from previous:</span>&nbsp;<select name="st" id="st"><option value="0" selected="selected">All Topics</option><option value="1">1 day</option><option value="7">7 days</option><option value="14">2 weeks</option><option value="30">1 month</option><option value="90">3 months</option><option value="180">6 months</option><option value="365">1 year</option></select>&nbsp;<span class="gensmall">Sort by</span> <select name="sk" id="sk"><option value="a">Author</option><option value="t" selected="selected">Post time</option><option value="r">Replies</option><option value="s">Subject</option><option value="v">Views</option></select> <select name="sd" id="sd"><option value="a">Ascending</option><option value="d" selected="selected">Descending</option></select>&nbsp;<input class="btnlite" type="submit" name="sort" value="Go" /></form>
				</td>
		</tr>
		
		</table>
	
		<table width="100%" cellspacing="1">
		<tr>
			         <td colspan="2"><span class="gensmall left floatleft"></span></td>
                                <td class="gensmall floatright" width="100%" align="right" nowrap="nowrap"><b><a href="#" onclick="jumpto(); return false;" title="Click to jump to page…">Go to page</a> <strong>1</strong><span class="page-sep">, </span><a href="./viewforum.php?f=1&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34&amp;start=30">2</a><span class="page-sep">, </span><a href="./viewforum.php?f=1&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34&amp;start=60">3</a><span class="page-sep">, </span><a href="./viewforum.php?f=1&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34&amp;start=90">4</a><span class="page-sep">, </span><a href="./viewforum.php?f=1&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34&amp;start=120">5</a><span class="page-dots"> ... </span><a href="./viewforum.php?f=1&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34&amp;start=15330">512</a> &nbsp;<a href="./viewforum.php?f=1&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34&amp;start=30">Next</a></b></td></tr>
			
				<tr>
				<td width="1%"><a href="./posting.php?mode=post&amp;f=1&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34"><img src="./styles/subclone/imageset/en/button_topic_new.gif" alt="Post new topic" title="Post new topic" /></a></td>
                                <td><p class="breadcrumbs floatleft"><a href="./index.php?sid=b86ddae9ae3919b1c6ddf53f6f52fa34">Forum Index</a> &#187; <a href="./viewforum.php?f=12&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34">Music Talk</a> &#187; <a href="./viewforum.php?f=1&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34">Metal Discussion</a></p></td>
<td class="gensmall floatright">&nbsp;Page <strong>1</strong> of <strong>512</strong>&nbsp;[ 15344 topics ]&nbsp;</td>
				
			
		</tr>
		</table>
	

		<br clear="all" />
</div>


	<br clear="all" />

	<table class="forumindex" width="100%" cellspacing="1">
	<tr>
		<td class="cat"><h4>Who is online</h4></td>
	</tr>
	<tr>
		<td class="row1"><p class="gensmall">Users browsing this forum: <a href="./memberlist.php?mode=viewprofile&amp;u=3389&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34" style="color: #993300;" class="username-coloured">Abominatrix</a>, <span style="color: #9E8DA7;" class="username-coloured">Google [Bot]</span>, <a href="./memberlist.php?mode=viewprofile&amp;u=66267&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34">lord_ghengis</a>, <a href="./memberlist.php?mode=viewprofile&amp;u=217660&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34">olentzero</a>, <a href="./memberlist.php?mode=viewprofile&amp;u=256188&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34">teh_Foxx0rz</a>, <a href="./memberlist.php?mode=viewprofile&amp;u=40969&amp;sid=b86ddae9ae3919b1c6ddf53f6f52fa34">Waltz_of_Ghouls</a> and 24 guests</p></td>
	</tr>
	</table>

	<br clear="all" />

	<table width="100%" cellspacing="0">
	<tr>
		<td align="left" valign="top">
			<table cellspacing="3" cellpadding="0" border="0">
			<tr>
				<td width="20" style="text-align: center;"></td>
				<td class="gensmall">New posts</td>
				<td>&nbsp;&nbsp;</td>
				<td width="20" style="text-align: center;"><img src="./styles/subclone/imageset/topic_read.gif" width="34" height="22" alt="No unread posts" title="No unread posts" /></td>
				<td class="gensmall">No new posts</td>
				<td>&nbsp;&nbsp;</td>
				<td width="20" style="text-align: center;"><img src="./styles/subclone/imageset/announce_read.gif" width="34" height="22" alt="Announce" title="Announce" /></td>
				<td class="gensmall">Announcement</td>
			</tr>
			<tr>
				<td style="text-align: center;"></td>
				<td class="gensmall">New posts [ Popular ]</td>
				<td>&nbsp;&nbsp;</td>
				<td style="text-align: center;"><img src="./styles/subclone/imageset/topic_read_hot.gif" width="34" height="22" alt="No unread posts [ Popular ]" title="No unread posts [ Popular ]" /></td>
				<td class="gensmall">No new posts [ Popular ]</td>
				<td>&nbsp;&nbsp;</td>
				<td style="text-align: center;"><img src="./styles/subclone/imageset/sticky_read.gif" width="34" height="22" alt="Sticky" title="Sticky" /></td>
				<td class="gensmall">Sticky</td>
			</tr>
			<tr>
				<td style="text-align: center;"></td>
				<td class="gensmall">New posts [ Locked ]</td>
				<td>&nbsp;&nbsp;</td>
				<td style="text-align: center;"><img src="./styles/subclone/imageset/topic_read_locked.gif" width="34" height="22" alt="No unread posts [ Locked ]" title="No unread posts [ Locked ]" /></td>
				<td class="gensmall">No new posts [ Locked ]</td>
				<td>&nbsp;&nbsp;</td>
				<td style="text-align: center;"><img src="./styles/subclone/imageset/topic_moved.gif" width="34" height="22" alt="Moved topic" title="Moved topic" /></td>
				<td class="gensmall">Moved topic</td>
			</tr>
			</table>
		</td>
		<td align="right"><span class="gensmall">You <strong>cannot</strong> post new topics in this forum<br />You <strong>cannot</strong> reply to topics in this forum<br />You <strong>cannot</strong> edit your posts in this forum<br />You <strong>cannot</strong> delete your posts in this forum<br /></span></td>
	</tr>
	</table>


<br clear="all" />

<table width="100%" cellspacing="0">
<tr>
	<td><form method="post" name="search" action="./search.php?sid=b86ddae9ae3919b1c6ddf53f6f52fa34"><span class="gensmall">Search for:</span> <input class="post" type="text" name="keywords" size="20" /> <input class="btnlite" type="submit" value="Go" /></form></td>
	<td align="right">
	<form method="post" name="jumpbox" action="./viewforum.php?sid=b86ddae9ae3919b1c6ddf53f6f52fa34" onsubmit="if(document.jumpbox.f.value == -1){return false;}">

	<table cellspacing="0" cellpadding="0" border="0">
	<tr>
		<td nowrap="nowrap"><span class="gensmall">Jump to:</span>&nbsp;<select name="f" onchange="if(this.options[this.selectedIndex].value != -1){ document.forms['jumpbox'].submit() }">

		
			<option value="-1">Select a forum</option>
		<option value="-1">------------------</option>
			<option value="12">Music Talk</option>
		
			<option value="1" selected="selected">&nbsp; &nbsp;Metal Discussion</option>
		
			<option value="11">&nbsp; &nbsp;Recommendation Central</option>
		
			<option value="8">&nbsp; &nbsp;For the Musicians</option>
		
			<option value="20">&nbsp; &nbsp;&nbsp; &nbsp;Musicians Seeking Musicians</option>
		
			<option value="18">&nbsp; &nbsp;Tours, Gigs and Festivals</option>
		
			<option value="14">Marketplace</option>
		
			<option value="9">&nbsp; &nbsp;Promotional Forum</option>
		
			<option value="6">&nbsp; &nbsp;Trading Board</option>
		
			<option value="19">&nbsp; &nbsp;Selling and Buying Board</option>
		
			<option value="15">Off-Topic</option>
		
			<option value="2">&nbsp; &nbsp;The Tavern</option>
		
			<option value="16">Site Feedback</option>
		
			<option value="4">&nbsp; &nbsp;Reviews Discussion</option>
		
			<option value="3">&nbsp; &nbsp;Suggestions and Complaints</option>
		
			<option value="17">&nbsp; &nbsp;&nbsp; &nbsp;Site-Related Tasks</option>
		

		</select>&nbsp;<input class="btnlite" type="submit" value="Go" /></td>
	</tr>
	</table>

	</form>
</td>
</tr>
</table>


</div>

<!--
	We request you retain the full copyright notice below including the link to www.phpbb.com.
	This not only gives respect to the large amount of time given freely by the developers
	but also helps build interest, traffic and use of phpBB3. If you (honestly) cannot retain
	the full copyright we ask you at least leave in place the "Powered by phpBB" line, with
	"phpBB" linked to www.phpbb.com. If you refuse to include even this then support on our
	forums may be affected.

	The phpBB Group : 2006
//-->

<div id="wrapfooter">
        
        <h1><a href="http://www.metal-archives.com">Back to the Encyclopaedia Metallum</a></h1><br />
	<span class="copyright">Powered by <a href="http://www.phpbb.com/">phpBB</a> &copy; 2000, 2002, 2005, 2007 phpBB Group
	</span>
</div>

</body>
</html>
