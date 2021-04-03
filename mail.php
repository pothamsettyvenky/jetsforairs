<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <script type="text/javascript">
            function butt(){
               
        var num=document.getElementById("but").value;
        var regx1=/^[5-9]\d{9}$/;
        if(regx1.test(num)){
            alert("send otp to your mobile");
        }
        
         else{
            alert("check the number you entered");
        }
        
     
        }
        </script>
        <title></title>
    </head>
    <body>
        <div class="header">
            <form action="mai1.php" method="post">
                <input type="num" name="number1" id="but" placeholder="please enter  your number">
               <br/>
                <input type="number" " onclick="butt()"placeholder="enter the otp" name="p1"><br/>
                <a href="#">click here to get otp again</a><br>
                 <button type="submit"  name="getotp" value="getotp">getotp</button>
                 <button type="submit"  name="submit" value="submit">submit</button>
                 
                 
                
            </form>
        <?php
        // put your code here
        ?>
    </body>
</html>
