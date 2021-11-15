<?php

include('../connection.php');

session_start();
$user = $_SESSION["user"];

$sql = '';

if($user === 'admin') {
    $sql = "SELECT * FROM  tbl_notifications";
} else {
    $sql = "SELECT * FROM  tbl_notifications WHERE notification_user_id = '$user' ";
}


$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) != 0) {
    while ($row = mysqli_fetch_assoc($result)) {

        $date = $row['notification_date'];
        $newDate = date('F d, Y', strtotime($date));

?>
        <tr>
            <td><?php echo $row['notification_id'] ?></td>

            <?php

            $sql2 = "SELECT * FROM tbl_students WHERE student_id = '{$row['notification_student']}'";
            $result2 = mysqli_query($conn, $sql2);
            $row2 = mysqli_fetch_array($result2);

            $studentName = $row2['student_firstname'] . ' ' . $row2['student_lastname'];
            ?>
            <td><?php echo $studentName ?></td>
            <td><?php echo $row2['student_stud_id'] ?></td>
            <td><?php echo $row['notification_title'] ?></td>
            <td><?php echo $row['notification_message'] ?></td>
            <td><?php echo $newDate ?></td>
            <td><?php echo $row['notification_user_id'] ?></td>
            <td class="td-actions text-right" style="display:flex;flex-direction:row">
                <span id="delete-notification" class="btn btn-danger btn-round" notification-id="<?php echo $row['notification_id']; ?>"> <i class="material-icons">close</i> Delete &nbsp;</span>
            </td>
        </tr>
<?php
    }
}
?>