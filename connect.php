<?php
session_start();
$servername="localhost";
$hostname="root";
$password="";
$dbname="cart";

if(!$_SESSION['cart_items'])
{
	$_SESSION['cart_items']=[];
}

$conn=mysqli_connect($servername,$hostname,$password);
if($conn->connect_error)
{
	die('Connection Failed: '.$conn->maxdb_connect_error);
}
mysqli_query($conn,"use $dbname");

?>