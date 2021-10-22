<?php
session_start();
include('../admin/connection.php');

if (isset($_POST['ajax'])) {

    if ($_POST["function-type"] === "student-register") {

        $studentFirstname = mysqli_real_escape_string($conn, (strip_tags($_POST['fname'])));
        $studentLastname = mysqli_real_escape_string($conn, (strip_tags($_POST['lname'])));
        $studentMname = mysqli_real_escape_string($conn, (strip_tags($_POST['mname'])));
        $studentEmail = mysqli_real_escape_string($conn, (strip_tags($_POST['email'])));
        $studentPassword = mysqli_real_escape_string($conn, (strip_tags($_POST['password'])));
        $confirmPassword = mysqli_real_escape_string($conn, (strip_tags($_POST['confirmPassword'])));
        $studentStudId = mysqli_real_escape_string($conn, (strip_tags($_POST['studentId'])));
        $studentType = mysqli_real_escape_string($conn, (strip_tags($_POST['studentType'])));

        $newPass = md5($confirmPassword);

        $sql = "INSERT INTO tbl_users (user_username,user_password,user_level) VALUES ('{$studentStudId}',
            '{$newPass}','7')";

        if (!mysqli_query($conn, $sql)) {
            // echo("Error description: " . mysqli_error($conn));
            echo 1;
            return false;
        }

        $studentTableFields = "student_firstname,student_middlname,student_email,student_lastname,student_stud_id,student_type";

        $sql = "INSERT INTO tbl_students ( {$studentTableFields} ) VALUES 
                ('{$studentFirstname}','{$studentMname}','{$studentEmail}','{$studentLastname}','{$studentStudId}','{$studentType}')";

        if (!mysqli_query($conn, $sql)) {
            echo ("Error description: " . mysqli_error($conn));
        }

        $sql = "SELECT student_id FROM tbl_students ORDER BY student_id DESC LIMIT 1";

        $result = mysqli_query($conn, $sql);

        $studentId = mysqli_fetch_array($result)['student_id'];

        $sql = "UPDATE tbl_users SET user_user_id = '{$studentId}' WHERE user_username = '{$studentStudId}' ";
        mysqli_query($conn, $sql);

        $sql = "INSERT INTO tbl_students_family_guardian (students_family_guardian_student_id) VALUES ('{$studentId}')";

        if (!mysqli_query($conn, $sql)) {
            // echo("Error description: " . mysqli_error($conn));
            echo 1;
            return false;
        }

        $sql = "INSERT INTO tbl_student_habit (student_habit_student_id) VALUES ('{$studentId}')";

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
        $studentELemSchool = mysqli_real_escape_string($conn, (strip_tags($_POST['student-elementry-school'])));
        $studentJuniorHs = mysqli_real_escape_string($conn, (strip_tags($_POST['student-junior-hs'])));
        $studentVocational = mysqli_real_escape_string($conn, (strip_tags($_POST['student-vocational'])));

        $sql = "UPDATE tbl_students SET student_firstname = '{$studentFirstname}' , student_middlname = '{$studentMiddlename}', student_lastname = '{$studentLastname}', student_nickname  = '{$studentNickname}' , student_address = '{$studentPresentAddress}' , student_gender = '{$studentGender}', student_birthday = '{$studentBirthday}', student_contact  = '{$studentContactNumber}', student_email = '{$studentEmailAddress}' , student_permanent_address = '{$studentPermanentAddress}', student_ue_email_address = '{$studentUeEmailAddress}', student_citizenship  = '{$studentCitizen}' , student_religion = '{$studentReligion}' , student_civil_status = '{$studentCivilStatus}', student_sex = '{$studentSex}', student_living_with  = '{$studentLivingWith}', student_present_living_condition = '{$studentLivingCondition}', student_stud_id = '{$studentStudId}', student_age  = '{$studentAge}', student_place_of_birth  = '{$studentPlaceofBirth}', student_section_id  = '{$studentSection}', student_elementry_school  = '{$studentELemSchool}', student_high_school  = '{$studentJuniorHs}', student_vocational = '{$studentVocational}' WHERE student_id = '{$studentId}' ";

        if (!mysqli_query($conn, $sql)) {
            echo ("Error description: " . mysqli_error($conn));
        }

        return false;
    }

    if ($_POST['function-type'] === "edit-student-habits") {

        $anyExperiences = "";
        $x = 1;

        if (isset($_POST['experienceAny'])) {
            $expCount = count($_POST['experienceAny']);
            foreach ($_POST['experienceAny'] as $exp) {
                if ($x < $expCount) {
                    $anyExperiences .= $exp . ",";
                } else {
                    $anyExperiences .= $exp;
                }
                $x++;
            }
        }

        $botherYou = "";
        $y = 1;
        if (isset($_POST['botherYou'])) {
            $botherCount = count($_POST['botherYou']);
            foreach ($_POST['botherYou'] as $bother) {
                if ($y < $botherCount) {
                    $botherYou .= $bother . ",";
                } else {
                    $botherYou .= $bother;
                }
                $y++;
            }
        }

        echo $botherYou;

        $healthExp = "";
        $z = 1;
        if (isset($_POST['healthTwelve'])) {
            $healthCount = count($_POST['healthTwelve']);
            foreach ($_POST['healthTwelve'] as $health) {
                if ($z < $healthCount) {
                    $healthExp .= $health . ",";
                } else {
                    $healthExp .= $health;
                }
                $z++;
            }
        }



        $childUsualStudy = mysqli_real_escape_string($conn, (strip_tags($_POST['childUsualStudy'])));
        $childGuardianAssist = mysqli_real_escape_string($conn, (strip_tags($_POST['childGuardianAssist'])));

        $studentId = mysqli_real_escape_string($conn, (strip_tags($_POST['student-id'])));
        $studyClass = mysqli_real_escape_string($conn, (strip_tags($_POST['studyClass'])));
        $studentSpendStudying = mysqli_real_escape_string($conn, (strip_tags($_POST['studentSpendStudying'])));
        $studentAboutLesson = mysqli_real_escape_string($conn, (strip_tags($_POST['studentAboutLesson'])));
        $studentStudyCondition = mysqli_real_escape_string($conn, (strip_tags($_POST['studentStudyCondition'])));
        $studentInternetConnection = mysqli_real_escape_string($conn, (strip_tags($_POST['studentInternetConnection'])));
        $studentDevice = mysqli_real_escape_string($conn, (strip_tags($_POST['studentDevice'])));
        $studentPhysicalHealth = mysqli_real_escape_string($conn, (strip_tags($_POST['studentPhysicalHealth'])));
        $studentIllness = mysqli_real_escape_string($conn, (strip_tags($_POST['studentIllness'])));
        $healthCondition = mysqli_real_escape_string($conn, (strip_tags($_POST['healthCondition'])));
        $studentGuidanceCounceling = mysqli_real_escape_string($conn, (strip_tags($_POST['studentGuidanceCounceling'])));

        $studyClassOthers = "";
        if ($studyClass == 6) {
            $studyClassOthers = mysqli_real_escape_string($conn, (strip_tags($_POST['studyClassOthers'])));
        }

        $studentAboutLessonOthers = "";
        if ($studentAboutLesson == 8) {
            $studentAboutLessonOthers = mysqli_real_escape_string($conn, (strip_tags($_POST['studentAboutLessonOthers'])));
        }

        $studentDeviceOthers = "";
        if ($studentDevice == 5) {
            $studentDeviceOthers = mysqli_real_escape_string($conn, (strip_tags($_POST['studentAboutLessonOthers'])));
        }

        $studentIllnessOthers = "";
        if ($studentIllness == 3) {
            $studentIllnessOthers = mysqli_real_escape_string($conn, (strip_tags($_POST['studentIllnessOthers'])));
        }

        $healthConditionOthers = "";
        if ($healthCondition == 3) {
            $healthConditionOthers = mysqli_real_escape_string($conn, (strip_tags($_POST['healthConditionOthers'])));
        }

        $deactivate = true;

        $sql = "UPDATE tbl_student_habit SET  student_habit_child_guardian_assist = '{$childGuardianAssist}',  student_habit_child_usual_study = '{$childUsualStudy}',student_habit_usually_study = '{$studyClass}', student_habit_spend_studying = '{$studentSpendStudying}', student_habit_usually_ask = '{$studentAboutLesson}', student_habit_internet = '{$studentInternetConnection}', student_habit_student_device = '{$studentDevice}', student_habit_general_health = '{$studentPhysicalHealth}', student_habit_area_home = '{$studentStudyCondition}', student_habit_internet = '{$studentInternetConnection}', student_habit_physical_illness = '{$studentIllness}', student_habit_health_condition = '{$healthCondition}' , student_habit_multiple_feelings = '{$anyExperiences}', student_habit_multiple_experience = '{$healthExp}', student_habit_multiple_concern = '{$botherYou}' , student_habit_other_first = '{$studyClassOthers}', student_habit_other_second = '{$studentAboutLessonOthers}' , student_habit_other_third = '{$studentDeviceOthers}', student_habit_other_fourth = '{$studentIllnessOthers}', student_habit_other_fifth = '{$healthConditionOthers}', student_habit_is_active = '{$deactivate}', student_habit_guidance_counseling = '{$studentGuidanceCounceling}'   WHERE student_habit_student_id = '{$studentId}' ";

        if (!mysqli_query($conn, $sql)) {
            echo ("Error description: " . mysqli_error($conn));
        }

        return false;
    }

    if ($_POST["function-type"] === "edit-student-family") {

        $studentId = mysqli_real_escape_string($conn, (strip_tags($_POST['student-id'])));
        $fatherIsDeceased = mysqli_real_escape_string($conn, (strip_tags($_POST['student-father-is-deceased'])));
        $fatherName = mysqli_real_escape_string($conn, (strip_tags($_POST['student-father-name'])));
        $fatherContact = mysqli_real_escape_string($conn, (strip_tags($_POST['student-father-contact'])));
        $fatherEmail = mysqli_real_escape_string($conn, (strip_tags($_POST['student-father-email'])));
        $fatherOccupation = mysqli_real_escape_string($conn, (strip_tags($_POST['student-father-occupation'])));
        $fatherWorkAddress = mysqli_real_escape_string($conn, (strip_tags($_POST['student-father-work-address'])));
        $fatherWorkContact = mysqli_real_escape_string($conn, (strip_tags($_POST['student-father-work-contact'])));
        $fatherIsOfw = mysqli_real_escape_string($conn, (strip_tags($_POST['student-father-is-ofw'])));

        $motherIsDeceased = mysqli_real_escape_string($conn, (strip_tags($_POST['student-mother-is-deceased'])));
        $motherName = mysqli_real_escape_string($conn, (strip_tags($_POST['student-mother-name'])));
        $motherContact = mysqli_real_escape_string($conn, (strip_tags($_POST['student-mother-contact'])));
        $motherEmail = mysqli_real_escape_string($conn, (strip_tags($_POST['student-mother-email'])));
        $motherOccupation = mysqli_real_escape_string($conn, (strip_tags($_POST['student-mother-occupation'])));
        $motherWorkAddress = mysqli_real_escape_string($conn, (strip_tags($_POST['student-mother-work-address'])));
        $motherWorkContact = mysqli_real_escape_string($conn, (strip_tags($_POST['student-mother-work-contact'])));
        $motherIsOfw = mysqli_real_escape_string($conn, (strip_tags($_POST['student-mother-is-ofw'])));

        $guardianMaritalStatus = mysqli_real_escape_string($conn, (strip_tags($_POST['student-guardian-marital-status'])));
        $guardianName = mysqli_real_escape_string($conn, (strip_tags($_POST['student-guardian-name'])));
        $studentGuardianLandline = mysqli_real_escape_string($conn, (strip_tags($_POST['student-guardian-landline'])));
        $studentGuardianAddress = mysqli_real_escape_string($conn, (strip_tags($_POST['student-guardian-address'])));
        $studentGuardianPhone = mysqli_real_escape_string($conn, (strip_tags($_POST['student-guardian-phone'])));
        $studentGuardianEmailAddress = mysqli_real_escape_string($conn, (strip_tags($_POST['student-guardian-email-address'])));
        $studentGuardianPhoneWork = mysqli_real_escape_string($conn, (strip_tags($_POST['student-guardian-phone-work'])));
        $studentGuardianRelationship = mysqli_real_escape_string($conn, (strip_tags($_POST['student-guardian-relationship'])));
        $studentGuardianWorkAddress = mysqli_real_escape_string($conn, (strip_tags($_POST['student-guardian-work-address'])));


        $sql = "UPDATE tbl_students_family_guardian SET students_family_guardian_father_is_decease = '{$fatherIsDeceased}', students_family_guardian_father_name = '{$fatherName}' , students_family_guardian_father_contact = '{$fatherContact}', students_family_guardian_father_email = '{$fatherEmail}', students_family_guardian_father_occupation  = '{$fatherOccupation}' , students_family_guardian_father_work_address = '{$fatherWorkAddress}',  students_family_guardian_father_work_contact = '{$fatherWorkContact}' , students_family_guardian_father_is_ofw = '{$fatherIsOfw}', students_family_guardian_mother_is_decease = '{$motherIsDeceased}', students_family_guardian_mother_name = '{$motherName}', students_family_guardian_mother_contact  = '{$motherContact}' , students_family_guardian_mother_email = '{$motherEmail}', students_family_guardian_mother_occupation = '{$motherOccupation}',students_family_guardian_mother_work_address = '{$motherWorkAddress}' , students_family_guardian_mother_work_contact = '{$motherWorkContact}', students_family_guardian_mother_is_ofw = '{$motherIsOfw}', students_family_guardian_marital_status = '{$guardianMaritalStatus}', students_family_guardian_name = '{$guardianName}', students_family_guardian_guardian_address = '{$studentGuardianAddress}', students_family_guardian_guardian_landline = '{$studentGuardianLandline}', students_family_guardian_guardian_phone = '{$studentGuardianPhone}', students_family_guardian_guardian_email = '{$studentGuardianEmailAddress}', students_family_guardian_guardian_work_address = '{$studentGuardianWorkAddress}', students_family_guardian_guardian_work_number = '{$studentGuardianPhoneWork}', students_family_guardian_guardian_relationship = '{$studentGuardianRelationship}' WHERE students_family_guardian_student_id = '{$studentId}' ";

        if (!mysqli_query($conn, $sql)) {
            echo ("Error description: " . mysqli_error($conn));
        }

        return false;
    }
}
