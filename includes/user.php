<?php 

include_once("process.php");



// Check For USERNAME

// function userNameExist($username){
// 	$sql = "SELECT username FROM `user` WHERE username = '".$username."'";
// 	$result = $connect->query($sql);
// 	if ($result->num_rows > 0) {
// 		return 0;
// 	}else{
// 		return 1;
// 	}
// }

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

// ADD NEW USER

function addNewUser($username,$email,$password){
	$connect = new mysqli('localhost','root','','proj01');
	if($connect->query("INSERT INTO `user`(`username`, `email`, `password`) VALUES ('$username','$email','$password')")){
		echo $connect->insert_id;
		// header('Location: http://localhost/proj01/index.php');
	}else{
		die($connect->error);
	}
}

addNewUser($username,$email,$password);

 ?>