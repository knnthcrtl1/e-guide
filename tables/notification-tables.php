<?php
session_start();
include('../admin/connection.php');

$sql = "SELECT * FROM  tbl_notifications WHERE notification_student = '{$_SESSION["student_user_id"]}' ";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) != 0) {
    while ($row = mysqli_fetch_assoc($result)) {

        $date = $row['notification_date'];
        $newDate = date('F d, Y', strtotime($date));

?>
        <tr>
            <td><?php echo $row['notification_id'] ?></td>
            <td><?php echo $row['notification_title'] ?></td>
            <td><?php echo $row['notification_message'] ?></td>
            <td><?php echo $newDate; ?></td>
        </tr>
<?php
    }
}
?>