<?php 

include_once("../database/connect.php");

$connect = new mysqli('localhost','root','','proj01');

$username = "";
$email = "";
$password = "";

// Check For USERNAME

function userNameExist($username){
	$sql = "SELECT username FROM `user` WHERE username = '".$username."'";
	$result = $connect->query($sql);
	if ($result->num_rows > 0) {
		return 0;
	}else{
		return 1;
	}
}

// Check For EMAIL

// function emailExist($email){
// 	$connect = new mysqli('localhost','root','','proj01');
// 	$sql = "SELECT username FROM `user` WHERE username = '".$username."'";
// 	$result = $connect->query($sql);
// 	if ($result->num_rows > 0) {
// 		return 0;
// 	}else{
// 		return 1;
// 	}
// }

echo userNameExist("jayesh");


 ?>