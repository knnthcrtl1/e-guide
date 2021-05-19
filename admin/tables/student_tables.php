<?php

include('../connection.php');


if (isset($_POST['studentType'])) {

    $studentType = $_POST['studentType'];
    $sql = "SELECT * FROM tbl_students WHERE student_type = '{$studentType}'";
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
                <td><?php
                    if ($studentType == 0) echo "Grade School";
                    if ($studentType == 1) echo "High School";
                    if ($studentType == 2) echo "Senior High School";
                    if ($studentType == 3) echo "College";
                    ?>
                </td>
                <td><?php echo $row['student_stud_id'] ?></td>
                <td class="td-actions text-right" style="display:flex;flex-direction:row">
                    <a class="btn btn-success btn-round edit_btn" href="edit_student.php?id=<?php echo $row['student_id']; ?>"> <i class="material-icons">edit</i> Edit &nbsp;</a>
                    &nbsp;
                    <span id="delete-student" class="btn btn-danger btn-round" student-id="<?php echo $row['student_id'] ?>"> <i class="material-icons">close</i> Delete &nbsp;</span>
                    &nbsp;
                    <?php
                    if ($studentType == 0) {
                    ?>
                        <a class="btn btn-info btn-round edit_btn" target="_blank" href="print.php?id=<?php echo $row['student_id']; ?>"> <i class="material-icons">file_download</i> Export &nbsp;</a>
                    <?php } else {
                    ?>
                        <a class="btn btn-info btn-round edit_btn" target="_blank" href="print_v2.php?id=<?php echo $row['student_id']; ?>"> <i class="material-icons">file_download</i> Export &nbsp;</a>
                    <?php
                    }

                    ?>
                </td>
            </tr>
<?php
        }
    }
}
?>