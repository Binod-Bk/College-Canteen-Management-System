<?php

include('../db/connection.php');
if($_SERVER['REQUEST_METHOD']=='POST'){
	if(isset($_POST['email']) && !empty($_POST['email'])){
		$email=$_POST['email'];
	}else{
		$msg = "Please Enter your Email address.";
		errorMsg($msg);
	}

	if(isset($_POST['ans']) && !empty($_POST['ans'])){
		$answer=$_POST['ans'];
	}else{
		$msg = "Answer field cannot be left blank.";
		errorMsg($msg);
	}	



$security=$_POST['Security'];

if(isset($msg)){
	errorMsg($msg);
}else{


	$q1 ="SELECT * FROM students WHERE Email='$email' " ;
	$result =$conn->query($q1);
	if($result->num_rows==1){
		$row=$result->fetch_assoc();
		if($row['Ans']==$answer  && $row['Question']==$security){
           $pass= $row['Password'];
         echo " <script> alert('Your Password is : '); 
                alert($pass);
                window.location.href='../login.php';           
         </script> ";
            
		}else{
			echo " <script> alert('Wrong Data Provided. '); ";
		}
	}
}
}
function errorMsg($msg){
	header('Location:../forgot.php?msg='.$msg);
}
?>
