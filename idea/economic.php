

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
    <title>manufacter</title>
    <link rel="stylesheet" href="economic.css">
    <style>
      .add_button {
  background-color: lightblue;
  border: none;
  color:white;

  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
      </style>
    
</head>
<body>
    <div class="container">
    
        <div id="main" >
            
            
              <div class="fixed-top">
                <div class="divc">
                <nav>
                <h3 width="100" height="80" style="margin-left:2.5em;" text-align="center" ><h3 style="padding-right: 10px;"></h3>
                <img src="logo_dbms_f-removebg-preview.png" width="50" height="50" alt="" style="padding-top: 8px;">
                    VISION
                    <ul>
                      <li><a href="ecoform.html">APPLY</a></li>
                      
                     
                    </ul>
                </h3>
              </nav>
            </div>
      </div>
      
      <img src="h1.jpg" height="90%" width="100%" ><h1 style="text-align: center;padding:20px;color:rgb(32, 32, 78)"><u>ECONOMIC SECTOR</u></h1>
       
     
<h1 style="padding-left:20px;">COMPANY </h1> 
<?php // LOOP TILL END OF DATA
				while($rows=$result->fetch_assoc())
				{
			?>
  
<div class="cardlist">

<div class="card" style="margin:5px 355px">
  
  <h2 class="item_name" style="color: rgb(33, 4, 71);"><?php echo $rows['E_id'];?>.
  <?php echo $rows['fname'];?>
       <?php echo $rows['lname'];?><br><br>
       <?php echo $rows['mail'];?><br><br>
       Company : <?php echo $rows['company'];?><br>
      Loan amount : <?php echo $rows['loan'];?><br>
			Interest (%) :<?php echo $rows['loani'];?></h2>
     <div class="item_details">

    <button class="add_button"><a href = "mailto: <?php echo $rows['mail'];?>">CONTACT</a></button>
      </div>
        </div>
</div>
<?php
       }
     ?>




                <footer>
                    <div class="footer1" style="text-align: center;">
                    <address><h2>Contact Us</h2></address>
                    <p>+272717182</p>
                    <p>+91 7836366362</p><br>
                    <address><h2>Address</h2></address>
                    <p>Doon House , B-275, First Floor Sector</p>
                    <p>HonKong Bazaar, Haryana </p>
                    <p>Pincode : 12245
                    </p><br>
                    <address><h2>Email Us </h2></address>
                    <p>vision@gmail.com</p><br><br>
                </div>
                </footer>
    
</body>
</html>