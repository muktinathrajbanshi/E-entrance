<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "user_login_info";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("Failed to connect!");
}
