<?php

include('../connection.php');

$sql = "SELECT * FROM  tbl_notifications";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) != 0) {
    while ($row = mysqli_fetch_assoc($result)) {
?>
        <tr>
            <td><?php echo $row['notification_student_id'] ?></td>
            <td><?php echo $row['notification_title'] ?></td>
            <td><?php echo $row['notification_message'] ?></td>
            <td><?php echo $row['notification_date'] ?></td>
            <td class="td-actions text-right" style="display:flex;flex-direction:row">
                <span id="delete-notification" class="btn btn-danger btn-round" student-id="<?php echo $row['notification_id'] ?>"> <i class="material-icons">close</i> </span>
            </td>
        </tr>
<?php
    }
}
?>