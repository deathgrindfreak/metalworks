<?php 

// Script to connect the database
require "includes/mysqli_connect.inc.php";

// Get the thread id
$t_id = $_GET['t'];

// Get the curren page number
$page = $_GET['page'];


$s = $dbc->query("SELECT subject FROM threads WHERE thread_id = $t_id");
$r = $s->fetch_array(MYSQLI_ASSOC);

// Title of the forum
$title = $r['subject'];

// Close the connection
$s->close();


if (isset($_POST['submit_new_reply'])) {

    // set and parse variables
    $reply_author = $_COOKIE['user_id'];
    $reply_body = htmlspecialchars($_POST['new_reply']);

    // Insert into the posts table
    $s = $dbc->prepare("INSERT INTO posts (thread_id, user_id, message, posted_on) VALUES (?, ?, ?, NOW())");
    $s->bind_param('dds', $t_id, $reply_author, $reply_body);
    $s->execute();
    $s->close();


    // Redirect to the newly created thread
    header("Location: showthread.php?t=$t_id&page=$page");
}


// Include additional stylesheets and scripts
$stylesheets = array('newthreadstyle.css');

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
	<div id="center_container" style="height: auto; padding: 20px 0 20px 0;">

        <div id="post_body">
          
          <div id="post_header">
            <div style="float: left">Reply to Thread</div>
            <div style="float: right; font-size: 14px">Thread: <span style="font-weight: normal"><?php echo $title; ?></span></div>
          </div>
         
          <div style="width: 720px; margin: 0 auto">
            <form name="new_thread_form" action="<?php echo 'newreply.php?t=' . $t_id . '&page=' . $page?>" method="post">
                
                <div id="text_box_wrapper">
                    <table cellpadding="0" cellspacing="0" border="0">
                        <tbody>
                            <tr>
                                <table>
                                    <tbody>
                                        <textarea name="new_reply" rows="10" cols="60" style="display: block; height: 250px; width: 680px" tabindex="1">
                                        </textarea>
                                    </tbody>
                                </table>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div style="display: inline-block; padding-left:250px; margin-top: 15px; margin-bottom: 5px">
                    <input type="submit" name="submit_new_reply" value="Submit Reply"/>
                    <input type="submit" name="reset_fields" value="Reset Fields" onclick="document.getElementById('new_thread_form').reset()"/>
                </div>
            </form>
          </div>
        </div>
	</div>
  </div>
</main>
    
<?php include "includes/footer.html"; ?>
