<?php 

// Script to connect the database
require "includes/mysqli_connect.inc.php";

// Get the forum id
$p_id = $_GET['p'];

// Get the initial thread id
$t_id = $_GET['t'];

// Get the original page
$page = $_GET['page'];

$s = $dbc->query("SELECT message FROM posts WHERE post_id = $p_id");
$result = $s->fetch_array(MYSQLI_ASSOC);
$post_body_init = $result['message'];


if (isset($_POST['edit_post_button'])) {

    // set and parse variables
    $post_body = $_POST['edited_post'];
    $edited = 1;

    // Insert into the threads table
    $s = $dbc->prepare("UPDATE posts SET message = ?, edited = ? WHERE post_id = ?");
    $s->bind_param('sdd', $post_body, $edited, $p_id);
    $s->execute();

    // Redirect to the newly created thread
    header("Location: showthread.php?t=" . $t_id . "&page=" . $page);
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
	<div id="center_container" style="height: 410px; padding: 20px 0px 20px 0px;">

        <div id="post_body">
          
          <div id="post_header">
            <div style="float: left">Edit Post</div>
          </div>
         
          <div style="width: 720px; margin: 0 auto">
            <form name="edit_post_form" action="<?php echo 'editpost.php?p=' . $p_id . '&t=' . $t_id . '&page=' . $page; ?>" method="post">

                <div id="text_box_wrapper">
                    <table cellpadding="0" cellspacing="0" border="0">
                        <tbody>
                            <tr>
                                <table>
                                    <tbody>
                                        <textarea name="edited_post" rows="10" cols="60" style="display: block; height: 250px; width: 680px" tabindex="1">
<?php echo $post_body_init; ?>

                                        </textarea>
                                    </tbody>
                                </table>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div style="display: inline-block; padding-left:250px; margin-top: 15px; margin-bottom: 5px">
                    <input type="submit" name="edit_post_button" value="Submit New Thread"/>
                    <input type="submit" name="reset_fields" value="Reset Fields" onclick="document.getElementById('new_thread_form').reset()"/>
                </div>
            </form>
          </div>
        </div>
	</div>
  </div>
</main>
    
<?php include "includes/footer.html"; ?>
