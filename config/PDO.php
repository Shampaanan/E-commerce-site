<?php

$host = "localhost";
$dbname = "diu_shahanaz";
$user = "root";
$password ="";

$connection =new PDO("mysql:host=$host; dbname=$dbname", $user,$password);

if(!$connection){
    echo "Database Connection Failed!"."<br>";
}
echo "Database Suucefully Connected!"."<br>";
?>