<?php

include('include/orderheader.php');
session_start();
$id=$_SESSION['loginuser'];
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
        background:green;
        color:white;
        display: block;
  margin-left: auto;
  margin-right: auto;
  float:left;
    }
    .but2{
        background:red;
        color:white;
        display: block;
  margin-left: auto;
  margin-right: auto;
  float:left;
    }
    p{
        color:red;
        text-align:center;
    }
    .a1{
        text-decoration:none;
        background:green;
    }
    .a1:hover{
        color:black;
    }
    .a2:hover{
        color:black;
    }
    .a2{
        text-decoration:none;
        background:red;
    }
    form{
        font-weight:bold;
    }
    .time{
        
    }
    .error{
		background:red;
		/* padding:10px; */
		width:30%;
		color:white;
		border-radius:10px;
		height:30px;
		text-align:center;	
	}
    .col-md-3{
        margin-top:-50px;
    }
    </style>
</head>
<body>
    
<?php 
	if(isset($_GET['msg'])){ ?>
	<div class="error">
		<?php echo $_GET['msg']; ?>
	</div>
	<?php } ?>
    

<div class="container py-5">
    <div class="row mt-4">

    <?php
    
    include('db/connection.php');
    session_start();
    $id=$_SESSION['loginuser'];
   
    $q = "SELECT * FROM stuorder WHERE sid='$id' " ;
    $result = $conn->query($q);
    if($result-> num_rows > 0){
        ?>
                
            
            <?php
        while($row=$result->fetch_assoc())
        {
            ?>
            
            <div class="col-md-3" >
                <div class="card bg-info">
                    <form action="process/updateorder.php" Method="POST">
                  <input type="hidden" value="<?php echo $id; ?>" name="myid">
                  <input type="hidden" value="<?php echo $row['id']; ?>" name="foodid">
                    <img src="img/<?php echo $row['Photo']; ?>" height="200px" width="200px" value="photo" class="img">
                    <input type="hidden" value="<?php echo $row['Photo']; ?>" readonly="readonly" name="photo" >
                    <div class="card-body">
                    Food Name: <input type="text" value="<?php echo $row['Oname']; ?>" name="name" readonly="readonly"><br>
                    <?php     
                        $menu = $row['Oname'];
                        $p = "Select stock From menu where Name='$menu'";
                        $result2=$conn->query($p);
                        $row2=$result2->fetch_assoc()
                    ?>
                    Available Quantity: <input type="text" value="<?php echo $row2['stock']; ?>" readonly="readonly"> <br>
                    Price (Rs.): <input type="text" value="<?php echo $row['Price'];  ?> " name="price" readonly="readonly"><br>
                 <input type="text" value="<?php echo $row['Quantity']; ?>" name="quantity" readonly="readonly"><br><br>
                    Quantity: <input type="number" value="<?php echo $row['studentOrder']; ?>" name="quantity2" min="0" oninput="validity.valid||(value='');" max="<?php echo $row2['stock'];  ?>" ><br><br>

                        <!-- <h5 class="card-title" name="name"> <?php echo "<b>" .$row['Name'] ."</b>";  ?> </h5>
                        <h5 class="card-title" name="price"> <?php echo "Rs ." .$row['Price'];  ?> </h5>
                        <h5 class="card-title" name="quantity"> <?php echo $row['Quantity']; ?> </h5> -->
                        
                        <button type="submit" class="but" name="action" value="update">Update Order</button> &nbsp;&nbsp;&nbsp;
                        <button type="submit" class="but2" name="action" value="cancel">Cancel Order</a></button>

                    </div>
                    </form>
                </div>
            </div>
            <?php
        }
    }else{
        echo "<h2>You have not made any order. </h2>";
    }
    ?>
    </div> 
</div>

</body>
</html>