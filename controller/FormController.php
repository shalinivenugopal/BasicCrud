<?php 
include_once '../model/db.php';
session_start();

    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $dob = $_POST['dob'];
    $description = $_POST['description'];
    $gender = $_POST['gender'];
    if (isset($_FILES['profile_image'])) {
        $file_name = basename($_FILES["profile_image"]["name"]);
        $target_file = "../uploads/" . $file_name;
        move_uploaded_file($_FILES["profile_image"]["tmp_name"], $target_file);
        echo $sql = "INSERT INTO form (name,mobile,dob,description,gender,profile_image) VALUES ('$name','$mobile', '$dob', '$description', '$gender', '$file_name')";
    }
    if(mysqli_query($conn,$sql)){
        header('location:../views/show.php?status=success');
    }else{
        header('location:../views/form.php?status=error');
    }
?>