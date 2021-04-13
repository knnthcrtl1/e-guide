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

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row justify-content-center">
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <img class="app__logo" src="./admin/assets/img/logo.png" style="max-width: 60px;" />
                                        <h1 class="h4 text-gray-900 mb-4" style="margin-top: 20px">Student Login</h1>
                                    </div>
                                    <form class="user" method="POST" id="add-student-register-form">
                                        <input type="hidden" name="function-type" value="student-register" class="form-control form-control-user" id="studentRequired1" aria-describedby="emailHelp" placeholder="Firstname">
                                        <div class="form-group">
                                            <input type="name" name="fname" class="form-control form-control-user" id="studentRequired1" aria-describedby="emailHelp" placeholder="Firstname">
                                        </div>
                                        <div class="form-group">
                                            <input type="name" name="lname" class="form-control form-control-user" id="studentRequired2" aria-describedby="emailHelp" placeholder="Lastname">
                                        </div>
                                        <div class="form-group">
                                            <input type="name" name="studentId" class="form-control form-control-user" id="studentRequired6" aria-describedby="emailHelp" placeholder="Student id" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control form-control-user" id="studentRequired3" aria-describedby="emailHelp" placeholder="Email">
                                        </div>
                                        <div class="form-group">
                                            <input type="number" name="mobile-number" class="form-control form-control-user" id="studentRequired4" aria-describedby="emailHelp" placeholder="Mobile Number">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password" class="form-control form-control-user" id="studentRequired5" placeholder="Password" required>
                                        </div>
                                        <div class="form-group">
                                            <select class="form-control " name="studentType">
                                                <option value="">Student Type *</option>
                                                <option value="0">Grade School</option>
                                                <option value="1">High School </option>
                                                <option value="2">Senior High</option>
                                            </select>
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
    <script src="./admin/assets/js/core/jquery.min.js"></script>
    <script src="./admin/assets/js/core/bootstrap-material-design.min.js"></script>
    <script src="./js/student-script.js"></script>

</body>

</html>