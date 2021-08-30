<?php
session_start();
$id = $_SESSION['loginuser'];

include('../db/connection.php');
if($_SERVER['REQUEST_METHOD']=='POST'){
	if(isset($_POST['quantity2']) && !empty($_POST['quantity2'])){
		$quantity=$_POST['quantity2'];
	}else{
		$msg = "Please enter how much you want to order.";
		errorMsg($msg);
	}


$foodid=$_POST['foodid'];
$name=$_POST['name'];
$id=$_POST['myid'];
if(isset($msg)){
    errorMsg($msg);
}else{


if($_POST['action']=='update'){



    $sql1 = "UPDATE stuorder SET studentOrder='$quantity'  WHERE id=$foodid AND sid='$id' "; 
    $sql4 = "Select studentOrder from stuorder WHERE Oname='$name'";
    $result1 = $conn->query($sql4);
    $row1 = $result1->fetch_assoc();
    $sql5 = "select stock from menu WHERE Name='$name'";
    $result2 = $conn->query($sql5);
    $row2 = $result2->fetch_assoc();

    

        if($row1['studentOrder']> $quantity ){
            $a = $row1['studentOrder']-$quantity ;
            $sql6 = "Update menu SET stock = stock + '$a' where Name='$name' ";
            $conn->query($sql6);
        }else{
            $b = $quantity - $row1['studentOrder'];
            $sql7 = "Update menu SET stock = stock - '$b' where Name='$name'";
            $conn->query($sql7);
        }
        if($conn->query($sql1)){
        echo " <script> alert('Your Order is Updated Successfully . '); 
        window.location.href='../myorder.php';           
    </script> ";
    
    }else{
        echo ("Error occur" . $conn -> error);

        }
    
    
    
    }else if($_POST['action']=='cancel'){

        $sql2 = " DELETE FROM stuorder WHERE Oname='$name' AND sid='$id' ";
        $sql3 = "Update menu SET stock = stock + '$quantity' where Name='name'";
        


if($conn->query($sql2)){

    echo "<script> alert('Your Order Has Been Cancelled Successfully.');
    window.location.href='../myorder.php' ; </script> " ;
	
}else{
	echo ("Error occur" . $conn -> error);
}
    $conn ->query($sql3);

}

}
}
function errorMsg($msg){
	header('Location:../myorder.php?msg='.$msg);
}


?>