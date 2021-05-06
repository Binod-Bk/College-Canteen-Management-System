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
    .mydiv{
        width: 1000px;
        background: black;
        color:white;
    }
    .mya{
        background:white;
        text-decoration:none;
        color:black;
    }
    form{
        width:1200px;
        background:grey;
        font-weight:bold;
        float:right;
        
    }
    .mytd{
        text-align:center;
    }
    table{
        width:1000px;
    }
    th{
        font-size:18px;
    }
    input{
        color:white;
        width: 100px;
        background:black;
    }
    .submit{
        background:green;
    }
    h3{
        text-align:center;
        color:yellow;
        
    }
    </style>
</head>
<body>
    


<div class="container py-5">
    <div class="row mt-4">

    <?php
    
    include('db/connection.php');
    $q = "select * from stuorder LEFT JOIN students ON stuorder.sid = students.id ORDER BY Semester DESC";
    
    $result = $conn->query($q);
    

    if($result-> num_rows > 0){
        
            ?>
            


            <h3>Order From Students</h3>

            <?php while($row=$result->fetch_assoc())
        {  ?>
            
            <div>
                
                <form action="process/historyprocess.php" method="POST">
                
                &nbsp;&nbsp; &nbsp;&nbsp; Student Name:  <input type="text" name="sname" value="<?php echo $row['Name'];  ?>" readonly="readonly">&nbsp;&nbsp; &nbsp;&nbsp;
               Food Ordered:  <input type="text" name="oname" value="<?php echo $row['Oname'];  ?>" readonly="readonly">&nbsp;&nbsp; &nbsp;&nbsp;
               Ordered Number: <input type="number" name="order" value="<?php echo $row['studentOrder'];  ?>" readonly="readonly">&nbsp;&nbsp; &nbsp;&nbsp;
               Semester: <input type="text" name="Semester" value="<?php echo $row['Semester'];  ?>" readonly="readonly"> &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;
               Total: <input type="number" name="bill" value="<?php echo $row['total_bill'];  ?>" readonly="readonly">
               <input type="hidden" name="sid" value="<?php echo $row['sid'];  ?>">
               <input type="hidden" name="id" value="<?php echo $row['id'];  ?>">
               <input type="submit" value="Paid" class="submit">



                </form>
            </div>
            
            <?php
        }
        ?>
            
            
           




            <?php
        
    }else{
        echo "<h2>No Records Found.</h2>";
    }
    ?>
    </div> 
</div>

</body>
</html>