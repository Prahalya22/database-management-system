<!DOCTYPE HTML>
<html>
    <head> <title>php</title>
</head>
<body>
<?php

    session_start();
    header('location:login.html');
    $con=mysqli_connect('localhost','root','');
    mysqli_select_db($con, 'userreg');
   
    $name = $_POST['name'];
    $uname=$_POST['uname'];
    $email = $_POST['email'];
    $number=$_POST['number'];
    $password = $_POST['password'];
    $s = "select * from user where username= '$uname'";
    $result=mysqli_query($con,$s);
    $num=mysqli_num_rows($result);

    if($num==1)
    {
        echo "You have already registered";
    }
    else
    {
        $reg = " insert into user (name,username,email,number,password) values ('$name','$uname','$email','$number','$password')";
        mysqli_query($con, $reg);
        echo "Registration Successful";
    }


?>

</body>
</html>