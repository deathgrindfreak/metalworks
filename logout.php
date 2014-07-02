<?php

// get the previous page
$prev = $_GET['path'];

// Parse the rest of the GET variables
$first = true;
foreach ($_GET as $key=>$var) {
    if ($key != 'path' && $first) {
        $prev .= '?' . $key . '=' . $var;
        $first = false;
    } else if ($key != 'path' && !$first) {
        $prev .= '&' . $key . '=' . $var;
    }
}

// The user shouldn't ever be in this situation, but we'll try anyway.
if (!isset($_COOKIE['user_id'])) {
    header('Location: index.php');

} else {

    // Delete the cookies
    setcookie('user_id', '', time()-3600, '/', '', 0, 0);
    setcookie('username', '', time()-3600, '/', '', 0, 0);
    unset($_COOKIE['user_id']);
    unset($_COOKIE['username']);
}


// Include the header
$page_title = 'M&euml;talW&ouml;rks: A Forum for All Things Metal!';
include "includes/header.php";

?>

<main id="logout" style="height: auto">
    <div id="center_container" style="height: auto">
        <div id="logout_body">
          
          <div id="logout_header">
            <h2>Logged Out</h2>
          </div>
          
          <!-- for vertical spacing -->
          <div style="margin-bottom: 40px;"></div>
         
          <div style="margin: 0 auto; text-align: left; padding-left: 15px;">
            <p>All cookies cleared!!!</p><br/>
            <p>You can now:</p>
            <ul>
                <li><a href="index.php">Go to the home page.</a></li>
                <li><a href="<?php echo $prev; ?>">Return to the page you were previously viewing.</a></li>
            </ul>
          </div>
          
        </div>
    </div>
</main>

<?php include "includes/footer.html"; ?>
