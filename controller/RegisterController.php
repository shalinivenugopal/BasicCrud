<?php 
  include_once '../model/db.php';
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = md5($_POST['password']);
  $insert = "INSERT INTO datas (username,email,password) VALUES ('$username', '$email', '$password')";
  $check_already_registered_or_not =mysqli_query($conn,"SELECT * FROM datas WHERE email = '$email'");
  if(mysqli_num_rows($check_already_registered_or_not) > 0){
    header('location:../views/login.php?status=already registered');
  }else{
    if(mysqli_query($conn,$insert)){
      header('location:../views/login.php?status=success');
    }else{
      header('location:../views/login.php?status=error');
    }
  }
?>
