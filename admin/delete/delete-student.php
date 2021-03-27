<?php
    include('../connection.php');

    if (isset($_POST['id'])) {

        // if(!checkClientIfExistInProjectData($conn, $_POST['id'])) return false;
        
        $sql = "DELETE FROM tbl_students WHERE student_id = '{$_POST['id']}'";
        if (!mysqli_query($conn, $sql)) {
            echo("Error description: " . mysqli_error($conn));
        }

        $sql = "DELETE FROM tbl_students_family_guardian WHERE students_family_guardian_student_id = '{$_POST['id']}'";
        if (!mysqli_query($conn, $sql)) {
            echo("Error description: " . mysqli_error($conn));
        }

        // $sql = "DELETE FROM tbl_users WHERE user_user_id = '{$_POST['id']}'";

        // if (!mysqli_query($conn, $sql)) {
        //     echo("Error description: " . mysqli_error($conn));
        // }
    }

?>