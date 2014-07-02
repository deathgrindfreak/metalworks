<?php


// Include the header
$page_title = 'M&euml;talW&ouml;rks: A Forum for All Things Metal!';
include "includes/header.php";

?>

<main id="logout" style="height: auto">
    <div id="center_container" style="height: auto">
        <div id="register_body" style="height: 320px; width: 700px;">
          
          <div id="logout_header" style="width: 695px">
            <h2>Registration is Almost Complete!</h2>
          </div>
          
          <!-- for vertical spacing -->
          <div style="margin-bottom: 25px;"></div>
         
          <div style="margin: 0 auto; text-align: left; padding-left: 20px; padding-right: 5px; font-size: 14px">
            <p>Thank you, <strong><?php echo $_GET['user']; ?></strong>.  Your registration is close to  complete!</p>
            <p>In order to complete your registration, visit the email you provided and click the link shown.</p><br/>
            <p>In the meantime:</p>
            <p>Feel free to have a look at the <a href="#">FAQ</a> for more info on site usage, etc...</p>
            <p>If you're ready, head on over to the <a href="#">Forums</a> and start posting.</p>
            <p>You can also edit your <a href="">Profile</a> if you wish.</p>
            <p>Welcome!  And may you always be one with the metal.</p>
          </div>
        </div>
    </div>
</main>

<?php include "includes/footer.html"; ?>
