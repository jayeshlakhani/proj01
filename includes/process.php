<?php 

include_once("../database/db.php");

$username = $_POST['username'];
$email = $_POST['email'];
$password = md5($_POST['password_1']);

 ?>