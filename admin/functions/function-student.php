<?php
session_start();
include('../connection.php');

if (isset($_POST['ajax'])) {


    if ($_POST["function-type"] === "add-student") {
        $studentFirstname = mysqli_real_escape_string($conn, (strip_tags($_POST['student-firstname'])));
        $studentLastname = mysqli_real_escape_string($conn, (strip_tags($_POST['student-lastname'])));
        $studentMiddlename = mysqli_real_escape_string($conn, (strip_tags($_POST['student-middlename'])));
        $studentNickname = mysqli_real_escape_string($conn, (strip_tags($_POST['student-nickname'])));
        $studentStudId = mysqli_real_escape_string($conn, (strip_tags($_POST['student-studid'])));

        $studentSection = mysqli_real_escape_string($conn, (strip_tags($_POST['student-strand-section'])));
        $studentPresentAddress = mysqli_real_escape_string($conn, (strip_tags($_POST['student-present-address'])));
        $studentPermanentAddress = mysqli_real_escape_string($conn, (strip_tags($_POST['student-permanent-address'])));
        $studentContactNumber = mysqli_real_escape_string($conn, (strip_tags($_POST['student-contact-number'])));
        $studentUeEmailAddress = mysqli_real_escape_string($conn, (strip_tags($_POST['student-ue-email-address'])));

        $studentEmailAddress = mysqli_real_escape_string($conn, (strip_tags($_POST['student-email-address'])));
        $studentAge = mysqli_real_escape_string($conn, (strip_tags($_POST['student-age'])));
        $studentBirthday = mysqli_real_escape_string($conn, (strip_tags($_POST['student-birthday'])));
        $studentPlaceofBirth = mysqli_real_escape_string($conn, (strip_tags($_POST['student-placeofbirth'])));
        $studentCitizen = mysqli_real_escape_string($conn, (strip_tags($_POST['student-citizenship'])));

        $studentReligion = mysqli_real_escape_string($conn, (strip_tags($_POST['student-religion'])));
        $studentCivilStatus = mysqli_real_escape_string($conn, (strip_tags($_POST['student-civil-status'])));
        $studentSex = mysqli_real_escape_string($conn, (strip_tags($_POST['student-sex'])));
        $studentGender = mysqli_real_escape_string($conn, (strip_tags($_POST['student-gender'])));
        $studentLivingWith = mysqli_real_escape_string($conn, (strip_tags($_POST['student-living-with'])));
        $studentType = mysqli_real_escape_string($conn, (strip_tags($_POST['student-type'])));
        $studentLivingCondition = mysqli_real_escape_string($conn, (strip_tags($_POST['student-living-condition'])));

        $studentTableFields = "student_firstname,student_middlname,student_lastname,student_nickname,student_address,student_gender,student_birthday,student_contact,student_email,student_permanent_address,student_ue_email_address,student_citizenship,student_religion,student_civil_status,student_sex,student_living_with,student_present_living_condition,student_type,student_stud_id,student_age,student_place_of_birth,student_section_id";

        $sql = "INSERT INTO tbl_students ( {$studentTableFields} ) VALUES 
                ('{$studentFirstname}','{$studentMiddlename}','{$studentLastname}','{$studentNickname}','{$studentPresentAddress}','{$studentGender}','{$studentBirthday}','{$studentContactNumber}','{$studentEmailAddress}','{$studentPermanentAddress}','{$studentUeEmailAddress}','{$studentCitizen}','{$studentReligion}','{$studentCivilStatus}','{$studentSex}','{$studentLivingWith}','{$studentLivingCondition}','{$studentType}','{$studentStudId}','{$studentAge}','{$studentPlaceofBirth}','{$studentSection}')";

        if (!mysqli_query($conn, $sql)) {
            echo ("Error description: " . mysqli_error($conn));
        }

        $sql = "SELECT student_id FROM tbl_students ORDER BY student_id DESC LIMIT 1";

        $result = mysqli_query($conn, $sql);

        $studentId = mysqli_fetch_array($result)['student_id'];

        $sql = "INSERT INTO tbl_students_family_guardian (students_family_guardian_student_id) VALUES ('{$studentId}')";

        if (!mysqli_query($conn, $sql)) {
            // echo("Error description: " . mysqli_error($conn));
            echo 1;
            return false;
        }
    }

    if ($_POST["function-type"] === "edit-student") {

        $studentId = mysqli_real_escape_string($conn, (strip_tags($_POST['student-id'])));
        $studentFirstname = mysqli_real_escape_string($conn, (strip_tags($_POST['student-firstname'])));
        $studentLastname = mysqli_real_escape_string($conn, (strip_tags($_POST['student-lastname'])));
        $studentMiddlename = mysqli_real_escape_string($conn, (strip_tags($_POST['student-middlename'])));
        $studentNickname = mysqli_real_escape_string($conn, (strip_tags($_POST['student-nickname'])));
        $studentStudId = mysqli_real_escape_string($conn, (strip_tags($_POST['student-studid'])));

        $studentSection = mysqli_real_escape_string($conn, (strip_tags($_POST['student-strand-section'])));
        $studentPresentAddress = mysqli_real_escape_string($conn, (strip_tags($_POST['student-present-address'])));
        $studentPermanentAddress = mysqli_real_escape_string($conn, (strip_tags($_POST['student-permanent-address'])));
        $studentContactNumber = mysqli_real_escape_string($conn, (strip_tags($_POST['student-contact-number'])));
        $studentUeEmailAddress = mysqli_real_escape_string($conn, (strip_tags($_POST['student-ue-email-address'])));

        $studentEmailAddress = mysqli_real_escape_string($conn, (strip_tags($_POST['student-email-address'])));
        $studentAge = mysqli_real_escape_string($conn, (strip_tags($_POST['student-age'])));
        $studentBirthday = mysqli_real_escape_string($conn, (strip_tags($_POST['student-birthday'])));
        $studentPlaceofBirth = mysqli_real_escape_string($conn, (strip_tags($_POST['student-placeofbirth'])));
        $studentCitizen = mysqli_real_escape_string($conn, (strip_tags($_POST['student-citizenship'])));

        $studentReligion = mysqli_real_escape_string($conn, (strip_tags($_POST['student-religion'])));
        $studentCivilStatus = mysqli_real_escape_string($conn, (strip_tags($_POST['student-civil-status'])));
        $studentSex = mysqli_real_escape_string($conn, (strip_tags($_POST['student-sex'])));
        $studentGender = mysqli_real_escape_string($conn, (strip_tags($_POST['student-gender'])));
        $studentLivingWith = mysqli_real_escape_string($conn, (strip_tags($_POST['student-living-with'])));
        $studentType = mysqli_real_escape_string($conn, (strip_tags($_POST['student-type'])));
        $studentLivingCondition = mysqli_real_escape_string($conn, (strip_tags($_POST['student-living-condition'])));

        $studentTableFields = "student_firstname,student_middlname,student_lastname,student_nickname,student_address,student_gender,student_birthday,student_contact,student_email,student_permanent_address,student_ue_email_address,student_citizenship,student_religion,student_civil_status,student_sex,student_living_with,student_present_living_condition,student_type,student_stud_id,student_age,student_place_of_birth";

        $sql = "UPDATE tbl_students SET student_firstname = '{$studentFirstname}' , student_middlname = '{$studentMiddlename}', student_lastname = '{$studentLastname}', student_nickname  = '{$studentNickname}' , student_address = '{$studentPresentAddress}' , student_gender = '{$studentGender}', student_birthday = '{$studentBirthday}', student_contact  = '{$studentContactNumber}', student_email = '{$studentEmailAddress}' , student_permanent_address = '{$studentPermanentAddress}', student_ue_email_address = '{$studentUeEmailAddress}', student_citizenship  = '{$studentCitizen}' , student_religion = '{$studentReligion}' , student_civil_status = '{$studentCivilStatus}', student_sex = '{$studentSex}', student_living_with  = '{$studentLivingWith}', student_present_living_condition = '{$studentLivingCondition}' , student_type = '{$studentType}', student_stud_id = '{$studentStudId}', student_age  = '{$studentAge}', student_place_of_birth  = '{$studentPlaceofBirth}', student_section_id  = '{$studentSection}'  WHERE student_id = '{$studentId}' ";

        if (!mysqli_query($conn, $sql)) {
            echo ("Error description: " . mysqli_error($conn));
        }

        return false;
    }

    if ($_POST["function-type"] === "edit-student-family") {

        $studentId = mysqli_real_escape_string($conn,(strip_tags($_POST['student-id'])));
        $fatherName = mysqli_real_escape_string($conn,(strip_tags($_POST['student-father-name'])));
        $fatherContact = mysqli_real_escape_string($conn,(strip_tags($_POST['student-father-contact'])));
        $fatherEmail = mysqli_real_escape_string($conn,(strip_tags($_POST['student-father-email'])));
        $fatherOccupation = mysqli_real_escape_string($conn,(strip_tags($_POST['student-father-occupation'])));
        $fatherWorkAddress = mysqli_real_escape_string($conn,(strip_tags($_POST['student-father-work-address'])));
        $fatherWorkContact = mysqli_real_escape_string($conn,(strip_tags($_POST['student-father-work-contact'])));
        $fatherIsOfw = mysqli_real_escape_string($conn,(strip_tags($_POST['student-father-is-ofw'])));

        $motherName = mysqli_real_escape_string($conn,(strip_tags($_POST['student-mother-name'])));
        $motherContact = mysqli_real_escape_string($conn,(strip_tags($_POST['student-mother-contact'])));
        $motherEmail = mysqli_real_escape_string($conn,(strip_tags($_POST['student-mother-email'])));
        $motherOccupation = mysqli_real_escape_string($conn,(strip_tags($_POST['student-mother-occupation'])));
        $motherWorkAddress = mysqli_real_escape_string($conn,(strip_tags($_POST['student-mother-work-address'])));
        $motherWorkContact = mysqli_real_escape_string($conn,(strip_tags($_POST['student-mother-work-contact'])));
        $motherIsOfw = mysqli_real_escape_string($conn,(strip_tags($_POST['student-mother-is-ofw'])));

      

        $sql = "UPDATE tbl_students_family_guardian SET students_family_guardian_father_name = '{$fatherName}' , students_family_guardian_father_contact = '{$fatherContact}', students_family_guardian_father_email = '{$fatherEmail}', students_family_guardian_father_occupation  = '{$fatherOccupation}' , students_family_guardian_father_work_address = '{$fatherWorkAddress}',  students_family_guardian_father_work_contact = '{$fatherWorkContact}' , students_family_guardian_father_is_ofw = '{$fatherIsOfw}', students_family_guardian_mother_name = '{$motherName}', students_family_guardian_mother_contact  = '{$motherContact}' , students_family_guardian_mother_email = '{$motherEmail}', students_family_guardian_mother_occupation = '{$motherOccupation}',students_family_guardian_mother_work_address = '{$motherWorkAddress}' , students_family_guardian_mother_work_contact = '{$motherWorkContact}', students_family_guardian_mother_is_ofw = '{$motherIsOfw}' WHERE students_family_guardian_student_id = '{$studentId}' ";

        if (!mysqli_query($conn, $sql)) {
            echo ("Error description: " . mysqli_error($conn));
        }

        return false;
    }
}
