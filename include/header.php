
<?php

    session_start();
    if(!isset($_SESSION['loginuser'])){
        header('location:login.php');

    }

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    
     <link rel="stylesheet" href="./css/studenthome.css">
     <link rel="stylesheet"  type="text/css" href="./css/header.css">
     <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>C C M S</title>

  </head>
  <body >
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
    
  <div class="nav-bar fixed-top mt-0">
            <ul> 
              <li><a href="studenthome.php">Home </a></li>
              <li><a href="studentmenu.php">Menu </a></li>
              <li><a href="myorder.php">My Orders </a></li>
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






