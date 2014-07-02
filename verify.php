<?php


// Check if the two passed variables are set and not empty
if (isset($_GET['email']) && !empty($_GET['email']) && isset($_GET['hash']) && !empty($_GET['hash'])) {
    
    // Script to connect the database
    require "includes/mysqli_connect.inc.php";


    // Set some variables
    $email = $dbc->real_escape_string(trim($_GET['email']));
    $hash = $dbc->real_escape_string(trim($_GET['hash']));

    $s = $dbc->prepare("SELECT email, hash, active FROM users WHERE email=? AND hash=? AND active = '0'");

    $s->bind_param('ss', $email, $hash);
    $s->execute();
    $s->store_result();

    $rows = $s->num_rows;

    $s->free_result();
    $s->close();


    // If the email and hash match
    if ($rows > 0) {

        // Make the user active
        $dbc->query("UPDATE users SET active=1 WHERE email='" . $email . "' AND hash='" . $hash . "' AND active='0'");

    } else {

        // Else, go to the failed login page
        header('Location: login_failed.php');
    }

    // Close the database
    $dbc->close();
}


// Include the header
$page_title = 'M&euml;talW&ouml;rks: A Forum for All Things Metal!';
include "includes/header.php";

?>

<main id="logout" style="height: auto">
    <div id="center_container" style="height: auto">
        <div id="register_body" style="height: 130px; width: 610px;">
          
          <div id="logout_header" style="width: 605px">
            <h2>Registration Complete!</h2>
          </div>
          
          <!-- for vertical spacing -->
          <div style="margin-bottom: 25px;"></div>
         
          <div style="margin: 0 auto; text-align: left; padding-left: 20px; padding-right: 5px; font-size: 14px">
            <p>Your account is active!  You may now login with the credentials you entered earlier.</p>
          </div>
        </div>
    </div>
</main>


<!-- Include the footer -->
<?php include "includes/footer.html"; ?>
