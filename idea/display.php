
<?php

$user = 'root';
$password = '';

$database = 'userreg';

$servername='localhost';
$mysqli = new mysqli($servername, $user,
				$password, $database);

// Checking for connections
if ($mysqli->connect_error) {
	die('Connect Error (' .
	$mysqli->connect_errno . ') '.
	$mysqli->connect_error);
}

// SQL query to select data from database
$sql = "SELECT * FROM user  ";
$result = $mysqli->query($sql);
$mysqli->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>admin page</title>
	<!-- CSS FOR STYLING THE PAGE -->
	<style>
		table {
			margin: 0 auto;
			font-size: large;
			border: 1px solid black;
		}

		h1 {
			text-align: center;
			color: #006600;
			font-size: xx-large;
			font-family: 'Gill Sans', 'Gill Sans MT',
			' Calibri', 'Trebuchet MS', 'sans-serif';
		}

		td {
			background-color: #E4F5D4;
			border: 1px solid black;
		}

		th,
		td {
			font-weight: bold;
			border: 1px solid black;
			padding: 10px;
			text-align: center;
		}

		td {
			font-weight: lighter;
		}
	</style>
</head>

<body>
	<section>
		<h1>DATABASE</h1>
		<!-- TABLE CONSTRUCTION-->
		<table>
			<tr>
				<th>ID</th>

				<th>USERNAME</th>
				<th>NAME</th>
				<th>EMAIL</th>
				<th>NUMBER</th>
			

			</tr>
			<!-- PHP CODE TO FETCH DATA FROM ROWS-->
			<?php // LOOP TILL END OF DATA
				while($rows=$result->fetch_assoc())
				{
			?>
			<tr>
				<!--FETCHING DATA FROM EACH
					ROW OF EVERY COLUMN-->
				<td><?php echo $rows['id'];?></td>

				<td><?php echo $rows['username'];?></td>
				<td><?php echo $rows['name'];?></td>
				<td><?php echo $rows['email'];?></td>
				<td><?php echo $rows['number'];?></td>
				
			</tr>
			<?php
				}
			?>
		</table>
	</section>

    
</body>

</html>




<?php

$user = 'root';
$password = '';

$database = 'userreg';

$servername='localhost';
$mysqli = new mysqli($servername, $user,
				$password, $database);

// Checking for connections
if ($mysqli->connect_error) {
	die('Connect Error (' .
	$mysqli->connect_errno . ') '.
	$mysqli->connect_error);
}

// SQL query to select data from database
$sql = "SELECT * FROM ecotable  ";
$result = $mysqli->query($sql);
$mysqli->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	
	<!-- CSS FOR STYLING THE PAGE -->
	<style>
		table {
			margin: 0 auto;
			font-size: large;
			border: 1px solid black;
		}

		h1 {
			text-align: center;
			color: #006600;
			font-size: xx-large;
			font-family: 'Gill Sans', 'Gill Sans MT',
			' Calibri', 'Trebuchet MS', 'sans-serif';
		}

		td {
			background-color: #E4F5D4;
			border: 1px solid black;
		}

		th,
		td {
			font-weight: bold;
			border: 1px solid black;
			padding: 10px;
			text-align: center;
		}

		td {
			font-weight: lighter;
		}
	</style>
</head>

<body>
	<section>
		<h1>ECONOMIC DATABASE</h1>
		<!-- TABLE CONSTRUCTION-->
		<table>
			<tr>
				<th>ID</th>

				<th>USERNAME</th>
				<th>FIRST NAME</th>
				<th>LAST NAME</th>

				<th>EMAIL</th>
				<th>COUNTRY</th>
				<th>COMPANY</th>

				<th>ADDRESS</th>
                
				<th>NUMBER</th>
				<th>LOAN</th>
				<th>INTEREST</th>
				<th>DESCRIPTION</th>




			</tr>
			<!-- PHP CODE TO FETCH DATA FROM ROWS-->
			<?php // LOOP TILL END OF DATA
				while($rows=$result->fetch_assoc())
				{
			?>
			<tr>
				<!--FETCHING DATA FROM EACH
					ROW OF EVERY COLUMN-->
				<td><?php echo $rows['E_id'];?></td>

				<td><?php echo $rows['uname'];?></td>
				<td><?php echo $rows['fname'];?></td>
				<td><?php echo $rows['lname'];?></td>
				<td><?php echo $rows['mail'];?></td>
				<td><?php echo $rows['country'];?></td>
				<td><?php echo $rows['company'];?></td>
				<td><?php echo $rows['address'];?></td>
				<td><?php echo $rows['phone'];?></td>
				<td><?php echo $rows['loan'];?></td>
				<td><?php echo $rows['loani'];?></td>
				<td><?php echo $rows['description'];?></td>


			</tr>
			<?php
				}
			?>
		</table>
	</section>

    
