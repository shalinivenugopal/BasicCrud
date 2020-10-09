<?php 
session_start();
  include_once '../model/db.php';
  if (empty($_SESSION)) {
    header('location:login.php');
  }
  ?>
<!DOCTYPE html>
<html>
   <head>
      <title>Show</title>
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
      	<h1>Data List</h1>
      	<a href="form.php" class="btn btn-primary btn-sm">Create New</a>
         <table class="table">
            <thead>
               <tr>
                  <th>Name</th>
                  <th>Mobile</th>
                  <th>DOB</th>
                  <th>Description</th>
                  <th>Gender</th>
                  <th>Image</th>
               </tr>
            </thead>
            <tbody>
               <?php $sql="SELECT * FROM form";
                  $result = mysqli_query($conn, $sql);
                  while ($data = mysqli_fetch_array($result)){ ?>
               <tr>
                  <td><?= $data['name'] ?></td>
                  <td><?= $data['mobile'] ?></td>
                  <td><?= $data['dob'] ?></td>
                  <td><?= $data['description'] ?></td>
                  <td><?= $data['gender'] ?></td>
                  <td><img src="../uploads/<?= $data['profile_image'] ?>" class="img-circle" style="width:70px"></td>
                  <td>
                     <a href="../views/update.php?edit=<?php echo $data['id']; ?> ">Edit</a>
                  </td>
                  <td>
                     <a onclick="return confirm('Are you sure?')" href="../controller/DeleteController.php?delete=<?php echo $data['id']; ?>">Delete</a>
                  </td>
               </tr>
               <?php	} ?>
            </tbody>
         </table>
      </div>
   </body>
</html>