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
                                        <h1 class="h4 text-gray-900 mb-4" style="margin-top: 20px">STUDENT SIGN IN</h1>
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
                                                    <span class="student__form--label">Middlename </span>
                                                    <input type="text" name="mname" class="form-control form-control-user" id="studentRequired9" aria-describedby="emailHelp">
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
                                                        <option value="3">College</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group bmd-form-group" style="margin-left: 15px">
                                            <label class="form-check-label privacy__policy__title">
                                                <input class="form-check-input" type="checkbox" value="1" style="margin-top: 1px" required oninvalid="this.setCustomValidity('Please accept privacy policy to proceed')" onchange="this.setCustomValidity('')">
                                                <span style="color: #fff">I have read and accepted the <a href="#" style='color: #EE4540; text-decoration: underline;' data-toggle="modal" data-target=".bd-example-modal-lg">Privacy Policy.</a></span>
                                                <span class="form-check-sign">
                                                    <span class="check"></span>
                                                </span>
                                            </label>
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

    <!-- Modal -->
    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Privacy Policy</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>I am fully aware that University of the East (UE) or its designated representative is duty bound and obligated under the Data Privacy Act of 2012 to protect all my personal and sensitive information that it collects, processes, and retains upon my enrolment and during my stay in the University. <br /><br />

                        Student personal information includes any information about my identity, academics, medical conditions, or any documents containing my identity. This includes but not limited to my name, address, names of my parents or guardians, date of birth, grades, attendance, disciplinary records, and other information necessary for basic administration and instruction.
                        <br /><br />
                        I understand that my personal information cannot be disclosed without my consent. I understand that the information that was collected and processed relates to my enrolment and to be used by UE to pursue its legitimate interests as an educational institution. Likewise, I am fully aware that UE may share such information to affiliated or partner organizations as part of its contractual obligations, or with government agencies pursuant to law or legal processes. In this regard, I hereby allow UE to collect, process, use and share my personal data in the pursuit of its legitimate interests as an educational institution.
                        <br /><br />
                        In addition, I am likewise giving my consent/permission in favor of my parents/guardian/representative or whoever is responsible in providing care for me to access, verify, examine and or inspect my academic and scholastic records, school fees/accounts in the University, the result of my physical medical examination (PME) and all matters that relate to my status as a student of the University.
                        <br /><br />
                        Finally, should I commit any misconduct or should there be a complaint filed against me, before the Student Affairs Office (SAO) or Student Disciplinary Board (SDB ) by reason of violation of the provisions of the Student Manual or any laws or ordinances, I hereby authorize and give my full consent in favor of the University to inform my parents, guardian, representative or whoever person is in charge of providing care or custody for me.
                    </p>
                </div>
                <div class="modal-footer">
                    <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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

            var studentRequired9 = $('#studentRequired9').val();


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