<?php
include("db/config.php");

if(@$_SESSION['logintime'] == 0)
{
    header("Location: index.php");
}

if(isset($_POST['logout'])){
    session_destroy();
    header("Location: index.php");
}

if(isset($_POST['add'])){
    $checkPost = "SELECT * FROM posts WHERE id='1'";

    if($result = @$con->query($checkPost)) 
    {
        $record = $result->num_rows;  //jezeli istnieje post otrzymujemy 1
                        
        if($record == 1)
        {
            print("<script>alert('Post is in databas. If you want edit post you have to contact with administrator :) !')</script>");

        } else {
            $title = $_POST['title'];
            $msg = $_POST['msg'];
                
            $title = htmlentities($title, ENT_QUOTES, "UTF-8");
            $msg = htmlentities($msg, ENT_QUOTES, "UTF-8");

            $insert = "INSERT INTO posts VALUES ('', '$title', '$msg')";
                                                
            if($result = @$con->query($insert))
            {
                print("<script>alert('Post has been added!')</script>");
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


    <!--====== WHO WE ARE PART START ======-->

    <section class="who-we-are-area pt-90 pb-90">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="who-we-are-content text-center">
                        <span>Add post</span>
                        <p>Here u can add your post to your site. You can use forms.</p>

                            <form action="#" method="POST">
                                <div class="input-box mt-10">
                                    <input type="text" name="title" placeholder="Title">
                                </div>
                                <div class="input-box mt-10">
                                    <input type="text" name="msg" placeholder="Post">
                                </div>
                                <div class="input-btn mt-10">
                                    <button name="add" class="main-btn" type="submit">Add post</button>
                                </div>
                            </form>

                            <form action="#" method="POST">
                                <div class="input-btn mt-10">
                                    <button name="logout" class="main-btn" type="submit">Logout</button>
                                </div>
                            </form>
                    </div>
                </div>
            </div>
             
        </div>
    </section>

    <!--====== WHO WE ARE PART ENDS ======-->
 
    

</body>

</html>