<?php


$dbhost = "localhost";
$dbuser = "root";
$dbpass = "localhost";
$dbname = "login";

$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
if(!$con ){
    die("error");
}


