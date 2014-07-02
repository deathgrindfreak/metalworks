<?php 

// Script to connect the database
require "includes/mysqli_connect.inc.php";

// Get the forum id
$f_id = $_GET['f'];

// Get the page
$page = $_GET['page'];

$s = $dbc->query("SELECT forum_subject FROM forums WHERE forum_id = $f_id");
$r = $s->fetch_array(MYSQLI_ASSOC);

// Title of the forum
$title = $r['forum_subject'];

// Close the connection
$s->close();


if (isset($_POST['submit_new_thread'])) {

    // set and parse variables
    $thread_title = htmlspecialchars($_POST['thread_title']);
    $thread_author = $_COOKIE['user_id'];
    $thread_body = htmlspecialchars($_POST['new_post']);

    // Insert into the threads table
    $s = $dbc->prepare("INSERT INTO threads (forum_id, user_id, subject) VALUES (?, ?, ?)");
    $s->bind_param('dds', $f_id, $thread_author, $thread_title);
    $s->execute();

    // Get the thread id from the result array
    $t_id = $dbc->insert_id;

    // Insert into the posts table
    $s = $dbc->prepare("INSERT INTO posts (thread_id, user_id, message, posted_on) VALUES (?, ?, ?, NOW())"); 
    $s->bind_param('dds', $t_id, $thread_author, $thread_body);
    $s->execute();
    $s->store_result();

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
	<div id="center_container" style="height: 610px; padding: 20px 0px 20px 0px;">

        <div id="post_body">
          
          <div id="post_header">
            <div style="float: left">Post New Thread</div>
            <div style="float: right; font-size: 14px">Forum: <span style="font-weight: normal"><?php echo $title; ?></span></div>
          </div>
         
          <div style="width: 720px; margin: 0 auto">
            <form name="new_thread_form" action="<?php echo 'newthread.php?f=' . $f_id . '&page=' . $page; ?>" method="post">
                
                <div style="margin-bottom: 40px;">
                    <fieldset>
                        <legend><span style="font-size: 16px">Increase your chances of getting a response!</span></legend>
                        <ul style="font-weight: normal">
                            <li>Use an interesting and descriptive multi-word title</li>
                            <li>Be friendly and courteous</li>
                            <li>Use correct spelling and grammar</li>
                        </ul>
                    </fieldset> 
                </div>

                <span style="display: inline-block; padding-bottom: 10px; font-size: 14px">
                    <label style="display: block; font-size: 14px; margin-bottom: 3px">Title: (Be Descriptive!)</label>
                    <input id="standard_form" type="text" name="thread_title" style="width: 400px" required/>
                </span>
                <div id="text_box_wrapper">
                    <table cellpadding="0" cellspacing="0" border="0">
                        <tbody>
                            <tr>
                                <table>
                                    <tbody>
                                        <textarea name="new_post" rows="10" cols="60" style="display: block; height: 250px; width: 680px" tabindex="1">
                                        </textarea>
                                    </tbody>
                                </table>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div style="display: inline-block; padding-left:250px; margin-top: 15px; margin-bottom: 5px">
                    <input type="submit" name="submit_new_thread" value="Submit New Thread"/>
                    <input type="submit" name="reset_fields" value="Reset Fields" onclick="document.getElementById('new_thread_form').reset()"/>
                </div>
            </form>
          </div>
        </div>
	</div>
  </div>
</main>
    
<?php include "includes/footer.html"; ?>
