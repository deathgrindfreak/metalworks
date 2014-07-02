<?php

// Connect to the database
require "includes/mysqli_connect.inc.php";

// Include some of the functions for dealing with threads
require "includes/thread_functions.inc.php";


// Get the thread id and page number
$t_id = $_GET['t'];

// Get the page get variable
$page_num = $_GET['page'];


// Increment the page views column
$s = $dbc->query("UPDATE threads SET views=views+1 WHERE thread_id=$t_id");


// Include the header
$page_title = 'M&euml;talW&ouml;rks: A Forum for All Things Metal!';

// Add the thread style sheet to header
$stylesheets = array('threadstyle.css');
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
	<div id="center_container" style="height: auto">

        <!-- header for the whole thread page -->
        <div id="thread_page_header">
            <table cellpadding="0" cellspacing="0" border="0" width="100%">
                <tbody>
                    <tr valign="bottom">

                    <!-- IF USERNAME COOKIE IS SET, ALLOW USER TO REPLY -->
                    <?php if (isset($_COOKIE['username'])) { ?>
                        <td valign="middle" width="13%">
                            <a href="<?php echo 'newreply.php?t=' . $t_id . '&page=' . $page_num; ?>"><div class="nav_button">New Reply</div></a>
                        </td>
                    <?php } else { ?>
                        <td valign="middle" width="15%">
                            <a href="register.php"><div class="nav_button" style="width: 125px">Register to Reply</div></a>
                        </td>
                    <?php } ?>

                    <!-- GENERATE ALL HTML FOR POSTS -->
                    <?php show_posts($dbc, $t_id, $page_num); ?>

	</div>
  </div>
</main>
    
<?php include "includes/footer.html"; ?>
