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
                    <a href="<?php echo $root . 'index.php'; ?>">
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
                                        <h1 class="h4 text-gray-900 mb-4" style="margin-top: 20px">STUDENT SIGN UP</h1>
                                    </div>
                                    <form class="user" method="POST" id="add-student-register-form">
                                        <input type="hidden" name="function-type" value="student-register" class="form-control form-control-user" aria-describedby="emailHelp" placeholder="Firstname" required>

                                        <div class="row">

                                            <div class="col-md-6">
                                                <div class="form-group bmd-form-group student__form">
                                                    <span class="student__form--label">Firstname *</span>
                                                    <input type="text" name="fname" class="form-control form-control-user" id="studentRequired1" aria-describedby="emailHelp" required>
                                                </div>
                                                <div class="form-group bmd-form-group student__form">
                                                    <span class="student__form--label">Lastname *</span>
                                                    <!-- <label class="bmd-label-floating">Lastname *</label> -->
                                                    <input type="text" name="lname" class="form-control form-control-user" id="studentRequired2" aria-describedby="emailHelp" required>
                                                </div>
                                                <div class="form-group bmd-form-group student__form">
                                                    <span class="student__form--label">Student ID *</span>
                                                    <input type="number" name="studentId" class="form-control form-control-user" id="studentRequired6" aria-describedby="emailHelp" required maxlength="11" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" />
                                                </div>
                                                <div class="form-group bmd-form-group student__form">
                                                    <span class="student__form--label">Email *</span>
                                                    <input type="email" name="email" class="form-control form-control-user" id="studentRequired3" required aria-describedby="emailHelp">
                                                </div>
                                                <div class="form-group bmd-form-group" style="margin-left: 15px">
                                                    <label class="form-check-label privacy__policy__title">
                                                        <input class="form-check-input" type="checkbox" value="1" style="margin-top: 1px" required oninvalid="this.setCustomValidity('Please accept privacy policy to proceed')" onchange="this.setCustomValidity('')">
                                                        <span style="color: #fff">I have read and accepted the Privacy Policy.</span>
                                                        <span class="form-check-sign">
                                                            <span class="check"></span>
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group bmd-form-group student__form">
                                                    <span class="student__form--label">Mobile Number</span>
                                                    <!-- <input type="number" name="mobile-number" class="form-control form-control-user" id="studentRequired4" aria-describedby="emailHelp" > -->
                                                    <input type="number" name="mobile-number" class="form-control form-control-user" id="studentRequired4" minlength="11" maxlength="11" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
                                                </div>
                                                <div class="form-group bmd-form-group student__form">
                                                    <span class="student__form--label">Password *</span>
                                                    <input type="password" name="password" class="form-control form-control-user" required id="studentRequired5">
                                                </div>
                                                <span class="password__description">Password must be greater than 6 and less than 12 characters</span>
                                                <div class="form-group bmd-form-group student__form">
                                                    <span class="student__form--label">Confirm password *</span>
                                                    <input type="password" name="confirmPassword" class="form-control form-control-user" required id="studentRequired8">
                                                </div>
                                                <div class="form-group bmd-form-group student__form">
                                                    <span class="student__form--label">Student Type</span>
                                                    <select class="form-control " name="studentType" id="studentRequired7" required>
                                                        <option value=""></option>
                                                        <option value="0">Grade School</option>
                                                        <option value="1">High School </option>
                                                        <option value="2">Senior High</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="row justify-content-center">
                                            <button id="submit-student-register-form" class="btn btn-primary btn-user ">
                                                Submit
                                            </button>
                                        </div>

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