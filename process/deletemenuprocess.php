<?php

include('../db/connection.php');

$name=$_POST['name'];


$sql = " DELETE FROM menu WHERE Name='$name' ";


if($conn->query($sql)){
	
	echo "<script> alert('Successfully Removed From Menu. ');  
			window.location.href='../adminmenu.php';</script> " ;

}else{
	echo ("Error occur" . $conn -> error);
}


?>