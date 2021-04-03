<?php                                                                                                                                                     
    $email=$_REQUEST['email'];
    $name=$_REQUEST['name'];
    
    $message=$_REQUEST['message'];
     $fmail='techmemer003@gmail.com';
     if(empty($name)|| empty($email) || empty($message))
     {
         echo"please fill all the fields";
     }
     else
     {
         mail($email, $message, $name ,"the mail is from :$fmail to $name ");
         echo "<script type='text/javascript'><alert('your message sent succesfully');
         window.history.log(-1) </script>";
     }
?>