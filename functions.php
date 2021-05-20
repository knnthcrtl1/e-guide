<?php

function studentAuditTrail($userId, $action, $conn) {
    // $sql = "SELECT student_id FROM tbl_students WHERE student_id = {$userId}";
    // $userUserName = mysqli_fetch_assoc(mysqli_query($conn, $sql))['student_id'];
    $sql = "INSERT INTO tbl_audit (audit_username,audit_action) VALUES ('{$userId}','{$action}')";
    mysqli_query($conn, $sql);
    
}

function getUsualPassword() {
    $usualPassword = "password123";
    return md5($usualPassword);
}

?>