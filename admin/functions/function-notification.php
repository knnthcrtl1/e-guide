<?php
session_start();
include('../connection.php');
include('../../functions.php');

if (isset($_POST['ajax'])) {



    if ($_POST["function-type"] === "add-student-notification") {

        $studentId = mysqli_real_escape_string($conn, (strip_tags($_POST['notification-student-id'])));
        $notificationTitle = mysqli_real_escape_string($conn, (strip_tags($_POST['notification-title'])));
        $notificationMessage = mysqli_real_escape_string($conn, (strip_tags($_POST['notification-message'])));

        $studentTableFields = "notification_student,notification_title,notification_message";

        // $sql = "SELECT * FROM tbl_students WHERE student_id = '{$studentId}'";
        // $result = mysqli_query($conn, $sql);
        // $row = mysqli_fetch_array($result);
   
        $to = "vortexbears@gmail.com";
        $subject = $notificationTitle;
        $txt = $notificationMessage;
        $headers = "From: ue-eguide@email.com";

        mail($to, $subject, $txt, $headers);

        $sql = "INSERT INTO tbl_notifications ( {$studentTableFields} ) VALUES 
                ('{$studentId}','{$notificationTitle}','{$notificationMessage}')";

        if (!mysqli_query($conn, $sql)) {
            echo ("Error description: " . mysqli_error($conn));
        }
    }
}
