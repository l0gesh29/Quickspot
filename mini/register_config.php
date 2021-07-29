<?php

session_start();

$name=$_POST['name'];
$mobile_no=$_POST['mobile_no'];
$email=$_POST['email'];
$address=$_POST['address'];
$location=$_POST['location']
$password=$_POST['password'];
$re_password=$_POST['re_password'];


$conn=new mysqli('localhost','root','','backend');
if($conn->connect_error){
	echo "Database Not Connected";
}else
{
	$stmt=$conn->prepare("insert into users(name,mobile_no,email,address,location,password,re_password) values(?,?,?,?,?,?)");
	$stmt->bind_param("ssiiss",$name,$mobile_no,$email,$address,$location,$password,$re_password);
	$stmt->execute();
	$stmt->close();
	$conn->close();
	
	readfile("login.php");
}
?>