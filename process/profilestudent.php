<?php

include('../db/connection.php');
if($_SERVER['REQUEST_METHOD']=='POST'){
	if(isset($_POST['Fullname']) && !empty($_POST['Fullname'])){
		$fname=$_POST['Fullname'];
	}else{
		$msg = "Enter your full name.";
		errorMsg($msg);
	}

	if(isset($_POST['Contact']) && !empty($_POST['Contact'])){
		$contact=$_POST['Contact'];
	}else{
		$msg = "You must enter your contact number. ";
		errorMsg($msg);
	}

	if(isset($_POST['Email']) && !empty($_POST['Email'])){
		$email=$_POST['Email'];
	}else{
		$msg = "You must enter your Email address.";
		errorMsg($msg);
	}

	if(isset($_POST['password']) && !empty($_POST['password'])){
		$password=$_POST['password'];
	}else{
		$msg = "Password field cannot be left blank.";
		errorMsg($msg);
	}

	if(isset($_POST['semester']) && !empty($_POST['semester'])){
		$semester=$_POST['semester'];
	}else{
		$msg = "Please enter which semester you study.";
		errorMsg($msg);
	}

	if(isset($_POST['Security']) && !empty($_POST['Security'])){
		$security=$_POST['Security'];
	}else{
		$msg = "Choose a security question.";
		errorMsg($msg);
	}

	if(isset($_POST['ans']) && !empty($_POST['ans'])){
		$answer=$_POST['ans'];
	}else{
		$msg = "Answer field cannot be left blank.";
		errorMsg($msg);
	}


	if(isset($msg)){
		errorMsg($msg);
	}else{

session_start();
    $id=$_SESSION['loginuser'];

$sql = " UPDATE students SET Name ='$fname' , Password ='$password' , Contact='$contact'
                ,Email='$email' , Semester='$semester', Question='$security', Ans='$answer' WHERE id=$id"; 

if($conn->query($sql)){
   
	echo " <script> alert('Your Data is Updated Successfully . '); 
	window.location.href='../studentprofile.php';           
</script> ";
}else{
	echo ("Error occur" . $conn -> error);
}
	}
}

function errorMsg($msg){
	header('Location:../studentprofile.php?msg='.$msg);
}

?>