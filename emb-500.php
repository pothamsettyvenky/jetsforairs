<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
       <html>
    <head>
        
        
         <link rel="stylesheet" href="boot/css/bootstrap.min.css" type="text/css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">

  
        <link rel="stylesheet" href="../package/swiper-bundle.min.css">
        <link rel="stylesheet" type="text/css" href="jet1.css">
        <title>EMB-500</title>
        <style>
             .myimg{
                border:2px solid black;
               margin-left: 20px;
            }
            #bd{
               
                cursor:pointer;
               
                padding-bottom:50px;
            }
            #fd{
              
                cursor:pointer;
                padding-bottom:50px;
            }
         
            #vc{
                text-decoration: none;
                font-size:40px;
               
                margin-bottom:1200px
                
                
                
            }
            button{
                background-color: skyblue;  
                height:170px;
                font-size: 40px;
                padding-down:50px;
                
            }
            #inter{
                 border:3px solid lightskyblue;
                 padding:100px;
            }
            .interior img{
                margin-left:40px;
            }
            .interior h3 {
                text-align: center;
           
            }
            .interior{
                     border:3px solid lightskyblue;
                     
            }
            #butt{
                height: 100px;
                width:500px;
                margin-left: 500px;
                margin-top:100px;
            }
        </style>
    </head>
    <body>
        <div class="header"><h3>WELCOME TO TECHMEMER AIRWAYS</h3>
               </div>
            <input type="checkbox" id="openSidebarMenu">
            <label for="openSidebarMenu" class="sidebariconToggle">
                <div class="mine top"></div>
                <div class="mine middle"></div>
                <div class="mine bottom"></div>
            </label>
          
                         
       
         <div class="sidebar">
                <ul class="menu">
                    <li><a href="mainpage.php">Home</a></li>
                    <li><a href="about.php"> About us</a></li>
                    <li><a href="services.php"> service</a></li>
                    <li><a href="contactus.php">contact us</a></li>
                    
                </ul>
        </div>    
       <div class="jumbotron">
           <center> <h2>WELCOME TO Embraer EMB-500 Phenom</h2>
       </div>
            <div class="description">
                <center> <h3>The Embraer EMB-500 Phenom 100 is a very light jet developed by Brazilian aircraft manufacturer Embraer,<br/> Type certificate is EMB-500.[4] As of April 2017,<br/> 350 were in service in 37 countries.[5]</h3>
                    <h3>The Phenom 100 has an oval fuselage with a 7.985 m³ (282 ft³) passenger cabin,<br/> a 1.47 m-high by 0.74 m-wide (4.5'x2.1') door and 1.2'x1' windows.<br/> Its unpressurized cargo hold is 1.56 m³ (54.9ft³).</br> Its structural life is 28,000 flight cycles or 35,000 hours, and it is built of 20% composite materials.<br/>

                    It has capacity for four passengers in its normal configuration, but it can carry up to seven passengers with a single crew, with an optional side-facing seat and belted toilet.[9] The cabin interior is designed by BMW</h3>
            </div>
            <div class="interior">
                
                    <h3>interior</h3>
                    <center> <h2>three images availble</h2></center>
                    <div id="inter">
                        <button style="margin-left:450px;"id="but1" onclick="prev()"><</button>
                    
                    <img  style="margin-left:10px; border:4px solid black; margin-right:10px; "id="img1"src="images/cabin.jfif" alt="responsive">
                    
                   
                       <button id="but2" onclick="next()">></button>
                    </div>
                    
                </div>
            </div>
            <div class="jetinte">
                <center><h1>GRAPHIC VIEW OF EMB-500</h1>
            <img  style="margin-left:10px; border:4px solid black; margin-left:50px;"src="https://image.slidesharecdn.com/executivejetsembraerday2006-090928071312-phpapp02/95/executive-jets-embraer-day-2006-30-728.jpg?cb=1254122094" alt="responsive"></center>
         </div>    
            <form>
                <button type="submit" id="butt">BOOK THE FLIGHT</button>
            </form>
    </body>
    <script src="images/jquery.js" type="text/javascript"></script>
    
    <script>
        var images=["images/cabin.jfif",
"images/cabin2.jfif",
"images/cabin3.jfif",

"images/caibin3.jfif"];

var num=0;
function next(){
    var slider=document.getElementById('img1');
    num++;
    if(num>=images.length){
        num=0;
        
    }
    slider.src=images[num];
}
function prev(){
  var slider=document.getElementById('img1');
    num--;
    if(num<0){
        num=image.length-1;
        
    }
    slider.src=images[num];
}

      
        </script>
</html>