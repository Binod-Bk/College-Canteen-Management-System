<?php

include('include/seeorder.php');

?>


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
        border: 2px solid black;
    }
    th{
        font-size:18px;
        text-align:center;
        border: 2px solid black;
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
    td{
        color:white;
        text-align:center;
    }
    </style>
</head>
<body>
    


<div class="container py-5">
    <div class="row mt-4">

    <?php
    session_start();
    
    // echo "<pre>";
    // print_r($_SESSION);
    // echo "</pre>";exit;
    
    include('db/connection.php');
    $q = "SELECT * from history  ORDER BY date_ordered DESC";
    if ($conn->query($q)){
    $result = $conn->query($q);
    
    if($result-> num_rows >0){
        
            ?>
            


            <h3>My Ordered History</h3>

            <table>
                <tr>
                    <th>Student Name</th>
                    <th>Semester</th>
                    <th>Food Name</th>
                    <th>Food Ordered</th>
                    <th>Date Ordered</th>
                    <th>Total Bill</th>
                </tr>
                <?php while($row=$result->fetch_assoc())
        {  ?>
                <tr>
                <td><?php echo $row['student_name'];  ?></td>
                <td><?php echo $row['semester'];  ?></td>
                <td><?php echo $row['food_name'];  ?></td>
                <td><?php echo $row['quantity'];  ?></td>
                <td><?php echo $row['date_ordered'];  ?></td>
                <td><?php echo $row['total_bill'];  ?></td>
                </tr>
                <?php } ?>
            </table>
          
            <?php
        
    }else{
        echo "<h2>No Records found<h2>";
    }
}else{
    echo $conn->error;
}
    ?>
    </div> 
</div>

</body>
</html>