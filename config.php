<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'LoginUser');
define('DB_PASSWORD', '');
define('DB_NAME', 'AR-QUT-DATABASE');
 

$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>