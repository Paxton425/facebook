<?php
//Database credentials
    define('DB_SERVER','localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '11paradise');
    define('DB_NAME', 'facebook_data');
	
//Atempt to connect to MySQL database
    $link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
	
//Check connection
    if($link ==false){
       die("ERROR: Could not connect. ". mysqli_connect_error());
	}	
?>