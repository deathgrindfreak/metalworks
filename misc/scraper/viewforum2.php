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

<title>Encyclopaedia Metallum: The Metal Archives &bull; View forum - Recommendation Central</title>



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
	var base_url = './viewforum.php?f=11&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6';

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
			<td><a href="./index.php?sid=56aeac3d547c98eb2bb88f2807aa4bf6"><img src="./styles/subclone/theme/images/site_logo.jpg" /></a></td>
			<td width="100%" class="center"><span class="genmed"><h1><a href="/">Encyclopaedia Metallum: The Metal Archives</a></h1><span class="gen">Message board</span><br /><br />
                        <a href="./faq.php?sid=56aeac3d547c98eb2bb88f2807aa4bf6"><img src="./styles/subclone/theme/images/icon_mini_faq.gif" width="12" height="13" alt="*" /> FAQ</a>
				&nbsp; &nbsp;<a href="./search.php?sid=56aeac3d547c98eb2bb88f2807aa4bf6"><img src="./styles/subclone/theme/images/icon_mini_search.gif" width="12" height="13" alt="*" /> Search</a>&nbsp; &nbsp;<a href="/user/signup"><img src="./styles/subclone/theme/images/icon_mini_register.gif" width="12" height="13" alt="*" /> Register</a>
					
                                <a href="./ucp.php?mode=login&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6">&nbsp; <img src="./styles/subclone/theme/images/icon_mini_login.gif" width="12" height="13" alt="*" /> Login</a>&nbsp;
                                
				<br />
                  </td>
		</tr>
		</table>
	</div>
</div>

<div id="wrapcentre">
	<br style="clear: both;" />
	<div id="pageheader">
		<h2><a class="titles" href="./viewforum.php?f=11&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6">Recommendation Central</a></h2>
                <span class="gensmall floatleft nowrap"><b><a href="#" onclick="jumpto(); return false;" title="Click to jump to page…">Go to page</a> <strong>1</strong><span class="page-sep">, </span><a href="./viewforum.php?f=11&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6&amp;start=30">2</a><span class="page-sep">, </span><a href="./viewforum.php?f=11&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6&amp;start=60">3</a><span class="page-sep">, </span><a href="./viewforum.php?f=11&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6&amp;start=90">4</a><span class="page-sep">, </span><a href="./viewforum.php?f=11&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6&amp;start=120">5</a><span class="page-dots"> ... </span><a href="./viewforum.php?f=11&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6&amp;start=6090">204</a> &nbsp;<a href="./viewforum.php?f=11&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6&amp;start=30">Next</a></b></span>


	<span class="gensmall floatright">Moderators: <a href="./memberlist.php?mode=viewprofile&amp;u=5872&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6" style="color: #AA0000;" class="username-coloured">Nightgaunt</a>, <a href="./memberlist.php?mode=viewprofile&amp;u=109063&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6" style="color: #AA0000;" class="username-coloured">Metantoine</a>, <a href="./memberlist.php?mode=viewprofile&amp;u=18189&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6" style="color: #AA0000;" class="username-coloured">Napero</a>, <a href="./memberlist.php?mode=viewprofile&amp;u=100219&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6" style="color: #AA0000;" class="username-coloured">OneRodeToAsaBay</a>, <a href="./memberlist.php?mode=viewprofile&amp;u=2&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6" style="color: #996600;" class="username-coloured">HellBlazer</a>, <a href="./memberlist.php?mode=viewprofile&amp;u=12276&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6" style="color: #AA0000;" class="username-coloured">failsafeman</a>, <a href="./memberlist.php?mode=viewprofile&amp;u=11&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6" style="color: #993300;" class="username-coloured">Esoteric</a>, <a href="./memberlist.php?mode=viewprofile&amp;u=3&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6" style="color: #996600;" class="username-coloured">Morrigan</a>, <a href="./memberlist.php?mode=viewprofile&amp;u=40829&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6" style="color: #AA0000;" class="username-coloured">Derigin</a>, <a href="./memberlist.php?mode=viewprofile&amp;u=74&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6" style="color: #AA0000;" class="username-coloured">MMisantropo</a></span>

	</div>

	<br clear="all" /><br />


