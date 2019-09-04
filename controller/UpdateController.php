<?php 
include_once '../model/db.php';
session_start();

  $name = $_POST['name'];
  $mobile = $_POST['mobile'];
  $dob = $_POST['dob'];
  $description = $_POST['description'];
  $gender = $_POST['gender'];

  $id = $_SESSION['id'];

 $sql = "UPDATE `form` SET `name`='$name',`mobile`='$mobile', `dob`=`$dob`,`description`='$description',`relationship`='$relationship',`gender`='$gender' WHERE id = $id";


  if(mysqli_query($conn,$sql)){
    header('location:../views/update.php?status=success');
  }else{
    header('location:../views/update.php?status=error');
  }
?>