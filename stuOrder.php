<?php

include('include/orderheader.php');


// // session_start();
// // if(!isset($_SESSION['user'])){
// // 	header('location:login.html');
// }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style >
    body{
        background: #4682BF;
    }
    
    .img{
        display: block;
  margin-left: auto;
  margin-right: auto;
  width: 65%;
    }
    .but{
        background:blue;
        color:white;
        display: block;
  margin-left: auto;
  margin-right: auto;
    }
    .mydiv{
        left:40%;
    }
    </style>
</head>
<body>
    


<div class="container py-5">
    <div class="row mt-4">

    <?php
    
    include('db/connection.php');
    session_start();
    $id=$_SESSION['loginuser'];
    $q = "SELECT * FROM stuorder WHERE id='$id' " ;
    echo $id;
    $result = $conn->query($q);
    if($conn->query($q)){
    if($result-> num_rows > 0){
        while($row=$result->fetch_assoc())
        {
            ?>
            <div class="mydiv">
            <div class="col-md-3 mt-3" >
                <div class="card bg-dark text-white">
                    <fieldset border="1px solid white " > 
                        <legend>My Order.</legend>
                    <form action="process/profilestudent.php" Method="POST">
                    
                    <div class="card-body">
                   
                    Fullname:<input type="text" name="Fullname"  id="name" value="<?php echo $row['Oname']; ?>"><br><br>
    
                    </div>
                    </form>
        </fieldset>
                </div>
            </div>
            <?php
        }
    }else{
        echo "No data found";
    }
 }else{
     echo $conn->error;
     echo "Connected Successfullly";
 }
    ?>
    </div> 
</div>
</div>
</body>
</html>