<?php
           
$config = parse_ini_file("./private/config.ini"); 
$connection = mysqli_connect($config['servername'], $config['username'], $config['password'], $config['dbname']);

// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

?>
