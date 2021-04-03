<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <link rel="stylesheet" href="boot/css/bootstrap.min.css" type="text/css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
         <!--<link rel="stylesheet" type="text/css" href="newcss.css"> -->
        <style>
            p{
               
               font-family: Courier New;
               style:"font-size: 14px";
            }
          .footer{
    padding: 10px 0;
    
    color:white;
    bottom: 0;
    width: 100%;
    font-family:Courier New;
        
}    
.footer a{
    text-decoration: none;
    color: whitesmoke;
    padding: 7px;
    position: relative;
    border: 2px solid orange;
    overflow:hidden;
    transition: 1s all ease;
}
.footer a::before{
    background: orange;
    content:"";
    position: absolute;
    top:50%;
    left:50%;
    transform:translate(-50%,-50%);
    z-index: -1;
    transistion:all 0.6s ease;
}
.footer1 a::before{
    width:100%;
    height:0%;
}

.footer a:hover::before{
   width:100%;
   
    
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
                        
                    </button>
                
                <a href="#" class="navbar-brand">LifeStyle Store</a>
                </div>
            
           <div class="collapse navbar-collapse" id="mynav">
            <ul class="nav navbar-nav navbar-right">
                <li ><a href="cart.html"><span class="glyphicon glyphicon-shopping-cart">cart</span></a></li>
                <li><a href="logout.html" target="blank"><span class="glyphicon glyphicon-log-in">.Logout</span></a></li>
                 <div class="dropdown">
    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">settings
    <span class="glyphicon glyphicon-wrench"></span></button>
    <ul class="dropdown-menu">
        <li><a href="updatename.php">change name</a></li>
      <li><a href="#">change password</a></li>
      <li><a href="#">report</a></li>
    </ul>
    </div>
    </div>
            </div>
       
                
  
               
           </div>
            </div>
           
                
       </nav> 
        <br>
        <br>
        <br/>
        
            
        <div class="container">
        <div class="jumbotron">
            <center><h1 style="font-size: 55px";> Welcome to our Lifestyle Store!</h1>
                <p  >We have the best cameras, watches and shirts for you. No need to hunt around, we
                    have all in one place.</p></center>
        </div>    
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                    <img src="images/1.jpg" alt="responsive"></a> <br><br>
                    <div class="caption">
                        <center><h1>cannon DSLR</h1>
                            <p>price Rs.36000.00</p></center>
                        <a href="newhtml.html"><button type="submit" class="btn btn-primary btn-block">submit</button></a>
                    </div>
                </div>
                </div>    
            <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                
                <img src="images/2.jpg" alt="responsive" class="thumbnail" >
                <div class="caption">
                    <center> <h2>Sony DSLR</h2>
                        <p> price Rs:40000.00</p></center>
                    <a href="#">
                    <button type="button" class="btn btn-primary btn-block">Add to cart</button>
                </a>
                </div>
                    </div>
                </div>
           <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                <img src="images/3.jpg" alt="responsive" class="thumbnail" >
                <div class="caption">
                    <center> <h2>Sony DSLR</h2>
                        <p> price Rs:50000.00</p></center>
                     <a href="#">
                    <button type="button" class="btn btn-primary btn-block">Add to cart</button>
                </a>
                </div>
                    </div>
                </div>

                   <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                      <img src="images/4.jpg" alt="" class="thumbnail">
                    <div class="caption">
                        <center> <h2>Olympus Dslr</h2>
                            <p>price:Rs.80000.00</p></center>
                            <a href="#">
                            <button type="button" class="btn btn-primary btn-block">Add to cart</button>
                            </a> 
                    </div>
                    </div>
                   </div>
                    
            </div>
            <div class="row">
                            <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                              <img src="images/13.jpg" alt="" class="thumbnail">
                    <div class="caption">
                        <center><h1>Twills</h1>
                            <p>price:Rs.16000.00</p></center>
                             <a href="#">
                            <button type="button" class="btn btn-primary btn-block">Add to cart</button>
                            </a>
                      
                    </div>
                    </div>
                    </div>            
                             <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">  
                        <img src="images/8.jpg" alt="" class="thumbnail"><br>
                    <div class="caption">
                        <center><h1>john deer</h1>
                            <p>price:Rs.1500.00</p></center>
                             <a href="#">
                            <button type="button" class="btn btn-primary btn-block">Add to cart</button>
                            </a>
                      
                    </div>
                    </div>
                             </div>
                    <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                          <img src="images/6.jpg" alt="" class="thumbnail">
                    <div class="caption">
                        <center><h1>Raymond</h1>
                            <p >price:Rs.2000.00</p></center>
                             <a href="#">
                            <button type="button" class="btn btn-primary btn-block">Add to cart</button>
                            </a>
                    </div>
                    </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                              <img src="images/14.jpg" alt="" class="thumbnail">
                    <div class="caption">
                        <center><h1>merchent</h1>
                            <p>price:Rs.6000.00</p></center>
                             <a href="#">
                            <button type="button" class="btn btn-primary btn-block">Add to cart</button>
                            </a>
                      
                    </div>
                    </div>
                    </div>
        </div> 
            <div class="row">
              <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                             <img src="images/10.jpg" alt="" class="thumbnail">
                    <div class="caption">
                        <center><h1>classic model#11</h1>
                            <p >price:Rs.1600.00</p></center>
                             <a href="#">
                            <button type="button" class="btn btn-primary btn-block">Add to cart</button>
                            </a>
                    </div>  
                    </div>
                    </div>
            <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                         <img src="images/11.jpg" alt="" class="thumbnail">
                    <div class="caption">
                        <center><h1>Titan MOde#l121</h1>
                            <p>price:Rs.16000.00</p></center>
                             <a href="#">
                            <button type="button" class="btn btn-primary btn-block">Add to cart</button>
                            </a>
                    </div> 
                    </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
            
                        <img src="images/9.jpg" alt="" class="thumbnail"><br><br>
                    <div class="caption">
                        <center><h1>fast-track</h1>
                            <p >price:Rs.6000.00</p>
                      <a href="#">
                            <button type="button" class="btn btn-primary btn-block">Add to cart</button>
                            </a>
                      
                    </div>
                    </div>
                    </div>     
                    <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
            
                              <img src="images/11.jpg" alt="" class="thumbnail"><br><br>
                    <div class="caption">
                        <center><h1>Rollex</h1>
                            <p>price:Rs.66000.00</p></center>
                             <a href="#">
                            <button type="button" class="btn btn-primary btn-block">Add to cart</button>
                            </a>
                    </div>  
                    </div>
                    </div>
                             
                </div>
        </div>
        <br>
        <br>
        <br>
        
        <br/>
     
        <div class="footer footer1">
        
        <nav class="nav  navbar-inverse navbar-fixed-bottom">
        
    <center><h4>Copyright © Lifestyle Store. All Rights Reserved” and “Contact Us: +91 90000 00000</h4></center>
       <div class="container">
        <div class="row">
        <div class="col-md-3  col-sm-6">
            <h3> My information</h3>
            <h5><a href="#" text-decoration=none; color=white;>About us</a></h5>
         
        </div>   
        </div>
        </div> 
    </nav> 
    </div>
            
        
        
                 
    </body>
</html>
