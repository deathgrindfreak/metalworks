<?php


// Include the header
$page_title = 'M&euml;talW&ouml;rks: A Forum for All Things Metal!';
include "includes/header.php";

?>

<main id="logout" style="height: auto">
    <div id="center_container" style="height: auto">
        <div id="logout_body" style="height: 145px">
          
          <div id="logout_header">
            <h2>Login Failed!</h2>
          </div>
          
          <!-- for vertical spacing -->
          <div style="margin-bottom: 25px;"></div>
         
          <div style="margin: 0 auto; text-align: left; padding-left: 20px; padding-right: 5px;">
            <p>You have entered an incorrect username or password.  Please enter the correct information and try again.
               Remember, both the username and password are case-sensitive.  Forgotten your password?  Click <a href="password_reset.php">here!</a></p>
          </div>
          
        </div>
    </div>
</main>

<?php include "includes/footer.html"; ?>
