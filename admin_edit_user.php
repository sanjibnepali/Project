<?php
	include('config.php');
	
	$id=$_GET['id'];
	
	$username=$_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];

	
	mysqli_query($conn,"update users set id='$id', username='$username', email='$email', password='$password' where id='$id'");
	header('location:welcome.php.');

?>