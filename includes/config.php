<?php
$user="root";
$pass="";
$database="evoting";
$host="localhost";
$conn=mysqli_connect($host,$user,$pass,$database);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>