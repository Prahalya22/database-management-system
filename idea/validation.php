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
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $password = $_POST['password'];
    $s = "select * from user where username= '$uname' && password= '$password'";
    $result=mysqli_query($con,$s);
    $num=mysqli_num_rows($result);

    if($num==1)
    {
        header('location:home.html');
    }
    else
    {
        header('location:login.html');
    }


?>

</body>
</html>