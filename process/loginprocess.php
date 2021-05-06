<?php

include('../db/connection.php');

$user=$_POST['user'];
$pass=$_POST['pass'];
$usertype=$_POST['usertype'];


if($usertype =="Admin"){
	$q1 ="SELECT * FROM admin  " ;
	$result =$conn->query($q1);
	if($result->num_rows==1){
		$row=$result->fetch_assoc();
		if($row['pass']==$pass && $row['username']==$user){
			header('Location: ../adminhome.php');
		}else{
			echo "<script> alert('Check Your Credentials . ');  
			window.location.href='../login.html';</script> " ;
		}
	}
}else{
	$q2 = "SELECT * FROM students WHERE Email='$user' " ; 
	$result2 =$conn->query($q2);
	if($result2->num_rows==1){
		$row2=$result2->fetch_assoc();
		if($row2['Password']==$pass){
			$id2=$row2['id'];
			session_start();
			$_SESSION['loginuser'] = $id2;
			echo $conn->error;
			header('Location:../studenthome.php');
			
		}else{
			echo "<script> alert('Check Your Credentials . ');  
			window.location.href='../login.html';</script>
			";
		}

	}
}

?>