<?php
session_start();
$_SESSION['loginuser'];
include('../db/connection.php');

$id=$_POST['id'];

$name=$_POST['sname'];
$oname=$_POST['oname'];
$semester=$_POST['Semester'];
$order=$_POST['order'];
$bill=$_POST['bill'];
$sid=$_POST['sid'];
$dt1=date("Y-m-d");

$q = "INSERT INTO history(student_name,food_name,semester,quantity,total_bill,date_ordered,sid) VALUES('$name','$oname','$semester','$order','$bill','$dt1','$sid')";

if($conn->query($q)){

    
    $p ="DELETE FROM stuorder WHERE sid='$sid'AND oname='$oname' AND studentOrder='$order' ";
    if($conn->query($p)){
        header('location:../seeorder.php');
    }else{
        echo "fault 2";
    }

}else{
    echo $conn->error;
}


?>