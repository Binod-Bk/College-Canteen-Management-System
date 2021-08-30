<?php

include('../db/connection.php');
if($_SERVER['REQUEST_METHOD']=='POST'){
	if(isset($_POST['name']) && !empty($_POST['name'])){
		$name=$_POST['name'];
	}else{
		$msg = "Please Enter your Username.";
		errorMsg($msg);
	}

		if(isset($_POST['password']) && !empty($_POST['password'])){
			$password=$_POST['password'];
		}else{
			$msg = "Please Enter a Password.";
			errorMsg($msg);
		}


		if(isset($msg)){
			errorMsg($msg);
		}else{


$sql = " UPDATE admin SET username='$name' , pass='$password' WHERE id=1 "; 

if($conn->query($sql)){
   
	echo " <script> alert('Your Data is Updated Successfully . '); 
	window.location.href='../adminprofile.php';           
</script> ";
}else{
	echo ("Error occur" . $conn -> error);
}
		}

}
function errorMsg($msg){
	header('Location:../adminprofile.php?msg='.$msg);
}
?>