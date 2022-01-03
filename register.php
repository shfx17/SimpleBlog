<?php

include("db/config.php");

if(@$_SESSION['logintime'] == 1)
{
    header("Location: panel.php");
}

if(isset($_POST['register']))
{

$regLogin = $_POST['nick'];
$regPassword = $_POST['password'];
    
$regLogin = htmlentities($regLogin, ENT_QUOTES, "UTF-8");
$regPassword = htmlentities($regPassword, ENT_QUOTES, "UTF-8");
    
if(strlen($regLogin) < 2 OR strlen($regPassword) < 2)
{
     print("<script>alert(\"Username or password are so short!\");</script>");
} else {
    if(strlen($regLogin) > 35 OR strlen($regPassword) > 16)
    {
         print("<script>alert(\"Username or password are so long!\");</script>");
    } else {
        $checkAdmin = "SELECT * FROM users WHERE id='1'";   // sprawdzanie czy istnieje już administrator
        
        if($resultCheckAdmin = @$con->query($checkAdmin)) 
        {
            $rekordAdmin = $resultCheckAdmin->num_rows;  //jezeli istnieje daje 1
                        
             if($rekordAdmin == 1)
             {
                print("<Script>alert(\"Administrator is in database!\");</script>");
            } else {
                $hash = MD5($regPassword);
                    
                $insertAdmin = "INSERT INTO users VALUES ('', '$regLogin', '$hash')";
                                        
                if($resultInsertAdmin = @$con->query($insertAdmin))
                {
                   print("<script>alert('The account has been created. Go to login!')</script>");
                }
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
                            <h3 class="title">Create an Account!</h3>
                        </div>
                        <div class="login-input">
                            <form action="#" method="POST">
                                <div class="input-box mt-10">
                                    <input type="text" name="nick" placeholder="Username">
                                </div>
                                <div class="input-box mt-10">
                                    <input type="password" name="password" placeholder="Password">
                                    <ul class="checkbox_common checkbox_style5">
                                        <li>
                                            <input type="checkbox" name="checkbox5" id="checkbox13">
                                            <label for="checkbox13"><span></span>I agree to the Terms of Service and Privacy Policy</label>
                                        </li>
                                    </ul>
                                </div>
                                <div class="input-btn mt-10">
                                    <button name="register" class="main-btn" type="submit">login</button>
                                    <span>Already have an account? <a href="login.php">Singin</a></span>
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
