<?php
include('./connection.php');
// Load autoloader (using Composer)
require __DIR__ . '../../vendor/autoload.php';
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

if ($rowGender == 0) {
    $student_gender = "Affectional orientation";
}
if ($rowGender == 1) {
    $student_gender = "Transgender";
}
// if ($rowGender == 2) {
//     $student_gender = "Prefer not to say";
// }
if ($rowGender == 3) {
    $student_gender = "Lesbian";
}
if ($rowGender == 4) {
    $student_gender = "Gay";
}
if ($rowGender == 5) {
    $student_gender = "Bisexual";
}
if ($rowGender == 6) {
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
if ($rowSex == 1) {
    $student_sex = "Male";
}
if ($rowSex == 2) {
    $student_sex = "Female";
}
// if ($rowSex == 3) {
//     $student_sex = "Prefer not to say";
// }

$rowLivingWith = $row['student_living_with'];
$student_living_with = null;
if ($rowLivingWith == 1) {
    $student_living_with = "Parents";
}
if ($rowLivingWith == 2) {
    $student_living_with = "Siblings only";
}
if ($rowLivingWith == 3) {
    $student_living_with = "Relatives";
}
if ($rowLivingWith == 4) {
    $student_living_with = "Alone, in a rented space/dormitory";
}
if ($rowLivingWith == 5) {
    $student_living_with = "Alone, as a bed spacer";
}
if ($rowLivingWith == 6) {
    $student_living_with = "Others";
}

$studentLivingCondition = $row['student_present_living_condition'];
$student_present_living_condition = null;


if ($studentLivingCondition == 0) {
    $student_present_living_condition = "Poor (Less than PHP 10,481)";
}
if ($studentLivingCondition == 1) {
    $student_present_living_condition = "Low-income class (Between PHP 10,481 and PHP 20,962)";
}
if ($studentLivingCondition == 2) {
    $student_present_living_condition = "Lower middle-income class (Between PHP 20,962 and PHP 41,924)";
}
if ($studentLivingCondition == 3) {
    $student_present_living_condition = "Middle middle-income class (Between PHP 41,924 and PHP 73,367)";
}
if ($studentLivingCondition == 4) {
    $student_present_living_condition = "Upper middle-income class (Between PHP 73,367 and PHP 125,772)";
}
if ($studentLivingCondition == 5) {
    $student_present_living_condition = "Upper-income class (Between PHP 125,772 and PHP 209,620)";
}
if ($studentLivingCondition == 6) {
    $student_present_living_condition = "Rich (PHP 209,620 and above)";
}


$rowStudentType = $row['student_type'];
$student_type = null;
if ($rowStudentType == 0) {
    $student_type = "Grade School";
}
if ($rowStudentType == 1) {
    $student_type = "High School";
}
if ($rowStudentType == 2) {
    $student_type = "Senior High";
}

$student_age = $row['student_age'];
$student_place_of_birth = $row['student_place_of_birth'];
$student_elementry_school = $row['student_elementry_school'];
$student_high_school = $row['student_high_school'];
$student_vocational = $row['student_vocational'];

$sql = "SELECT * FROM  tbl_students_family_guardian WHERE students_family_guardian_student_id = '{$_GET['id']}'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);

$students_family_guardian_father_is_deceased = $row['students_family_guardian_father_is_decease'];

$students_family_guardian_father_name = $row['students_family_guardian_father_name'];
$students_family_guardian_father_contact = $row['students_family_guardian_father_contact'];
$students_family_guardian_father_email = $row['students_family_guardian_father_email'];
$students_family_guardian_father_occupation = $row['students_family_guardian_father_occupation'];
$students_family_guardian_father_work_address = $row['students_family_guardian_father_work_address'];
$students_family_guardian_father_work_contact = $row['students_family_guardian_father_work_contact'];

$students_family_guardian_father_is_deceased_value = null;

if ($students_family_guardian_father_is_deceased == 1) {
    $students_family_guardian_father_is_deceased_value = "Yes";
}
if ($students_family_guardian_father_is_deceased == 2) {
    $students_family_guardian_father_is_deceased_value = "No";
}

$rowFatherOfw = $row['students_family_guardian_father_is_ofw'];
$students_family_guardian_father_is_ofw = null;

if ($rowFatherOfw == 2) {
    $students_family_guardian_father_is_ofw = "Yes";
}
if ($rowFatherOfw == 3) {
    $students_family_guardian_father_is_ofw = "No";
}

$students_family_guardian_mother_deceased = $row['students_family_guardian_mother_is_decease'];
$students_family_guardian_mother_name = $row['students_family_guardian_mother_name'];
$students_family_guardian_mother_contact = $row['students_family_guardian_mother_contact'];
$students_family_guardian_mother_email = $row['students_family_guardian_mother_email'];
$students_family_guardian_mother_occupation = $row['students_family_guardian_mother_occupation'];
$students_family_guardian_mother_work_address = $row['students_family_guardian_mother_work_address'];
$students_family_guardian_mother_work_contact = $row['students_family_guardian_mother_work_contact'];
$students_family_guardian_mother_is_ofw = $row['students_family_guardian_mother_is_ofw'];

$students_family_guardian_mother_is_deceased_value = null;

if ($students_family_guardian_mother_deceased == 1) {
    $students_family_guardian_mother_is_deceased_value = "Yes";
}
if ($students_family_guardian_mother_deceased == 2) {
    $students_family_guardian_mother_is_deceased_value = "No";
}

$rowMotherOfw = $row['students_family_guardian_mother_is_ofw'];
$students_family_guardian_mother_is_ofw = null;

if ($rowMotherOfw == 2) {
    $students_family_guardian_mother_is_ofw = "Yes";
}
if ($rowMotherOfw == 3) {
    $students_family_guardian_mother_is_ofw = "No";
}

$rowMaritalStatus = $row['students_family_guardian_marital_status'];
$students_family_guardian_marital_status = null;

if ($rowMaritalStatus == 1) {
    $students_family_guardian_marital_status = 'Married';
}
if ($rowMaritalStatus == 2) {
    $students_family_guardian_marital_status = 'Living Together';
}
if ($rowMaritalStatus == 3) {
    $students_family_guardian_marital_status = 'Widow/Widower';
}
if ($rowMaritalStatus == 4) {
    $students_family_guardian_marital_status = 'Annulled/Separated';
}
if ($rowMaritalStatus == 5) {
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

$sql = "SELECT * FROM  tbl_student_habit WHERE student_habit_student_id = '{$_GET['id']}'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);

$student_habit_child_guardian_assist = null;
$rowGuardianAssist = $row['student_habit_usually_study'];

if ($rowGuardianAssist == 1) {
    $student_habit_child_guardian_assist = 'Yes, s/he is often studying alone';
}
if ($rowGuardianAssist == 3) {
    $student_habit_child_guardian_assist = 'No, s/he is often studying with assistance';
}
if ($rowGuardianAssist == 6) {
    $student_habit_child_guardian_assist = 'Others, ' . $row['student_habit_other_first'];
}

$student_habit_spend_studying = null;
$rowSpendStudying = $row['student_habit_spend_studying'];

if ($rowSpendStudying == 1) {
    $student_habit_spend_studying = '1 hour a day';
}
if ($rowSpendStudying == 2) {
    $student_habit_spend_studying = 'More than an hour a day';
}
if ($rowSpendStudying == 3) {
    $student_habit_spend_studying = 'Less than an hour a day';
}
if ($rowSpendStudying == 4) {
    $student_habit_spend_studying = '1 hour a week';
}
if ($rowSpendStudying == 5) {
    $student_habit_spend_studying = 'More than an hour a week';
}
if ($rowSpendStudying == 6) {
    $student_habit_spend_studying = 'Less than an hour a week';
}

$student_habit_child_usual_study = null;

$rowUsualStudy = $row['student_habit_child_usual_study'];

if ($rowUsualStudy == 1) {
    $student_habit_child_usual_study = '1 hour a day';
}
if ($rowUsualStudy == 2) {
    $student_habit_child_usual_study = 'More than an hour a day';
}
if ($rowUsualStudy == 3) {
    $student_habit_child_usual_study = 'less than an hour a day';
}
if ($rowUsualStudy == 4) {
    $student_habit_child_usual_study = '1 hour a week';
}
if ($rowUsualStudy == 5) {
    $student_habit_child_usual_study = 'More than an hour a week';
}
if ($rowUsualStudy == 6) {
    $student_habit_child_usual_study = 'Less than an hour a week';
}

$student_habit_usually_ask = null;
$rowUsuallyAsks = $row['student_habit_usually_ask'];

if ($rowUsuallyAsks == 1) {
    $student_habit_usually_ask = 'Teacher';
}

if ($rowUsuallyAsks == 2) {
    $student_habit_usually_ask = 'Classmate/s';
}

if ($rowUsuallyAsks == 3) {
    $student_habit_usually_ask = 'Friend';
}

if ($rowUsuallyAsks == 4) {
    $student_habit_usually_ask = 'Mother';
}

if ($rowUsuallyAsks == 5) {
    $student_habit_usually_ask = 'Brother';
}

if ($rowUsuallyAsks == 6) {
    $student_habit_usually_ask = 'Sister';
}

if ($rowUsuallyAsks == 7) {
    $student_habit_usually_ask = 'Others';
}


$student_habit_area_home = null;
$rowStudentCondition = $row['student_habit_area_home'];

if ($rowStudentCondition == 1) {
    $student_habit_area_home = 'Yes';
}
if ($rowStudentCondition == 2) {
    $student_habit_area_home = 'No';
}

$student_habit_internet = null;
$studentInternetConnection = $row['student_habit_internet'];

if ($studentInternetConnection == 1) {
    $student_habit_internet = 'Poor/Usually unstable';
}
if ($studentInternetConnection == 2) {
    $student_habit_internet = 'Good/Fairly Stable';
}

if ($studentInternetConnection == 3) {
    $student_habit_internet = 'Excellent/Usually stable';
}

$student_habit_student_device = null;
$rowStudentDevice = $row['student_habit_student_device'];
if ($rowStudentDevice == 1) {
    $student_habit_student_device = 'Mobile Phone';
}
if ($rowStudentDevice == 2) {
    $student_habit_student_device = 'Tablet';
}
if ($rowStudentDevice == 3) {
    $student_habit_student_device = 'Laptop';
}
if ($rowStudentDevice == 4) {
    $student_habit_student_device = 'Desktop';
}
if ($rowStudentDevice == 5) {
    $student_habit_student_device = 'Others' . $row['student_habit_other_third'];
}

$student_habit_multiple_feelings = null;
$sixExpArr = explode(",", $row['student_habit_multiple_feelings']);
if (in_array(1, $sixExpArr)) {
    $student_habit_multiple_feelings .= 'Excessive worry about your physical health, ';
}
if (in_array(2, $sixExpArr)) {
    $student_habit_multiple_feelings .= 'Excessive worry about the physical health of a family member, ';
}
if (in_array(3, $sixExpArr)) {
    $student_habit_multiple_feelings .= 'Excessive worry about a distressing situation at home, ';
}
if (in_array(4, $sixExpArr)) {
    $student_habit_multiple_feelings .= 'Threatening situation at home involving your safety and security, ';
}
if (in_array(5, $sixExpArr)) {
    $student_habit_multiple_feelings .= 'Intense fear or discomfort with chest pain, shortness of breath, increase in heart rate, ';
}
if (in_array(6, $sixExpArr)) {
    $student_habit_multiple_feelings .= 'ear of losing control or “going crazy”, ';
}
if (in_array(7, $sixExpArr)) {
    $student_habit_multiple_feelings .= 'Restlessness, ';
}
if (in_array(8, $sixExpArr)) {
    $student_habit_multiple_feelings .= 'Irritability and/or anger outbursts, ';
}
if (in_array(9, $sixExpArr)) {
    $student_habit_multiple_feelings .= 'Problems with concentration or mind going blank, ';
}
if (in_array(10, $sixExpArr)) {
    $student_habit_multiple_feelings .= 'Difficulty falling or staying asleep, ';
}
if (in_array(11, $sixExpArr)) {
    $student_habit_multiple_feelings .= 'Muscle tension, ';
}
if (in_array(12, $sixExpArr)) {
    $student_habit_multiple_feelings .= 'Difficulty in controlling the worry, ';
}
if (in_array(13, $sixExpArr)) {
    $student_habit_multiple_feelings .= 'Feeling sad, empty or hopeless, ';
}
if (in_array(14, $sixExpArr)) {
    $student_habit_multiple_feelings .= 'Loss of interest or pleasure in almost all activities most of the day, ';
}

if (in_array(15, $sixExpArr)) {
    $student_habit_multiple_feelings .= 'Loss of energy/fatigue, ';
}
if (in_array(16, $sixExpArr)) {
    $student_habit_multiple_feelings .= 'Feelings of worthlessness, ';
}
if (in_array(17, $sixExpArr)) {
    $student_habit_multiple_feelings .= 'Thoughts about suicide, ';
}

if (in_array(18, $sixExpArr)) {
    $student_habit_multiple_feelings .= 'Suicide attempt/s, ';
}
if (in_array(19, $sixExpArr)) {
    $student_habit_multiple_feelings .= 'elf-harm or self-injurious behavior, ';
}
if (in_array(20, $sixExpArr)) {
    $student_habit_multiple_feelings .= 'Excessive or inappropriate guilt';
}

$student_habit_multiple_experience = null;
$twelveExpArr = explode(",", $row['student_habit_multiple_experience']);
if (in_array(1, $twelveExpArr)) {
    $student_habit_multiple_experience .= 'Bullying, ';
}
if (in_array(2, $twelveExpArr)) {
    $student_habit_multiple_experience .= 'Physical, ';
}
if (in_array(3, $twelveExpArr)) {
    $student_habit_multiple_experience .= 'Verbal, ';
}

if (in_array(4, $twelveExpArr)) {
    $student_habit_multiple_experience .= 'Physical, ';
}

if (in_array(5, $twelveExpArr)) {
    $student_habit_multiple_experience .= 'Abuse at home, ';
}

if (in_array(6, $twelveExpArr)) {
    $student_habit_multiple_experience .= 'Neglect/abandonment by parent(s)/guardian, ';
}

if (in_array(7, $twelveExpArr)) {
    $student_habit_multiple_experience .= 'Death of a family member, ';
}

if (in_array(8, $twelveExpArr)) {
    $student_habit_multiple_experience .= 'Social/Relational,';
}

if (in_array(9, $twelveExpArr)) {
    $student_habit_multiple_experience .= 'Cyber,';
}

if (in_array(10, $twelveExpArr)) {
    $student_habit_multiple_experience .= 'Sexual,';
}

if (in_array(11, $twelveExpArr)) {
    $student_habit_multiple_experience .= 'Economic,';
}

if (in_array(12, $twelveExpArr)) {
    $student_habit_multiple_experience .= 'Emotional,';
}


$student_habit_multiple_concern = null;
$botherYouArr = explode(",", $row['student_habit_multiple_concern']);

if (in_array(1, $botherYouArr)) {
    $student_habit_multiple_concern .= 'Academic, ';
}

if (in_array(2, $botherYouArr)) {
    $student_habit_multiple_concern .= 'Personal (own thoughts and feelings), ';
}
if (in_array(3, $botherYouArr)) {
    $student_habit_multiple_concern .= 'Social (relationships with friends, classmates and teacher(s)), ';
}
if (in_array(4, $botherYouArr)) {
    $student_habit_multiple_concern .= 'Future Goals/Career Plans (for Senior High School), ';
}
if (in_array(5, $botherYouArr)) {
    $student_habit_multiple_concern .= 'Family (relationship with parent(s), sibling(s), relative(s)), ';
}
if (in_array(6, $botherYouArr)) {
    $student_habit_multiple_concern .= 'Housing, ';
}
if (in_array(7, $botherYouArr)) {
    $student_habit_multiple_concern .= 'Financial, ';
}
if (in_array(8, $botherYouArr)) {
    $student_habit_multiple_concern .= 'Others, ';
}
if (in_array(9, $botherYouArr)) {
    $student_habit_multiple_concern .= 'None at present ';
}


$counselingAnswer  = $row['student_habit_guidance_counseling'];


$student_habit_child_guardian_assist2 = null;
$childGuardianAssist = $row['student_habit_child_guardian_assist'];
if ($childGuardianAssist == 1) {
    $student_habit_child_guardian_assist2 = 'Everyday';
}
if ($childGuardianAssist == 2) {
    $student_habit_child_guardian_assist2 = 'Twice a week';
}
if ($childGuardianAssist == 3) {
    $student_habit_child_guardian_assist2 = 'Once a week';
}
if ($childGuardianAssist == 4) {
    $student_habit_child_guardian_assist2 = 'When there is a quiz';
}
if ($childGuardianAssist == 5) {
    $student_habit_child_guardian_assist2 = 'During examination week';
}
if ($childGuardianAssist == 6) {
    $student_habit_child_guardian_assist2 = 'When he/she feel like studying';
}

$tbl = <<<EOD
<div>
        <p style="text-align:center;font-weight:bold;">UNIVERSITY OF THE EAST</p>
        <p style="text-align:center;">MANILA • CALOOCAN</p>
        <p style="text-align:center;font-size: 12px;">GUIDANCE, COUNSELING
        AND CAREER SERVICES OFFICE
        </p>
    <p style="text-align:center;font-size: 12px;">UPDATED STUDENT INFORMATION SHEET</p>
</div>
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
  <td>deceased?: $students_family_guardian_father_is_deceased_value</td>
  <td>deceased?: $students_family_guardian_mother_is_deceased_value</td>
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
 <br/><br/>
 <table border="1" cellpadding="5" cellspacing="0" nobr="true" >
 <tr>
  <th colspan="1" align="center">SURVEY</th>
 </tr>
<tr>
 <td>When do you usually study?<br/>
 <strong>$student_habit_spend_studying</strong>
 </td>
</tr>
<tr>
 <td>How many hours do you usually spend studying?<br/>
 <strong>$student_habit_child_usual_study</strong>
 </td>
</tr>
<tr>
 <td>When you have question/s about your lesson, to whom do you usually ask? <br/>
 <strong>$student_habit_spend_studying</strong>
 </td>
</tr>
<tr>
 <td>Do you have a study area at home that is conducive for online classes?<br/>
 <strong>$student_habit_area_home</strong>
 
 </td>
</tr>
<tr>
 <td>Kindly describe the usual quality of your Internet Connection? <br/>
 <strong>$student_habit_internet</strong>
 </td>
</tr>
<tr>
 <td>Kindly identify the device(s) that you can use for your online classes: <br/>
    <strong>$student_habit_student_device</strong>
 </td>
</tr>
<tr>
<td>For the past six (12) months, have you experienced any of the following? (Kindly put a
✓ mark on all that applies) <br/>
<strong>$student_habit_multiple_feelings</strong>
</td>
</tr>
<tr>
<td>For the past twelve (12) months, have you experienced any of the following:
 <br/>
<strong>$student_habit_multiple_experience</strong>
</td>

</tr>

<tr>
<td>Check the concern/s problems that bother you at present: <br/>
<strong>$student_habit_multiple_concern</strong>
</td>
</tr>
<tr>
<td>Do you want counseling? <br/>
<strong>$counselingAnswer</strong>
</td>
</tr>


 </table>

EOD;

$pdf->writeHTML($tbl, true, false, false, false, '');
$pdf->Output($_SERVER['DOCUMENT_ROOT'] . 'student.pdf', 'FI');
