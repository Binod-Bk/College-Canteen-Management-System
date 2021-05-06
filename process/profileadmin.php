<?php

include('../db/connection.php');

$name=$_POST['name'];
$password=$_POST['password'];


$sql = " UPDATE admin SET username='$name' , pass='$password' WHERE id=1 "; 

if($conn->query($sql)){
   
	echo " <script> alert('Your Data is Updated Successfully . '); 
	window.location.href='../adminprofile.php';           
</script> ";
}else{
	echo ("Error occur" . $conn -> error);
}


?>