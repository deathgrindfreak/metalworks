<?php

// Connect to the database
require "includes/mysqli_connect.inc.php";

// Include some of the functions for dealing with threads
require "includes/thread_functions.inc.php";


// Get the user id
$u_id = $_GET['u'];

// Include the header
$page_title = 'M&euml;talW&ouml;rks: A Forum for All Things Metal!';

// Add the thread style sheet to header
$stylesheets = array('memberstyle.css', 'forumstyle.css');
include "includes/header.php";


// Print any error messages if they exist
if (isset($errors) && !empty($errors)) {
	echo '<h1>Error!</h1><p class="error">The following errors(s) occurred:<br/>'; 
	
	foreach ($errors as $msg) {
		echo " - $msg<br/>\n";
	}
	
    echo '</p><p>Please try again.</p>'; 
}


// Upload an avatar if the submit button is pressed
if (isset($_POST['avatar_upload_button'])) {

    // Report any errors
    if ($_FILES['avatar_upload']['error'] > 0) {

        echo "Error: " . $_FILES['avatar_upload']['error'] . "<br/>";

    } else {

        $avatar_up = 'images/avatars/' .  basename($_FILES['avatar_upload']['name']);
        $file_type = $_FILES['avatar_upload']['type'];
        $name = $_FILES['avatar_upload']['name'];
        
        // Ensure that the file uploaded is an image
        if ($file_type == 'image/gif' || $file_type == 'image/jpeg' || $file_type == 'image/png') {

            // Insert the filename into the database
            $s = $dbc->query("UPDATE users SET thumb_url = '" . $name . "' WHERE user_id = $u_id");

            // Find the previous avatar filename
            $s = $dbc->query("SELECT thumb_url FROM users WHERE user_id = $u_id");
            $result = $s->fetch_array(MYSQLI_ASSOC);
            $prev_avatar = $result['thumb_url'];
            
            // Delete the previous avatar
            if ($prev_avatar != 'default.png') {
                unlink('images/avatars/' . $prev_avatar);
            }
            
            // Move the uploaded file to the avatars directory
            move_uploaded_file($_FILES['avatar_upload']['tmp_name'], $avatar_up);
        }
    }
}

// Enter the comment to the database if submitted
if (isset($_POST['comment_button'])) {

    $comment = $_POST['comment_area'];
    $post_user = $_COOKIE['user_id'];

    $q = "INSERT INTO comments (user_id, posted_by, posted_on, comment) VALUES ($u_id, $post_user, NOW(), ? )";
    $s = $dbc->prepare($q);
    $s->bind_param('s', $comment);
    $s->execute();
    $s->close();
}


// Get user info
$s = $dbc->query("SELECT username, thumb_url, DATE_FORMAT(joined, '%M %D, %Y %l:%i %p') as joined, location 
                  FROM users 
                  WHERE user_id = $u_id");

$result = $s->fetch_array(MYSQLI_ASSOC);

$username = $result['username'];
$avatar = $result['thumb_url'];
$joined = $result['joined'];
$location = $result['location'];
$posts = count_posts($dbc, $u_id);

?>

<main id="main_page" style="height: auto">
	<div id="center_container" style="height: auto">

        <div id="top_info">
            <div id="avatar_upload">
                <span id="user_title"><?php echo $username ?></span>
                <img src="images/avatars/<?php echo $avatar ?>" class="avatar" style="border-radius: 10px; margin-bottom: 10px" height="90px" width="90px" name="avatar"/>

                <?php if ($_COOKIE['user_id'] == $u_id) { ?>
                <label style="font-size: 12px; margin-top: 5px; padding-left: 3px">Upload a new image:</label><br/>
                <form name="avatar_upload_form" action="member.php?u=<?php echo $u_id; ?>" method="post" enctype="multipart/form-data">
                    <input name="avatar_upload" id="standard_upload" type="file"/>
                    <input name="avatar_upload_button" type="submit" value="Submit"/>
                </form>
                <?php } ?>

            </div>

            <div id="user_info_body" style="height: auto"> 
                <div id="user_info_header">
                    User Statistics
                </div>
                <div id="user_info_stats">
                    <span style="font-weight: bold; padding-left: 8px">Join Date:</span> <?php echo $joined ?><br/>
                    <span style="font-weight: bold; padding-left: 8px">Location:</span> <?php echo $location ?><br/>
                    <span style="font-weight: bold; padding-left: 8px">Posts:</span> <?php echo $posts ?><br/>
                </div>
            </div>
        </div>
        <div id="comment_section">
            <div id="comment_body"> 
                <div id="comment_header">
                    Leave a Comment
                </div>
                <form name="comment_form" action="member.php?u=<?php echo $u_id; ?>" method="post">
                    <div style="padding: 5px">
                        <div style="background-color: #bfbfbf; border-radius: 5px; padding: 30px 10px 10px 10px">
                            <textarea name="comment_area" rows="10" cols="60" style="display: block; height: 55px; width: 625px" tabindex="1">
                            </textarea>
                        </div>
                    </div>

                    <?php if (isset($_COOKIE['user_id'])) { ?>
                    <input name="comment_button" type="submit" value="Post Comment" style="float: right; margin: 0px 5px 8px 0px"/>
                    <?php } else { ?>
                    <input type="submit" value="Register to Post Comment" style="float: right; margin: 0px 5px 8px 0px"/>
                    <?php } ?>

                </form>
            </div>

                <!-- DISPLAY ALL THE COMMENTS FOR THE USER -->
                <?php display_comments($dbc, $u_id); ?>

        </div>
  </div>
</main>
    
<?php include "includes/footer.html"; ?>
