<?php 
    include_once '../model/db.php';
    session_start();

    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $dob = $_POST['dob'];
    $description = $_POST['description'];
    $gender = $_POST['gender'];
    $id = $_GET['id'];

    if (isset($_FILES['profile_image'])) {
        $file_name = basename($_FILES["profile_image"]["name"]);
        $target_file = "../uploads/" . $file_name;
        move_uploaded_file($_FILES["profile_image"]["tmp_name"], $target_file);
        $sql = "UPDATE `form` SET `name`='$name',`mobile`='$mobile', `dob`='$dob',`description`='$description',`gender`='$gender',`profile_image`='$file_name' WHERE id = $id";
    }else{
        $sql = "UPDATE `form` SET `name`='$name',`mobile`='$mobile', `dob`='$dob',`description`='$description',`gender`='$gender' WHERE id = $id";
    }

    if(mysqli_query($conn,$sql)){
        header('location:../views/show.php?status=success');
    }else{
        header('location:../views/show.php?status=error');
    }
?>