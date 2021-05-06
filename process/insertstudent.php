<?php

include('../db/connection.php');

$fname=$_POST['Fullname'];
$contact=$_POST['Contact'];
$email=$_POST['Email'];
$password=$_POST['password'];
$semester=$_POST['semester'];
$security=$_POST['Security'];
$answer=$_POST['ans'];

$sql = " INSERT INTO students(Name,Contact,Email,Password,Semester,Question,Ans) VALUES('$fname','$contact','$email','$password','$semester','$security','$answer')" ;


if($conn->query($sql)){

	echo "<script> alert('Sign Up Successfully. ');  
			window.location.href='../login.html';</script> " ;

}else{
	echo ("Error occur" . $conn -> error);
}


?>