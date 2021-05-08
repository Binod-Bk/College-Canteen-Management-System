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
       width: 150px;
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

   .navbar-expand-lg{
     width:100%;
   }




</style>
  </head>
  <body>
    
  <nav class="navbar navbar-expand-lg  bg-dark  " alt="Max-width 100%"  >
  <div class="container-fluid ">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="navbarNavAltMarkup">
      <div class="navbar-nav ">
      <div class="main">
            
            <ul> 
              <li><a href="adminhome.php">Home |</a></li>
              <li><a href="setfooditems.php">Set Food Items |</a></li>
              <li><a href="setmenu.php"> Set Menu |</a></li>
              <li><a href="adminmenu.php">Menu |</a></li>
              <li><a href="seeorder.php">See Orders |</a></li>
              <li><a href="adminprofile.php">Our Profile |</a></li>
              <li><a href="process/logoutprocess.php">Log Out</a></li>
              
                
            </ul>
        </div>
       
      </div>
    </div>
  </div>
</nav>

<h2>College Canteen Management System</h2>