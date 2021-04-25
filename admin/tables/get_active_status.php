<?php

include('../connection.php');

$studId = null;
if(isset($_POST['studId'])){
   $studId = $_POST['studId'];
}

$sql = "SELECT * FROM tbl_student_habit WHERE student_habit_student_id = '{$studId}'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);

$isActive = $row['student_habit_is_active'];
?>

<span>
    <?php 
        if(!$isActive || !$isActive == 0) {
            echo "Activate Form";
        } else {
            echo "Deactive Form";
        }
    ?>
</span>
