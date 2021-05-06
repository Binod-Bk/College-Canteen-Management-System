<?php
    include('include/header.php');
    session_start();
    if(!isset($_SESSION['loginuser'])){
        header('location:login.html');
    }

?>




<!DOCTYPE html>
<html>
<head>
   
    <meta charset="utf-8">
    <meta name="viewpoint" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" type="text/css" href="css/bootstap.min.css">
    <link rel="stylesheet" type="text/css" href="css/themify-icons.css">
    <link rel="stylesheet" type="text/css" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
     <title>College Canteen Management System</title>
     <link rel="stylesheet" type="text/css" href="">
    <style>
        .container{
        background: 4682BF;
        }
        body  {
            background-color: #B19CD9;
            color:black;
        } 
        h4{
            margin-left:100px;
            top:0px;
            color:black;
            text-align:center:
        }
        pre{
            color:black;
            text-align:center;
        }

    </style>
</head>
<body>

<!---Header start---->
<header class="header abs-header">
    


   
    <div class="container">
                
                    <img src="img/q3.jpg" alt="" height="615px" width="1250px"  >
                
            
            <div class="goal">
            <p><pre>
     <h4>Our Main Goal</h4>
        The main objective of the Canteen Management System is to manage the details of Canteen, 
        Sales, Orders, Items, Products. It manages all the information about Canteen, Food, 
        Products, Canteen. The project is totally built at administrative end and thus only 
        the administrator is guaranteed the access. The purpose of the project is to build an 
        application program to reduce the manual work for managing the Canteen, Sales, Food, Orders. 
        It tracks all the details about the Orders, Items, Products.
    </pre>    
    </p>
    </div>    
    </div>   
</header>

<!---Header end--->
</body>
</html>

<?php
    include('include/footer.php');

?>