<?php

include('../connection.php');

$sql = "SELECT * FROM  tbl_notifications";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) != 0) {
    while ($row = mysqli_fetch_assoc($result)) {

        $date = $row['notification_date'];
        $newDate = date('F d, Y', strtotime($date));

?>
        <tr>
            <td><?php echo $row['notification_id'] ?></td>

            <?php

            $sql2 = "SELECT * FROM tbl_students WHERE student_id = '{$row['notification_student_id']}'";
            $result2 = mysqli_query($conn, $sql2);
            $row2 = mysqli_fetch_array($result2);

            $studentName = $row2['student_id'] . ' - ' . $row2['student_firstname'] . ' ' . $row2['student_lastname'];
            ?>
            <td><?php echo $studentName ?></td>
            <td><?php echo $row['notification_title'] ?></td>
            <td><?php echo $row['notification_message'] ?></td>
            <td><?php echo $newDate ?></td>
            <td class="td-actions text-right" style="display:flex;flex-direction:row">
                <span id="delete-notification" class="btn btn-danger btn-round" notification-id="<?php echo $row['notification_id']; ?>"> <i class="material-icons">close</i> </span>
            </td>
        </tr>
<?php
    }
}
?>