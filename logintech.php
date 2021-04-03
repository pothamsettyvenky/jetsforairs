
<?php
$con = mysqli_connect("localhost", "root", "", "techmemer","3308");
if(isset($_POST['lo-gin'])){
$email=$_POST['email'];
$password=($_POST['password']);
$query="select * from tech where email='{$email}' and password='{$password}'";
$result= mysqli_query($con,$query);
$count=mysqli_fetch_array($result);
if($count==true){
    header("location:mainpage.php");
    
}
else{
    echo"<script>alert(\"Login failed\");</script>";
    //header("location:index.php");
    
}
}
//$user_registration_query = "insert into register(email,password) values ('$email','$password')";
//$user_registration_submit = mysqli_query($con, $user_registration_query) or die(mysqli_error($con));
//echo "User successfully inserted";
?>

