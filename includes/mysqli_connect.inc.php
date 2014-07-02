<?php # Script for connecting to mysql database


// Set the database user info as constants
define("DB_HOST", "localhost");
define("DB_USER", "sciencefair");
define("DB_PASSWORD", "sciencefair");
define("DB_NAME", "SF_S14");

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
