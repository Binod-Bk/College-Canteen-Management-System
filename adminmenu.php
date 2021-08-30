<?php

include('include/adminheader.php');

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
        position: -webkit-sticky; /* Safari */
  position: sticky;
  top: 0;
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
    h2{
        margin-top:50px;
        text-align:center;
        font-weight:bold;
        color:white;
    }
    .row{
        margin-top:-50px;
    }
    
    </style>
</head>
<body>
    

<h2>College Canteen Management System</h2>
<div class="container py-5">
    <div class="row ">

    <?php
    
    include('db/connection.php');
    $q = "SELECT * FROM menu " ;
    $result = $conn->query($q);
    if($result-> num_rows > 0){
        while($row=$result->fetch_assoc())
        {
            ?>
            <div class="col-md-3 mt-3 binod " >
                <div class="card">
                    <form action="process/deletemenuprocess.php" Method="POST">
                    <img src="img/<?php echo $row['Photo']; ?>" height="200px" width="200px" value="photo" class="img"><br>
                    <input type="hidden" value="<?php echo $row['Photo']; ?>" readonly="readonly" name="photo" >
                    <div class="card-body">
                   Name: <input type="text" value="<?php echo $row['Name']; ?>" name="name" readonly="readonly"><br>
                      Price (Rs.)  <input type="text" value="<?php echo $row['Price'];  ?> " name="price" readonly="readonly"><br>
                        <input type="text" value="<?php echo $row['Quantity']; ?>" name="quantity" readonly="readonly"><br>
                      Stock:  <input type="number" value="<?php echo $row['stock']; ?>" readonly="readonly"><br><br>
                        <input type="submit" value="Delete From Menu" class="but">
                        </form>
                    </div>
                </div>
            </div>
            <?php
        }
    }else{
        echo "<h2>No Records Found.</h2>";
    }
    ?>
    </div> 
</div>

</body>
</html>