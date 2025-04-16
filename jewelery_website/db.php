<?php
$servername="localhost";
$username="root";
$password="";
$databse="jewelery_db";

$conn= new mysqli($servername,$username,$password,$databse);
if($conn->connect_error)
{
    die("Connection failed: ".$conn->connect_error);
}
?>