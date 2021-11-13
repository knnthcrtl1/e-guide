<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Login</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="./admin/assets/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
    <link href="./admin/assets/css/custom.css" rel="stylesheet" />

</head>

<body style="background-image:url(./admin/assets/img/main-bg.jpg)"class="bg-gradient-primary login-background">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="index__container">

                <div>   
                    <h2 class="text-center">WELCOME WARRIORS</h2>
                </div>
                <!-- <div class="row" style="margin-top: 20px">
                    <div class="col-md-6 text-center">
                        <img src='./admin/assets/img/logo.png' class="ue_logo" />
                    </div>

                    <div class="col-md-6 text-center">
                        <img src='./admin/assets/img/gcsgo.png' class="ue_logo" />
                    </div>
                </div> -->

                <div style="margin-top: 20px">
                    <h4 class="text-center">
                        Univeristy of the East Caloocan <br /> Guidance Counseling and Career Service Office
                    </h4>
                </div>

                <?php $root = (!empty($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/'; ?>
                <div class="row" style="margin-top: 20px;">

                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <a href="<?php echo 'login.php'; ?>" class="link_index">
                            Student
                        </a>
                    </div>
                    <div class="col-md-3"></div>

                    <!-- <div class="col-md-6">
                        <a href="<?php echo 'admin/login.php'; ?>" class="link_index"> 
                            Admin
                        </a>
                    </div> -->

                </div>

            </div>

        </div>

    </div>

    <?php include('./footer.php'); ?>