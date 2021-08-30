<?php

include('../db/connection.php');

$name=$_POST['name'];


$sql = " DELETE FROM foodItems WHERE Name='$name' ";


if($conn->query($sql)){
	
	echo "<script> alert('Successfully Removed From Food Items. ');  
			window.location.href='../setmenu.php';</script> " ;

}else{
	echo ("Error occur" . $conn -> error);
}


?>