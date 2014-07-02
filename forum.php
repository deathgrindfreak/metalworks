<?php

// Connect to the database
require "includes/mysqli_connect.inc.php";

// Include the thread functions
require "includes/thread_functions.inc.php";


// Get the forum id
$f_id = $_GET['f'];

// Get the page get variable
$page_num = $_GET['page'];


// Include forum stylesheet
$stylesheets = array("forumstyle.css");

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
?>

<main id="main_page" style="height: auto">
	
  <div>
      <div id="center_container" style="height: auto; padding-left: 0">
        <table cellpadding="0" cellspacing="0" border="0" width="100%" id="header_table">
            <tbody>
                <tr valign="bottom">

                <!-- IF USERNAME COOKIE IS SET, ALLOW USER TO START A NEW THREAD -->
                <?php if (isset($_COOKIE['username'])) { ?>
                    <td valign="middle" width="13%">
                        <a href="<?php echo 'newthread.php?f=' . $f_id . '&page=' . $page_num?>" id="reply_button"><div class="nav_button">New Thread</div></a>
                    </td>
                <?php } else { ?>
                    <td valign="middle" width="15%">
                        <a href="register.php" id="reply_button"><div class="nav_button" style="width: 165px">Register to Post Thread</div></a>
                    </td>
                <?php } ?>

                <!-- GENERATE ALL HTML FOR THREADS -->
                <?php show_threads($dbc, $f_id, $page_num); ?>

                </tbody>
            </table>
        </div>
	</div>
  </div>
</main>
    
<?php include "includes/footer.html"; ?>
