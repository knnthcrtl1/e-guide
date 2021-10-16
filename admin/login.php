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
  <link href="./assets/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
  <link href="./assets/css/custom.css" rel="stylesheet" />

</head>

<?php $root = (!empty($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/'; ?>

<body style="background-image:url(./assets/img/admin-bg.jpg)" class="bg-gradient-primary login-background">

  <!-- <div class="custom_header_nav">
    <div class="container">
      <div class="row custom_header_nav_row">

        <div class="col-lg-6">
          <a href="<?php echo $root . 'index.php'; ?>">
            <span>
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z" />
              </svg>
            </span>
            ADMIN
          </a>
        </div>
        <div class="col-lg-6">

        </div>

      </div>

    </div>
  </div> -->


  <div class="container">

    <!-- <div class="row justify-content-center"> -->
    <div class="">

      <div class="main__container">

        <div class="row" style="margin-bottom: 15px;">
          <div class="col-md-12 text-center">
            <img src='./assets/img/logo.png' class="ue_logo" style="width: 120px;" />
          </div>

          <!-- <div class="col-md-6 text-center">
            <img src='./assets/img/gcsgo.png' class="ue_logo" style="width: 120px;" />
          </div> -->
        </div>

        <h3 style="text-align:center;color:#fff">ADMIN</h3>
        <?php
        include('./connection.php');
        session_start();
        if (isset($_POST["admin-login"])) {
          $_SESSION["user"] = $_POST["user"];
          $_SESSION["pass"] = md5($_POST["pass"]);
          $_SESSION['last_time'] = time(); {
            if (!empty($_POST['user']) && !empty(md5($_POST['pass']))) {
              $user = $_POST['user'];
              $pass = md5($_POST['pass']);
              //selecting database
              $query = mysqli_query($conn, "SELECT * FROM tbl_users WHERE user_username='" . $user . "' AND user_password='" . $pass . "' AND user_match_login_id = 1 ");
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
                  $_SESSION["user_id"] = $userId;
                  if ($userLevel == 5 || $userLevel == 6) {
                    header('Location:view_project.php');
                    exit();
                  } else {
                    //Redirect Browser
                    header('Location:view_dashboard.php');
                    exit();
                  }
                }
              } else {
                session_destroy();
                echo "<p style='color:#ffffff;'>Invalid Username or Password!</p>";
              }
            } else {
              session_destroy();
              echo "Required All fields!";
            }
          }
        }
        ?>
        <form class="user" method="POST">
          <div class="form-group bmd-form-group">
            <label class="bmd-label-floating">Username</label>
            <input type="name" name="user" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" style="color:#ffffff">
          </div>
          <!-- <div class="form-group">
                      <input type="email" name="user" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Email Address...">
                    </div> -->
          <div class="form-group bmd-form-group">
            <label class="bmd-label-floating">Password</label>
            <input type="password" name="pass" class="form-control form-control-user" id="exampleInputPassword" style="color:#ffffff">
          </div>
          <input type="submit" value="Login" name="admin-login" class="btn btn-primary btn-user btn-block" >
        </form>
      </div>
      <!-- <div class="text-center">
                    <a class="small" href="forgot-password.html">Forgot Password?</a>
                  </div> -->

    </div>

  </div>

  <?php include('./footer.php'); ?>