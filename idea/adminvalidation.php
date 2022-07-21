<!DOCTYPE HTML>
<html>
    <head> <title>php</title>
</head>
<body>
<?php

    session_start();
    


    $con=mysqli_connect('localhost','root','');
    mysqli_select_db($con, 'userreg');

    $uname = $_POST['uname'];
   
    $password = $_POST['password'];
    
    $s = "select * from aadmin where auname= '$uname' && apassword= '$password'";
    $result=mysqli_query($con,$s);
    $num=mysqli_num_rows($result);

    if($num==1)
    {
        header('location:display.php');
    }
    else
    {
        header('location:adminlogin.html');
    }


?>

</body>
</html>