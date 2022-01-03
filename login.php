<?php

include("db/config.php");

if(@$_SESSION['logintime'] == 1)
{
    header("Location: panel.php");
}

if(isset($_POST['login']))
{

$login = $_POST['nick'];
$password = $_POST['password'];

$login = htmlentities($login, ENT_QUOTES, "UTF-8");
$password = htmlentities($password, ENT_QUOTES, "UTF-8");

$hash = MD5($password);  

if(strlen($login) < 2 OR strlen($password) < 2)
{
    print("<script>alert(\"Username or password are so short!\");</script>");
} else {
    if(strlen($login) > 35 OR strlen($password) > 16)
    {
        print("<script>alert(\"Username or password are so long!\");</script>");
    } else {
        $checkAdmin = "SELECT * FROM users WHERE login='$login' AND pass='$hash'";
            
        if($resultCheckAdmin = @$con->query($checkAdmin))
        {
            $checked = $resultCheckAdmin->num_rows;  // jeżeli znaleziono użytkownika dostajemy 1
            if($checked == 1)
            {
                print("<script>alert('You are logged!')</script>");
                session_start();
                    
                $_SESSION['logintime'] = 1;
                    
                header("Location: panel.php");
            } else {
                print("<script>alert('Invalid username od password')</script>");
            }
        }
    }
}
}
?>

<!doctype html>
<html lang="en">

<head>
   
    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!--====== Title ======-->
    <title>Simple Blog + Panel</title>
    
    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/png">

    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    
    <!--====== Fontawesome css ======-->
    <link rel="stylesheet" href="assets/css/all.css">
    
    <!--====== nice select css ======-->
    <link rel="stylesheet" href="assets/css/nice-select.css">
    
    <!--====== Default css ======-->
    <link rel="stylesheet" href="assets/css/default.css">
    
    <!--====== Style css ======-->
    <link rel="stylesheet" href="assets/css/style.css">
  
  
</head>

<body>
   
    <!--====== ERROR PART START ======-->
    
    <section class="error-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-8">
                    <div class="login-box">
                        <div class="login-title text-center">
                            <img src="assets/images/logo-2.png" alt="logo">
                            <h3 class="title">Simple Blog - Login</h3>
                        </div>
                        <div class="login-input">
                            <form action="#" method="POST">
                                <div class="input-box mt-10">
                                    <input type="text" name="nick" placeholder="Username">
                                </div>
                                <div class="input-box mt-10">
                                    <input type="password" name="password" placeholder="Password">
                                </div>
                                <div class="input-btn mt-10">
                                    <button name="login" class="main-btn" type="submit">login</button>
                                    <span>Need an account? <a href="register.php">Signup</a></span>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="error-color">
            <img src="assets/images/error-color.png" alt="color">
        </div>
        <div class="error-thumb">
            <img src="assets/images/login-singup.png" alt="">
        </div>
    </section>
    


</body>

</html>
