<?php
include('./admin/connection.php');
// Load autoloader (using Composer)
require __DIR__ . '/vendor/autoload.php';
$pdf = new TCPDF();                 // create TCPDF object with default constructor args
// add a page
$pdf->AddPage();
$pdf->SetFont('helvetica', '', 10);

if (!$_GET['id']) {
    echo 'Please input an parameter id on the link ';
    return false;
}

$sql = "SELECT * FROM tbl_students WHERE student_id = '{$_GET['id']}'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);

if (!$row) {
    echo 'No data found!';
    return false;
}

$student_firstname = $row['student_firstname'];
$student_middlname = $row['student_middlname'];
$student_lastname = $row['student_lastname'];
$student_nickname = $row['student_nickname'];
$student_address = $row['student_address'];
$rowGender = $row['student_gender'];
$student_gender = null;

if($rowGender == 0){
    $student_gender = "Straight/Heterosexual";
} 
if($rowGender == 1){
    $student_gender = "Transgender";
} 
if($rowGender == 2){
    $student_gender = "Prefer not to say";
} 
if($rowGender == 3){
    $student_gender = "Lesbian";
} 
if($rowGender == 4){
    $student_gender = "Gay";
} 
if($rowGender == 5){
    $student_gender = "Bisexual";
} 
if($rowGender == 6){
    $student_gender = "Others";
} 

$student_birthday = $row['student_birthday'];
$student_contact = $row['student_contact'];
$student_email = $row['student_email'];
$student_section_id = $row['student_section_id'];
$student_stud_id = $row['student_stud_id'];
$student_permanent_address = $row['student_permanent_address'];
$student_ue_email_address = $row['student_ue_email_address'];

$student_citizenship = $row['student_citizenship'];
$student_religion = $row['student_religion'];
$student_civil_status = $row['student_civil_status'];

$rowSex = $row['student_sex'];
$student_sex = $row['student_sex'];
if($rowSex == 1){
    $student_sex = "Male";
} 
if($rowSex == 2){
    $student_sex = "Female";
} 
if($rowSex == 3){
    $student_sex = "Prefer not to say";
} 
$student_living_with = $row['student_living_with'];
$student_present_living_condition = $row['student_present_living_condition'];
$student_type = $row['student_type'];
$student_age = $row['student_age'];
$student_place_of_birth = $row['student_place_of_birth'];
$student_elementry_school = $row['student_elementry_school'];
$student_high_school = $row['student_high_school'];
$student_vocational = $row['student_vocational'];

$sql = "SELECT * FROM  tbl_students_family_guardian WHERE students_family_guardian_student_id = '{$_GET['id']}'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);

$students_family_guardian_father_name = $row['students_family_guardian_father_name'];
$students_family_guardian_father_contact = $row['students_family_guardian_father_contact'];
$students_family_guardian_father_email = $row['students_family_guardian_father_email'];
$students_family_guardian_father_occupation = $row['students_family_guardian_father_occupation'];
$students_family_guardian_father_work_address = $row['students_family_guardian_father_work_address'];
$students_family_guardian_father_work_contact = $row['students_family_guardian_father_work_contact'];

$rowFatherOfw = $row['students_family_guardian_father_is_ofw'];
$students_family_guardian_father_is_ofw = null;

if($rowFatherOfw == 0) {
    $students_family_guardian_father_is_ofw = "Yes";
}
if($rowFatherOfw == 1) {
    $students_family_guardian_father_is_ofw = "No";
}

$students_family_guardian_mother_name = $row['students_family_guardian_mother_name'];
$students_family_guardian_mother_contact = $row['students_family_guardian_mother_contact'];
$students_family_guardian_mother_email = $row['students_family_guardian_mother_email'];
$students_family_guardian_mother_occupation = $row['students_family_guardian_mother_occupation'];
$students_family_guardian_mother_work_address = $row['students_family_guardian_mother_work_address'];
$students_family_guardian_mother_work_contact = $row['students_family_guardian_mother_work_contact'];
$students_family_guardian_mother_is_ofw = $row['students_family_guardian_mother_is_ofw'];

$rowMotherOfw = $row['students_family_guardian_mother_is_ofw'];
$students_family_guardian_mother_is_ofw = null;

if($rowMotherOfw == 0) {
    $students_family_guardian_mother_is_ofw = "Yes";
}
if($rowMotherOfw == 1) {
    $students_family_guardian_mother_is_ofw = "No";
}

$rowMaritalStatus = $row['students_family_guardian_marital_status'];
$students_family_guardian_marital_status = null;

if($rowMaritalStatus == 0){
    $students_family_guardian_marital_status = 'Married';
}
if($rowMaritalStatus == 1){
    $students_family_guardian_marital_status = 'Living Together';
}
if($rowMaritalStatus == 2){
    $students_family_guardian_marital_status = 'Widow/Widower';
}
if($rowMaritalStatus == 3){
    $students_family_guardian_marital_status = 'Annulled/Separated';
}
if($rowMaritalStatus == 4){
    $students_family_guardian_marital_status = 'Others';
}