</body>

</html>

    
<?php

$user = 'root';
$password = '';

$database = 'userreg';

$servername='localhost';
$mysqli = new mysqli($servername, $user,
				$password, $database);

// Checking for connections
if ($mysqli->connect_error) {
	die('Connect Error (' .
	$mysqli->connect_errno . ') '.
	$mysqli->connect_error);
}

// SQL query to select data from database
$sql = "SELECT * FROM guidetable  ";
$result = $mysqli->query($sql);
$mysqli->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	
	<!-- CSS FOR STYLING THE PAGE -->
	<style>
		table {
			margin: 0 auto;
			font-size: large;
			border: 1px solid black;
		}

		h1 {
			text-align: center;
			color: #006600;
			font-size: xx-large;
			font-family: 'Gill Sans', 'Gill Sans MT',
			' Calibri', 'Trebuchet MS', 'sans-serif';
		}

		td {
			background-color: #E4F5D4;
			border: 1px solid black;
		}

		th,
		td {
			font-weight: bold;
			border: 1px solid black;
			padding: 10px;
			text-align: center;
		}

		td {
			font-weight: lighter;
		}
	</style>
</head>

<body>
	<section>
		<h1>GUIDE DATABASE</h1>
		<!-- TABLE CONSTRUCTION-->
		<table>
			<tr>
				<th>ID</th>

				<th>USERNAME</th>
				<th>FIRST NAME</th>
				<th>LAST NAME</th>

				<th>EMAIL</th>
				<th>COUNTRY</th>
				

				<th>ADDRESS</th>
                
				<th>PHONE</th>
				<th>EXPERIENCE</th>
				<th>SPECIALIZATION</th>
				<th>QUALIFICATION</th>

				<th>DESCRIPTION</th>




			</tr>
			<!-- PHP CODE TO FETCH DATA FROM ROWS-->
			<?php // LOOP TILL END OF DATA
				while($rows=$result->fetch_assoc())
				{
			?>
			<tr>
				<!--FETCHING DATA FROM EACH
					ROW OF EVERY COLUMN-->
				<td><?php echo $rows['G_ID'];?></td>

				<td><?php echo $rows['uname'];?></td>
				<td><?php echo $rows['fname'];?></td>
				<td><?php echo $rows['lname'];?></td>
				<td><?php echo $rows['mail'];?></td>
				<td><?php echo $rows['country'];?></td>
				
				<td><?php echo $rows['address'];?></td>
				<td><?php echo $rows['phone'];?></td>
				<td><?php echo $rows['experince'];?></td>
				<td><?php echo $rows['specialization'];?></td>
				<td><?php echo $rows['qualification'];?></td>

				<td><?php echo $rows['description'];?></td>
\
                

			</tr>
			<?php
				}
			?>
		</table>
	</section>
</body>

</html>

    
<?php

$user = 'root';
$password = '';

$database = 'userreg';

$servername='localhost';
$mysqli = new mysqli($servername, $user,
				$password, $database);

// Checking for connections
if ($mysqli->connect_error) {
	die('Connect Error (' .
	$mysqli->connect_errno . ') '.
	$mysqli->connect_error);
}

// SQL query to select data from database
$sql = "SELECT * FROM humtable ";
$result = $mysqli->query($sql);
$mysqli->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>GFG User Details</title>
	<!-- CSS FOR STYLING THE PAGE -->
	<style>
		table {
			margin: 0 auto;
			font-size: large;
			border: 1px solid black;
		}

		h1 {
			text-align: center;
			color: #006600;
			font-size: xx-large;
			font-family: 'Gill Sans', 'Gill Sans MT',
			' Calibri', 'Trebuchet MS', 'sans-serif';
		}

		td {
			background-color: #E4F5D4;
			border: 1px solid black;
		}

		th,
		td {
			font-weight: bold;
			border: 1px solid black;
			padding: 10px;
			text-align: center;
		}

		td {
			font-weight: lighter;
		}
	</style>
