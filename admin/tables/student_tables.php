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
            <td><?php 
            $studentType = $row['student_type'];
            if($studentType ==0) echo "Grade School";
            if($studentType == 1) echo "High School";
            if($studentType == 2) echo "Senior High School";
            ?>
            </td>
            <td><?php echo $row['student_stud_id'] ?></td>
            <td class="td-actions text-right" style="display:flex;flex-direction:row">
                <a class="btn btn-success btn-round edit_btn" href="edit_student.php?id=<?php echo $row['student_id']; ?>"> <i class="material-icons">edit</i> </a>
                &nbsp;
                <span id="delete-student" class="btn btn-danger btn-round" student-id="<?php echo $row['student_id'] ?>"> <i class="material-icons">close</i> </span>
            </td>
        </tr>
<?php
    }
}
?>