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


// Redirect after 5 seconds
header('Refresh: 5; URL=' . $prev);
?>


<!DOCTYPE html>
<html>
  <head>
    <title>Login Redirect</title>
    <link href="css/stylesheet.css" type="text/stylesheet" rel="stylesheet"/>
    <link href="images/pentagram.jpg" rel="icon" type="image/gif"/>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  </head>
  <body>
    <main style="background: none; border: none; box-shadow:
    none;-webkit-box-shadow: none; -moz-box-shadow: none;">
      
      <!-- for vertical spacing -->
      <div style="margin-bottom: 100px;"></div>

      <div id="redirect">
        
        <div id="redirect_header">
          <h2>Redirecting...</h2>
        </div>
        
        <!-- for vertical spacing -->
        <div style="margin-bottom: 70px;"></div>
        
        <div style="margin: 0 auto; text-align: center;">
          <p>Thank you for logging in, <strong><?php echo $_COOKIE['username']; ?></strong>.</p>
          <p><a href="<?php echo $prev; ?>">Click here if your browser does not
              redirect you</a></p>
        </div>
        
      </div>
    </main>
  </body>
</html>
