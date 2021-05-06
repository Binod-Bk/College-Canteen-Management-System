<?php

include('../db/connection.php');

$name=$_POST['name'];
$price=$_POST['price'];
$quantity=$_POST['quantity'];
$photo=$_POST['photo'];

$sql = " INSERT INTO foodItems(Name,Price,Quantity,Photo) VALUES('$name','$price','$quantity','$photo')" ;


if($conn->query($sql)){

	echo "<script> alert('Food Item Added Successfully. ');  
			window.location.href='../setfooditems.php';</script> " ;

}else{
	echo ("Error occur" . $conn -> error);
}


?>