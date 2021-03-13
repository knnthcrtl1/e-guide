<?php

include('../connection.php');

$sql = "SELECT * FROM tbl_students";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) != 0) {
    while ($row = mysqli_fetch_assoc($result)) {
?>
        <tr>
            <td><?php echo $row['student_id'] ?></td>
            <td><?php echo $row['student_firstname'] ?></td>
            <td><?php echo $row['student_middlname'] ?></td>
            <td><?php echo $row['student_lastname'] ?></td>
            <td><?php echo $row['student_email'] ?></td>
            <td><?php echo $row['student_contact'] ?></td>
            <td><?php echo $row['student_type'] ?></td>
            <td><?php echo $row['student_stud_id'] ?></td>
            <td style="display:flex;flex-direction:row">
                <!-- <a class="btn btn-success" href="edit_client.php?id=<?php echo $row['student_id']; ?>"><span class="material-icons">
                        mode_edit</span> Edit</a>
                &nbsp; -->
                <span id="delete-student" class="btn btn-primary" student-id="<?php echo $row['student_id'] ?>"><span class="material-icons">
delete
</span> Delete</span>
            </td>
        </tr>
<?php
    }
}
?>