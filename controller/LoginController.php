<?php 
include_once '../model/db.php';
session_start();
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	$sql="SELECT * FROM datas WHERE email='$email' and password='$password'";
	$result = mysqli_query($conn,$sql);
	if(mysqli_num_rows($result) > 0){
		$data = mysqli_fetch_array($result);
		$_SESSION['id']=$data['id'];
		$_SESSION['username']=$data['username'];
		$_SESSION['email']=$data['email'];
		$id = $data['id'];
		$sql="UPDATE datas SET user_status ='1' where id='$id'";
		$result = mysqli_query($conn,$sql);
		//header('location:../views/home.php');
	}else{
		header('location:../views/login.php?status=error');
	}
?>