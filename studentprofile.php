<?php

include('include/header.php');


// session_start();
// if(!isset($_SESSION['user'])){
// 	header('Location:login.php');
// }


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
        left:40%;
    }
    .container{
        margin-top:-70px;
        margin-left:40%;
        

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
    .system{
        margin-top:50px;
        text-align:center;
        font-weight:bold;
    }
   
    </style>
</head>
<body>
    
<h2 class='system'>College Canteen Management System</h2>
<?php 
	if(isset($_GET['msg'])){ ?>
	<div class="error">
		<?php echo $_GET['msg']; ?>
	</div>
	<?php } ?>
<div class="container py-5">
    <div class="row mt-4">

    <?php
    
    include('db/connection.php');
    session_start();
    $id=$_SESSION['loginuser'];
    $q = "SELECT * FROM students WHERE id='$id' " ;
    $result = $conn->query($q);
    if($result-> num_rows > 0){
        while($row=$result->fetch_assoc())
        {
            ?>
            <div class="mydiv">
            <div class="col-md-3 mt-3" >
                <div class="card bg-dark text-white">
                    <fieldset border="1px solid white " > 
                        <legend>-_-_- My Profile -_-_-_</legend>
                    <form action="process/profilestudent.php" Method="POST">
                    
                    <div class="card-body">
                   
                    Fullname:<input type="text" name="Fullname"  id="name" value="<?php echo $row['Name']; ?>"><br><br>
    Contact:<input type="integer" name="Contact" id="number" value="<?php echo $row['Contact']; ?>" ><br><br>
    E-mail:<input type="E-mail" name="Email"  id="name" value="<?php echo $row['Email']; ?>" ><br><br>
    Password:<input type=password name='password' value="<?php echo $row['Password']; ?>" ><br><br>

<label for ="Subjects">Choose your semester:</label>
	<select name="semester">
	       	<optgroup label="BCA" >
	       		<option value="BCA 1st">BCA 1st</option>
	       		<option value="BCA 2nd">BCA 2nd</option>
	       		<option value="BCA 3rd">BCA 3rd</option>
	       		<option value="BCA 3rd">BCA 4th</option>
	       		<option value="BCA 5th">BCA 5th</option>
	       		<option value="BCA 6th">BCA 6th</option>
	       		<option value="BCA 7th">BCA 7th</option>
	       		<option value="BCA 8th">BCA 8th</option>
	       	 </optgroup>

	       	 	<optgroup label="Bsc Csit" >
	       		<option value="Bsc Csit 1st">Bsc Csit 1st</option>
	       		<option value="Bsc Csit 2nd">Bsc Csit 2nd</option>
	       		<option value="Bsc Csit 3rd">Bsc Csit 3rd</option>
	       		<option value="Bsc Csit 4th">Bsc Csit 4th</option>
	       		<option value="Bsc Csit 5th">Bsc Csit 5th</option>
	       		<option value="Bsc Csit 6th">Bsc Csit 6th</option>
	       		<option value="Bsc Csit 7th">Bsc Csit 7th</option>
	       		<option value="Bsc Csit 8th">Bsc Csit 8th</option>
	       	 </optgroup>

	       	 <optgroup label="BIM" >
	       		<option value="BIM 1st">BIM 1st</option>
	       		<option value="BIM 2nd">BIM 2nd</option>
	       		<option value="BIM 3rd">BIM 3rd</option>
	       		<option value="BIM 4th">BIM 4th</option>
	       		<option value="BIM 5th">BIM 5th</option>
	       		<option value="BIM 6th">BIM 6th</option>
	       		<option value="BIM 7th">BIM 7th</option>
	       		<option value="BIM 8th">BIM 8th</option>
	       	 </optgroup> 
	       	 <optgroup label="BBM" >
	       		<option value="BBM 1st">BBM 1st</option>
	       		<option value="BBM 2nd">BBM 2nd</option>
	       		<option value="BBM 3rd">BBM 3rd</option>
	       		<option value="BBM 4th">BBM 4th</option>
	       		<option value="BBM 5th">BBM 5th</option>
	       		<option value="BBM 6th">BBM 6th</option>
	       		<option value="BBM 7th">BBM 7th</option>
	       		<option value="BBM 8th">BBM 8th</option>
	       	 </optgroup> 
	       	</select>
	       	<br><br>
	       	Security Question:<select name="Security" ?>">
	       		<option <?php if($row['Question']=="What is your Nickname??") echo 'selected="selected"'; ?> > What is your Nickname??  </option>
	       		<option <?php if($row['Question']=="What is your Father's name??") echo 'selected="selected"'; ?>>What is your Father's name?? </option>
	       		<option <?php if($row['Question']=="What is your Favourite Game??") echo 'selected="selected"'; ?>> What is your Favourite Game?? </option>
	       		<option <?php if($row['Question']=="What is your Mother's name??") echo 'selected="selected"'; ?>> What is your Mother's name?? </option>
	       	</select> <br><br>
	       

	       Your Answer: <input type="text" name="ans" value="<?php echo $row['Ans']; ?>" > <br><br>
           <input type="submit" value="Update Data" class="but">
                    </div>
                    </form>
        </fieldset>
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
</div>
</body>
</html>