<?php


$con=mysqli_connect("localhost","root","","teacheraccounts");

if(isset($_POST)){
	session_start();
	//$_SESSION['is_logged_in'] = 0;
	$username = $_POST['user'];
	$password = $_POST['pwd'];
  $query = "SELECT email, password FROM teachers WHERE email='$username' AND password='$password' limit 1";
  $result = mysqli_query($con, $query);
	$row = mysqli_fetch_array($result);
	if($row['email'] == $username && $row['password'] == $password){
		echo "Login Success";
	}
	else {
		echo "Unsuccessful";
	}
	mysqli_close($con);
}
