<?php

include('../db/connection.php');

if($_SERVER['REQUEST_METHOD']=='POST'){
	if(isset($_POST['name']) && !empty($_POST['name'])){
		$name=$_POST['name'];
	}else{
		$msg = "Please enter the name of Food.";
		errorMsg($msg);
	}

	if(isset($_POST['price']) && !empty($_POST['price'])){
		$price=$_POST['price'];
	}else{
		$msg = "Please enter the price of food.";
		errorMsg($msg);
	}
$quantity=$_POST['quantity'];

if(isset($_POST['photo']) && !empty($_POST['photo'])){
	$photo=$_POST['photo'];
}else{
	$msg = "Please include a picture to describe the food.";
	errorMsg($msg);
}


if(isset($msg)){
	errorMsg($msg);
}else{
	$record = " Select Name from foodItems where Name='$name'" ; 
	$result = $conn->query($record);
	$row=mysqli_fetch_array($result);
	
	if($row['Name'] == $name){
		echo "<script> alert('Food Item already been added  ');  
			window.location.href='../setfooditems.php';</script> " ;
		die();
	}

	$sql = " INSERT INTO foodItems(Name,Price,Quantity,Photo) VALUES('$name','$price','$quantity','$photo')" ;

if($conn->query($sql)){

	echo "<script> alert('Food Item Added Successfully. ');  
			window.location.href='../setfooditems.php';</script> " ;

}else{
	echo ("Error occur" . $conn -> error);
} 
}
}else{
	errorMsg("Form must be in Post Method .");
}

function errorMsg($msg){
	header('Location:../setfooditems.php?msg='.$msg);
}

?>