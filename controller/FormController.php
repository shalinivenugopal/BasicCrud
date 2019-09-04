<?php 
include_once '../model/db.php';
session_start();

  $name = $_POST['name'];
  $mobile = $_POST['mobile'];
  $dob = $_POST['dob'];
  $description = $_POST['description'];
  $gender = $_POST['gender'];

  $id = $_SESSION['id'];

   $sql = "INSERT INTO form (name,mobile,dob,description,gender) VALUES ('$name', '$mobile', '$dob', '$description', '$gender')";
   


  
  if(mysqli_query($conn,$sql)){
    header('location:../views/form.php?status=success');
  }else{
    header('location:../views/form.php?status=error');
  }
?>