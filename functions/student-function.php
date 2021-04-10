<?php
session_start();
include('../admin/connection.php');

if (isset($_POST['ajax'])) {

    if ($_POST["function-type"] === "student-register") {
        
        $studentFirstname = mysqli_real_escape_string($conn, (strip_tags($_POST['fname'])));
        $studentLastname = mysqli_real_escape_string($conn, (strip_tags($_POST['lname'])));
        $studentEmail = mysqli_real_escape_string($conn, (strip_tags($_POST['email'])));
        $studentPassword = mysqli_real_escape_string($conn, (strip_tags($_POST['password'])));

        $newPass = md5($studentPassword);

        $sql = "INSERT INTO tbl_users (user_username,user_password,user_level) VALUES ('{$studentEmail}',
            '{$newPass}','7')";

        if (!mysqli_query($conn, $sql)) {
            // echo("Error description: " . mysqli_error($conn));
            echo 1;
            return false;
        }

        $studentTableFields = "student_firstname,student_email,student_lastname";

        $sql = "INSERT INTO tbl_students ( {$studentTableFields} ) VALUES 
                ('{$studentFirstname}','{$studentEmail}','{$studentLastname}')";

        if (!mysqli_query($conn, $sql)) {
            echo ("Error description: " . mysqli_error($conn));
        }

        $sql = "SELECT student_id FROM tbl_students ORDER BY student_id DESC LIMIT 1";

        $result = mysqli_query($conn, $sql);

        $studentId = mysqli_fetch_array($result)['student_id'];

        $sql = "UPDATE tbl_users SET user_user_id = '{$studentId}' WHERE user_username = '{$studentEmail}' ";
        mysqli_query($conn, $sql);

        $sql = "INSERT INTO tbl_students_family_guardian (students_family_guardian_student_id) VALUES ('{$studentId}')";

        if (!mysqli_query($conn, $sql)) {
            // echo("Error description: " . mysqli_error($conn));
            echo 1;
            return false;
        }

        $sql = "INSERT INTO tbl_student_habit (student_habit_student_id) VALUES ('{$studentId}')";

        if (!mysqli_query($conn, $sql)) {
            // echo("Error description: " . mysqli_error($conn));
            echo 1;
            return false;
        }
    }
}
