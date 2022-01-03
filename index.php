<?php

include("db/config.php");

$content = "SELECT * FROM posts WHERE id='1'";

if($result = @$con->query($content))
{
   $wiersz = $result->fetch_assoc();
} 


?><!doctype html>
<html lang="en">

<head>
   
    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!--====== Title ======-->
    <title>Simple Blog</title>
    
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
   
    <!--====== HEADER PART START ======-->
    
    <header class="header-area">
        <div class="header-nav">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="navigation">
                            <nav class="navbar navbar-expand-lg navbar-light ">
                                <a class="navbar-brand" href="index.html"><img src="assets/images/logo.png" alt=""></a> <!-- logo -->
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="toggler-icon"></span>
                                    <span class="toggler-icon"></span>
                                    <span class="toggler-icon"></span>
                                </button> <!-- navbar toggler -->
                                                                  
                                <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                    <ul class="navbar-nav m-auto">
                                        <li class="nav-item active">
                                            <a class="nav-link" href="index.php">Home</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="login.php">Login</a>
                                        </li>
                                       <li class="nav-item">
                                            <a class="nav-link" href="register.php">Register</a>
                                        </li>
                                        
                                    </ul>
                                </div> <!-- navbar collapse -->
                                
                            </nav>
                        </div> <!-- navigation -->
                    </div>
                </div>
            </div>
        </div>
    </header>
    
    <!--====== HEADER PART ENDS ======-->

    <!--====== PAGE TITLE PART START ======-->
    
    <div class="page-title-area page-title-2-area bg_cover" style="background-image: url(assets/images/page-bg-2.png);">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-lg-6">
                    <div class="page-title-content">
                        <span>Crpyto XLM</span>
                        <h3 class="title">Airdrops</h3>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="title-social d-flex justify-content-lg-end justify-content-start">
                        <div class="item">
                            <span>Share</span>
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fab fa-github"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="page-title-thumb-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-title-thumb">
                        <img src="assets/images/page-title-thumb.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!--====== PAGE TITLE PART ENDS ======-->

    <!--====== BLOG POST PART START ======-->
    
    <section class="blog-post-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="blog-post-item">
                        <div class="blog-post-top-content">
                            <h3 class="title"><?php echo $wiersz['title']; ?></h3>
                            <p><?php echo $wiersz['post']; ?></p>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!--====== BLOG POST PART ENDS ======-->

    <!--====== FOOTER PART START ======-->
    
    <footer class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer-list mt-30">
                        <h4 class="title">Menu</h4>
                        <ul>
                            <li><a href="#">About</a></li>
                            <li><a href="#">Team</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Blog</a></li>
                        </ul>
                    </div>                
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer-list mt-30">
                        <h4 class="title">PAPERS</h4>
                        <ul>
                            <li><a href="#">White Paper</a></li>
                            <li><a href="#">Technical Paper</a></li>
                            <li><a href="#">One Pager</a></li>
                        </ul>
                    </div>                
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer-list mt-30">
                        <h4 class="title">legal</h4>
                        <ul>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Terms & Conditions</a></li>
                            <li><a href="#">Cookie Policy</a></li>
                        </ul>
                    </div>                
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer-list mt-30">
                        <h4 class="title">Newsletter</h4>
                        <form action="#">
                            <div class="input-box">
                                <input type="text" placeholder="Email Address">
                                <button><i class="fal fa-arrow-right"></i></button>
                            </div>
                        </form>
                    </div>                
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-copyright d-flex justify-content-sm-between justify-content-center align-items-center">
                        <p>© GITHUB</p>
                        <ul>
                            <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                            <li><a href="#"><i class="fab fa-github"></i></a></li>
                            <li><a href="#"><i class="fal fa-paper-plane"></i></a></li>
                            <li><a href="#"><i class="fab fa-btc"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    
    <!--====== FOOTER PART ENDS ======-->

    <!--====== scroll_up PART START ======-->

    <a id="scroll_up"><i class="far fa-angle-up"></i></a>

    <!--====== scroll_up PART ENDS ======-->
    





    


</body>

</html>
