<?php

include('../db/connection.php');


$email=$_POST['email'];
$answer=$_POST['ans'];
$security=$_POST['Security'];



	$q1 ="SELECT * FROM students WHERE Email='$email' " ;
	$result =$conn->query($q1);
	if($result->num_rows==1){
		$row=$result->fetch_assoc();
		if($row['Ans']==$answer  && $row['Question']==$security){
           $pass= $row['Password'];
         echo " <script> alert('Your Password is : '); 
                alert($pass);
                window.location.href='../login.html';           
         </script> ";
            
		}else{
			echo " <script> alert('Wrong Data Provided. '); ";
		}
	}
?>
