<?php
$con= mysqli_connect("localhost", "root", "", "techmemer", "3308");
if(isset($_POST['getotp'])){
$number=$_POST['number1'];
$ppt= rand(10000, 100000);
$user_registration_query="insert into tech (otp,number)values('$ppt','$number')";
$user_ready= mysqli_query($con, $user_registration_query) or die(mysqli_error($con));
}
if(isset($_POST['submit'])){
    $pppp="select otp from tech";
    $otp=$_POST['p1'];
if ($otp==$pppp){
    echo'<script>(alert("activate"))</script>';
}

else{
   echo'<script>(alert("deactivate"))</script>';
}
}
?>
