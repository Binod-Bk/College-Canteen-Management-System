<?php
session_start();
$_SESSION['loginuser']=$sid;
include('../db/connection.php');

$name=$_POST['name'];
$id=$_POST['myid'];
echo $id;
echo $name;


$sql = " DELETE FROM stuorder WHERE Oname='$name' ";


if($conn->query($sql)){
    echo "<script> alert('Your Order Has Been Cancelled Successfully.');
    window.location.href='../myorder.php' ; </script> " ;
	

}else{
	echo ("Error occur" . $conn -> error);
}


?>