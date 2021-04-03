<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>switch the singup tabs</title>
        <link rel="stylesheet" href="boot/css/bootstrap.min.css" type="text/css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
         <link rel="stylesheet" type="text/css" href="newcss22.css">
        <script>
            $(document).ready(function(){
                $(".login-form").hide();
                $(".lo-gin").css("background","none");
                
                $(".lo-gin").click(function(){
                    $(".signup-form").hide();
                    $(".login-form").show();
                    $(".sign-up").css("background","none");
                    $(".lo-gin").css("background","rgba(0,0,0,1)");
                    $(".sign-up").css("text-transform"," lowercase");
                    $(".lo-gin").css("text-transform"," uppercase");
                });
                    $(".sign-up").click(function(){
                    $(".signup-form").show();
                    $(".login-form").hide();
                    $(".sign-up").css("background","rgba(0,0,0,1)");
                    $(".lo-gin").css("background","none");
                    $(".lo-gin").css("text-transform"," lowercase");
                    $(".sign-up").css("text-transform"," uppercase");
                    
                });                
            });
             function user(){
                var myname=document.getElementById("v1").value;
                var regx=/[a-Z]@gmail.com/;
                if((regx.test(myname))){
                   document.getElementById("log").style.visibility="visible";
                   myname.style.border="solid 3px red";
                   
                  } 
                  else
                  {
                  alert("check ypur mail");
                   myname.style.border="solid 3px green";
               }
    }               
           function otp(){
                var number=Math.ceil(Math.random()*1000000+1);
           }
          
            
            </script>
    </head>
    <body>
       <div class="back">
            </div>
        <div class="header">
            <a href="#">  <h3>welcome to tech-AREO</h3></a>
        </div>
        <div class="container">
            <div class="sign-up">sign-up</div>
            <div class="lo-gin">lo-gin</div>
        
        <div class="signup-form">
            <form method="post" action="backend.php" >
                
                <input onclick="mail()" id="v1" type="email" placeholder="enter the mail" name="email" required="true">
            <input onclick="user()" type="text" placeholder="enter usernamel" name="username" required="true"><br/>
            <input onclick="pass()" type="password" placeholder="enter password"name="password" required="true"><br/>
            <input  type="number" placeholder="enter the number" name="number1">
            <input onclick="otp()" type="number" placeholder="enter your otp" name="number1">
            <button type="submit" name="submit">submit</button>
             <label id="log" style="color:lightskyblue; visibility: hidden;">valid email</label>
            <label id="log1" style="color:lightskyblue; visibility: hidden;"> please enter email</label>
            <label id="log1" style="color:lightskyblue; visibility: hidden;">invalid mail</label>
            </form>       
        </div>
            <div class="login-form">
                <form method="post" action="logintech.php">
               <input type="text" placeholder="enter the mail" name="email" ><br/>
               <input type="password" placeholder="enter the password" name="password" ><br/>
               <button type="submit" name="lo-gin" >Lo-gin</button>
                </form>            
            </div>   
            
      </div>  
        
    </body>
</html>

