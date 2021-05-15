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
                <div class="col-lg-12 register__container__header">
                    <a href="<?php echo $root . 'login.php'; ?>">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z" />
                            </svg>
                        </span>
                        Back to Login
                    </a>
                </div>

            </div>

        </div>

    </div>
    <div class="container">

        <!-- Outer Row -->
        <!-- <div class="row justify-content-center"> -->
        <div class="">

            <div class="col-md-12">

                <div class="bg-login-container">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row justify-content-center">
                            <!-- <div class="col-md-12 d-flex align-items-center">
                                <div class="app_logo__left">
                                    <div class="row" style="background-color: #fff">
                                        <div class="col-md-6">
                                            <img class="app__logo" src="./admin/assets/img/logo.png" />
                                        </div>
                                        <div class="col-md-6">
                                            <img class="app__logo" src="./admin/assets/img/gcsgo.png" />
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            <div class="col-md-12 student__login__container">
                                <div class="" style="padding: 10px; padding-right:20px">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4" style="margin-top: 20px">FORGOT PASSWORD</h1>
                                    </div>
                                    <?php
                                    include('./admin/connection.php');

                                    if (isset($_POST['submit'])) {

                                        $email = $_POST['email'];
                                        $submit = $_POST['submit'];

                                        $email_check = mysqli_query($conn, "SELECT * FROM tbl_students WHERE student_stud_id ='{$email}'");

                                        $row = mysqli_fetch_array($email_check);

                                        $count = mysqli_num_rows($email_check);

                                        if ($count != 0) {
                                            $random = rand(7289123, 9272923);
                                            $new_password = $random;

                                            $email_passowrd = $new_password;
                                            $new_password = md5($new_password);

                                            mysqli_query($conn, "UPDATE tbl_users SET user_password='{$new_password}' WHERE user_username = '{$email}'");

                                            //send the password to the user
                                            
                                            $sendEmail = $row['student_email'];
                                            $subject = "Login Information";
                                            $message = "Your password has been change to " . $new_password . "";
                                            // $headers = "MIME-Version: 1.0" . "\r\n";
                                            // $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

                                            // More headers
                                            $headers = "From: ue-eguide@email.com";

                                            mail($sendEmail, $subject, $message, $headers);

                                            echo "Your new password has been emailed to you";
                                        } else {
                                            echo "This id does not exist.";
                                        }
                                    }
                                    ?>
                                    <form action="#" method="POST">
                                        <input type="hidden" name="function-type" value="student-login">
                                        <div class="form-group">
                                            <label class="control-label col-sm-12" for="email"> STUDENT ID :</label>
                                            <div class="col-sm-12">
                                                <input type="text" name="email" class="form-control" style="color: #ffffff;"></br>
                                            </div>
                                            <div class="col-sm-12 justify-content-center" style="text-align:center;">
                                                <input type="submit" name="submit" class="btn btn-default" value="Submit"></br>
                                            </div>
                                        </div>
                                    </form>

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
    </script>