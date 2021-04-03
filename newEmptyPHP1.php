<?php
$con = mysqli_connect("localhost", "root", "", "venky1","3308") or die(mysqli_error($con));
session_start();
$name= $_POST['name'];
$email=$_POST['Email'];
$password= $_POST['password'];
$city=$_POST['city'];
$contact=$_POST['contact'];
$address=$_POST['address'];
$user_registration_query = "insert into register(name,email,password,city,contact,address) values ('$name','$email','$password','$contact','$city','$address')";
$user_registration_submit = mysqli_query($con, $user_registration_query) or die(mysqli_error($con));
header("location:index.php");
$_SESSION['name']=$name;
$_SESSION['id']= mysqli_insert_id($con);

?>

