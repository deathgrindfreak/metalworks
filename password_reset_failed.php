<?php

// Get the variables from the reset page
$user = $_GET['user'];
$email = $_GET['email'];


// Include the header
$page_title = 'M&euml;talW&ouml;rks: A Forum for All Things Metal!';
include "includes/header.php";

?>

<main id="logout" style="height: auto">
    <div id="center_container" style="height: auto">
        <div id="register_body" style="height: 130px; width: 610px;">
          
          <div id="logout_header" style="width: 605px">
            <h2>User Profile Not Found!</h2>
          </div>
          
          <!-- for vertical spacing -->
          <div style="margin-bottom: 25px;"></div>
         
          <div style="margin: 0 auto; text-align: left; padding-left: 20px; padding-right: 5px; font-size: 14px">
              <p>The profile corresponding to the user <strong><?php echo $user; ?></strong> at the email address <strong><?php echo $email; ?></strong> does not exist.  Please check that you've entered the correct information and try again.</p>
          </div>
        </div>
    </div>
</main>

<?php include('includes/footer.html'); ?>