<div id="pagecontent">


		<table width="100%" cellspacing="1">
		<tr>
			
				<td width="1%"><a href="./posting.php?mode=post&amp;f=11&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6"><img src="./styles/subclone/imageset/en/button_topic_new.gif" alt="Post new topic" title="Post new topic" /></a></td>
                                <td><p class="breadcrumbs floatleft"><a href="./index.php?sid=56aeac3d547c98eb2bb88f2807aa4bf6">Forum Index</a> &#187; <a href="./viewforum.php?f=12&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6">Music Talk</a> &#187; <a href="./viewforum.php?f=11&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6">Recommendation Central</a></p></td>
                                <td class="floatright"><form method="post" name="search" action="./search.php?sid=56aeac3d547c98eb2bb88f2807aa4bf6"><span class="gensmall">Search for:</span> <input class="post" type="text" name="keywords" size="20" /> <input class="btnlite" type="submit" value="Go" /></form></td>
			
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
				
				<td class="row1" onmouseover="this.style.backgroundColor='#000000'; this.style.cursor='hand';" onmouseout="this.style.backgroundColor=&quot;&quot;" onclick="window.location.href='./viewtopic.php?f=11&amp;t=49715&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6'" style="cursor: pointer; ">
					
					 <a title="Posted: Thu Apr 16, 2009 7:54 pm" href="./viewtopic.php?f=11&amp;t=49715&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6" class="sml bold">Rec Central Guidelines (IGNORE AT OWN RISK)</a>
					
				</td>
				<td class="row1" width="130" align="center"><p class="topicauthor"><a href="./memberlist.php?mode=viewprofile&amp;u=5872&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6" style="color: #AA0000;" class="username-coloured">Nightgaunt</a></p></td>
				<td class="row1" width="50" align="center"><p class="topicdetails">1</p></td>
				<td class="row1" width="50" align="center"><p class="topicdetails">16638</p></td>
				<td class="row1" width="140" align="center">
					<p class="topicdetails" style="white-space: nowrap;">Mon May 25, 2009 9:05 pm</p>
					<p class="topicdetails" style="white-space: nowrap;"><a href="./memberlist.php?mode=viewprofile&amp;u=5872&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6" style="color: #AA0000;" class="username-coloured">Nightgaunt</a>
						<a href="./viewtopic.php?f=11&amp;t=49715&amp;p=1238728&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6#p1238728"><img src="./styles/subclone/imageset/icon_topic_latest.gif" width="18" height="9" alt="View the latest post" title="View the latest post" /></a>
					</p>
				</td>
			</tr>

		

			<tr>
				<td class="row1" width="25" align="center"><img src="./styles/subclone/imageset/announce_read.gif" width="34" height="22" alt="No unread posts" title="No unread posts" /></td>
				
				<td class="row1" onmouseover="this.style.backgroundColor='#000000'; this.style.cursor='hand';" onmouseout="this.style.backgroundColor=&quot;&quot;" onclick="window.location.href='./viewtopic.php?f=11&amp;t=44687&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6'" style="cursor: pointer; ">
					
					 <a title="Posted: Wed Nov 19, 2008 5:21 pm" href="./viewtopic.php?f=11&amp;t=44687&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6" class="sml bold">Help Threads Directory - LOOK HERE FOR THE OTHER THREADS</a>
					
						<p class="gensmall"> [ <img src="./styles/subclone/imageset/icon_post_target.gif" width="12" height="9" alt="Go to page" title="Go to page" /> <a href="./viewtopic.php?f=11&amp;t=44687&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6">1</a><span class="page-sep">, </span><a href="./viewtopic.php?f=11&amp;t=44687&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6&amp;start=40">2</a> ] </p>
					
				</td>
				<td class="row1" width="130" align="center"><p class="topicauthor"><a href="./memberlist.php?mode=viewprofile&amp;u=7144&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6">rexxz</a></p></td>
				<td class="row1" width="50" align="center"><p class="topicdetails">59</p></td>
				<td class="row1" width="50" align="center"><p class="topicdetails">46966</p></td>
				<td class="row1" width="140" align="center">
					<p class="topicdetails" style="white-space: nowrap;">Fri Sep 14, 2012 1:48 pm</p>
					<p class="topicdetails" style="white-space: nowrap;"><a href="./memberlist.php?mode=viewprofile&amp;u=70687&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6">halberd</a>
						<a href="./viewtopic.php?f=11&amp;t=44687&amp;p=2138049&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6#p2138049"><img src="./styles/subclone/imageset/icon_topic_latest.gif" width="18" height="9" alt="View the latest post" title="View the latest post" /></a>
					</p>
				</td>
			</tr>

		

			<tr>
				<td class="row1" width="25" align="center"><img src="./styles/subclone/imageset/announce_read_locked.gif" width="34" height="22" alt="This topic is locked, you cannot edit posts or make further replies." title="This topic is locked, you cannot edit posts or make further replies." /></td>
				
				<td class="row1" onmouseover="this.style.backgroundColor='#000000'; this.style.cursor='hand';" onmouseout="this.style.backgroundColor=&quot;&quot;" onclick="window.location.href='./viewtopic.php?f=11&amp;t=23778&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6'" style="cursor: pointer; ">
					
					 <a title="Posted: Tue Feb 06, 2007 7:39 pm" href="./viewtopic.php?f=11&amp;t=23778&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6" class="sml bold">Attention: Recommendation/Favorite Threads -- How To</a>
					
				</td>
				<td class="row1" width="130" align="center"><p class="topicauthor"><a href="./memberlist.php?mode=viewprofile&amp;u=5872&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6" style="color: #AA0000;" class="username-coloured">Nightgaunt</a></p></td>
				<td class="row1" width="50" align="center"><p class="topicdetails">0</p></td>
				<td class="row1" width="50" align="center"><p class="topicdetails">28956</p></td>
				<td class="row1" width="140" align="center">
					<p class="topicdetails" style="white-space: nowrap;">Tue Feb 06, 2007 7:39 pm</p>
					<p class="topicdetails" style="white-space: nowrap;"><a href="./memberlist.php?mode=viewprofile&amp;u=5872&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6" style="color: #AA0000;" class="username-coloured">Nightgaunt</a>
						<a href="./viewtopic.php?f=11&amp;t=23778&amp;p=467858&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6#p467858"><img src="./styles/subclone/imageset/icon_topic_latest.gif" width="18" height="9" alt="View the latest post" title="View the latest post" /></a>
					</p>
				</td>
			</tr>

		
				<tr>
					<td class="row3" colspan="6"><b class="gensmall">Topics</b></td>
				</tr>
			

			<tr>
				<td class="row1" width="25" align="center"><img src="./styles/subclone/imageset/sticky_read.gif" width="34" height="22" alt="No unread posts" title="No unread posts" /></td>
				
				<td class="row1" onmouseover="this.style.backgroundColor='#000000'; this.style.cursor='hand';" onmouseout="this.style.backgroundColor=&quot;&quot;" onclick="window.location.href='./viewtopic.php?f=11&amp;t=66086&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6'" style="cursor: pointer; ">
					
					 <a title="Posted: Wed May 05, 2010 10:55 pm" href="./viewtopic.php?f=11&amp;t=66086&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6" class="sml bold">Black Metal Help Thread</a>
					
						<p class="gensmall"> [ <img src="./styles/subclone/imageset/icon_post_target.gif" width="12" height="9" alt="Go to page" title="Go to page" /> <a href="./viewtopic.php?f=11&amp;t=66086&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6">1</a><span class="page-dots"> ... </span><a href="./viewtopic.php?f=11&amp;t=66086&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6&amp;start=4720">119</a><span class="page-sep">, </span><a href="./viewtopic.php?f=11&amp;t=66086&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6&amp;start=4760">120</a><span class="page-sep">, </span><a href="./viewtopic.php?f=11&amp;t=66086&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6&amp;start=4800">121</a> ] </p>
					
				</td>
				<td class="row1" width="130" align="center"><p class="topicauthor"><a href="./memberlist.php?mode=viewprofile&amp;u=95666&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6">Snowgrave</a></p></td>
				<td class="row1" width="50" align="center"><p class="topicdetails">4818</p></td>
				<td class="row1" width="50" align="center"><p class="topicdetails">286763</p></td>
				<td class="row1" width="140" align="center">
					<p class="topicdetails" style="white-space: nowrap;">Thu Jun 26, 2014 6:40 am</p>
					<p class="topicdetails" style="white-space: nowrap;"><a href="./memberlist.php?mode=viewprofile&amp;u=41383&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6">Nahsil</a>
						<a href="./viewtopic.php?f=11&amp;t=66086&amp;p=2425293&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6#p2425293"><img src="./styles/subclone/imageset/icon_topic_latest.gif" width="18" height="9" alt="View the latest post" title="View the latest post" /></a>
					</p>
				</td>
			</tr>

		

			<tr>
				<td class="row1" width="25" align="center"><img src="./styles/subclone/imageset/sticky_read.gif" width="34" height="22" alt="No unread posts" title="No unread posts" /></td>
				
				<td class="row1" onmouseover="this.style.backgroundColor='#000000'; this.style.cursor='hand';" onmouseout="this.style.backgroundColor=&quot;&quot;" onclick="window.location.href='./viewtopic.php?f=11&amp;t=38278&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6'" style="cursor: pointer; ">
					
					 <a title="Posted: Sat May 17, 2008 3:22 pm" href="./viewtopic.php?f=11&amp;t=38278&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6" class="sml bold">Death Metal Help Thread</a>
					
						<p class="gensmall"> [ <img src="./styles/subclone/imageset/icon_post_target.gif" width="12" height="9" alt="Go to page" title="Go to page" /> <a href="./viewtopic.php?f=11&amp;t=38278&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6">1</a><span class="page-dots"> ... </span><a href="./viewtopic.php?f=11&amp;t=38278&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6&amp;start=8520">214</a><span class="page-sep">, </span><a href="./viewtopic.php?f=11&amp;t=38278&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6&amp;start=8560">215</a><span class="page-sep">, </span><a href="./viewtopic.php?f=11&amp;t=38278&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6&amp;start=8600">216</a> ] </p>
					
				</td>
				<td class="row1" width="130" align="center"><p class="topicauthor"><a href="./memberlist.php?mode=viewprofile&amp;u=90909&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6">Kruel</a></p></td>
				<td class="row1" width="50" align="center"><p class="topicdetails">8615</p></td>
				<td class="row1" width="50" align="center"><p class="topicdetails">506227</p></td>
				<td class="row1" width="140" align="center">
					<p class="topicdetails" style="white-space: nowrap;">Thu Jun 26, 2014 6:39 am</p>
					<p class="topicdetails" style="white-space: nowrap;"><a href="./memberlist.php?mode=viewprofile&amp;u=41383&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6">Nahsil</a>
						<a href="./viewtopic.php?f=11&amp;t=38278&amp;p=2425291&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6#p2425291"><img src="./styles/subclone/imageset/icon_topic_latest.gif" width="18" height="9" alt="View the latest post" title="View the latest post" /></a>
					</p>
				</td>
			</tr>

		

			<tr>
				<td class="row1" width="25" align="center"><img src="./styles/subclone/imageset/sticky_read.gif" width="34" height="22" alt="No unread posts" title="No unread posts" /></td>
				
				<td class="row1" onmouseover="this.style.backgroundColor='#000000'; this.style.cursor='hand';" onmouseout="this.style.backgroundColor=&quot;&quot;" onclick="window.location.href='./viewtopic.php?f=11&amp;t=38277&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6'" style="cursor: pointer; ">
					
					 <a title="Posted: Sat May 17, 2008 2:38 pm" href="./viewtopic.php?f=11&amp;t=38277&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6" class="sml bold">Heavy/Power/Speed Metal Help Thread</a>
					
						<p class="gensmall"> [ <img src="./styles/subclone/imageset/icon_post_target.gif" width="12" height="9" alt="Go to page" title="Go to page" /> <a href="./viewtopic.php?f=11&amp;t=38277&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6">1</a><span class="page-dots"> ... </span><a href="./viewtopic.php?f=11&amp;t=38277&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6&amp;start=17640">442</a><span class="page-sep">, </span><a href="./viewtopic.php?f=11&amp;t=38277&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6&amp;start=17680">443</a><span class="page-sep">, </span><a href="./viewtopic.php?f=11&amp;t=38277&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6&amp;start=17720">444</a> ] </p>
					
				</td>
				<td class="row1" width="130" align="center"><p class="topicauthor"><a href="./memberlist.php?mode=viewprofile&amp;u=65988&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6">Empyreal</a></p></td>
				<td class="row1" width="50" align="center"><p class="topicdetails">17728</p></td>
				<td class="row1" width="50" align="center"><p class="topicdetails">820689</p></td>
				<td class="row1" width="140" align="center">
					<p class="topicdetails" style="white-space: nowrap;">Thu Jun 26, 2014 5:54 am</p>
					<p class="topicdetails" style="white-space: nowrap;"><a href="./memberlist.php?mode=viewprofile&amp;u=41383&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6">Nahsil</a>
						<a href="./viewtopic.php?f=11&amp;t=38277&amp;p=2425285&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6#p2425285"><img src="./styles/subclone/imageset/icon_topic_latest.gif" width="18" height="9" alt="View the latest post" title="View the latest post" /></a>
					</p>
				</td>
			</tr>

		

			<tr>
				<td class="row1" width="25" align="center"><img src="./styles/subclone/imageset/sticky_read.gif" width="34" height="22" alt="No unread posts" title="No unread posts" /></td>
				
				<td class="row1" onmouseover="this.style.backgroundColor='#000000'; this.style.cursor='hand';" onmouseout="this.style.backgroundColor=&quot;&quot;" onclick="window.location.href='./viewtopic.php?f=11&amp;t=38296&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6'" style="cursor: pointer; ">
					
					 <a title="Posted: Sun May 18, 2008 5:04 am" href="./viewtopic.php?f=11&amp;t=38296&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6" class="sml bold">Doom/Stoner/Sludge Metal Help Thread</a>
					
						<p class="gensmall"> [ <img src="./styles/subclone/imageset/icon_post_target.gif" width="12" height="9" alt="Go to page" title="Go to page" /> <a href="./viewtopic.php?f=11&amp;t=38296&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6">1</a><span class="page-dots"> ... </span><a href="./viewtopic.php?f=11&amp;t=38296&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6&amp;start=3840">97</a><span class="page-sep">, </span><a href="./viewtopic.php?f=11&amp;t=38296&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6&amp;start=3880">98</a><span class="page-sep">, </span><a href="./viewtopic.php?f=11&amp;t=38296&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6&amp;start=3920">99</a> ] </p>
					
				</td>
				<td class="row1" width="130" align="center"><p class="topicauthor"><a href="./memberlist.php?mode=viewprofile&amp;u=87769&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6">Weerwolf</a></p></td>
				<td class="row1" width="50" align="center"><p class="topicdetails">3928</p></td>
				<td class="row1" width="50" align="center"><p class="topicdetails">277831</p></td>
				<td class="row1" width="140" align="center">
					<p class="topicdetails" style="white-space: nowrap;">Wed Jun 25, 2014 11:51 am</p>
					<p class="topicdetails" style="white-space: nowrap;"><a href="./memberlist.php?mode=viewprofile&amp;u=61606&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6">androdion</a>
						<a href="./viewtopic.php?f=11&amp;t=38296&amp;p=2424997&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6#p2424997"><img src="./styles/subclone/imageset/icon_topic_latest.gif" width="18" height="9" alt="View the latest post" title="View the latest post" /></a>
					</p>
				</td>
			</tr>

		

			<tr>
				<td class="row1" width="25" align="center"><img src="./styles/subclone/imageset/sticky_read.gif" width="34" height="22" alt="No unread posts" title="No unread posts" /></td>
				
				<td class="row1" onmouseover="this.style.backgroundColor='#000000'; this.style.cursor='hand';" onmouseout="this.style.backgroundColor=&quot;&quot;" onclick="window.location.href='./viewtopic.php?f=11&amp;t=89944&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6'" style="cursor: pointer; ">
					
					 <a title="Posted: Tue Apr 24, 2012 1:59 am" href="./viewtopic.php?f=11&amp;t=89944&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6" class="sml bold">General Electronic, Drone, Shoegaze, etc...Help Thread</a>
					
						<p class="gensmall"> [ <img src="./styles/subclone/imageset/icon_post_target.gif" width="12" height="9" alt="Go to page" title="Go to page" /> <a href="./viewtopic.php?f=11&amp;t=89944&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6">1</a><span class="page-dots"> ... </span><a href="./viewtopic.php?f=11&amp;t=89944&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6&amp;start=400">11</a><span class="page-sep">, </span><a href="./viewtopic.php?f=11&amp;t=89944&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6&amp;start=440">12</a><span class="page-sep">, </span><a href="./viewtopic.php?f=11&amp;t=89944&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6&amp;start=480">13</a> ] </p>
					
				</td>
				<td class="row1" width="130" align="center"><p class="topicauthor"><a href="./memberlist.php?mode=viewprofile&amp;u=109063&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6" style="color: #AA0000;" class="username-coloured">Metantoine</a></p></td>
				<td class="row1" width="50" align="center"><p class="topicdetails">483</p></td>
				<td class="row1" width="50" align="center"><p class="topicdetails">47296</p></td>
				<td class="row1" width="140" align="center">
					<p class="topicdetails" style="white-space: nowrap;">Wed Jun 25, 2014 7:12 am</p>
					<p class="topicdetails" style="white-space: nowrap;"><a href="./memberlist.php?mode=viewprofile&amp;u=75328&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6">balbulus</a>
						<a href="./viewtopic.php?f=11&amp;t=89944&amp;p=2424922&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6#p2424922"><img src="./styles/subclone/imageset/icon_topic_latest.gif" width="18" height="9" alt="View the latest post" title="View the latest post" /></a>
					</p>
				</td>
			</tr>

		

			<tr>
				<td class="row1" width="25" align="center"><img src="./styles/subclone/imageset/sticky_read.gif" width="34" height="22" alt="No unread posts" title="No unread posts" /></td>
				
				<td class="row1" onmouseover="this.style.backgroundColor='#000000'; this.style.cursor='hand';" onmouseout="this.style.backgroundColor=&quot;&quot;" onclick="window.location.href='./viewtopic.php?f=11&amp;t=48969&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6'" style="cursor: pointer; ">
					
					 <a title="Posted: Sun Mar 29, 2009 11:41 am" href="./viewtopic.php?f=11&amp;t=48969&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6" class="sml bold">The  Grindcore Help Thread</a>
					
						<p class="gensmall"> [ <img src="./styles/subclone/imageset/icon_post_target.gif" width="12" height="9" alt="Go to page" title="Go to page" /> <a href="./viewtopic.php?f=11&amp;t=48969&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6">1</a><span class="page-dots"> ... </span><a href="./viewtopic.php?f=11&amp;t=48969&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6&amp;start=3320">84</a><span class="page-sep">, </span><a href="./viewtopic.php?f=11&amp;t=48969&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6&amp;start=3360">85</a><span class="page-sep">, </span><a href="./viewtopic.php?f=11&amp;t=48969&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6&amp;start=3400">86</a> ] </p>
					
				</td>
				<td class="row1" width="130" align="center"><p class="topicauthor"><a href="./memberlist.php?mode=viewprofile&amp;u=125092&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6">Gravemarker</a></p></td>
				<td class="row1" width="50" align="center"><p class="topicdetails">3420</p></td>
				<td class="row1" width="50" align="center"><p class="topicdetails">190938</p></td>
				<td class="row1" width="140" align="center">
					<p class="topicdetails" style="white-space: nowrap;">Tue Jun 24, 2014 10:41 am</p>
					<p class="topicdetails" style="white-space: nowrap;"><a href="./memberlist.php?mode=viewprofile&amp;u=17958&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6">Dragunov</a>
						<a href="./viewtopic.php?f=11&amp;t=48969&amp;p=2424618&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6#p2424618"><img src="./styles/subclone/imageset/icon_topic_latest.gif" width="18" height="9" alt="View the latest post" title="View the latest post" /></a>
					</p>
				</td>
			</tr>

		

			<tr>
				<td class="row1" width="25" align="center"><img src="./styles/subclone/imageset/sticky_read.gif" width="34" height="22" alt="No unread posts" title="No unread posts" /></td>
				
				<td class="row1" onmouseover="this.style.backgroundColor='#000000'; this.style.cursor='hand';" onmouseout="this.style.backgroundColor=&quot;&quot;" onclick="window.location.href='./viewtopic.php?f=11&amp;t=70471&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6'" style="cursor: pointer; ">
					
					 <a title="Posted: Sun Aug 22, 2010 7:21 pm" href="./viewtopic.php?f=11&amp;t=70471&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6" class="sml bold">Punk/Hardcore/Crust/Post-Hardcore help thread</a>
					
						<p class="gensmall"> [ <img src="./styles/subclone/imageset/icon_post_target.gif" width="12" height="9" alt="Go to page" title="Go to page" /> <a href="./viewtopic.php?f=11&amp;t=70471&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6">1</a><span class="page-dots"> ... </span><a href="./viewtopic.php?f=11&amp;t=70471&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6&amp;start=720">19</a><span class="page-sep">, </span><a href="./viewtopic.php?f=11&amp;t=70471&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6&amp;start=760">20</a><span class="page-sep">, </span><a href="./viewtopic.php?f=11&amp;t=70471&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6&amp;start=800">21</a> ] </p>
					
				</td>
				<td class="row1" width="130" align="center"><p class="topicauthor"><a href="./memberlist.php?mode=viewprofile&amp;u=105112&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6">MortalScum</a></p></td>
				<td class="row1" width="50" align="center"><p class="topicdetails">801</p></td>
				<td class="row1" width="50" align="center"><p class="topicdetails">58445</p></td>
				<td class="row1" width="140" align="center">
					<p class="topicdetails" style="white-space: nowrap;">Tue Jun 24, 2014 9:27 am</p>
					<p class="topicdetails" style="white-space: nowrap;"><a href="./memberlist.php?mode=viewprofile&amp;u=117816&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6">Crypt666</a>
						<a href="./viewtopic.php?f=11&amp;t=70471&amp;p=2424599&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6#p2424599"><img src="./styles/subclone/imageset/icon_topic_latest.gif" width="18" height="9" alt="View the latest post" title="View the latest post" /></a>
					</p>
				</td>
			</tr>

		

			<tr>
				<td class="row1" width="25" align="center"><img src="./styles/subclone/imageset/sticky_read.gif" width="34" height="22" alt="No unread posts" title="No unread posts" /></td>
				
				<td class="row1" onmouseover="this.style.backgroundColor='#000000'; this.style.cursor='hand';" onmouseout="this.style.backgroundColor=&quot;&quot;" onclick="window.location.href='./viewtopic.php?f=11&amp;t=42437&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6'" style="cursor: pointer; ">
					
					 <a title="Posted: Mon Sep 15, 2008 12:08 pm" href="./viewtopic.php?f=11&amp;t=42437&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6" class="sml bold">Metalcore/Deathcore help thread</a>
					
						<p class="gensmall"> [ <img src="./styles/subclone/imageset/icon_post_target.gif" width="12" height="9" alt="Go to page" title="Go to page" /> <a href="./viewtopic.php?f=11&amp;t=42437&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6">1</a><span class="page-dots"> ... </span><a href="./viewtopic.php?f=11&amp;t=42437&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6&amp;start=1200">31</a><span class="page-sep">, </span><a href="./viewtopic.php?f=11&amp;t=42437&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6&amp;start=1240">32</a><span class="page-sep">, </span><a href="./viewtopic.php?f=11&amp;t=42437&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6&amp;start=1280">33</a> ] </p>
					
				</td>
				<td class="row1" width="130" align="center"><p class="topicauthor"><a href="./memberlist.php?mode=viewprofile&amp;u=114894&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6">OnlyToolsandCorpses</a></p></td>
				<td class="row1" width="50" align="center"><p class="topicdetails">1317</p></td>
				<td class="row1" width="50" align="center"><p class="topicdetails">133500</p></td>
				<td class="row1" width="140" align="center">
					<p class="topicdetails" style="white-space: nowrap;">Tue Jun 24, 2014 5:51 am</p>
					<p class="topicdetails" style="white-space: nowrap;"><a href="./memberlist.php?mode=viewprofile&amp;u=239214&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6">NbleSavage</a>
						<a href="./viewtopic.php?f=11&amp;t=42437&amp;p=2424567&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6#p2424567"><img src="./styles/subclone/imageset/icon_topic_latest.gif" width="18" height="9" alt="View the latest post" title="View the latest post" /></a>
					</p>
				</td>
			</tr>

		

			<tr>
				<td class="row1" width="25" align="center"><img src="./styles/subclone/imageset/sticky_read.gif" width="34" height="22" alt="No unread posts" title="No unread posts" /></td>
				
				<td class="row1" onmouseover="this.style.backgroundColor='#000000'; this.style.cursor='hand';" onmouseout="this.style.backgroundColor=&quot;&quot;" onclick="window.location.href='./viewtopic.php?f=11&amp;t=38267&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6'" style="cursor: pointer; ">
					
					 <a title="Posted: Sat May 17, 2008 4:56 am" href="./viewtopic.php?f=11&amp;t=38267&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6" class="sml bold">Thrash Metal Help Thread</a>
					
						<p class="gensmall"> [ <img src="./styles/subclone/imageset/icon_post_target.gif" width="12" height="9" alt="Go to page" title="Go to page" /> <a href="./viewtopic.php?f=11&amp;t=38267&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6">1</a><span class="page-dots"> ... </span><a href="./viewtopic.php?f=11&amp;t=38267&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6&amp;start=4160">105</a><span class="page-sep">, </span><a href="./viewtopic.php?f=11&amp;t=38267&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6&amp;start=4200">106</a><span class="page-sep">, </span><a href="./viewtopic.php?f=11&amp;t=38267&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6&amp;start=4240">107</a> ] </p>
					
				</td>
				<td class="row1" width="130" align="center"><p class="topicauthor"><a href="./memberlist.php?mode=viewprofile&amp;u=91585&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6">DGYDP</a></p></td>
				<td class="row1" width="50" align="center"><p class="topicdetails">4253</p></td>
				<td class="row1" width="50" align="center"><p class="topicdetails">276462</p></td>
				<td class="row1" width="140" align="center">
					<p class="topicdetails" style="white-space: nowrap;">Sat Jun 21, 2014 6:48 pm</p>
					<p class="topicdetails" style="white-space: nowrap;"><a href="./memberlist.php?mode=viewprofile&amp;u=63829&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6">metroplex</a>
						<a href="./viewtopic.php?f=11&amp;t=38267&amp;p=2423809&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6#p2423809"><img src="./styles/subclone/imageset/icon_topic_latest.gif" width="18" height="9" alt="View the latest post" title="View the latest post" /></a>
					</p>
				</td>
			</tr>

		

			<tr>
				<td class="row1" width="25" align="center"><img src="./styles/subclone/imageset/sticky_read.gif" width="34" height="22" alt="No unread posts" title="No unread posts" /></td>
				
				<td class="row1" onmouseover="this.style.backgroundColor='#000000'; this.style.cursor='hand';" onmouseout="this.style.backgroundColor=&quot;&quot;" onclick="window.location.href='./viewtopic.php?f=11&amp;t=92624&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6'" style="cursor: pointer; ">
					
					 <a title="Posted: Wed Aug 15, 2012 2:20 pm" href="./viewtopic.php?f=11&amp;t=92624&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6" class="sml bold">Death/Doom &amp; Funeral Doom help thread</a>
					
						<p class="gensmall"> [ <img src="./styles/subclone/imageset/icon_post_target.gif" width="12" height="9" alt="Go to page" title="Go to page" /> <a href="./viewtopic.php?f=11&amp;t=92624&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6">1</a><span class="page-dots"> ... </span><a href="./viewtopic.php?f=11&amp;t=92624&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6&amp;start=440">12</a><span class="page-sep">, </span><a href="./viewtopic.php?f=11&amp;t=92624&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6&amp;start=480">13</a><span class="page-sep">, </span><a href="./viewtopic.php?f=11&amp;t=92624&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6&amp;start=520">14</a> ] </p>
					
				</td>
				<td class="row1" width="130" align="center"><p class="topicauthor"><a href="./memberlist.php?mode=viewprofile&amp;u=12143&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6">droneriot</a></p></td>
				<td class="row1" width="50" align="center"><p class="topicdetails">528</p></td>
				<td class="row1" width="50" align="center"><p class="topicdetails">42561</p></td>
				<td class="row1" width="140" align="center">
					<p class="topicdetails" style="white-space: nowrap;">Thu Jun 19, 2014 4:28 am</p>
					<p class="topicdetails" style="white-space: nowrap;"><a href="./memberlist.php?mode=viewprofile&amp;u=247281&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6">Jimmy Calhoun</a>
						<a href="./viewtopic.php?f=11&amp;t=92624&amp;p=2423059&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6#p2423059"><img src="./styles/subclone/imageset/icon_topic_latest.gif" width="18" height="9" alt="View the latest post" title="View the latest post" /></a>
					</p>
				</td>
			</tr>

		

			<tr>
				<td class="row1" width="25" align="center"><img src="./styles/subclone/imageset/sticky_read.gif" width="34" height="22" alt="No unread posts" title="No unread posts" /></td>
				
				<td class="row1" onmouseover="this.style.backgroundColor='#000000'; this.style.cursor='hand';" onmouseout="this.style.backgroundColor=&quot;&quot;" onclick="window.location.href='./viewtopic.php?f=11&amp;t=38299&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6'" style="cursor: pointer; ">
					
					 <a title="Posted: Sun May 18, 2008 6:34 am" href="./viewtopic.php?f=11&amp;t=38299&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6" class="sml bold">Folk/Viking/Pagan Metal Help Thread</a>
					
						<p class="gensmall"> [ <img src="./styles/subclone/imageset/icon_post_target.gif" width="12" height="9" alt="Go to page" title="Go to page" /> <a href="./viewtopic.php?f=11&amp;t=38299&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6">1</a><span class="page-dots"> ... </span><a href="./viewtopic.php?f=11&amp;t=38299&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6&amp;start=1320">34</a><span class="page-sep">, </span><a href="./viewtopic.php?f=11&amp;t=38299&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6&amp;start=1360">35</a><span class="page-sep">, </span><a href="./viewtopic.php?f=11&amp;t=38299&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6&amp;start=1400">36</a> ] </p>
					
				</td>
				<td class="row1" width="130" align="center"><p class="topicauthor"><a href="./memberlist.php?mode=viewprofile&amp;u=94254&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6">Crepuscular</a></p></td>
				<td class="row1" width="50" align="center"><p class="topicdetails">1412</p></td>
				<td class="row1" width="50" align="center"><p class="topicdetails">130559</p></td>
				<td class="row1" width="140" align="center">
					<p class="topicdetails" style="white-space: nowrap;">Wed Jun 18, 2014 3:22 am</p>
					<p class="topicdetails" style="white-space: nowrap;"><a href="./memberlist.php?mode=viewprofile&amp;u=159098&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6">Erotetic</a>
						<a href="./viewtopic.php?f=11&amp;t=38299&amp;p=2422694&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6#p2422694"><img src="./styles/subclone/imageset/icon_topic_latest.gif" width="18" height="9" alt="View the latest post" title="View the latest post" /></a>
					</p>
				</td>
			</tr>

		

			<tr>
				<td class="row1" width="25" align="center"><img src="./styles/subclone/imageset/sticky_read.gif" width="34" height="22" alt="No unread posts" title="No unread posts" /></td>
				
				<td class="row1" onmouseover="this.style.backgroundColor='#000000'; this.style.cursor='hand';" onmouseout="this.style.backgroundColor=&quot;&quot;" onclick="window.location.href='./viewtopic.php?f=11&amp;t=52131&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6'" style="cursor: pointer; ">
					
					 <a title="Posted: Wed Jun 10, 2009 4:23 pm" href="./viewtopic.php?f=11&amp;t=52131&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6" class="sml bold">Thanks to whoever recommended...</a>
					
						<p class="gensmall"> [ <img src="./styles/subclone/imageset/icon_post_target.gif" width="12" height="9" alt="Go to page" title="Go to page" /> <a href="./viewtopic.php?f=11&amp;t=52131&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6">1</a><span class="page-dots"> ... </span><a href="./viewtopic.php?f=11&amp;t=52131&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6&amp;start=160">5</a><span class="page-sep">, </span><a href="./viewtopic.php?f=11&amp;t=52131&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6&amp;start=200">6</a><span class="page-sep">, </span><a href="./viewtopic.php?f=11&amp;t=52131&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6&amp;start=240">7</a> ] </p>
					
				</td>
				<td class="row1" width="130" align="center"><p class="topicauthor"><a href="./memberlist.php?mode=viewprofile&amp;u=133087&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6">brightfield</a></p></td>
				<td class="row1" width="50" align="center"><p class="topicdetails">275</p></td>
				<td class="row1" width="50" align="center"><p class="topicdetails">64544</p></td>
				<td class="row1" width="140" align="center">
					<p class="topicdetails" style="white-space: nowrap;">Fri Jun 13, 2014 10:41 pm</p>
					<p class="topicdetails" style="white-space: nowrap;"><a href="./memberlist.php?mode=viewprofile&amp;u=165830&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6">Flugeldufel</a>
						<a href="./viewtopic.php?f=11&amp;t=52131&amp;p=2421415&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6#p2421415"><img src="./styles/subclone/imageset/icon_topic_latest.gif" width="18" height="9" alt="View the latest post" title="View the latest post" /></a>
					</p>
				</td>
			</tr>

		

			<tr>
				<td class="row1" width="25" align="center"><img src="./styles/subclone/imageset/sticky_read.gif" width="34" height="22" alt="No unread posts" title="No unread posts" /></td>
				
				<td class="row1" onmouseover="this.style.backgroundColor='#000000'; this.style.cursor='hand';" onmouseout="this.style.backgroundColor=&quot;&quot;" onclick="window.location.href='./viewtopic.php?f=11&amp;t=39353&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6'" style="cursor: pointer; ">
					
					 <a title="Posted: Wed Jun 18, 2008 10:48 am" href="./viewtopic.php?f=11&amp;t=39353&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6" class="sml bold">Progressive Metal and Progressive Rock Help Thread</a>
					
						<p class="gensmall"> [ <img src="./styles/subclone/imageset/icon_post_target.gif" width="12" height="9" alt="Go to page" title="Go to page" /> <a href="./viewtopic.php?f=11&amp;t=39353&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6">1</a><span class="page-dots"> ... </span><a href="./viewtopic.php?f=11&amp;t=39353&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6&amp;start=560">15</a><span class="page-sep">, </span><a href="./viewtopic.php?f=11&amp;t=39353&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6&amp;start=600">16</a><span class="page-sep">, </span><a href="./viewtopic.php?f=11&amp;t=39353&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6&amp;start=640">17</a> ] </p>
					
				</td>
				<td class="row1" width="130" align="center"><p class="topicauthor"><a href="./memberlist.php?mode=viewprofile&amp;u=78710&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6">levasty</a></p></td>
				<td class="row1" width="50" align="center"><p class="topicdetails">641</p></td>
				<td class="row1" width="50" align="center"><p class="topicdetails">76910</p></td>
				<td class="row1" width="140" align="center">
					<p class="topicdetails" style="white-space: nowrap;">Wed Jun 11, 2014 3:19 pm</p>
					<p class="topicdetails" style="white-space: nowrap;"><a href="./memberlist.php?mode=viewprofile&amp;u=281&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6">Opus</a>
						<a href="./viewtopic.php?f=11&amp;t=39353&amp;p=2420588&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6#p2420588"><img src="./styles/subclone/imageset/icon_topic_latest.gif" width="18" height="9" alt="View the latest post" title="View the latest post" /></a>
					</p>
				</td>
			</tr>

		

			<tr>
				<td class="row1" width="25" align="center"><img src="./styles/subclone/imageset/sticky_read.gif" width="34" height="22" alt="No unread posts" title="No unread posts" /></td>
				
				<td class="row1" onmouseover="this.style.backgroundColor='#000000'; this.style.cursor='hand';" onmouseout="this.style.backgroundColor=&quot;&quot;" onclick="window.location.href='./viewtopic.php?f=11&amp;t=92867&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6'" style="cursor: pointer; ">
					
					 <a title="Posted: Thu Aug 16, 2012 7:59 am" href="./viewtopic.php?f=11&amp;t=92867&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6" class="sml bold">Neofolk &amp; Martial help thread</a>
					
						<p class="gensmall"> [ <img src="./styles/subclone/imageset/icon_post_target.gif" width="12" height="9" alt="Go to page" title="Go to page" /> <a href="./viewtopic.php?f=11&amp;t=92867&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6">1</a><span class="page-sep">, </span><a href="./viewtopic.php?f=11&amp;t=92867&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6&amp;start=40">2</a><span class="page-sep">, </span><a href="./viewtopic.php?f=11&amp;t=92867&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6&amp;start=80">3</a><span class="page-sep">, </span><a href="./viewtopic.php?f=11&amp;t=92867&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6&amp;start=120">4</a> ] </p>
					
				</td>
				<td class="row1" width="130" align="center"><p class="topicauthor"><a href="./memberlist.php?mode=viewprofile&amp;u=156746&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6">sortalikeadream</a></p></td>
				<td class="row1" width="50" align="center"><p class="topicdetails">159</p></td>
				<td class="row1" width="50" align="center"><p class="topicdetails">17267</p></td>
				<td class="row1" width="140" align="center">
					<p class="topicdetails" style="white-space: nowrap;">Tue Jun 03, 2014 2:55 pm</p>
					<p class="topicdetails" style="white-space: nowrap;"><a href="./memberlist.php?mode=viewprofile&amp;u=50760&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6">PhilosophicalFrog</a>
						<a href="./viewtopic.php?f=11&amp;t=92867&amp;p=2417551&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6#p2417551"><img src="./styles/subclone/imageset/icon_topic_latest.gif" width="18" height="9" alt="View the latest post" title="View the latest post" /></a>
					</p>
				</td>
			</tr>

		

			<tr>
				<td class="row1" width="25" align="center"><img src="./styles/subclone/imageset/sticky_read.gif" width="34" height="22" alt="No unread posts" title="No unread posts" /></td>
				
				<td class="row1" onmouseover="this.style.backgroundColor='#000000'; this.style.cursor='hand';" onmouseout="this.style.backgroundColor=&quot;&quot;" onclick="window.location.href='./viewtopic.php?f=11&amp;t=56924&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6'" style="cursor: pointer; ">
					
					 <a title="Posted: Sat Sep 26, 2009 2:35 am" href="./viewtopic.php?f=11&amp;t=56924&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6" class="sml bold">Industrial Metal Help Thread</a>
					
						<p class="gensmall"> [ <img src="./styles/subclone/imageset/icon_post_target.gif" width="12" height="9" alt="Go to page" title="Go to page" /> <a href="./viewtopic.php?f=11&amp;t=56924&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6">1</a><span class="page-sep">, </span><a href="./viewtopic.php?f=11&amp;t=56924&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6&amp;start=40">2</a> ] </p>
					
				</td>
				<td class="row1" width="130" align="center"><p class="topicauthor"><a href="./memberlist.php?mode=viewprofile&amp;u=107362&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6">Crick</a></p></td>
				<td class="row1" width="50" align="center"><p class="topicdetails">73</p></td>
				<td class="row1" width="50" align="center"><p class="topicdetails">9161</p></td>
				<td class="row1" width="140" align="center">
					<p class="topicdetails" style="white-space: nowrap;">Sun May 18, 2014 3:22 pm</p>
					<p class="topicdetails" style="white-space: nowrap;"><a href="./memberlist.php?mode=viewprofile&amp;u=239249&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6">pantopom</a>
						<a href="./viewtopic.php?f=11&amp;t=56924&amp;p=2411993&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6#p2411993"><img src="./styles/subclone/imageset/icon_topic_latest.gif" width="18" height="9" alt="View the latest post" title="View the latest post" /></a>
					</p>
				</td>
			</tr>

		

			<tr>
				<td class="row1" width="25" align="center"><img src="./styles/subclone/imageset/topic_read.gif" width="34" height="22" alt="No unread posts" title="No unread posts" /></td>
				
				<td class="row1" onmouseover="this.style.backgroundColor='#000000'; this.style.cursor='hand';" onmouseout="this.style.backgroundColor=&quot;&quot;" onclick="window.location.href='./viewtopic.php?f=11&amp;t=105762&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6'" style="cursor: pointer; ">
					
					 <a title="Posted: Tue Jun 24, 2014 11:08 pm" href="./viewtopic.php?f=11&amp;t=105762&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6" class="sml bold">Old school, non-metal songs about hellfire and/or damnation</a>
					
				</td>
				<td class="row1" width="130" align="center"><p class="topicauthor"><a href="./memberlist.php?mode=viewprofile&amp;u=202867&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6">MalignantTyrant</a></p></td>
				<td class="row1" width="50" align="center"><p class="topicdetails">3</p></td>
				<td class="row1" width="50" align="center"><p class="topicdetails">120</p></td>
				<td class="row1" width="140" align="center">
					<p class="topicdetails" style="white-space: nowrap;">Wed Jun 25, 2014 1:12 pm</p>
					<p class="topicdetails" style="white-space: nowrap;"><a href="./memberlist.php?mode=viewprofile&amp;u=75328&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6">balbulus</a>
						<a href="./viewtopic.php?f=11&amp;t=105762&amp;p=2425026&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6#p2425026"><img src="./styles/subclone/imageset/icon_topic_latest.gif" width="18" height="9" alt="View the latest post" title="View the latest post" /></a>
					</p>
				</td>
			</tr>

		

			<tr>
				<td class="row1" width="25" align="center"><img src="./styles/subclone/imageset/topic_read.gif" width="34" height="22" alt="No unread posts" title="No unread posts" /></td>
				
				<td class="row1" onmouseover="this.style.backgroundColor='#000000'; this.style.cursor='hand';" onmouseout="this.style.backgroundColor=&quot;&quot;" onclick="window.location.href='./viewtopic.php?f=11&amp;t=105729&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6'" style="cursor: pointer; ">
					
					 <a title="Posted: Sun Jun 22, 2014 5:40 pm" href="./viewtopic.php?f=11&amp;t=105729&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6" class="sml bold">Dark, Electronic, Occult, Psychedelic, Western...Stuff?</a>
					
				</td>
				<td class="row1" width="130" align="center"><p class="topicauthor"><a href="./memberlist.php?mode=viewprofile&amp;u=257896&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6">SoloJoelo</a></p></td>
				<td class="row1" width="50" align="center"><p class="topicdetails">8</p></td>
				<td class="row1" width="50" align="center"><p class="topicdetails">204</p></td>
				<td class="row1" width="140" align="center">
					<p class="topicdetails" style="white-space: nowrap;">Wed Jun 25, 2014 12:34 pm</p>
					<p class="topicdetails" style="white-space: nowrap;"><a href="./memberlist.php?mode=viewprofile&amp;u=226543&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6">UnholyAnalDeathWorship</a>
						<a href="./viewtopic.php?f=11&amp;t=105729&amp;p=2425009&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6#p2425009"><img src="./styles/subclone/imageset/icon_topic_latest.gif" width="18" height="9" alt="View the latest post" title="View the latest post" /></a>
					</p>
				</td>
			</tr>

		

			<tr>
				<td class="row1" width="25" align="center"><img src="./styles/subclone/imageset/topic_read.gif" width="34" height="22" alt="No unread posts" title="No unread posts" /></td>
				
				<td class="row1" onmouseover="this.style.backgroundColor='#000000'; this.style.cursor='hand';" onmouseout="this.style.backgroundColor=&quot;&quot;" onclick="window.location.href='./viewtopic.php?f=11&amp;t=105700&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6'" style="cursor: pointer; ">
					
					 <a title="Posted: Fri Jun 20, 2014 11:49 pm" href="./viewtopic.php?f=11&amp;t=105700&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6" class="sml bold">Tempo changes</a>
					
				</td>
				<td class="row1" width="130" align="center"><p class="topicauthor"><a href="./memberlist.php?mode=viewprofile&amp;u=88887&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6">UtUmNo1</a></p></td>
				<td class="row1" width="50" align="center"><p class="topicdetails">6</p></td>
				<td class="row1" width="50" align="center"><p class="topicdetails">194</p></td>
				<td class="row1" width="140" align="center">
					<p class="topicdetails" style="white-space: nowrap;">Wed Jun 25, 2014 6:38 am</p>
					<p class="topicdetails" style="white-space: nowrap;"><a href="./memberlist.php?mode=viewprofile&amp;u=88887&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6">UtUmNo1</a>
						<a href="./viewtopic.php?f=11&amp;t=105700&amp;p=2424917&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6#p2424917"><img src="./styles/subclone/imageset/icon_topic_latest.gif" width="18" height="9" alt="View the latest post" title="View the latest post" /></a>
					</p>
				</td>
			</tr>

		

			<tr>
				<td class="row1" width="25" align="center"><img src="./styles/subclone/imageset/topic_read.gif" width="34" height="22" alt="No unread posts" title="No unread posts" /></td>
				
				<td class="row1" onmouseover="this.style.backgroundColor='#000000'; this.style.cursor='hand';" onmouseout="this.style.backgroundColor=&quot;&quot;" onclick="window.location.href='./viewtopic.php?f=11&amp;t=103585&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6'" style="cursor: pointer; ">
					
					 <a title="Posted: Sat Feb 08, 2014 1:51 am" href="./viewtopic.php?f=11&amp;t=103585&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6" class="sml bold">Metal with (Jazz-Influenced) Improvisation</a>
					
				</td>
				<td class="row1" width="130" align="center"><p class="topicauthor"><a href="./memberlist.php?mode=viewprofile&amp;u=141541&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6">CannibalKid</a></p></td>
				<td class="row1" width="50" align="center"><p class="topicdetails">11</p></td>
				<td class="row1" width="50" align="center"><p class="topicdetails">671</p></td>
				<td class="row1" width="140" align="center">
					<p class="topicdetails" style="white-space: nowrap;">Wed Jun 25, 2014 4:13 am</p>
					<p class="topicdetails" style="white-space: nowrap;"><a href="./memberlist.php?mode=viewprofile&amp;u=226543&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6">UnholyAnalDeathWorship</a>
						<a href="./viewtopic.php?f=11&amp;t=103585&amp;p=2424895&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6#p2424895"><img src="./styles/subclone/imageset/icon_topic_latest.gif" width="18" height="9" alt="View the latest post" title="View the latest post" /></a>
					</p>
				</td>
			</tr>

		

			<tr>
				<td class="row1" width="25" align="center"><img src="./styles/subclone/imageset/topic_read.gif" width="34" height="22" alt="No unread posts" title="No unread posts" /></td>
				
				<td class="row1" onmouseover="this.style.backgroundColor='#000000'; this.style.cursor='hand';" onmouseout="this.style.backgroundColor=&quot;&quot;" onclick="window.location.href='./viewtopic.php?f=11&amp;t=105595&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6'" style="cursor: pointer; ">
					
					 <a title="Posted: Thu Jun 12, 2014 3:43 pm" href="./viewtopic.php?f=11&amp;t=105595&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6" class="sml bold">Melodic death metal influenced by (old) In Flames</a>
					
				</td>
				<td class="row1" width="130" align="center"><p class="topicauthor"><a href="./memberlist.php?mode=viewprofile&amp;u=257109&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6">Dilbert</a></p></td>
				<td class="row1" width="50" align="center"><p class="topicdetails">5</p></td>
				<td class="row1" width="50" align="center"><p class="topicdetails">249</p></td>
				<td class="row1" width="140" align="center">
					<p class="topicdetails" style="white-space: nowrap;">Wed Jun 25, 2014 12:22 am</p>
					<p class="topicdetails" style="white-space: nowrap;"><a href="./memberlist.php?mode=viewprofile&amp;u=217698&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6">XcKyle93</a>
						<a href="./viewtopic.php?f=11&amp;t=105595&amp;p=2424845&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6#p2424845"><img src="./styles/subclone/imageset/icon_topic_latest.gif" width="18" height="9" alt="View the latest post" title="View the latest post" /></a>
					</p>
				</td>
			</tr>

		

			<tr>
				<td class="row1" width="25" align="center"><img src="./styles/subclone/imageset/topic_read_locked.gif" width="34" height="22" alt="This topic is locked, you cannot edit posts or make further replies." title="This topic is locked, you cannot edit posts or make further replies." /></td>
				
				<td class="row1" onmouseover="this.style.backgroundColor='#000000'; this.style.cursor='hand';" onmouseout="this.style.backgroundColor=&quot;&quot;" onclick="window.location.href='./viewtopic.php?f=11&amp;t=105759&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6'" style="cursor: pointer; ">
					
					 <a title="Posted: Tue Jun 24, 2014 5:40 pm" href="./viewtopic.php?f=11&amp;t=105759&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6" class="sml bold">Blackened thrash metal?</a>
					
				</td>
				<td class="row1" width="130" align="center"><p class="topicauthor"><a href="./memberlist.php?mode=viewprofile&amp;u=245796&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6">captaincrunchy</a></p></td>
				<td class="row1" width="50" align="center"><p class="topicdetails">1</p></td>
				<td class="row1" width="50" align="center"><p class="topicdetails">87</p></td>
				<td class="row1" width="140" align="center">
					<p class="topicdetails" style="white-space: nowrap;">Tue Jun 24, 2014 5:57 pm</p>
					<p class="topicdetails" style="white-space: nowrap;"><a href="./memberlist.php?mode=viewprofile&amp;u=63279&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6">STORMM</a>
						<a href="./viewtopic.php?f=11&amp;t=105759&amp;p=2424742&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6#p2424742"><img src="./styles/subclone/imageset/icon_topic_latest.gif" width="18" height="9" alt="View the latest post" title="View the latest post" /></a>
					</p>
				</td>
			</tr>

		

			<tr>
				<td class="row1" width="25" align="center"><img src="./styles/subclone/imageset/topic_read.gif" width="34" height="22" alt="No unread posts" title="No unread posts" /></td>
				
				<td class="row1" onmouseover="this.style.backgroundColor='#000000'; this.style.cursor='hand';" onmouseout="this.style.backgroundColor=&quot;&quot;" onclick="window.location.href='./viewtopic.php?f=11&amp;t=105663&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6'" style="cursor: pointer; ">
					
					 <a title="Posted: Tue Jun 17, 2014 11:26 pm" href="./viewtopic.php?f=11&amp;t=105663&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6" class="sml bold">The most &quot;traumatic&quot; black/dark/-doom metal album you know</a>
					
				</td>
				<td class="row1" width="130" align="center"><p class="topicauthor"><a href="./memberlist.php?mode=viewprofile&amp;u=254007&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6">Another Typical Metal Newbie</a></p></td>
				<td class="row1" width="50" align="center"><p class="topicdetails">13</p></td>
				<td class="row1" width="50" align="center"><p class="topicdetails">677</p></td>
				<td class="row1" width="140" align="center">
					<p class="topicdetails" style="white-space: nowrap;">Tue Jun 24, 2014 2:48 pm</p>
					<p class="topicdetails" style="white-space: nowrap;"><a href="./memberlist.php?mode=viewprofile&amp;u=251791&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6">doooooooooooom</a>
						<a href="./viewtopic.php?f=11&amp;t=105663&amp;p=2424692&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6#p2424692"><img src="./styles/subclone/imageset/icon_topic_latest.gif" width="18" height="9" alt="View the latest post" title="View the latest post" /></a>
					</p>
				</td>
			</tr>

		

			<tr>
				<td class="row1" width="25" align="center"><img src="./styles/subclone/imageset/topic_read.gif" width="34" height="22" alt="No unread posts" title="No unread posts" /></td>
				
				<td class="row1" onmouseover="this.style.backgroundColor='#000000'; this.style.cursor='hand';" onmouseout="this.style.backgroundColor=&quot;&quot;" onclick="window.location.href='./viewtopic.php?f=11&amp;t=105694&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6'" style="cursor: pointer; ">
					
					 <a title="Posted: Fri Jun 20, 2014 5:26 am" href="./viewtopic.php?f=11&amp;t=105694&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6" class="sml bold">&quot;PROGRESSIVE&quot; Metal</a>
					
				</td>
				<td class="row1" width="130" align="center"><p class="topicauthor"><a href="./memberlist.php?mode=viewprofile&amp;u=110006&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6">why</a></p></td>
				<td class="row1" width="50" align="center"><p class="topicdetails">2</p></td>
				<td class="row1" width="50" align="center"><p class="topicdetails">220</p></td>
				<td class="row1" width="140" align="center">
					<p class="topicdetails" style="white-space: nowrap;">Tue Jun 24, 2014 11:45 am</p>
					<p class="topicdetails" style="white-space: nowrap;"><a href="./memberlist.php?mode=viewprofile&amp;u=110006&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6">why</a>
						<a href="./viewtopic.php?f=11&amp;t=105694&amp;p=2424644&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6#p2424644"><img src="./styles/subclone/imageset/icon_topic_latest.gif" width="18" height="9" alt="View the latest post" title="View the latest post" /></a>
					</p>
				</td>
			</tr>

		

			<tr>
				<td class="row1" width="25" align="center"><img src="./styles/subclone/imageset/topic_read.gif" width="34" height="22" alt="No unread posts" title="No unread posts" /></td>
				
				<td class="row1" onmouseover="this.style.backgroundColor='#000000'; this.style.cursor='hand';" onmouseout="this.style.backgroundColor=&quot;&quot;" onclick="window.location.href='./viewtopic.php?f=11&amp;t=105455&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6'" style="cursor: pointer; ">
					
					 <a title="Posted: Wed Jun 04, 2014 1:31 am" href="./viewtopic.php?f=11&amp;t=105455&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6" class="sml bold">Black metal vocalists with insane high pitch vocals</a>
					
				</td>
				<td class="row1" width="130" align="center"><p class="topicauthor"><a href="./memberlist.php?mode=viewprofile&amp;u=97681&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6">CradleOfBurzum</a></p></td>
				<td class="row1" width="50" align="center"><p class="topicdetails">17</p></td>
				<td class="row1" width="50" align="center"><p class="topicdetails">556</p></td>
				<td class="row1" width="140" align="center">
					<p class="topicdetails" style="white-space: nowrap;">Mon Jun 23, 2014 3:34 am</p>
					<p class="topicdetails" style="white-space: nowrap;"><a href="./memberlist.php?mode=viewprofile&amp;u=231557&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6">Pichushkin</a>
						<a href="./viewtopic.php?f=11&amp;t=105455&amp;p=2424231&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6#p2424231"><img src="./styles/subclone/imageset/icon_topic_latest.gif" width="18" height="9" alt="View the latest post" title="View the latest post" /></a>
					</p>
				</td>
			</tr>

		

			<tr>
				<td class="row1" width="25" align="center"><img src="./styles/subclone/imageset/topic_read_locked.gif" width="34" height="22" alt="This topic is locked, you cannot edit posts or make further replies." title="This topic is locked, you cannot edit posts or make further replies." /></td>
				
				<td class="row1" onmouseover="this.style.backgroundColor='#000000'; this.style.cursor='hand';" onmouseout="this.style.backgroundColor=&quot;&quot;" onclick="window.location.href='./viewtopic.php?f=11&amp;t=105724&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6'" style="cursor: pointer; ">
					
					 <a title="Posted: Sun Jun 22, 2014 10:16 am" href="./viewtopic.php?f=11&amp;t=105724&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6" class="sml bold">Best obscure black metal song's ?</a>
					
				</td>
				<td class="row1" width="130" align="center"><p class="topicauthor"><a href="./memberlist.php?mode=viewprofile&amp;u=257634&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6">jarbinhas</a></p></td>
				<td class="row1" width="50" align="center"><p class="topicdetails">2</p></td>
				<td class="row1" width="50" align="center"><p class="topicdetails">180</p></td>
				<td class="row1" width="140" align="center">
					<p class="topicdetails" style="white-space: nowrap;">Sun Jun 22, 2014 11:28 pm</p>
					<p class="topicdetails" style="white-space: nowrap;"><a href="./memberlist.php?mode=viewprofile&amp;u=130970&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6" style="color: #AA0000;" class="username-coloured">iamntbatman</a>
						<a href="./viewtopic.php?f=11&amp;t=105724&amp;p=2424170&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6#p2424170"><img src="./styles/subclone/imageset/icon_topic_latest.gif" width="18" height="9" alt="View the latest post" title="View the latest post" /></a>
					</p>
				</td>
			</tr>

		

			<tr>
				<td class="row1" width="25" align="center"><img src="./styles/subclone/imageset/topic_read.gif" width="34" height="22" alt="No unread posts" title="No unread posts" /></td>
				
				<td class="row1" onmouseover="this.style.backgroundColor='#000000'; this.style.cursor='hand';" onmouseout="this.style.backgroundColor=&quot;&quot;" onclick="window.location.href='./viewtopic.php?f=11&amp;t=105590&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6'" style="cursor: pointer; ">
					
					 <a title="Posted: Thu Jun 12, 2014 12:09 pm" href="./viewtopic.php?f=11&amp;t=105590&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6" class="sml bold">Balkan folk (Metal or not)</a>
					
				</td>
				<td class="row1" width="130" align="center"><p class="topicauthor"><a href="./memberlist.php?mode=viewprofile&amp;u=194144&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6">Toberium</a></p></td>
				<td class="row1" width="50" align="center"><p class="topicdetails">5</p></td>
				<td class="row1" width="50" align="center"><p class="topicdetails">304</p></td>
				<td class="row1" width="140" align="center">
					<p class="topicdetails" style="white-space: nowrap;">Sat Jun 21, 2014 2:27 pm</p>
					<p class="topicdetails" style="white-space: nowrap;"><a href="./memberlist.php?mode=viewprofile&amp;u=241144&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6">damned smurf of death</a>
						<a href="./viewtopic.php?f=11&amp;t=105590&amp;p=2423754&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6#p2423754"><img src="./styles/subclone/imageset/icon_topic_latest.gif" width="18" height="9" alt="View the latest post" title="View the latest post" /></a>
					</p>
				</td>
			</tr>

		

			<tr>
				<td class="row1" width="25" align="center"><img src="./styles/subclone/imageset/topic_read_hot.gif" width="34" height="22" alt="No unread posts" title="No unread posts" /></td>
				
				<td class="row1" onmouseover="this.style.backgroundColor='#000000'; this.style.cursor='hand';" onmouseout="this.style.backgroundColor=&quot;&quot;" onclick="window.location.href='./viewtopic.php?f=11&amp;t=103947&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6'" style="cursor: pointer; ">
					
					 <a title="Posted: Fri Feb 28, 2014 5:56 pm" href="./viewtopic.php?f=11&amp;t=103947&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6" class="sml bold">The heaviest shit you've ever heard?</a>
					
						<p class="gensmall"> [ <img src="./styles/subclone/imageset/icon_post_target.gif" width="12" height="9" alt="Go to page" title="Go to page" /> <a href="./viewtopic.php?f=11&amp;t=103947&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6">1</a><span class="page-sep">, </span><a href="./viewtopic.php?f=11&amp;t=103947&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6&amp;start=40">2</a> ] </p>
					
				</td>
				<td class="row1" width="130" align="center"><p class="topicauthor"><a href="./memberlist.php?mode=viewprofile&amp;u=247442&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6">LeMiserable</a></p></td>
				<td class="row1" width="50" align="center"><p class="topicdetails">63</p></td>
				<td class="row1" width="50" align="center"><p class="topicdetails">3799</p></td>
				<td class="row1" width="140" align="center">
					<p class="topicdetails" style="white-space: nowrap;">Fri Jun 20, 2014 11:59 pm</p>
					<p class="topicdetails" style="white-space: nowrap;"><a href="./memberlist.php?mode=viewprofile&amp;u=203225&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6">OneSizeFitzpatrick</a>
						<a href="./viewtopic.php?f=11&amp;t=103947&amp;p=2423603&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6#p2423603"><img src="./styles/subclone/imageset/icon_topic_latest.gif" width="18" height="9" alt="View the latest post" title="View the latest post" /></a>
					</p>
				</td>
			</tr>

		

			<tr>
				<td class="row1" width="25" align="center"><img src="./styles/subclone/imageset/topic_read.gif" width="34" height="22" alt="No unread posts" title="No unread posts" /></td>
				
				<td class="row1" onmouseover="this.style.backgroundColor='#000000'; this.style.cursor='hand';" onmouseout="this.style.backgroundColor=&quot;&quot;" onclick="window.location.href='./viewtopic.php?f=11&amp;t=105645&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6'" style="cursor: pointer; ">
					
					 <a title="Posted: Mon Jun 16, 2014 5:13 pm" href="./viewtopic.php?f=11&amp;t=105645&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6" class="sml bold">A certain ballad lost in time</a>
					
				</td>
				<td class="row1" width="130" align="center"><p class="topicauthor"><a href="./memberlist.php?mode=viewprofile&amp;u=257613&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6">lionross</a></p></td>
				<td class="row1" width="50" align="center"><p class="topicdetails">5</p></td>
				<td class="row1" width="50" align="center"><p class="topicdetails">321</p></td>
				<td class="row1" width="140" align="center">
					<p class="topicdetails" style="white-space: nowrap;">Fri Jun 20, 2014 7:07 pm</p>
					<p class="topicdetails" style="white-space: nowrap;"><a href="./memberlist.php?mode=viewprofile&amp;u=257613&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6">lionross</a>
						<a href="./viewtopic.php?f=11&amp;t=105645&amp;p=2423547&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6#p2423547"><img src="./styles/subclone/imageset/icon_topic_latest.gif" width="18" height="9" alt="View the latest post" title="View the latest post" /></a>
					</p>
				</td>
			</tr>

		

			<tr>
				<td class="row1" width="25" align="center"><img src="./styles/subclone/imageset/topic_read.gif" width="34" height="22" alt="No unread posts" title="No unread posts" /></td>
				
				<td class="row1" onmouseover="this.style.backgroundColor='#000000'; this.style.cursor='hand';" onmouseout="this.style.backgroundColor=&quot;&quot;" onclick="window.location.href='./viewtopic.php?f=11&amp;t=105636&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6'" style="cursor: pointer; ">
					
					 <a title="Posted: Mon Jun 16, 2014 3:57 am" href="./viewtopic.php?f=11&amp;t=105636&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6" class="sml bold">Bands adorned in gothic garb</a>
					
				</td>
				<td class="row1" width="130" align="center"><p class="topicauthor"><a href="./memberlist.php?mode=viewprofile&amp;u=43503&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6">sperma_draconis</a></p></td>
				<td class="row1" width="50" align="center"><p class="topicdetails">5</p></td>
				<td class="row1" width="50" align="center"><p class="topicdetails">254</p></td>
				<td class="row1" width="140" align="center">
					<p class="topicdetails" style="white-space: nowrap;">Fri Jun 20, 2014 1:43 pm</p>
					<p class="topicdetails" style="white-space: nowrap;"><a href="./memberlist.php?mode=viewprofile&amp;u=43503&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6">sperma_draconis</a>
						<a href="./viewtopic.php?f=11&amp;t=105636&amp;p=2423456&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6#p2423456"><img src="./styles/subclone/imageset/icon_topic_latest.gif" width="18" height="9" alt="View the latest post" title="View the latest post" /></a>
					</p>
				</td>
			</tr>

		

			<tr>
				<td class="row1" width="25" align="center"><img src="./styles/subclone/imageset/topic_read.gif" width="34" height="22" alt="No unread posts" title="No unread posts" /></td>
				
				<td class="row1" onmouseover="this.style.backgroundColor='#000000'; this.style.cursor='hand';" onmouseout="this.style.backgroundColor=&quot;&quot;" onclick="window.location.href='./viewtopic.php?f=11&amp;t=105686&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6'" style="cursor: pointer; ">
					
					 <a title="Posted: Thu Jun 19, 2014 1:40 pm" href="./viewtopic.php?f=11&amp;t=105686&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6" class="sml bold">Best song's gutturais and cleans vocals ?</a>
					
				</td>
				<td class="row1" width="130" align="center"><p class="topicauthor"><a href="./memberlist.php?mode=viewprofile&amp;u=257634&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6">jarbinhas</a></p></td>
				<td class="row1" width="50" align="center"><p class="topicdetails">2</p></td>
				<td class="row1" width="50" align="center"><p class="topicdetails">181</p></td>
				<td class="row1" width="140" align="center">
					<p class="topicdetails" style="white-space: nowrap;">Fri Jun 20, 2014 2:43 am</p>
					<p class="topicdetails" style="white-space: nowrap;"><a href="./memberlist.php?mode=viewprofile&amp;u=159098&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6">Erotetic</a>
						<a href="./viewtopic.php?f=11&amp;t=105686&amp;p=2423346&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6#p2423346"><img src="./styles/subclone/imageset/icon_topic_latest.gif" width="18" height="9" alt="View the latest post" title="View the latest post" /></a>
					</p>
				</td>
			</tr>

		
		<tr align="center">
			
				<td class="cat" colspan="6">
			
					<form method="post" action="./viewforum.php?f=11&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6"><span class="gensmall">Display topics from previous:</span>&nbsp;<select name="st" id="st"><option value="0" selected="selected">All Topics</option><option value="1">1 day</option><option value="7">7 days</option><option value="14">2 weeks</option><option value="30">1 month</option><option value="90">3 months</option><option value="180">6 months</option><option value="365">1 year</option></select>&nbsp;<span class="gensmall">Sort by</span> <select name="sk" id="sk"><option value="a">Author</option><option value="t" selected="selected">Post time</option><option value="r">Replies</option><option value="s">Subject</option><option value="v">Views</option></select> <select name="sd" id="sd"><option value="a">Ascending</option><option value="d" selected="selected">Descending</option></select>&nbsp;<input class="btnlite" type="submit" name="sort" value="Go" /></form>
				</td>
		</tr>
		
		</table>
	
		<table width="100%" cellspacing="1">
		<tr>
			         <td colspan="2"><span class="gensmall left floatleft"></span></td>
                                <td class="gensmall floatright" width="100%" align="right" nowrap="nowrap"><b><a href="#" onclick="jumpto(); return false;" title="Click to jump to page…">Go to page</a> <strong>1</strong><span class="page-sep">, </span><a href="./viewforum.php?f=11&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6&amp;start=30">2</a><span class="page-sep">, </span><a href="./viewforum.php?f=11&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6&amp;start=60">3</a><span class="page-sep">, </span><a href="./viewforum.php?f=11&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6&amp;start=90">4</a><span class="page-sep">, </span><a href="./viewforum.php?f=11&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6&amp;start=120">5</a><span class="page-dots"> ... </span><a href="./viewforum.php?f=11&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6&amp;start=6090">204</a> &nbsp;<a href="./viewforum.php?f=11&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6&amp;start=30">Next</a></b></td></tr>
			
				<tr>
				<td width="1%"><a href="./posting.php?mode=post&amp;f=11&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6"><img src="./styles/subclone/imageset/en/button_topic_new.gif" alt="Post new topic" title="Post new topic" /></a></td>
                                <td><p class="breadcrumbs floatleft"><a href="./index.php?sid=56aeac3d547c98eb2bb88f2807aa4bf6">Forum Index</a> &#187; <a href="./viewforum.php?f=12&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6">Music Talk</a> &#187; <a href="./viewforum.php?f=11&amp;sid=56aeac3d547c98eb2bb88f2807aa4bf6">Recommendation Central</a></p></td>
