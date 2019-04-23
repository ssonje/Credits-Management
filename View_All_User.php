<!DOCTYPE html>
<html>
<head>
<style>
	
	table, th, td 
	{	
  		border: 1px solid black;
  		border-collapse: collapse;
  		background-color: #f1f1c1;
  		text-align: center;
	}

	body
	{
		background-image: url(india.png);
		background-size: cover;
		background-repeat: no-repeat;
	}

	h2
		{
			color:black	;
			text-align: center;
			font-size: 50px;	
		}

	div.absolute
	 	{
			position: absolute;
			font-size: 20px;
			top: 620px;
			right: 1;
			width: 900px;
			left: 100px;
		}

		/* unvisited link */
	a:link 
	{
		color: black;
		position: absolute;
		font-size: 20px;
		top: 645px;
		right: 1;
		left: 190px;
		width: 300px;
	}

	/* mouse over link */
	a:hover 
	{
	  	color: hotpink;
	}

	/* selected link */
	a:active 
	{
	  	color: blue;
	}
			
</style>

</head>

<body>

	<h2 class = "center">
		
		VIEW ALL USERS
	
	</h2>

<table style="width:100%" >
  	
  	<tr>
		<th>Serial No</th>
		<th>Name</th>
		<th>Credits</th>
  	</tr>


<?php

	$DBhost = "localhost:3307";
	$DBuser = "root";
	$DBpass = "";
	$DBname = "user";


	// Create connection
	$conn = mysqli_connect($DBhost, $DBuser, $DBpass,$DBname);


	// Check connection
	//if (!$conn) 
	//{
	//    die("Connection failed: " . mysqli_connect_error());
	//}
	//echo "Connected successfully";

	$sql = "SELECT * FROM details";
	$result = mysqli_query($conn,$sql) or die( mysqli_error($conn));
	?>

	<?php  
	while ($row = mysqli_fetch_assoc($result))
	{
	    if($row !== FALSE) 
	    {
	    	?>

	    	<br>
	    	<tr>
	    		<td><?php echo (int)$row['ID']; ?></td>
	    		<td><?php echo $row['Name'];?></td>
	    		<td><?php echo (int)$row['Credits'];?></td>
	  		</tr>
	        <?php
	    }
        else 
        {
            echo "0 results";
        }
	}   
		  ?>
		
		<br>
		</table>

	<?php  

	mysqli_close($conn);

	?>

	<div class = "absolute">
		
		To select and view one user go to the link mentioned below.

	</div>

	<p><b><a href="http://localhost/task2/Select_And_View_One_User.php" target="_blank">SELECT AND VIEW ONE USER</a></b></p>
    
</body>

</html>
