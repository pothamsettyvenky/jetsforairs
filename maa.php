<?php
$con= mysqli_connect("localhost", "root", "", "techmemer", "3308");
if(isset($_POST['submit'])){
 $otp=$_POST['p1'];
 $query="select * from tech where otp='{$otp}'";
 echo"$otp";
}

?>
