<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/header.css">
    <title>C C M S</title>

  <style type="text/css">
  .main{
    overflow: hidden;
    position: fixed;
    top:0px;
  width: 100%;
  float:right;
  margin: 0px;
  padding: 0px;
  }

a{
  			/* display: inline-block; */
  			text-decoration: none;
  			color:white;
  			
        width: 100%;
  			/* padding: 10px 10px;
  			border-radius: 5px; */
}

  
ul{
       margin: 0px;
       padding: 0px;
       list-style-type: none;
       color:black;
       width: auto;
   }
   ul li{
      
       float: left;
       width: 145px;
       height: 35px;
       color: white;
       
       text-align: center;
       /* line-height: 15px; */
       font-size: 14px;
       margin-right: 2px;
       
       
   }
   ul li a{
       color:white;
       text-decoration: none;
       padding: 5px 20px;
            border: 1px solid transparent;
            transition: 0.6s ease ;
   }
   ul>li>a:hover{
       background-color:white;
       color: black;
   }
   ul li ul li:hover{
       background-color: white;
       color: black;
   }
   ul li ul li{
       display: none;
   }
   ul li:hover ul li{
       display:block;
   }


h3{
  text-align:center;
}
.canteenheader{
     text-align: center;
     color: blue;
     margin-top: 50px;
 }

 
 .myul>a:hover{
   background-color:transparent;
 }
 .myul>li:hover{
  background-color:transparent;
 }

</style>
  </head>
  <body>
  <?php
    
    include('db/connection.php');
    session_start();
    $id=$_SESSION['loginuser'];
   
    $q = "SELECT * FROM students WHERE id='$id' " ;
    $result = $conn->query($q);
    if($result-> num_rows > 0){
        ?>
                
            
            <?php
        while($row=$result->fetch_assoc())
        {
            ?>
      <div class="main">
            
            <ul> 
              <li><a href="studenthome.php">Home</a></li>
              <li><a href="studentmenu.php">Menu</a></li>
              <li><a href="myorder.php">My Orders</a></li>
              <li><a href="bill.php">Get Bills </a></li>
              <li><a href="myhistory.php">Ordered History</a></li>
              <li><a href="aboutus.php">About Us </a></li>
              <li><a href="contact.php">Contact Us</a></li>
              
              <li><a href="process/logoutprocess.php">Log Out</a></li>
              <li class="myul">
             <a href="studentprofile.php"> <img class='myimg' src="./img/<?php echo $row['photo']; ?>" alt="" ></a>
            </li>
                
            </ul>
        </div>
        <?php
        }
      }else{
        echo "Sorry";
      }
      ?>
 

<h3 class="canteenheader">College Canteen Management System</h3>