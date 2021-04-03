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
       <!-- -->
       <style>
          .container1{
    padding: 10px 0;
    background-color:#101010;
    color:#9d9d9d;
    bottom: 0;
    width: 100%;
          }
          nav a{
              font-family: Arial;
              text-align: center;
              display:block;
              color: #000;
          }
          nav a:hover{
              color: blue;
              transition-delay: 0.5s;
              text-transform: uppercase;
              
          }
           </style>
    </head>
    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                
                <a href="#" class="navbar-brand">LifeStyle Store</a>
                
            
            
                <div>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#"><span class="glyphicon glyphicon-user">Signup</span></a></li>
                <li> <a href="#"><span class="glyphicon glyphicon-log-in">Login</span></a></li>
               
            </ul>
                    </div>         
        </nav>
        <br>
        <br/>
        <br/>
        
         <br/>
         <br/>
              
        <div class="container">
            
            <div class="row">
                <div class="col-xs-4 col-xs-offset-4">
                    <div class="panel panel-primary">
                        <div class=" panel-heading">
                            <h1>Login</h1>
                        </div>
                        <div class="panel-body">
                            <form action="newEmptyPHP3.php" method="POST">
                                <div class="form-group">
                                <input type="email"  class="form-control" id="Email" placeholder="Email" name="Email" required="true">
                                </div>
                                <div class="form-group">
                                    <input type="password"  class="form-control" placeholder="Password" id="password"  name="password" required="true">
                                </div>
                                <button type="submit" name="submit" class="btn btn-primary">Lo-gin</button>
                               </form>
                                <br/>
                                </div>
                        
                        <div class="panel-footer">
                            <p>Don't you have a account?<a href="newEmptyPHPWebPage1.php">sing up</a></p>
                            
                        </div>    
                          
                    </div>
                </div> 
            </div>
        </div>
              </div>   
                </div>
             </div> 
        <div class="container1">
           <footer>
    <center><p>Copyright Â© Lifestyle Store. All Rights Reservedâ€� and â€œContact Us: +91 90000 00000</p></center>
    
         </footer> 
        </div>
    </body>
</html>
