<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <link rel="stylesheet" href="boot/css/bootstrap.min.css" type="text/css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <title>change name</title>
        <style>
            .container1{
                background-color: #000;
                width: 100%;
                padding:10px;
               
                color: #9d9d9d;
            }
            nav a{
              font-family: Arial;
              text-align: center;
              display:block;
              color: #000;
              
          }
          nav a:hover{
              
              transition-delay: 0.5s;
              text-transform: uppercase;
             
              
          }
          .venky{
              text-decoration: none;
              color:#843534;
              font-size: 50px;
          }
        </style>
    </head>
    <body>
           <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynav">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        
                    </button>
                
                <a class="venky" href="newEmptyPHPWebPage.php" class="navbar-brand">LifeStyle Store</a></center>
                </div>
            
           <div class="collapse navbar-collapse" id="mynav">
            <ul class="nav navbar-nav navbar-right">
                <br/>
                <li> 
                       
                            <input type="search" name="search" placeholder="search" rows="2" class="form-control"x>
                       
                    </li>
                        
                    
                <li ><a href="cart.html" class="navbar-link" ><span class="glyphicon glyphicon-shopping-cart">cart</span></a></li>
                <li><a href="logout.html" class="navbar-link"><span class="glyphicon glyphicon-log-in">.Logout</span></a></li>
                 <div class="dropdown">
                     
    <button class="btn btn-primary navbar-dark bg-success" type="button" data-toggle="dropdown">settings
    <span class="glyphicon glyphicon-wrench"></span></button>
    <ul class="dropdown-menu">
        <li><a href="updatename.php">change name</a></li>
      <li><a href="#">change password</a></li>
      <li><a href="#">report</a></li>
    </ul>
    </div>
    </div>
            </div>
               </nav>
               <br/>
               <br/>
               <br/>
               <br/>
               <div class="container">
                   <div class="row">
                    <div class="col-xs-4 col-xs-offset-4">
                    <div class="panel panel-primary">
                        <div class=" panel-heading">
                            <h1>UpdateName</h1>
                   </div>
                        <div class="panel-body">
                            <form>
                                <div class="form-group">
                                   Name <input type="name" class="form-control" placeholder="name">
                                   
                                </div>
                                <div class="form-group">
                                    Re-enter<input class="form-control" type="name" placeholder="name">
                                </div> 
 
                                <div class="form-group">
                                    <button type="submit" name="submit" class="btn btn-primary">submit</button>
                                </div>
                        </div>
                    </div>  
                                
                            </form>  
                        </div>
                     
                    </div>
                    </div>
                   </div>
                  
                   
               </div>
               <footer>
                   <div  class="container1">
                         <center> <p>Copyright © Lifestyle Store. All Rights Reserved” and “Contact Us: +91 90000 00000</p></center>
                   </div>
               </footer>
                
  
               
          
           
                
        
         
       
         
    </body>
</html>
