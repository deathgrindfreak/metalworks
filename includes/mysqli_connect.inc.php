<?php # Script for connecting to mysql database


// Set the database user info as constants
define("DB_HOST", "YOUR_HOST_NAME");
define("DB_USER", "YOUR_USER_NAME");
define("DB_PASSWORD", "YOUR_PASSWORD");
define("DB_NAME", "YOUR_DB_NAME");

//Make the connections
try {
    if(!($dbc = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME))) {
        throw new Exception($dbc->connect_error, $dbc->connect_errno);
    }
} catch (Exception $e) {
    $e->getMessage();
}

// Set the encoding
$dbc->set_charset('utf8');