$students_family_guardian_name = $row['students_family_guardian_name'];
$students_family_guardian_guardian_address = $row['students_family_guardian_guardian_address'];
$students_family_guardian_guardian_landline = $row['students_family_guardian_guardian_landline'];
$students_family_guardian_guardian_phone = $row['students_family_guardian_guardian_phone'];
$students_family_guardian_guardian_email = $row['students_family_guardian_guardian_email'];
$students_family_guardian_guardian_work_address = $row['students_family_guardian_guardian_work_address'];
$students_family_guardian_guardian_work_number = $row['students_family_guardian_guardian_work_number'];
$students_family_guardian_guardian_relationship = $row['students_family_guardian_guardian_relationship'];

// The '@' character is used to indicate that follows an image data stream and not an image file name
$tbl = <<<EOD
<table border="1" cellpadding="5" cellspacing="0" nobr="true">
 <tr>
  <th colspan="3" align="center">STUDENT INFORMATION</th>
 </tr>
 <tr>
  <td>Firstname: <br/> $student_firstname </td>
  <td>Middlename: <br/> $student_middlname</td>
  <td>Lastname: <br/> $student_lastname</td>
 </tr>
 <tr>
 <td>Nickname: <br/> $student_nickname</td>
 <td>Student No.: <br/> $student_stud_id</td>
 <td>Section: <br/> $student_section_id</td>
 </tr>
 <tr>
 <td colspan="3">Present Address: <br/> $student_address</td>
 </tr>
 <tr>
 <td colspan="3">Permanent Address: <br/> $student_permanent_address</td>
 </tr>
 <tr>
 <td>Age: <br/> $student_age</td>
 <td>Date of birth: <br/> $student_birthday</td>
 <td>Place of birth: <br/> $student_place_of_birth</td>
 </tr>
 <tr>
 <td>Citizenship: <br/> $student_citizenship</td>
 <td>Religion: <br/> $student_religion</td>
 <td>Civil Status: <br/> $student_civil_status</td>
 </tr>
 <tr>
 <td>Sex: <br/> $student_sex</td>
 <td>Gender: <br/> $student_gender</td>
 <td>Living with: <br/> $student_living_with</td>
 </tr>
 <tr>
 <td>Student type: <br/> $student_type</td>
 <td colspan="2">Present Living Condition: <br/> $student_present_living_condition</td>
 </tr>
</table>
<br/><br/>
<table border="1" cellpadding="5" cellspacing="0" nobr="true" >
 <tr>
  <th colspan="3" align="center">EDUCATION</th>
 </tr>
 <tr>
 <td colspan="3">Grade School: <br/> $student_elementry_school</td>
 </tr>
 <tr>
 <td colspan="3">Junior High School: <br/> $student_high_school</td>
 </tr>
 <tr>
 <td colspan="3">Vocational: <br/> $student_vocational</td>
 </tr>
 </table>
 <br/><br/>
<table border="1" cellpadding="5" cellspacing="0" nobr="true" >
 <tr>
  <th colspan="2" align="center">FAMILY</th>
 </tr>
 <tr>
    <td align="center">Father</td>
    <td align="center">Mother</td>
 </tr>
 <tr>
 <td>Name: $students_family_guardian_father_name</td>
 <td>Name: $students_family_guardian_mother_name</td>
</tr>
<tr>
 <td>Contact #: $students_family_guardian_father_contact</td>
 <td>Contact #: $students_family_guardian_mother_contact</td>
</tr>
<tr>
 <td>Email Address: $students_family_guardian_father_email</td>
 <td>Email Address: $students_family_guardian_mother_email</td>
</tr>
<tr>
 <td>Occupation: $students_family_guardian_father_occupation</td>
 <td>Occupation: $students_family_guardian_mother_occupation</td>
</tr>
<tr>
 <td>Work Address: $students_family_guardian_father_work_address</td>
 <td>Work Address: $students_family_guardian_mother_work_address</td>
</tr>
<tr>
 <td>Work Contact #: $students_family_guardian_father_work_contact</td>
 <td>Work Contact #: $students_family_guardian_mother_work_contact</td>
</tr>
<tr>
 <td>Is Ofw?: $students_family_guardian_father_is_ofw</td>
 <td>Is Ofw?: $students_family_guardian_mother_is_ofw</td>
</tr>
<tr>
 <td colspan="3">Marital Status of Parents: $students_family_guardian_marital_status</td>
</tr>

 </table>
 <br/><br/>
 <table border="1" cellpadding="5" cellspacing="0" nobr="true" >
 <tr>
  <th colspan="3" align="center">GUARDIAN</th>
 </tr>
 <tr>

 <td> Name: <br/> $students_family_guardian_name</td>
 <td>Landline: <br/> $students_family_guardian_guardian_landline</td>
 <td>Phone: <br/> $students_family_guardian_guardian_phone</td>
 </tr>
 <tr>
 <td colspan="3">Address: <br/> $students_family_guardian_guardian_address</td>
 </tr>
 <tr>
 <td>Email: <br/> $students_family_guardian_guardian_email</td>
 <td>Phone at work: <br/> $students_family_guardian_guardian_work_number</td>
 <td>Relationship with guardian: <br/> $students_family_guardian_guardian_relationship</td>
 </tr>
 <tr>
 <td colspan="3">Guardian work address: <br/> $students_family_guardian_guardian_work_address</td>
 </tr>
 </table>

EOD;

$pdf->writeHTML($tbl, true, false, false, false, '');
$pdf->Output('example_048.pdf', 'I');