</head>

<body>
	<section>
		
<body>
	<section>
		<h1>EMPLOYEE DATABASE</h1>
		<!-- TABLE CONSTRUCTION-->
		<table>
			<tr>
				<th>ID</th>

				<th>USERNAME</th>
				<th>FIRST NAME</th>
				<th>LAST NAME</th>

				<th>EMAIL</th>
                <th>ADDRESS</th>
				<th>COUNTRY</th>
				<th>PHONE</th>
				<th>EXPERIENCE</th>
				<th>SPECIALIZATION</th>
				<th>QUALIFICATION</th>

				<th>DESCRIPTION</th>


			


			</tr>
			<!-- PHP CODE TO FETCH DATA FROM ROWS-->
			<?php // LOOP TILL END OF DATA
				while($rows=$result->fetch_assoc())
				{
			?>
			<tr>
				<!--FETCHING DATA FROM EACH
					ROW OF EVERY COLUMN-->
				<td><?php echo $rows['EMP_ID'];?></td>

				<td><?php echo $rows['uname'];?></td>
				<td><?php echo $rows['fname'];?></td>
				<td><?php echo $rows['lname'];?></td>
				<td><?php echo $rows['mail'];?></td>
                <td><?php echo $rows['address'];?></td>
				<td><?php echo $rows['country'];?></td>
				
				
				<td><?php echo $rows['phone'];?></td>
				<td><?php echo $rows['experince'];?></td>
				<td><?php echo $rows['specialization'];?></td>
				<td><?php echo $rows['qualification'];?></td>

				<td><?php echo $rows['description'];?></td>


			</tr>
			<?php
				}
			?>
		</table>
	</section>

    
</body>

</html>

    
<?php

$user = 'root';
$password = '';

$database = 'userreg';

$servername='localhost';
$mysqli = new mysqli($servername, $user,
				$password, $database);

// Checking for connections
if ($mysqli->connect_error) {
	die('Connect Error (' .
	$mysqli->connect_errno . ') '.
	$mysqli->connect_error);
}

// SQL query to select data from database
$sql = "SELECT * FROM manutable  ";
$result = $mysqli->query($sql);
$mysqli->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	
	<!-- CSS FOR STYLING THE PAGE -->
	<style>
		table {
			margin: 0 auto;
			font-size: large;
			border: 1px solid black;
		}

		h1 {
			text-align: center;
			color: #006600;
			font-size: xx-large;
			font-family: 'Gill Sans', 'Gill Sans MT',
			' Calibri', 'Trebuchet MS', 'sans-serif';
		}

		td {
			background-color: #E4F5D4;
			border: 1px solid black;
		}

		th,
		td {
			font-weight: bold;
			border: 1px solid black;
			padding: 10px;
			text-align: center;
		}

		td {
			font-weight: lighter;
		}
	</style>
</head>
		
<body>
	<section>
		<h1>MANUFACTER DATABASE</h1>
		<!-- TABLE CONSTRUCTION-->
		<table>
			<tr>
				<th>ID</th>

				<th>USERNAME</th>
				<th>FIRST NAME</th>
				<th>LAST NAME</th>

				<th>EMAIL</th>
                
				<th>COUNTRY</th>
				<th>ITEM</th>
				<th>COMPANY</th>
				<th>PHONE</th>
                <th>DESCRIPTION</th>


				


			</tr>
			<!-- PHP CODE TO FETCH DATA FROM ROWS-->
			<?php // LOOP TILL END OF DATA
				while($rows=$result->fetch_assoc())
				{
			?>
			<tr>
				<!--FETCHING DATA FROM EACH
					ROW OF EVERY COLUMN-->
				<td><?php echo $rows['M_ID'];?></td>

				<td><?php echo $rows['uname'];?></td>
				<td><?php echo $rows['fname'];?></td>
				<td><?php echo $rows['lname'];?></td>
				<td><?php echo $rows['mail'];?></td>
               
				<td><?php echo $rows['country'];?></td>
				
				<td><?php echo $rows['iname'];?></td>
				<td><?php echo $rows['company'];?></td>
                
				<td><?php echo $rows['phone'];?></td>
				
				<td><?php echo $rows['description'];?></td>

               

			</tr>
			<?php
				}
				
			?>
		</table>
	</section>

    
</body>

</html>

    

    