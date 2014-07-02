<?php

// Connect to the database
require "includes/mysqli_connect.inc.php";

// Include the thread functions
require "includes/thread_functions.inc.php";


// Include forum stylesheet
$stylesheets = array("indexstyle.css");

// Include the header
$page_title = 'M&euml;talW&ouml;rks: A Forum for All Things Metal!';
include "includes/header.php";


// Print any error messages if they exist
if (isset($errors) && !empty($errors)) {
	echo '<h1>Error!</h1><p class="error">The following errors(s) occurred:<br/>'; 
	
	foreach ($errors as $msg) {
		echo " - $msg<br/>\n";
	}
	
    echo '</p><p>Please try again.</p>'; 
}


// Get the statistics for the site
$s = $dbc->query("SELECT COUNT(*) AS total_users FROM users");
$result = $s->fetch_array(MYSQLI_ASSOC);
$total_users = $result['total_users'];

$s = $dbc->query("SELECT COUNT(*) AS total_posts FROM posts");
$result = $s->fetch_array(MYSQLI_ASSOC);
$total_posts = $result['total_posts'];

$s = $dbc->query("SELECT COUNT(*) AS total_threads FROM threads");
$result = $s->fetch_array(MYSQLI_ASSOC);
$total_threads = $result['total_threads'];

$s = $dbc->query("SELECT username FROM users ORDER BY joined DESC");
$result = $s->fetch_array(MYSQLI_ASSOC);
$newest_user = trim($result['username']);
?>

