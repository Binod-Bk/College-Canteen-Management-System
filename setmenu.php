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
        float: left;

    }
    </style>
</head>
<body>
    


<div class="container py-5">
    <div class="row mt-4">

    <?php
    
    include('db/connection.php');
    $q = "SELECT * FROM foodItems " ;
    $result = $conn->query($q);
    if($result-> num_rows > 0){
        while($row=$result->fetch_assoc())
        {
            ?>
            <div class="col-md-3 mt-3" >
                <div class="card">
                    <form action="process/setmenuprocess.php" Method="POST">
                    <img src="img/<?php echo $row['Photo']; ?>" height="200px" width="200px" value="photo" class="img"><br>
                    <input type="hidden" value="<?php echo $row['Photo']; ?>" readonly="readonly" name="photo" >
                    <div class="card-body">
                   Name: <input type="text" value="<?php echo $row['Name']; ?>" name="name" readonly="readonly"><br>
                   Price (Rs.) <input type="text" value="<?php echo $row['Price'];  ?> " name="price" readonly="readonly"><br>
                    <input type="text" value="<?php echo $row['Quantity']; ?>" name="quantity" readonly="readonly"><br>
                    Stock :<input type="number" name="stock" min="0" oninput="validity.valid||(value='');" >
                    <br> <br>


                        <!-- <h5 class="card-title" name="name"> <?php echo "<b>" .$row['Name'] ."</b>";  ?> </h5>
                        <h5 class="card-title" name="price"> <?php echo $row['Price'];  ?> </h5>
                        <h5 class="card-title" name="quantity"> <?php echo $row['Quantity']; ?> </h5> -->
                        <button type="submit" class="but bg-primary" name="action" value="set">Set in Menu</button> &nbsp;&nbsp;&nbsp;
                        <button type="submit" class="but2 bg-danger" name="action" value="remove">Remove</a></button>
                    </div>
                    </form>
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