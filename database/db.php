<?php 
session_start();
$connect = new mysqli('localhost','root','','proj01');
if ($connect->connect_error) {
	die($connect->connect_error);
}else{
	// echo "Connected!!"."<br>";
}


 ?>