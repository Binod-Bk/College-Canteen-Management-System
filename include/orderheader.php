<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/header.css">
    <title>Hello, world!</title>

  <style type="text/css">

a{
  			/* display: inline-block; */
  			text-decoration: none;
  			color:white;
  			background-color: black;
  			/* padding: 10px 10px;
  			border-radius: 5px; */
}

  
ul{
       margin: 0px;
       padding: 0px;
       list-style-type: none;
       color:black;
       width: auto;
   }
   ul li{
       background-color:black;
       float: left;
       width: 130px;
       height: 35px;
       color: white;
       
       text-align: center;
       /* line-height: 15px; */
       font-size: 14px;
       margin-right: 2px;
       
       
   }
   ul li a{
       color:white;
       text-decoration: none;
       padding: 5px 20px;
            border: 1px solid transparent;
            transition: 0.6s ease ;
   }
   ul>li>a:hover{
       background-color:white;
       color: black;
   }
   ul li ul li:hover{
       background-color: white;
       color: black;
   }
   ul li ul li{
       display: none;
   }
   ul li:hover ul li{
       display:block;
   }


h3{
  text-align:center;
}

</style>



  </head>
  <body>
    
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark position-fixed ">
  <div class="container-fluid ">
   
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="navbarNavAltMarkup">
      <div class="navbar-nav ">
      <div class="main">
            
            <ul> 
              <li><a href="studenthome.php">Home |</a></li>
              <li><a href="studentmenu.php">Menu |</a></li>
              <li><a href="myorder.php">My Orders |</a></li>
              <li><a href="bill.php">Get Bills |</a></li>
              <li><a href="myhistory.php">Ordered History</a></li>
              <li><a href="aboutus.php">About Us |</a></li>
              <li><a href="contact.php">Contact Us</a></li>
              <li><a href="studentprofile.php">My Profile |</a></li>
              <li><a href="process/logoutprocess.php">Log Out</a></li>
                
            </ul>
        </div>
      </div>
    </div>
  </div>
</nav>

<h3>College Canteen Management System</h3>