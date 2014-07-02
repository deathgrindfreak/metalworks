<?php # Script for logging into site

// get the previous page
$prev = $_GET['push'] . '?path=' . $_GET['path'];

// Parse the rest of the GET variables
foreach ($_GET as $key=>$var) {
    if ($key != 'path' && $key != 'push') {
        $prev .= '&' . $key . '=' . $var;
    } 
}


// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['log_in_button'])) {
    
    // Functions for processing the login
    require "includes/login_functions.inc.php";

    // Function for processing previous page url
    require "includes/breadcrumb.inc.php";

    // Script to connect the database
    require "includes/mysqli_connect.inc.php";

    
    // Check the login
    list($check, $data) = check_login($dbc, $_POST['email'], $_POST['pass']);


    // If the login is successful
    if ($check && $data['active'] == 1) {
        
        // If 'remember me' is checked, set existence to +1 year
        if (isset($_POST['rememberme'])) {
            // Set the cookies:
            setcookie('user_id', $data['user_id'], strtotime('+1 year'), '/', '', 0, 0);
            setcookie('username', $data['username'], strtotime('+1 year'), '/', '', 0, 0);
            setcookie('user_tz', $data['time_zone'], strtotime('+1 year'), '/', '', 0, 0);
        } else {
            // Set the cookies:
            setcookie('user_id', $data['user_id'], 0, '/', '', 0, 0);
            setcookie('username', $data['username'], 0, '/', '', 0, 0);
            setcookie('user_tz', $data['time_zone'], 0, '/', '', 0, 0);
        }

        // Redirect:
        //redirect_user('login_redirect.php');

        header('Location: ' . $prev);

    } else {
    
        // Assign $data to $errors for error reporting
        $errors = $data;
        
        // Go to failed login page
        header('Location: login_failed.php');
    }

    // close the connection
    $dbc->close();

}
?>
