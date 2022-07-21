<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <?php
  session_start();
  $con=mysqli_connect('localhost','root','');
    mysqli_select_db($con, 'userreg');

$fname=$_POST['firstname'];
$lname=$_POST['lastname'];
$mail=$_POST['mailid'];
$country=$_POST['country'];
$message=$_POST['subject'];
// $s = "select * from usertable where fname= '$fname' && lname= '$lname' && mail= '$mail' && country= '$country'";
//     $result=mysqli_query($con,$s);
//     $num=mysqli_num_rows($result);

//     if($num==1)
//     {
        $reg = " insert into feedback_table (fname,lname,mail,country,message) values('$fname','$lname','$mail','$country','$message')";
        mysqli_query($con, $reg);
        echo"submitted";
        header('location:home.html');
   
    // }
    // else
    // {
    //     $reg = " insert into feedback_table table(fname,lname,mail,country,message) values('$fname','$lname','$mail','$country','$message')";
    //     mysqli_query($con, $reg);
    //     header('location:index.html');
    // }




?>
  
  </body>
</html>