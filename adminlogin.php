<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		body{
			background-color:  #FFFEF2;
			background-image: url(img/q12.png);
			background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
			
			font-size: 23px;
			max-height: 1345px;
			color: black;
			background-repeat: no-repeat;
		}
		/*form{
			width: 40%;
			height: 50%;
	        position:fixed;
	        left: 655px;
	        top:150px;
	        
		}*/
		.button{
			 height: 11%;
            width: 20%;
           float: right;
            border: black;
 			padding:0px 0px;
            
  			font-size: 23px;
  			cursor: pointer;
		}
		.A{
			height: 11%;
			width: 40%;
		}
		.btn {
		  
           background-color: #ff817e;
           color: #fff;
           font-size: 26px;
           text-transform: uppercase;
           padding: 20px 15px;
}
       a:hover{
         	background-color:black;
			 color: white;
         }
         .forgot{
         	font-size: 23px;
         }
         .field{
         	margin-left: 5%;
         	margin-top: 100px;
         	width: 40%;
         	height: 280px;
         	background-color:  rgba(0,0,0,0.3);
			 color: white;
         }

       
		 a{
			 text-decoration: none;
			 color: black;
		 }
         
		 h2{
			text-align: center;
			color: white;
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


	<div class="field">
	<fieldset class="fieldset" border="6px" height="200px"   border-color="black">
		<legend class="legend"> <h2>Admin _ Login</h2></legend>
	<form action='process/loginprocess.php' method="post" >
		
		Username : <input type=text  class="A" name="user" placeholder="Fullname" >
		<br>Password : <input type=password class="A" name="pass" placeholder="Password" ><br>
		<input type="hidden" name="usertype" value="Admin">
		
			 <br>
		<input type="submit" name="Login" value="Login">
    
	</form>
	</fieldset>
            </div>            

</body>
</html>