<td class="gensmall floatright">&nbsp;Page <strong>1</strong> of <strong>204</strong>&nbsp;[ 6122 topics ]&nbsp;</td>
				
			
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
		<td class="row1"><p class="gensmall">Users browsing this forum: No registered users and 11 guests</p></td>
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
	<td><form method="post" name="search" action="./search.php?sid=56aeac3d547c98eb2bb88f2807aa4bf6"><span class="gensmall">Search for:</span> <input class="post" type="text" name="keywords" size="20" /> <input class="btnlite" type="submit" value="Go" /></form></td>
	<td align="right">
	<form method="post" name="jumpbox" action="./viewforum.php?sid=56aeac3d547c98eb2bb88f2807aa4bf6" onsubmit="if(document.jumpbox.f.value == -1){return false;}">

	<table cellspacing="0" cellpadding="0" border="0">
	<tr>
		<td nowrap="nowrap"><span class="gensmall">Jump to:</span>&nbsp;<select name="f" onchange="if(this.options[this.selectedIndex].value != -1){ document.forms['jumpbox'].submit() }">

		
			<option value="-1">Select a forum</option>
		<option value="-1">------------------</option>
			<option value="12">Music Talk</option>
		
			<option value="1">&nbsp; &nbsp;Metal Discussion</option>
		
			<option value="11" selected="selected">&nbsp; &nbsp;Recommendation Central</option>
		
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