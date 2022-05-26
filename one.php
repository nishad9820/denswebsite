

<?php

include("conn.php");

?>




<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>software devlopment</title>
	<link rel="stylesheet" type="text/css" href="one.css">
</head>
<body>
    <div class="centre">
    	<form action="#" method="POST">
    	<h1>Employee Data Entry Automition Software</h1>

    	 <div class="form">
    	<input type="text" class="tf" name="id" placeholder="Search ID">
    	<input type="text" class="tf" name="name" placeholder="Employee Name">
    	<select class="tf" name="gender">
    		<option value="Not Select">Select Gender</option>
    		<option value="Male">Male</option>
    		<option value="Female">Female</option>
    		<option value="Other">Other</option>
    	</select>
    	<input type="text" class="tf" name="email" placeholder="Email Address">
    	<select class="tf" name="department">
    		<option value="Not Select">Select Department</option>
    		<option value="IT">IT</option>
    		<option value="Accounts">Accounts</option>
    		<option value="Sales">Sales</option>
    		<option value="HR">HR</option>
    		<option value="Bussiness Development">Bussiness Development</option>
    		<option value="Marketing">Marketing</option>
    	</select>
    	<textarea placeholder="Address" name="address"></textarea>
    	<input type="submit" value="Search" name="search" class="btn">
    		<input type="submit" value="Seve" name="save" class="btn" style="background-color: green;">
    			<input type="submit" value="Modify" name="modify" class="btn" style="background-color: orange;">
    				<input type="submit" value="Delete" name="delete" class="btn" style="background-color: red;">
    					<input type="submit" value="Clear" name="clear" class="btn" style="background-color: blue;">

    </div>
    </form>

    </div>

</body>
</html>


<?php

if(isset($_POST['save'])){
	$name = $_POST['name'];
	$gender = $_POST['gender'];
	$email = $_POST['email'];
	$department = $_POST['department'];
	$address = $_POST['address'];

	$query = "INSERT INTO form (name,gender,email,department,address) VALUES ('$name','$gender','$email','$department','$address')";
    
    $data = mysqli_query($conn,$query);

    if($data){
    	echo "data save";
    }
    else{
    	echo "failed data";
    }
}

?>