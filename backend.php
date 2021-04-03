<?php
$con= mysqli_connect("localhost","root","","techmemer","3308") or die(mysqli_error($con));
session_start();
$email=$_POST['email'];
$username=$_POST['username'];
$password=$_POST['password'];
$user_registration_query="insert into tech (email,username,password)values('$email','$username','$password')";
$user_ready= mysqli_query($con, $user_registration_query) or die(mysqli_error($con));
echo"<script type=text/css>document.write('loginsuccesfull')</script>";
 ?>
