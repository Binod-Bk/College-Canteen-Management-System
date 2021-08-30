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
  margin-left: auto;
  margin-right: auto;
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
    h2{
        margin-top:50px;
        text-align:center;
        color:white;
        font-weight:bold;
    }
    .ml{
        margin-left:35%;
    }
   
    </style>
</head>
<body>
<h2>College Canteen Management System</h2>
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
    $q = "SELECT * FROM admin" ;
    $result = $conn->query($q);
    if($result-> num_rows > 0){
        while($row=$result->fetch_assoc())
        {
            ?>
            <div class="ml">
            <div class="col-md-3 mt-3" >
                <div class="card bg-dark text-white ">
                    <form action="process/profileadmin.php" Method="POST">
                    
                    <div class="card-body ">
                        <label for=""><h4>Update Your Data:</h4></label><br><br>
                   Username:     <input type="text" value="<?php echo $row['username']; ?>" name="name" ><br>
                     Password:   <input type="password" value="<?php echo $row['pass'];  ?> " name="password" ><br>
                       <br>
                      <input type="submit" value="Update" class="but">
                    </div>
                    </form>
                </div>
            </div>
            </div>
            <?php
        }
    }else{
        echo "No data found";
    }
    ?>
    </div> 
</div>

</body>
</html>