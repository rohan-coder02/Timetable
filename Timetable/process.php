<?php
$mysqli=new mysqli('localhost','root','','teacheraccounts');
if($mysqli->connect_error){
printf("can not connect databse %s\n",$mysqli->connect_error);
exit();
}


if(isset($_POST)){
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $email = $_POST['email'];
  $phonenumber = $_POST['phonenumber'];
  $password = $_POST['pwd'];
  $query = "INSERT INTO teachers(firstname, lastname, email, phonenumber, password) VALUES('$firstname','$lastname','$email','$phonenumber','$password')";
  $insert=$mysqli->query($query);
  if($insert){
    echo "successfully saved";
  }
  else{
    echo "unsuccessful";
  }
}else{
	echo 'No data';
}
