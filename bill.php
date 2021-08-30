<?php

include('include/orderheader.php');

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
    p{
        color:red;
        text-align:center;
    }
    th{
        background:Black;
        color:white;
    }
    .total{
        background:green;
        color:white;
    }
    .fname{
        width: 0%;
        background:grey;
        color:white;
    }
    .mydiv{
        width:auto;
        
    }
    .hello{
        margin-left:450px;
        width:auto;
    }
    table{
        border: 2px solid white;
        border-spacing:2px;
        cellspacing:10px;
    }
    th,td{
        padding:30px;
        border: 2px solid white;
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
    $q = "SELECT * FROM stuorder WHERE sid='$id' " ;
    $mul = "SELECT sum(Price*studentOrder) AS bin FROM stuorder WHERE sid='$id' " ;
    $result = $conn->query($q);
    $result2 = $conn->query($mul);
    $row2=$result2->fetch_assoc();
    
    if($result-> num_rows > 0){
        ?>
        
           
            
          
                
                    <div class="hello">
                    <div class="mydiv bg-secondary ">
                      <table>
                      <th>Food Your Ordered : </th>
                      <tr>
                     <td class="fname">
                     <?php
                     while($row=$result->fetch_assoc())
                     { 
                         echo "Food : ".$row['Oname']; echo "&nbsp;&nbsp; | &nbsp;&nbsp; Rs."; echo "Price : ".$row['Price']; echo "&nbsp;&nbsp; | &nbsp;&nbsp;"; echo "Quantity : ".$row['studentOrder'];echo "&nbsp;&nbsp; | &nbsp;&nbsp;"; echo "Total : ".$row['Price']*$row['studentOrder'];
                         echo "</br>";
                      } ?> </td>
                      </tr>
                      <tr>
                      <td class="total"><?php echo "<u>Total Bill Amount (Rs.) :</u><br>".$row2['bin']; ?> </td>
                      </tr>
                      
                      </table>
                       

                    </div>
                    
                    </div>
            </div>
            <?php
        
    }else{
        echo "No data found";
    }
    ?>

</body>
</html>