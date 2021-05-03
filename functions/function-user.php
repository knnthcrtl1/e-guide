<?php


session_start();
include('../admin/connection.php');

    if (isset($_POST['ajax'])) {

        if ($_POST["function-type"] === "change-password") {
            
            $id = mysqli_real_escape_string($conn,(strip_tags($_POST['password-user-id'])));
            $oldPassword = mysqli_real_escape_string($conn,(strip_tags($_POST['oldPassword'])));
            $password = mysqli_real_escape_string($conn,(strip_tags($_POST['password-retype-password'])));
            $newPassword = md5($password);

            $sql = "SELECT * FROM tbl_users WHERE user_user_id = '{$id}'";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_array($result);

            $currentPassword = md5($oldPassword);
            
           if($currentPassword !== $row['user_password']){
               echo 1;
               return false;
           }

           if($newPassword == $row['user_password']){
                echo 2;
                return false;
            }

            $sql = "UPDATE tbl_users SET user_password = '{$newPassword}' WHERE user_user_id = '{$id}' ";
            mysqli_query($conn, $sql);

            if (!mysqli_query($conn, $sql)) {
                echo("Error description: " . mysqli_error($conn));
            }
        }
    }
