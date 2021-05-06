<?php

 $host = "localhost";
 $username = "root";
 $password = "8080";
 $dbname = "canteen";


 $conn = new mysqli($host,$username,$password,$dbname); 
 if ($conn -> connect_error) {
 	echo "$conn->connect_error";
 }

 ?>
