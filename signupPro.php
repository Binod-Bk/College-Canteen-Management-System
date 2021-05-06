

<?php
$user=$_POST['user'];
$pass=$_POST['pass'];
$con=mysqli_connect("localhost","root","") or die("can not connect to the database");
	mysqli_select_db($con,"asian");

	$query="insert into userinfo (username,password) values('$user','$pass')";

	$result=mysqli_query($con,$query) or die(mysqli_error($con));
	header('location:home.html');
	echo "<h2><a href='home.html'>Home</a></h2>";


	?>