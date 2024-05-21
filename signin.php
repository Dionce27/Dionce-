<?php
include "dionce.php";

if(isset($_POST['submit'])){
   $firstname = $_POST['first_name']
}

<html>
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" id="viewport" content="width=device-width, initial-scale=1">
       
    </head>
    <body style="background-image: url(images/bodyimage.jpg);">
       <div class="container">
        <div class="text-center mb-4">
            <h3>add user</h3>
             <p class="text-muted">Complete the form</p>
        </div>

        <div class="container d-flex justify-content-center">
            <form action="" method="post" style="width:50vw; min-width:300px;"> 
              <div class="row">
                 <div class="col">
                    <label class="form-label">First Name: </label>
                    <input type="text" class="form-control" name="first" placeholder="enter first name">
                 </div>

                 <div class="col">
                    <label class="form-label">Last Name: </label>
                    <input type="text" class="form-control" name="first" placeholder="enter last name">
                 </div>

                 <div class="mbs-3">
                    <label class="form-label">Email: </label>
                    <input type="text" class="form-control" name="first" placeholder="enter email">
                 </div>

                 <div class="form-group mb-3">
                    <label>gender</label>
                    <input type="radio" class="form-check-input" name="gender" id="male" value="male">
                    <label for="male" class="form-input-label">Male</label>
                    
                    <label>gender</label>
                    <input type="radio" class="form-check-input" name="gender" id="female" value="female">
                    <label for="female" class="form-input-label">Female</label>
                 </div>

                 <div>
                    <button type="submit" class="btn btn-success" name="submit">Save</button>
                    <a href="dionce.php" class="btn btn-danger">Cancel</a>
                 </div>

              </div>
            </form>
        </div>
       </div>
    </body>
</html>		