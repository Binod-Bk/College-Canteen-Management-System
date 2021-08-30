<?php

include('include/header.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>C C M S</title>
    <style >
    body{
        background:#008080;
    }
    .img{
        display: block;
  margin-left: auto;
  margin-right: auto;
  width: 65%;
    }
    .but{
        background:green;
        color:white;
        display: block;
  margin-left: auto;
  margin-right: auto;
    }
    form{
        color:red;
        font-weight:bold;
    }
    </style>
</head>
<body>
    


<div class="container py-4">
    <div class=" row mt-4">

    <?php
    
    include('db/connection.php');
    $q = "SELECT * FROM menu " ;
    $result = $conn->query($q);
    if($result-> num_rows > 0){
        while($row=$result->fetch_assoc())
        {
            ?>
            <div class="col-md-3 mt-3 " >
                <div class="card align-center bg-info">
                    <form action="process/orderfoodprocess.php" Method="POST">
                    <img src="img/<?php echo $row['Photo']; ?>" height="200px" width="200px" value="photo"class="img" ><br>
                    <input type="hidden" value="<?php echo $row['Photo']; ?>" readonly="readonly" name="photo" >
                    <div class="card-body " >
                   Name: <input type="text" value="<?php echo $row['Name']; ?>" name="name" readonly="readonly"><br>
                       Price (Rs.): <input type="text" value="<?php echo $row['Price'];  ?> " name="price" readonly="readonly"><br>
                        <input type="text" value="<?php echo $row['Quantity']; ?>" name="quantity" readonly="readonly"><br>
                        Available Quantity:  <input type="number" value="<?php echo $row['stock']; ?>" readonly="readonly"><br>
                        <?php
                        if($row['stock']==0){
                            ?>
                            <!-- <input type="text" placeholder="Out Of Stock" readonly="readonly"><br><br> -->
                            <br>
                            <p> &nbsp;&nbsp;&nbsp;  Food is out of Stock. </p>
                            <br>
                            <?php
                        }else{ 
                            ?>
                       For ordering now. Enter the quantity.
                        <input type="number" name="order" min="0" oninput="validity.valid||(value='');" max="<?php echo $row['stock'];  ?>">
                        <br><br>
                        <?php } ?>
                        
                        <input type="submit" value="Order Now" class="but">
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