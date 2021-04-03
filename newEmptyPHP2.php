<?php
$con= mysqli_connect("localhost","root","","venky1") or die(mysqli_error($con));
$name=$_GET['name'];
$userid=$_SESSION['id'];
$update_query="UPDATE register set name='$name' where id='$userid";
$update_name_result= mysqli_query($con, $update_query) or die(mysqli_error($con));
echo"name is updated";
?>

