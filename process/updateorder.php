<?php
session_start();
$id = $_SESSION['loginuser'];

include('../db/connection.php');

$quantity=$_POST['quantity2'];
$foodid=$_POST['foodid'];
$name=$_POST['name'];
$id=$_POST['myid'];



if($_POST['action']=='update'){

    $sql1 = "UPDATE stuorder SET studentOrder='$quantity'  WHERE id=$foodid AND sid='$id' "; 

    if($conn->query($sql1)){
       
        echo " <script> alert('Your Order is Updated Successfully . '); 
        window.location.href='../myorder.php';           
    </script> ";
    
    }else{
        echo ("Error occur" . $conn -> error);



        }}else if($_POST['action']=='cancel'){

        $sql2 = " DELETE FROM stuorder WHERE Oname='$name' AND sid='$id' ";


if($conn->query($sql2)){

    echo "<script> alert('Your Order Has Been Cancelled Successfully.');
    window.location.href='../myorder.php' ; </script> " ;
	
}else{
	echo ("Error occur" . $conn -> error);
}

    }





?>