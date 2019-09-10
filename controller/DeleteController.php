<?php 
include_once '../model/db.php';
session_start();
  $id = $_GET['delete'];

  $sql = "DELETE FROM form WHERE id=$id";

if (mysqli_query($conn,$sql)) {
    header('location:../views/show.php?status=success');
} else {
    echo "Error deleting record: " . $conn->error;
}

?>