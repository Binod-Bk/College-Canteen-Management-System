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
    </style>
</head>
<body>
    


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
            <div class="col-md-3 mt-3" >
                <div class="card bg-dark text-white">
                    <form action="process/profileadmin.php" Method="POST">
                    
                    <div class="card-body">
                   Username:     <input type="text" value="<?php echo $row['username']; ?>" name="name" required ><br>
                     Password:   <input type="password" value="<?php echo $row['pass'];  ?> " name="password" required ><br>
                       <br>
                      <input type="submit" value="Update" class="but">
                    </div>
                    </form>
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