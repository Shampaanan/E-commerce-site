<?php
$host="localhost";
$dbname="diu_halima";
$user="root";
$password="";

$connection = new PDO("mysql:host=$host; dbname=$dbname" $user,$password);

if(!$connection){
    echo "Database connection failed". "<br>";

}
echo "Database successfully connected"."<br>";

?>