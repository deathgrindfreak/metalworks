<?php # Script to send verification email


// ver_email - sends the verification email to the address $email
function ver_email($email, $user, $pass, $hash) {

    // Pear Mail Library
    require_once "Mail.php";
    
    $confirm = 'http://' . $_SERVER['HTTP_HOST'] . '/verify.php?email=' . $email . '&hash=' . $hash;
    
    $from = 'YOUR_EMAIL';
    $subject = 'Login Verification for MetalWorks';
    $message = '

        Dear '.$user.',

        Thanks for making an account!  After the verification process is complete,
        You\'ll be able to login to your account with the credentials shown below:

        ----------------------------
        Username: '.$user.'
        Password: '.$pass.'
        ----------------------------

        Please click the link below to activate your account:
        '.$confirm.'

        \m/ Horns up! \m/,
        MetalWorks
    ';

    $headers = array(
        'From' => $from,
        'To' => $email,
        'Subject' => $subject
    );

    $smtp = Mail::factory('smtp', array(
        'host' => 'ssl://smtp.gmail.com',
        'port' => '465',
        'auth' => true,
        'username' => 'YOUR_EMAIL',
        'password' => 'YOUR_PASSWORD'
    ));

    $mail = $smtp->send($email, $headers, $message);

    // Check for errors
    if (PEAR::isError($mail)) {
        echo('<p>' . $mail->getMessage() . '</p>');
    } else {
        echo('<p>Message successfully sent!</p>');
    }


}


// pass_reset_email - sends the password reset email to $user at $email
function pass_reset_email($email, $user) {


    // Generate random password
    $pass = random_password();


    // Pear Mail Library
    require_once "Mail.php";
    
    $from = 'YOUR_EMAIL';
    $subject = 'Your New Password for MetalWorks';
    $message = '

        Dear '.$user.',

        You have requested a new password at MetalWorks since you 
        have forgot your old one.  A new one has been generated for
        you below, but feel free to reset your password upon logging
        in.

        ----------------------------
        Username: '.$user.'
        Password: '.$pass.'
        ----------------------------

        \m/ Horns up! \m/,
        MetalWorks
    ';

    $headers = array(
        'From' => $from,
        'To' => $email,
        'Subject' => $subject
    );

    $smtp = Mail::factory('smtp', array(
        'host' => 'ssl://smtp.gmail.com',
        'port' => '465',
        'auth' => true,
        'username' => 'YOUR_EMAIL',
        'password' => 'YOUR_PASSWORD'
    ));

    $mail = $smtp->send($email, $headers, $message);

    // Check for errors
    if (PEAR::isError($mail)) {
        echo('<p>' . $mail->getMessage() . '</p>');
    } else {
        echo('<p>Message successfully sent!</p>');
    }


    return $pass;
}


// random_password - generates a random password of length 8-13
function random_password() {

    // Array of all numbers, lower-case characters and upper-case characters
    $chars = array();

    // Numbers
    for ($i = 0; $i <= 9; $i++) {
        $chars[] = $i;
    }

    // lower-case characters
    for ($i = 97; $i <= 122; $i++) {
        $chars[] = chr($i);
    }

    // upper-case characters
    for ($i = 65; $i <= 90; $i++) {
        $chars[] = chr($i);
    }

    // Determine the length
    $length = rand(8, 13);

    // Initialize password string
    $pass = '';

    while (strlen($pass) <= $length) {
        $pass .= $chars[rand(0, sizeof($chars) - 1)];
    }

    return $pass;
}
