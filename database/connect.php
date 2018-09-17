<?php 

$connect = new mysqli('localhost','root','','proj01');
if ($connect->connect_error) {
	die($connect->connect_error);
}else{
	echo "Connected!!"."<br>";
}
$username = $_POST['username'];
$email = $_POST['email'] ;
$password = md5($_POST['password_1']);
$password_2 = md5($_POST['password_2']);
if ($password === $password_2) {
	$sql = 'SELECT email FROM user WHERE email = "'.$email.'"'.' OR username = "'.$username.'"';
	$result = $connect->query($sql);

	if ($result->num_rows > 0) {
		echo "Already Register"."<br>";
		header("Location: http://localhost/proj01/register.php");
	}else{
		$stmt = $connect->prepare("INSERT INTO `user`(`username`, `email`, `password`) VALUES (?,?,?)");
		$stmt->bind_param('sss',$username,$email,$password);

		if ($stmt->execute() === true) {
			echo "Registered";
			header("Location: http://localhost/proj01/index.php");
		}else{
			die($connect->error);
		}
	}
}else{
	echo "Password Does Not Match";
	header("Location: http://localhost/proj01/register.php");
}

$connect->close();
 ?>