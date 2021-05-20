<?php

include('../connection.php');

$sql = "SELECT * FROM  tbl_audit";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) != 0) {
    while ($row = mysqli_fetch_assoc($result)) {

        $date = $row['audit_timestamp'];
        $newDate = date('F d, Y', strtotime($date));

?>
        <tr>
            <td><?php echo $row['audit_id']; ?></td>
            <?php

            $sql2 = "SELECT * FROM tbl_students WHERE student_id = '{$row['audit_username']}'";
            $result2 = mysqli_query($conn, $sql2);
            $row2 = mysqli_fetch_array($result2);

            $studentName = $row2['student_firstname'] . ' ' . $row2['student_lastname'];
            ?>
            <td><?php echo $studentName; ?></td>
            <td><?php echo $row['audit_action']; ?></td>
            <td><?php echo $newDate; ?></td>
        </tr>
<?php
    }
}
?>