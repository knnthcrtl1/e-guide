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
                        <a class="nav-link" href="/login.php">Student <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/login.php">Admin</a>
                    </li>
                </ul>
                <div>
                    <a class="nav-link" href="/login.php">LOGIN</a>
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
                        <div class="row justify-content-end">
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
                                    <form class="user" method="POST" id="add-student-register-form">
                                        <input type="hidden" name="function-type" value="student-register" class="form-control form-control-user" aria-describedby="emailHelp" placeholder="Firstname">
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
                                            <input type="number" name="studentId" class="form-control form-control-user" id="studentRequired6" aria-describedby="emailHelp" maxlength="15" required>
                                        </div>
                                        <div class="form-group bmd-form-group">
                                            <label class="bmd-label-floating">Email *</label>
                                            <input type="email" name="email" class="form-control form-control-user" id="studentRequired3" aria-describedby="emailHelp" required>
                                        </div>
                                        <div class="form-group bmd-form-group">
                                            <label class="bmd-label-floating">Mobile Number</label>
                                            <!-- <input type="number" name="mobile-number" class="form-control form-control-user" id="studentRequired4" aria-describedby="emailHelp" > -->
                                            <input type="number" name="mobile-number" class="form-control form-control-user" id="studentRequired4" required maxlength="11">
                                        </div>
                                        <div class="form-group  bmd-form-group">
                                            <label class="bmd-label-floating">Password</label>
                                            <input type="password" name="password" class="form-control form-control-user" id="studentRequired5" required>
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
                                                <input class="form-check-input" type="checkbox" value="1" style="margin-top: 1px">
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->

    <script src="./js/student-script"></script>