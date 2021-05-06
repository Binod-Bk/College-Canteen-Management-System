<?php

include('../db/connection.php');

$fname=$_POST['Fullname'];
$contact=$_POST['Contact'];
$email=$_POST['Email'];
$password=$_POST['password'];
$semester=$_POST['semester'];
$security=$_POST['Security'];
$answer=$_POST['ans'];

session_start();
    $id=$_SESSION['loginuser'];

$sql = " UPDATE students SET Name ='$fname' , Password ='$password' , Contact='$contact'
                ,Email='$email',Semester='$semester',Question='$security',Ans='$answer' WHERE id=$id"; 

if($conn->query($sql)){
   
	echo " <script> alert('Your Data is Updated Successfully . '); 
	window.location.href='../studentprofile.php';           
</script> ";
}else{
	echo ("Error occur" . $conn -> error);
}


?>