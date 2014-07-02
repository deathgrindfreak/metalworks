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
            <h2>Password Reset Complete!</h2>
          </div>
          
          <!-- for vertical spacing -->
          <div style="margin-bottom: 25px;"></div>
         
          <div style="margin: 0 auto; text-align: left; padding-left: 20px; padding-right: 5px; font-size: 14px">
              <p>Thanks, <strong><?php echo $user; ?></strong>.  Your password has now been reset.<br/>
                 Please check your email at <strong><?php echo $email; ?></strong> for your new password.</p>
          </div>
        </div>
    </div>
</main>

<?php include "includes/footer.html"; ?>
