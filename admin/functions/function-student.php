<?php
    session_start();
    include('../connection.php');

    if (isset($_POST['ajax'])) {

        if ($_POST["function-type"] === "add-student") {
            $studentFirstname = mysqli_real_escape_string($conn,(strip_tags($_POST['student-firstname'])));
            $studentLastname = mysqli_real_escape_string($conn,(strip_tags($_POST['student-lastname'])));
            $studentMiddlename = mysqli_real_escape_string($conn,(strip_tags($_POST['student-middlename'])));
            $studentNickname = mysqli_real_escape_string($conn,(strip_tags($_POST['student-nickname'])));
            $studentStudId = mysqli_real_escape_string($conn,(strip_tags($_POST['student-studid'])));

            $studentSection = mysqli_real_escape_string($conn,(strip_tags($_POST['student-strand-section'])));
            $studentPresentAddress = mysqli_real_escape_string($conn,(strip_tags($_POST['student-present-address'])));
            $studentPermanentAddress = mysqli_real_escape_string($conn,(strip_tags($_POST['student-permanent-address'])));
            $studentContactNumber = mysqli_real_escape_string($conn,(strip_tags($_POST['student-contact-number'])));
            $studentUeEmailAddress = mysqli_real_escape_string($conn,(strip_tags($_POST['student-ue-email-address'])));
            
            $studentEmailAddress = mysqli_real_escape_string($conn,(strip_tags($_POST['student-email-address'])));
            $studentAge = mysqli_real_escape_string($conn,(strip_tags($_POST['student-age'])));
            $studentBirthday = mysqli_real_escape_string($conn,(strip_tags($_POST['student-birthday'])));
            $studentPlaceofBirth = mysqli_real_escape_string($conn,(strip_tags($_POST['student-placeofbirth'])));
            $studentCitizen = mysqli_real_escape_string($conn,(strip_tags($_POST['student-citizenship'])));

            $studentReligion = mysqli_real_escape_string($conn,(strip_tags($_POST['student-religion'])));
            $studentCivilStatus = mysqli_real_escape_string($conn,(strip_tags($_POST['student-civil-status'])));
            $studentSex = mysqli_real_escape_string($conn,(strip_tags($_POST['student-sex'])));
            $studentGender = mysqli_real_escape_string($conn,(strip_tags($_POST['student-gender'])));
            $studentLivingWith = mysqli_real_escape_string($conn,(strip_tags($_POST['student-living-with'])));
            $studentType = mysqli_real_escape_string($conn,(strip_tags($_POST['student-type'])));
            $studentLivingCondition = mysqli_real_escape_string($conn,(strip_tags($_POST['student-living-condition'])));

            $studentTableFields = "student_firstname,student_middlname,student_lastname,student_address,student_gender,student_birthday,student_contact,student_email,student_permanent_address,student_ue_email_address,student_citizenship,student_religion,student_civil_status,student_sex,student_living_with,student_present_living_condition,student_type";
            $sql = "INSERT INTO tbl_students ( {$studentTableFields} ) VALUES 
                ('{$studentFirstname}','{$studentMiddlename}','{$studentLastname}','{$studentPresentAddress}','{$studentGender}','{$studentBirthday}','{$studentContactNumber}','{$studentEmailAddress}','{$studentPermanentAddress}','{$studentUeEmailAddress}','{$studentCitizen}','{$studentReligion}','{$studentCivilStatus}','{$studentSex}','{$studentLivingWith}','{$studentLivingCondition}','{$studentType}')";
            
            mysqli_query($conn, $sql);

            if (!mysqli_query($conn, $sql)) {
                echo("Error description: " . mysqli_error($conn));
            }
         
        }

    }

?>