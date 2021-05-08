 
 <?php

 include('include/adminheader.php');
 
 ?>


<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

        <style type="text/css">
       body{
             background-image: url('img/q12.png');
      background-repeat: no-repeat;
      background-size: cover;
      position: relative;
      display: block;
      width: 90%;
      height: 100%;
      margin-top: 50;
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
    
    </style>



</head>
<body>

<div class="field">
	<fieldset class="fieldset" >
		<legend class="legend"> <h2>Add Food Items</h2> </legend>
	<form action='process/foodprocess.php' method="post" name="myForm" onsubmit="return validateForm()">
		
		Name : <input type=text  class="A" name="name" placeholder="Enter Food Name" pattern="[A-Za-z]" title="Name must be in alphabet."><br><br>
		Price (Rs.) : <input type=number class="A" min="0" oninput="validity.valid||(value='');" name="price" placeholder="Enter the Price" ><br><br>
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
            <script>
            function validateForm() {
        var x = document.forms["myForm"]["name"].value;
        if (x == "") {
         alert("Name of the food must be filled out");
            return false;
                
  }
}
</script>


    
</body>
</html>



<?php

include('include/adminfooter.php');

?>