

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
         <title>Life style</title>
        <link rel="stylesheet" href="boot/css/bootstrap.min.css" type="text/css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="newcss.css">
    </head>
    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                
                <a href="newEmptyPHPWebPage.php" class="navbar-brand">LifeStyle Store</a>
                
            
            <div>
                <div>
            <ul class="nav navbar-nav navbar-right">
                <li class="content"><a href="#"><span class="glyphicon glyphicon-user">Signup</span></a></li>
                <li> <a href="#"><span class="glyphicon glyphicon-log-in">Login</span></a></li>
               
            </ul>
                    </div>         
        </nav> 
        <br>
        <br/>
        <br/>
        <div class="container">
            <div class="row">
                <div class="col-xs-4 col-xs-offset-4">
                    <h1> SIGN-UP</h1>
                    <form method="post" action="newEmptyPHP1.php">
                        <div class="form-group">
                            <input type="name" class="form-control"  placeholder="Name"name="name" required="true">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Email" name="Email" required="true">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Password" name="password"required="true">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Contact" name="contact" required="true">
                        </div>
                        <div class="form-group">
                            <input type="city" class="form-control"  placeholder="City" name="city" required="true">
                        </div>
                        <div class="form-group">
                            <textarea type="address" rows="4" class="form-control" placeholder="Address" name="address" required="true"></textarea>
                        </div>
                        <button type="submit" name="register" class="btn btn-primary">Lo-gin</button>
                        
                                
   
                   </form><br/>
                </div>
            </div>
        </div>
        
           <footer>
    <center><p>Copyright © Lifestyle Store. All Rights Reserved” and “Contact Us: +91 90000 00000</p></center>
            
         </footer> 
    </body>
</html>
