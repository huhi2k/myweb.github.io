<?php
$username="root";
$password="";
$server="localhost";
$dbname="webgame";
$conn=mysqli_connect($server,$username,$password,$dbname);
$conn->query("SET NAMES'utf8'");
if(!$conn){
	die("Không kết nối: ".mysqli_connect_error());
	exit();
}

?>