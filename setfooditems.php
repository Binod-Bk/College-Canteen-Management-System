 
 <?php

 include('include/setfood.php');
 
 ?>

    
<head>
    
    <title>Document</title>


        <style type="text/css">
       body{
             background-image: url('img/q12.png');
      background-repeat: no-repeat;
      background-size: cover;
      position: relative;
      display: block;
      width: 90%;
      color:white;
    } 
    .field{
        margin-left: 10%;
         	margin-top: 100px;
         	width: 35%;
         	height: 325px;
         	background-color:  rgba(0,0,0,0.3);
			 color: white;
    }
    form{
        float:right;
    }
    h2{
        text-align:center;
    }
    .fieldset{
        border: 1px solid black; 
        height: 325px;
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
	<fieldset class="fieldset" >
		<legend class="legend"> <h2>Add Food Items</h2> </legend>
<<<<<<< HEAD
	<form action='process/foodprocess.php' method="post">
		
		Name : <input type=text  class="A" name="name" placeholder="Enter Food Name" ><br><br>
		Price (Rs.) : <input type=number class="A" min="1" oninput="validity.valid||(value='');" name="price" placeholder="Enter the Price" ><br><br>
=======
	<form action='process/foodprocess.php' method="post" name="myForm" onsubmit="return validateForm()">
		
		Name : <input type=text  class="A" name="name" placeholder="Enter Food Name" pattern="[A-Za-z]" title="Name must be in alphabet."><br><br>
		Price (Rs.) : <input type=number class="A" min="0" oninput="validity.valid||(value='');" name="price" placeholder="Enter the Price" ><br><br>
>>>>>>> 6b55e9274cb4344e4e743796b39e56441e5da9fd
		Quantity : <select name="quantity">
			<option value="per plate">per plate</option>
            <option value="per piece">per piece</option>
            <option value="per cup">per cup</option>
        </select> <br><br>
        Photo : <input type="file" name="photo" > <br><br>
        <input type="submit" name="Login" value="Submit">
        <input type="reset" name="Login" value="Reset">

	</form>
	</fieldset>
            </div> 
<<<<<<< HEAD
=======
            <script>
            function validateForm() {
        var x = document.forms["myForm"]["name"].value;
        if (x == "") {
         alert("Name of the food must be filled out");
            return false;
                
  }
}
</script>


>>>>>>> 6b55e9274cb4344e4e743796b39e56441e5da9fd
    
</body>
</html>



<?php

include('include/adminfooter.php');

?>