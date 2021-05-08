<?php
session_start();
if (!isset($_SESSION["student_user_id"])) {
  header("Location: login.php");
}
?>
<!doctype html>
<html lang="en">

<head>
  <title>EGUIDE</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,100&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./admin/assets/css/font-awesome.min.css">
  <!-- Material Kit CSS -->
  <link href="./admin/assets/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
  <link href="./admin/assets/css/custom.css" rel="stylesheet" />
</head>