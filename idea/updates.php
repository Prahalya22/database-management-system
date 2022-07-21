<?php



?>

<!DOCTYPE html>
<html>
    <head>
        <title>
            Welcome!
        </title>
        <link rel="stylesheet" href="login.css">
    </head>
    <body>
        
        <nav style="height: auto; width: auto; background-color: rgb(172, 235, 177);">
                <h2><br>
            <ul>
                <li style="color: rgb(30, 30, 92);text-align: right; padding-right: 30px;"><a href="adminlogin.html">Admin Login</a></li>
              </ul>
            </h2>
           
  
      </nav>
            <div class="container">
            <div class="card">

                
                <div class="innerbox" id="card">
                    
                    <div class="cardfront">
                        <h2>LOGIN</h2>
                        <form action="validation.php" method="post">

                        <?php

    session_start();
    header('location:login.html');
    $con=mysqli_connect('localhost','root','');
    mysqli_select_db($con, 'userreg');
   

    $showdata=mysqli_query($con,$showquery);
   
    $id = $_POST['id'];

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

                            <input type="text" class="input-box" name="uname" placeholder="Your username" required>
                            <input type="password" class="input-box" name="password" placeholder="Password" required>
                            <a href="home.html"><button type="Submit" class="submit-btn" >submit</button></a>
                            <input type="checkbox"><span>Remember me</span>
                        </form>
                        <button type="button" class="btn" onclick="openRegister()">I'm new here</button>
                        <a href="">Forgot password</a>
                    </div>
                    <div class="cardback">
                        <h2>REGISTER</h2>
                        <form action="register.php" method="post">
                            <input type="text" class="input-box" name="name" placeholder="Your name" required>
                            <input type="text" class="input-box" name="uname" placeholder="Your username" required>
                            <input type="email" class="input-box" name="email" placeholder="Your email id" required>
                            <input type="text" class="input-box" name="number"  placeholder="Your contact number" required>
                            <input type="password" class="input-box" name="password" placeholder="Password" required>
                            <a href="home.html"><button type="Submit" class="submit-btn" placeholder="Submit">submit</button></a>
                            <input type="checkbox"><span>Remember me</span>
                        </form>
                        <button type="button" class="btn" onclick="openLogin()">I've an account</button>
                        <a href="">Forgot password</a>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            var card = document.getElementById("card");

            function openRegister(){
                card.style.transform="rotateY(180deg)";
            }
            function openLogin(){
                card.style.transform="rotateY(0deg)";
            }
        </script>
    </body>
</html>