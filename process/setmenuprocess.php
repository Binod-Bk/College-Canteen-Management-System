<?php

include('../db/connection.php');



if($_SERVER['REQUEST_METHOD']=='POST'){
	if($_POST['action']=='set'){
	if(isset($_POST['stock']) && !empty($_POST['stock'])){
		$stock=$_POST['stock'];
	}else{
		$msg = "Please specify how much stock you will be making.";
		errorMsg($msg);
	}

	$img=$_POST['photo'];
$name=$_POST['name'];
$price=$_POST['price'];
$quantity=$_POST['quantity'];

if(isset($msg)){
	errorMsg($msg);
}else{

	$record = "Select Name from menu where Name='$name' ";
	$result = $conn->query($record);
	$row=$result->fetch_assoc();
	if($row['Name'] == $name){
		echo "<script> alert('Food item is already in the Menu . ');  
			window.location.href='../setmenu.php';</script> " ;
		die();
	}

$sql = " INSERT INTO menu(Name,Price,Quantity,Photo,stock) VALUES('$name','$price','$quantity','$img','$stock')" ;


if($conn->query($sql)){

	
	echo "<script> alert(' Added To Menu Successfully. ');  
			window.location.href='../setmenu.php';</script> " ;

}else{
	echo ("Error occur" . $conn -> error);
}
	
}
}else{
	$img=$_POST['photo'];
	$name=$_POST['name'];
	$price=$_POST['price'];
	$quantity=$_POST['quantity'];
	$stock=$_POST['stock'];

	$sql2 = "Delete from foodItems where Name = '$name'";

	if($conn->query($sql2)){

	
		echo "<script> alert(' Removed Food Item Successfully. ');  
				window.location.href='../setmenu.php';</script> " ;
	
	}else{
		echo ("Error occur" . $conn -> error);
	}

}

}

function errorMsg($msg){
	header('Location:../setmenu.php?msg='.$msg);
}


?>