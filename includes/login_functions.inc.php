<?php # Functions for logging into site

// redirect_user - redirects the user to the absolute URL located at $page
function redirect_user($page = 'index.php') {
        
    // url is host name + current directory
    $url = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']);

    // trim any trailing slashes 
    $url = rtrim($url, '/\\');
    
    // add the page to the end
    $url .= '/' . $page;
    
    // redirect
    header('Location: $url');
    
    // exit the script
    exit();
}


// check_login - checks whether the user input (email and password)
// are both valid
function check_login($dbc, $email = '', $pass = '') {

	// Initialize errors array
	$errors = array();
	
	// Validate the email address
	if (empty($email)) {
		$errors[] = 'You forgot to enter your email address.';
	} else {
		$e = mysqli_real_escape_string($dbc, trim($email));
	}
	
	// Validate the password
	if (empty($pass)) {
		$errors[] = 'You forgot to enter your password.';
	} else {
		$p = mysqli_real_escape_string($dbc, trim($pass));
	}

	// If no errors have occurred, query the database
	if (empty($errors)) {
		$q = "SELECT user_id, username, time_zone, active FROM users WHERE email = '$e' AND pass = SHA1( '$p' )";
		$r = $dbc->query($q);
	}
	
	// Check the query
	if ($r->num_rows == 1) {
		$row = $r->fetch_array(MYSQLI_ASSOC);
		return array(true, $row);
	} else {
		$errors[] = 'The email and password entered do not match those on file.';
	}
	
	// Return false and the errors array if the login failed
	return array(false, $errors);
}
