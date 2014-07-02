<?php

// Connect to the database
require "includes/mysqli_connect.inc.php";

// Include the thread functions
require "includes/thread_functions.inc.php";


// Get the page get variable
$page_num = $_GET['page'];

// Get the search string
$search_str = $_GET['search'];


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

                <!-- GENERATE ALL HTML FOR SEARCH -->
                <?php search_threads($dbc, $search_str, $page_num); ?>

                </tbody>
            </table>
        </div>
	</div>
  </div>
</main>
    
<?php include "includes/footer.html"; ?>
