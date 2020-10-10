<?php  
   session_start();
   include_once '../model/db.php';
   if (empty($_SESSION)) {
    header('location:login.php');
   }
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Form</title>
     <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   </head>
   <body>
      <div class="container">
         <?php include_once 'nav.html'; ?>
         <h2>Form</h2>
         <form action="../controller/FormController.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
               <label for="name">Name:</label>
               <input type="text" class="form-control" id="email" placeholder="Enter name" name="name">
            </div>
            <div class="form-group">
               <label for="mobile">Mobile:</label>
               <input type="number" class="form-control" id="mobile" placeholder="Enter Mobile Number" name="mobile">
            </div>
            <div class="form-group">
               <label for="dob">DOB:</label>
               <input type="date" format="DD-MM-YYYY" class="form-control" id="date" placeholder="Enter date" name="dob">
            </div>
            <div class="form-group">
               <label for="description">Description:</label>
               <input type="text" class="form-control" id="description" placeholder="Enter description" name="description">
            </div>
            <div class="form-group">
               <label>Gender</label><br>
               <label><input type="radio" name="gender" value="male" checked="">Male</label>&emsp;
               <label><input type="radio" name="gender" value="female">Female</label>    
            </div>
            <div class="form-group">
               <label for="upload">Profile Image</label>
               <input type="file" name="profile_image">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
         </form>
      </div>
   </body>
</html>
