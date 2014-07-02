<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
  <head>
    <title><?php echo $page_title; ?></title>	
    <link type="text/css" rel="stylesheet" href="css/stylesheet.css"/>

<?php 

// Functions to add addition stylesheets and scripts
require "includes/add_stylesheets.inc.php";

// Start a database connection if it hasn't been started
require_once "includes/mysqli_connect.inc.php";

// Include the breadcrumb function
require "includes/breadcrumb.inc.php";


// Add in any additional scripts and stylesheets in addition to the main one
if (isset($stylesheets)) {
    add_stylesheets($stylesheets);
}

if (isset($scripts)) {
    add_scripts($scripts);
}


?>
    <link href="http://s3.amazonaws.com/codecademy-content/courses/ltp/css/shift.css" rel="stylesheet">
    <link href="images/pentagram.jpg" rel="icon" type="image/gif"/>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  </head>
  <body>
    <header>
      <div class="container">
          <div id="title_logo">
              <h1><a href="index.php" style="color: #fff; text-decoration: none;">\m/ M&euml;talW&ouml;rks \m/</a></h1>
          </div>
	 
<?php 

// If the search button is pressed
if (isset($_POST['button_search'])) {

    // encode the url with +'s for whitespace, etc...
    $search_term = urlencode($_POST['search_field']);

    // redirect to the search result page
    header("Location: forum_search.php?search=" . $search_term . '&page=1');
}


if (isset($_COOKIE['user_id']) && isset($_COOKIE['username'])) { 
    
    // Include the thread functions if they have not been included
    require_once "includes/thread_functions.inc.php";

?>

		<div id="user_info">
          <a href="member.php?u=<?php echo $_COOKIE['user_id']; ?>">
		  <p><strong>Welcome back, <?php echo $_COOKIE['username']; ?> </strong> (</a>
          <a href="<?php echo get_prev('logout.php', $_SERVER['REQUEST_URI']); ?>" onclick="return confirm('Are you sure you want to log out?')">Log Out</a> )</p>
    <p>Messages: <?php echo count_messages($dbc, $_COOKIE['user_id']); ?> &nbsp; &bull; &nbsp; Posts: <?php echo count_posts($dbc, $_COOKIE['user_id']); ?></p>
		</div>
      </div>
    </header>

    <nav>
      <div class="container">
        <ul>
          <li><a href="index.php"><div class="nav_button">Home</div></a></li>
          <li><a href="member.php?u=<?php echo $_COOKIE['user_id']; ?>"><div class="nav_button">Profile</div></a></li>
          <li><a href="#"><div class="nav_button">FAQ</div></a></li>
        </ul>
	 
<?php } else { ?>

        <div id="login">
            <form name="login_form" action="login.php?push=<?php echo push_prev('login_redirect.php', $_SERVER['REQUEST_URI']); ?>" method="post">
            <input type="email" name="email" placeholder="Email" required/>
            <input type="password" name="pass" placeholder="Password" required/>
            <label><input type="checkbox" name="rememberme" value="remember"/>Remember me</label>
            <input type="submit" name="log_in_button" value="Log In"/>
          </form>
        </div>
	 
      </div>
    </header>

    <nav>
      <div class="container">
        <ul>
          <li><a href="index.php"><div class="nav_button">Home</div></a></li>
          <li><a href="register_rules.php"><div class="nav_button">Register</div></a></li>
          <li><a href="#"><div class="nav_button">FAQ</div></a></li>
        </ul>

<?php } ?>

        <div id="nav_search">
            <div style="width: 290px; clear: both">
                <form name="nav-search-form" action="index.php" method="post">
                    <div style="float: left"><input name="search_field" type="text" placeholder="Search"/></div>
                    <button name="button_search" id="search_button" type="submit">
                        <img src="images/magnify.png" height="18px" width="18px"/>
                    </button>
                </form>
            </div>
        </div>
      </div>
      </div>
    </nav>

    <div class="breadcrumb">
        <div class="crumb_container">
            <a href="index.php">M&Euml;TALW&Ouml;RKS</a> <?php breadcrumb($dbc, $_SERVER['REQUEST_URI']); ?>
        </div>
    </div>
	           
    <div id="content"><!-- Start of the page-specific content. -->
<!-- Script 9.1 - header.html -->
