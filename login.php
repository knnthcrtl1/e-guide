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

<?php $root = (!empty($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/eguide/'; ?>

<body class="bg-gradient-primary login-background">

    <div class="custom_header_nav">
        <div class="container">
            <div class="row custom_header_nav_row">

                <div class="col-lg-6">
                    <a href="<?php echo $root . 'index.php'; ?>">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z" />
                            </svg>
                        </span>
                        STUDENT
                    </a>
                </div>

                <div class="col-lg-6">
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
                                        header('Location: view_dashboard.php');
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
                                    echo "<script>alert('Invalid Username or Password!');</script>";
                                }
                            } else {
                                session_destroy();
                                echo "<script>alert('Required all fields');</script>";
                            }
                        }
                    }
                    ?>
                    <form class="user" method="POST" style="margin: 0;">
                        <div class="row student_login_row">
                            <div class="form-group  bmd-form-group">
                                <label class="bmd-label-floating">Student ID</label>
                                <input type="name" name="user" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp">
                            </div>
                            <!-- <div class="form-group">
                      <input type="email" name="user" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Email Address...">
                    </div> -->
                            <div class="form-group  bmd-form-group">
                                <label class="bmd-label-floating">Password</label>
                                <input type="password" name="pass" class="form-control form-control-user" id="exampleInputPassword">
                            </div>
                            <div>
                                <input type="submit" value="Login" name="admin-login" class="btn btn-primary btn-user btn-block">
                            </div>
                        </div>
                    </form>
                </div>

            </div>

        </div>
    </div>




    <div class="container">


        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="bg-login-container">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row justify-content-center">
                            <div class="col-md-6 d-flex align-items-center">
                                <div class="app_logo__left">
                                    <img class="app__logo" src="./admin/assets/img/logo.png" />
                                    <img class="app__logo" src="./admin/assets/img/logo.png" style="margin-top:20px;" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="" style="padding: 10px; padding-right:20px">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4" style="margin-top: 20px">STUDENT LOGIN</h1>
                                    </div>
                                    <form class="user" method="POST" id="add-student-register-form">
                                        <input type="hidden" name="function-type" value="student-register" class="form-control form-control-user" aria-describedby="emailHelp" placeholder="Firstname" required>
                                        <div class="form-group bmd-form-group">
                                            <label class="bmd-label-floating">Firstname *</label>
                                            <input type="text" name="fname" class="form-control form-control-user" id="studentRequired1" aria-describedby="emailHelp" required>
                                        </div>
                                        <div class="form-group bmd-form-group">
                                            <label class="bmd-label-floating">Lastname *</label>
                                            <!-- <input type="name" name="lname" class="form-control form-control-user" id="studentRequired2" aria-describedby="emailHelp"> -->
                                            <input type="text" name="lname" class="form-control form-control-user" id="studentRequired2" aria-describedby="emailHelp" required>
                                        </div>
                                        <div class="form-group bmd-form-group">
                                            <label class="bmd-label-floating">Student ID *</label>
                                            <input type="number" name="studentId" class="form-control form-control-user" id="studentRequired6" aria-describedby="emailHelp" required maxlength="15">
                                        </div>
                                        <div class="form-group bmd-form-group">
                                            <label class="bmd-label-floating">Email *</label>
                                            <input type="email" name="email" class="form-control form-control-user" id="studentRequired3" required aria-describedby="emailHelp">
                                        </div>
                                        <div class="form-group bmd-form-group">
                                            <label class="bmd-label-floating">Mobile Number</label>
                                            <!-- <input type="number" name="mobile-number" class="form-control form-control-user" id="studentRequired4" aria-describedby="emailHelp" > -->
                                            <input type="number" name="mobile-number" class="form-control form-control-user" id="studentRequired4" maxlength="11">
                                        </div>
                                        <div class="form-group  bmd-form-group">
                                            <label class="bmd-label-floating">Password *</label>
                                            <input type="password" name="password" class="form-control form-control-user" required id="studentRequired5">
                                        </div>
                                        <div class="form-group  bmd-form-group">
                                            <select class="form-control " name="studentType" id="studentRequired7" required>
                                                <option value="">Student Type *</option>
                                                <option value="0">Grade School</option>
                                                <option value="1">High School </option>
                                                <option value="2">Senior High</option>
                                            </select>
                                        </div>
                                        <div class="form-group bmd-form-group" style="margin-left: 15px">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" value="1" style="margin-top: 1px" required>
                                                Accept privacy policy
                                                <span class="form-check-sign">
                                                    <span class="check"></span>
                                                </span>
                                            </label>
                                        </div>
                                        <button id="submit-student-register-form" class="btn btn-primary btn-user btn-block">
                                            Submit
                                        </button>
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
    <script>
        $(document).on("submit", "#add-student-register-form", function(e) {
            e.preventDefault();

            var studentFormData = $("#add-student-register-form").serialize();
            var studentRequired3 = $("#studentRequired3").val();
            var studentRequired7 = $('#studentRequired7').val();

            // if (!validateEmail(studentRequired3)) {
            //     alert('Please provide correct email address');
            //     return false;
            // }

            // if (!validateEmail(studentRequired7)) {
            //     alert('Please provide student type');
            //     return false;
            // }

            jQuery.ajax({
                method: "POST",
                url: "./functions/student-function.php",
                data: studentFormData + "&ajax=true",
                success: function(data) {
                    if (data == 1) {
                        alert('user already exists, please use other email');
                        return false;
                    }
                    alert("Register Successfully");
                    document.location.href = 'login.php';
                }
            });

        });
    </script>