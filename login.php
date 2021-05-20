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

<?php $root = (!empty($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/'; ?>

<body style="background-image:url(./admin/assets/img/student-bg.jpg)" class="bg-gradient-primary login-background">

    <div class="custom_header_nav">
        <div class="container">
            <div class="">

                <div class="col-lg-12">
                    <?php
                    include('./admin/connection.php');
                    include('./functions.php');
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

                                        studentAuditTrail($user, "Student Login", $conn);

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
                        <div class="form__container__login">
                            <div class="row justify-content-center">
                                <a href="<?php echo $root . 'index.php'; ?>">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z" />
                                        </svg>
                                    </span>
                                    Back
                                    <!-- STUDENT -->
                                </a>
                            </div>
                            <div class="student__form ">
                                <p class="student__form--label">Student ID</p>
                                <input type="name" name="user" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp">
                            </div>
                            <div class="student__form ">
                                <p class="student__form--label">Password</p>
                                <input type="password" name="pass" class="form-control form-control-user" id="exampleInputPassword">
                            </div>
                            <div class="">
                                <input type="submit" value="Login" name="admin-login" class="btn btn-primary btn-user btn-block">
                            </div>
                            <div class="register__container ">
                                <a href="./register.php">Register</a> <br/>
                                <a href="./forgot_password.php">Forgot Password?</a>
                            </div>
                        </div>
                    </form>

                </div>

            </div>

        </div>
    </div>




    <div class="container" style="height: 100vh;">


        <!-- Outer Row -->
        <!-- <div class="row justify-content-center"> -->
        <div class="">

            <div class="row">

                <div class="col-lg-6">
                </div>

                <div class="col-lg-6">
                    <div class="login__spill__container">
                        <p>
                            The <span style="font-weight:bold;">cumulative folder</span> is a record developed to assist in the student’s educational growth and progress. The teacher and other school personnel use it as a tool for student guidance and the improvement of instruction. A well-developed <span style="font-weight:bold;">cumulative folder</span> may afford a teacher an opportunity to analyze students’ school history, test scores, and rate of growth so that a proper course of action for helping the student can be determined. The <span style="font-weight:bold;">cumulative folder</span> is only as useful as the quality of data entered. The Special Education record is an essential part of the <span style="font-weight:bold;">cumulative folder</span > and must be maintained accordingly with all security and confidentiality requirements.
                        </p>
                    </div>
                </div>

            </div>

        </div>

        <!-- Bootstrap core JavaScript-->
        <?php include('footer.php'); ?>
        <!-- <script>
        function _validateMobileNumber(num) {
            let re = /^(09|\+639|9)\d{9}$/;
            return re.test(String(num).toLowerCase());
        };


        function validateName(text) {
            let re = /^[a-zA-Z]+$/;
            return re.test(String(text).toLowerCase());
        }

        $(document).on("submit", "#add-student-register-form", function(e) {
            e.preventDefault();

            var studentFormData = $("#add-student-register-form").serialize();

            var studentRequired1 = $('#studentRequired1').val();
            var studentRequired2 = $('#studentRequired2').val();

            var studentRequired3 = $("#studentRequired3").val();

            var studentRequired5 = $("#studentRequired5").val();

            var studentRequired8 = $("#studentRequired8").val();

            var studentRequired7 = $('#studentRequired7').val();

            var studentRequired4 = $('#studentRequired4').val();


            if (!validateName(studentRequired1)) {
                alert('Please input text only for firstname');
                return false;
            }

            if (!validateName(studentRequired2)) {
                alert('Please input text only for lastname');
                return false;
            }

            if (!_validateMobileNumber(studentRequired4)) {
                alert('Please provide corrent mobile number');
                return false;
            }

            if (studentRequired5 !== studentRequired8) {
                alert('Password must be the same');
                return false;
            }

            if (studentRequired8.length <= 6 || studentRequired5.length <= 6) { // checks the password value length
                alert('Password must be greater than 6 characters');
                return false;
            }

            if (studentRequired8.length >= 12 || studentRequired5.length >= 12) { // checks the password value length
                alert('Password must be less than 12 characters');
                return false;
            }

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
                        alert('student id already exists, please use other student id');
                        return false;
                    }
                    alert("Register Successfully");
                    document.location.href = 'login.php';
                }
            });

        });
    </script> -->