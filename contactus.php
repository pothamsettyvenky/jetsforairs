<html>
    <head>
        
         <link rel="stylesheet" href="boot/css/bootstrap.min.css" type="text/css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="jet1.css">
        <title>TECHMEMER</title>
        <style>
            .menu .one{
                background-color:lightskyblue;
               
            }
            a{
                color:lightskyblue;
                list-style: none;
            }p
            input {
                margin:200px 400px 0px;
                width:450px; 
            }
            textarea{
                margin:00px 400px 0px;
            }
            button{
                 margin:00px 400px 0px;
                 background-color: lightskyblue;
                 height:60px;
                 width:450px;
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
                    <li><a href="contactus.php" style=" background-color:lightskyblue;">contact us</a></li>
                    
                </ul>
        </div>    
          
         <br/>
         <br/>
         <br/>
         <br/>
         
          <div class="container">
              <form method="post" action="send.php">
             <div class="form-group">
                 <center> <input type="text" name="name" class="form-group" placeholder="enter your name">
                     <input type="email" name="email" class="form-group" placeholder="enter your email"></center>
             </div>
              
             
              <textarea type="email" name="message" class="form-group" rows="10" cols="60"placeholder="enter your message"></textarea>
              <button type="submit" name="sent">send</button>
                  </form>
             
          </div>
    </body>
</html>