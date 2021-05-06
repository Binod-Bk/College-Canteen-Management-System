<?php

include('../db/connection.php');

$img=$_POST['photo'];
$name=$_POST['name'];
$price=$_POST['price'];
$quantity=$_POST['quantity'];
$stock=$_POST['stock'];




$sql = " INSERT INTO menu(Name,Price,Quantity,Photo,stock) VALUES('$name','$price','$quantity','$img','$stock')" ;


if($conn->query($sql)){

	
	echo "<script> alert(' Added To Menu Successfully. ');  
			window.location.href='../setmenu.php';</script> " ;

}else{
	echo ("Error occur" . $conn -> error);
}


?>