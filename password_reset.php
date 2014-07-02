<?php 

if (isset($_POST['reset_password_button'])) {

    // Script to connect the database
    require "includes/mysqli_connect.inc.php";

    // Include the email functions
    require "includes/verification_email.inc.php";

    
    // set and parse variables
    $user = $dbc->real_escape_string(trim($_POST['reset_username']));
    $email = $dbc->real_escape_string(trim($_POST['reset_email']));

    // Need to check to see if the user already exists in the database
    
    $s = $dbc->prepare("SELECT username, email FROM users WHERE username=? AND email=?");
    $s->bind_param('ss', $user, $email);
    $s->execute();
    $s->store_result();
    $rows = $s->num_rows;

    // Close the connection
    $s->close();
    

    // Ensure that the user exists
    if ($rows > 0) {
        
        // Redirect to completion page
        header("Location: password_reset_complete.php?user=$user&email=$email");
        
        // Send the verification email
        $pass = pass_reset_email($email, $user);
        
        // Encrypt the password
        $pass = sha1($pass);
        
        // Set the new user password to the randomly generated one
        $dbc->query("UPDATE users SET pass='" . $pass . "' WHERE username='" . $user . "' AND email='" . $email . "'");

        $dbc->close();

    } else {
        
        // Redirect to failure page
        header("Location: password_reset_failed.php?user=$user&email=$email");
    }

} else {
    // Need to respond that the user already exists
}

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
	<div id="center_container" style="height: auto">

        <div id="register_body" style="height: 360px; width: 800px">
          
          <div id="logout_header" style="width: 794px">
            <h2>Password Reset</h2>
          </div>
          
          <!-- for vertical spacing -->
          <div style="margin-bottom: 25px;"></div>
         
          <div style="margin: 0 auto; text-align: left; padding-left: 20px; padding-right: 5px;">
            <form name="register_form" action="password_reset.php" method="post">
                
                <fieldset>
                    <legend>Username</legend>
                    <p>Please enter your MetalWorks username.</p>
                    <span style="display: inline-block">
                        <label style="display: block">Username:</label>
                        <input id="standard_form" type="text" name="reset_username" maxlength="15" required/>
                    </span>
                </fieldset>
                <fieldset>
                    <legend>Email Address</legend>
                    <p>Please enter the email you normally use for the site.</p>
                    <span style="display: inline-block">
                        <label style="display: block">Email Address:</label>
                        <input id="standard_form" type="email" name="reset_email" required/>
                    </span>
                </fieldset>
                <div style="display: inline-block; padding-left:350px; margin-top: 6px">
                    <input type="submit" name="reset_password_button" value="Send"/>
                </div>
            </form>
          </div>
        </div>
	</div>
  </div>
</main>
    
<?php include "includes/footer.html"; ?>
