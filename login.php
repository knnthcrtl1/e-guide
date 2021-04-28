<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Student Login</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="./admin/assets/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
    <link href="./admin/assets/css/custom.css" rel="stylesheet" />

</head>

<body class="bg-gradient-primary login-background">

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <!-- <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button> -->

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="/eguide/login.php">Student <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/eguide/admin/login.php">Admin</a>
                    </li>
                </ul>
                <div>
                    <a class="nav-link" href="/eguide/student_register.php">REGISTER</a>
                </div>
                <!-- <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form> -->
            </div>
        </div>

    </nav>

    <div class="container">


        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="bg-login-container">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row justify-content-center">
                            <div class="col-md-6 d-flex align-items-center">
                                <div class="d-flex justify-content-center align-items-center">
                                    <img class="app__logo" src="./admin/assets/img/logo.png" style="max-width: 50%;" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="" style="padding: 10px; padding-right:20px">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4" style="margin-top: 20px">STUDENT LOGIN</h1>
                                    </div>
                                    <?php
                                    include('./admin/connection.php');
                                    session_start();
                                    if (isset($_POST["admin-login"])) {
                                        $_SESSION["user"] = $_POST["user"];
                                        $_SESSION["pass"] = md5($_POST["pass"]);
                                        $_SESSION['last_time'] = time(); {
                                            if (!empty($_POST['user']) && !empty(md5($_POST['pass']))) {
                                                $user = $_POST['user'];
                                                $pass = md5($_POST['pass']);
                                                //selecting database
                                                $query = mysqli_query($conn, "SELECT * FROM tbl_users WHERE user_username='" . $user . "' AND user_password='" . $pass . "' AND user_level = 7");
                                                $numrows = mysqli_num_rows($query);
                                                if ($numrows != 0) {
                                                    while ($row = mysqli_fetch_assoc($query)) {
                                                        $username = $row['user_username'];
                                                        $password = $row['user_password'];
                                                        $userLevel = $row['user_level'];
                                                        $userId = $row['user_user_id'];
                                                    }
                                                    if ($user == $username && $pass == $password) {
                                                        $_SESSION['user_level'] = $userLevel;
                                                        $_SESSION["student_user_id"] = $userId;
                                                        header('Location: view_student.php');
                                                        exit();
                                                        //    if($userLevel == 5 || $userLevel == 6) {
                                                        //     header('Location:view_project.php');
                                                        //     exit();
                                                        //    } else {
                                                        // 		 //Redirect Browser
                                                        //     header('Location:view_dashboard.php');
                                                        //     exit();
                                                        //    }
                                                    }
                                                } else {
                                                    session_destroy();
                                                    echo "Invalid Username or Password!";
                                                }
                                            } else {
                                                session_destroy();
                                                echo "Required All fields!";
                                            }
                                        }
                                    }
                                    ?>
                                    <form class="user" method="POST">
                                        <div class="form-group  bmd-form-group">
                                        <label class="bmd-label-floating">Student ID</label>
                                            <input type="name" name="user" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" >
                                        </div>
                                        <!-- <div class="form-group">
                      <input type="email" name="user" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Email Address...">
                    </div> -->
                                        <div class="form-group  bmd-form-group">
                                        <label class="bmd-label-floating">Password</label>
                                            <input type="password" name="pass" class="form-control form-control-user" id="exampleInputPassword">
                                        </div>
                                        <input type="submit" value="Login" name="admin-login" class="btn btn-primary btn-user btn-block">
                                    </form>
                                    <hr>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <?php include('footer.php'); ?>
    <script src="./js/student-script"></script>