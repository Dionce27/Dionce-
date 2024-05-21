 <html>
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" id="viewport" content="width=device-width, initial-scale=1">
      <style> 
          body{  
             background-image: url('images/bodyimage.jpg');
             margin: 25px;
 
          }

    
          header {  
             background-color: rgb(255,255,255);
             height: 50px;
          }
          
          h2, li{ 
             display: inline;
             padding-left: 300px;
          }
    
          li,a {
             padding-left: 80px;
             text-decoration: none;
          }
     
          input {
             text-align: right;
             right: 20%;
             padding-top: 5px;
             width: 300px;
             height: 28px;
             border-radius: 15px;
             
          }
          
          .message {
             background-color: rgba(255,255,255,0.7);
             width: 50%;
             height: 100%;
             text-align: center;
          }
     
          .contact {
             background-color: rgba(255,255,255,0.8);
             width: 50%;
             text-align: center;
             
          }

          .container {
             display: flex;
             height: 100%;
          }
          
        
      </style>
    </head>
   
    <body>
       <header>
              <h2>Messages <input type="text" name="searchat" placeholder="Search Messages  "></h2>
              <li><a href="homepage.php">Home</a></li>
       </header>
         <div class="container">
           <div class="message"> 
              <h3 style="padding-top: 150px;">No Messages</h3>
           </div>
           <div class="contact">
              <h3 style="border-style: solid;">All Chats</h3>
           </div>
         </div>
    </body>
  
</html>		