<main id="main_page" style="height: 1020px">
	
    <!-- Left Side -->
    <div id="left_container" style="height: 930px">
        <div id="forum_table">
            <div id="forum_header">Music Talk</div>
            <table class="tborder" cellpadding="6" cellspacing="0" border="0" width="100%" align="center">
                <tbody>
                    <tr align="center">
                        <td width="30px">
                            <img src="images/horns.png" height="35px" width="34px"/>
                        </td>
                        <td align="left">
                            <h3><a href="forum.php?f=1&page=1">Metal Discussion</a></h3>
                            <p>Discuss anything metal-related</p>
                        </td>
                        <td width="250px">
                            <div id="last_post"><?php last_post($dbc, 1); ?></div>
                        </td>
                    </tr>
                    <tr align="center">
                        <td width="30px">
                            <img src="images/horns.png" height="35px" width="34px"/>
                        </td>
                        <td align="left">
                            <h3><a href="forum.php?f=2&page=1">Recommendation Central</a></h3>
                            <p>Looking to take that pesky legwork out of your listening experience?  Click here.</p>
                        </td>
                        <td width="250px">
                            <div id="last_post"><?php last_post($dbc, 2); ?></div>
                        </td>
                    </tr>
                    <tr align="center">
                        <td width="30px">
                            <img src="images/horns.png" height="35px" width="34px"/>
                        </td>
                        <td align="left">
                            <h3><a href="forum.php?f=3&page=1">For the Musicians</a></h3>
                            <p>A Forum for Musicians - Discuss songwriting, playing tabs, instruments and gear, technique, etc...</p>
                        </td>
                        <td width="250px">
                            <div id="last_post"><?php last_post($dbc, 3); ?></div>
                        </td>
                    </tr>
                    <tr align="center">
                        <td width="30px">
                            <img src="images/horns.png" height="35px" width="34px"/>
                        </td>
                        <td align="left">
                            <h3><a href="forum.php?f=4&page=1">Tours, Gigs and Festivals</a></h3>
                            <p>Want to talk about or review a Metal tour, gig or festival?  This is the placs to be.</p>
                        </td>
                        <td width="250px">
                            <div id="last_post"><?php last_post($dbc, 4); ?></div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div id="forum_table">
            <div id="forum_header">Marketplace</div>
            <table class="tborder" cellpadding="6" cellspacing="0" border="0" width="100%" align="center">
                <tbody>
                    <tr align="center">
                        <td width="30px">
                            <img src="images/horns.png" height="35px" width="34px"/>
                        </td>
                        <td align="left">
                            <h3><a href="forum.php?f=5&page=1">Promotional Forum</a></h3>
                            <p>Come spam your metal-related stuff here.</p>
                        </td>
                        <td width="250px">
                            <div id="last_post"><?php last_post($dbc, 5); ?></div>
                        </td>
                    </tr>
                    <tr align="center">
                        <td width="30px">
                            <img src="images/horns.png" height="35px" width="34px"/>
                        </td>
                        <td align="left">
                            <h3><a href="forum.php?f=6&page=1">Trading Board</a></h3>
                            <p>Forum for trading music-related wares with other metalheads.</p>
                        </td>
                        <td width="250px">
                            <div id="last_post"><?php last_post($dbc, 6); ?></div>
                        </td>
                    </tr>
                    <tr align="center">
                        <td width="30px">
                            <img src="images/horns.png" height="35px" width="34px"/>
                        </td>
                        <td align="left">
                            <h3><a href="forum.php?f=7&page=1">Selling and Buying Board</a></h3>
                            <p>Forum for buying and selling music-related wares with other metalheads.</p>
                        </td>
                        <td width="250px">
                            <div id="last_post"><?php last_post($dbc, 7); ?></div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div id="forum_table">
            <div id="forum_header">Off-Topic</div>
            <table class="tborder" cellpadding="6" cellspacing="0" border="0" width="100%" align="center">
                <tbody>
                    <tr align="center">
                        <td width="30px">
                            <img src="images/horns.png" height="35px" width="34px"/>
                        </td>
                        <td align="left">
                            <h3><a href="forum.php?f=8&page=1">The Forge</a></h3>
                            <p>For discussions of a more general variety.</p>
                        </td>
                        <td width="250px">
                            <div id="last_post"><?php last_post($dbc, 8); ?></div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div id="forum_table">
            <div id="forum_header">Site Feedback</div>
            <table class="tborder" cellpadding="6" cellspacing="0" border="0" width="100%" align="center">
                <tbody>
                    <tr align="center">
                        <td width="30px">
                            <img src="images/horns.png" height="35px" width="34px"/>
                        </td>
                        <td align="left">
                            <h3><a href="forum.php?f=9&page=1">Site Announcements</a></h3>
                            <p>Various announcements for new site features, promotions and more may be posted here.</p>
                        </td>
                        <td width="250px">
                            <div id="last_post"><?php last_post($dbc, 9); ?></div>
                        </td>
                    </tr>
                    <tr align="center">
                        <td width="30px">
                            <img src="images/horns.png" height="35px" width="34px"/>
                        </td>
                        <td align="left">
                            <h3><a href="forum.php?f=10&page=1">Bug Reports, Suggestions and Feedback</a></h3>
                            <p>We welcome any and all feedback about the site.  If you encounter any errors while viewing the site, please report them here.</p>
                        </td>
                        <td width="250px">
                            <div id="last_post"><?php last_post($dbc, 10); ?></div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Right Side -->
    <div id="right_container" style="height: 920px; padding-bottom: 10px">
        <div id="right_div" style="height: auto">
            <div id="right_header">
                The M&euml;talW&ouml;rks Code
            </div>
            <div style="font-size: 12px; padding: 0 5px 5px 5px">
                <p>M&euml;talW&ouml;rks values solid contributions, that are both civil and contribute to the community as a whole</p>
                <h4 style="font-size: 13px">Post in the Correct Forum</h4>
                <p>&bull; Users are expected to read the forum descriptions before posting and post accordingly.</p>
                <p>&bull; Users caught repeatedly violating this rule may be disiplined accordingly</p>
                <h4 style="font-size: 13px">Be Respectful</h4>
                <p>&bull; Please be tolerant and think of others when posting</p>
                <p>&bull; Flaming or abusing users will result in an insta-ban</p>
                <h4 style="font-size: 13px">Above All, Be Metal</h4>
                <p>&bull; This is a Metal forum after all, go post about Lady Gaga somewhere else.</p>
            </div>
        </div>
        <div id="right_div" style="height: auto">
            <div id="right_header">
                Statistics
            </div>
            <div style="font-size: 12px; padding: 0 5px 5px 5px">
                <p>&bull; <strong>Threads:</strong> &nbsp; <?php echo $total_threads; ?><br/>
                   &bull; <strong>Posts:</strong> &nbsp; <?php echo $total_posts; ?><br/>
                   &bull; <strong>Members:</strong> &nbsp; <?php echo $total_users; ?><br/>
                   &bull; <strong>Newest Member:</strong> &nbsp; <?php echo $newest_user; ?></p>
            </div>
        </div>
        <div id="right_div" style="height: 170px">
            <div id="right_header">
		Follow Us
            </div>
	    <ul style="list-style-type: none">
		<li><img style="margin-right: 5px; margin-bottom: 3px; vertical-align :middle" src="http://img2.wikia.nocookie.net/__cb20130501121248/logopedia/images/f/fb/Facebook_icon_2013.svg" height="20px" width="20px"/><a href="#" style="text-decoration: none; color:#000; font-size: 13px"><span style="">Facebook</span></a></li>
		<li><img style="margin-right: 5px; margin-bottom: 3px; vertical-align :middle" src="https://cdn1.iconfinder.com/data/icons/metro-ui-dock/512/Google.png" height="20px" width="20px"/><span style=""><a href="#" style="text-decoration: none; color:#000; font-size: 13px">Google+</a></span></li>
		<li><img style="margin-right: 5px; margin-bottom: 3px; vertical-align:middle" src="http://textbookstop.files.wordpress.com/2011/05/rss_feed_icon_high_res.gif" height="20px" width="20px"/><a href="#" style="text-decoration: none; color:#000; font-size: 13px"><span style="">RSS</span></a></li>
		<li><img style="margin-right: 5px; margin-bottom: 3px; vertical-align :middle" src="https://blog.twitter.com/sites/all/themes/gazebo/img/ios_homescreen_icon.png" height="20px" width="20px"/><a href="#" style="text-decoration: none; color:#000; font-size: 13px"><span style="">Twitter</span></a></li>
	    </ul>
        </div>
	</div>
</main>
    
<?php include "includes/footer.html"; ?>
