<?php
include('./admin/college_question.php');

function studentHabits($conn, $studentType)
{
?>

    <?php
    $sql = "SELECT * FROM tbl_student_habit WHERE student_habit_student_id = '{$_SESSION['student_user_id']}'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);

    $isActive = $row['student_habit_is_active'];
    ?>
    <div class="<?php echo ($isActive) ? 'deactivated-container' : null ?>">
        <div class="<?php echo ($isActive) ? 'deactivated-exam' : null ?>"><span></span></div>
        <div class="<?php echo ($isActive) ? 'student-habit-row' : null ?>">
            <form id="edit-student-habits-form" method="post">
                <input type="hidden" name="student-id" value="<?php echo $_SESSION['student_user_id'] ?>">
                <input type="hidden" name="function-type" value="edit-student-habits">

                <div class="student__habits">

                    <?php if ($studentType == 0) { ?>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="survey-title">
                                    <p>Is your child/ward studying alone or with your assistance? </P>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-check form-check-radio">
                                            <label class="form-check-label">
                                                <input class="form-check-input usuallyStudyClass" type="radio" name="studyClass" value="1" <?php echo ($row['student_habit_usually_study'] == 1) ? 'checked' : null ?>>
                                                Yes, s/he is often studying alone
                                                <span class="circle">
                                                    <span class="check"></span>
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-check form-check-radio">
                                            <label class="form-check-label">
                                                <input class="form-check-input usuallyStudyClass" type="radio" name="studyClass" value="3" <?php echo ($row['student_habit_usually_study'] == 3) ? 'checked' : null ?>>
                                                No, s/he is often studying with assistance
                                                <span class="circle">
                                                    <span class="check"></span>
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-check form-check-radio">
                                            <label class="form-check-label">
                                                <input class="form-check-input othersRadioButton" type="radio" name="studyClass" value="6" targetId="othersRadioButton" <?php echo ($row['student_habit_usually_study'] == 6) ? 'checked' : null ?>>
                                                Others (pls. specify)
                                                <span class="circle">
                                                    <span class="check"></span>
                                                </span>
                                            </label>
                                        </div>
                                        <div class="form-group bmd-form-group" id="othersRadioButton">
                                            <label class="bmd-label-floating">Others </label>
                                            <input type="text" name="studyClassOthers" class="form-control" <?php echo ($row['student_habit_usually_study'] == 6) ? null : 'disabled="false' ?> value="<?php echo ($row['student_habit_other_first']) ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="survey-title">
                                    <p>How often does s/he study? </P>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-check form-check-radio">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="radio" name="studentSpendStudying" value="1" <?php echo ($row['student_habit_spend_studying'] == 1) ? 'checked' : null ?>>
                                                Everyday
                                                <span class="circle">
                                                    <span class="check"></span>
                                                </span>
                                            </label>
                                        </div>
                                        <div class="form-check form-check-radio">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="radio" name="studentSpendStudying" value="2" <?php echo ($row['student_habit_spend_studying'] == 2) ? 'checked' : null ?>>
                                                Twice a week
                                                <span class="circle">
                                                    <span class="check"></span>
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-check form-check-radio">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="radio" name="studentSpendStudying" value="3" <?php echo ($row['student_habit_spend_studying'] == 3) ? 'checked' : null ?>>
                                                Once a week
                                                <span class="circle">
                                                    <span class="check"></span>
                                                </span>
                                            </label>
                                        </div>
                                        <div class="form-check form-check-radio">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="radio" name="studentSpendStudying" value="4" <?php echo ($row['student_habit_spend_studying'] == 4) ? 'checked' : null ?>>
                                                When there is a quiz
                                                <span class="circle">
                                                    <span class="check"></span>
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-check form-check-radio">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="radio" name="studentSpendStudying" value="5" <?php echo ($row['student_habit_spend_studying'] == 5) ? 'checked' : null ?>>
                                                During examination week
                                                <span class="circle">
                                                    <span class="check"></span>
                                                </span>
                                            </label>
                                        </div>
                                        <div class="form-check form-check-radio">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="radio" name="studentSpendStudying" value="6" <?php echo ($row['student_habit_spend_studying'] == 6) ? 'checked' : null ?>>
                                                When he/she feels like studying
                                                <span class="circle">
                                                    <span class="check"></span>
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="survey-title">
                                    <p>How many hours is your child usually studying? </P>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-check form-check-radio">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="radio" name="childUsualStudy" value="1" <?php echo ($row['student_habit_child_usual_study'] == 1) ? 'checked' : null ?>>
                                                1 hour a day
                                                <span class="circle">
                                                    <span class="check"></span>
                                                </span>
                                            </label>
                                        </div>
                                        <div class="form-check form-check-radio">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="radio" name="childUsualStudy" value="2" <?php echo ($row['student_habit_child_usual_study'] == 2) ? 'checked' : null ?>>
                                                More than an hour a day
                                                <span class="circle">
                                                    <span class="check"></span>
                                                </span>
                                            </label>
                                        </div>
                                        <div class="form-check form-check-radio">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="radio" name="childUsualStudy" value="3" <?php echo ($row['student_habit_child_usual_study'] == 3) ? 'checked' : null ?>>
                                                less than an hour a day
                                                <span class="circle">
                                                    <span class="check"></span>
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-check form-check-radio">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="radio" name="childUsualStudy" value="4" <?php echo ($row['student_habit_child_usual_study'] == 4) ? 'checked' : null ?>>
                                                1 hour a week
                                                <span class="circle">
                                                    <span class="check"></span>
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-check form-check-radio">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="radio" name="childUsualStudy" value="5" <?php echo ($row['student_habit_child_usual_study'] == 5) ? 'checked' : null ?>>
                                                More than an hour a week
                                                <span class="circle">
                                                    <span class="check"></span>
                                                </span>
                                            </label>
                                        </div>
                                        <div class="form-check form-check-radio">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="radio" name="childUsualStudy" value="6" <?php echo ($row['student_habit_child_usual_study'] == 6) ? 'checked' : null ?>>
                                                Less than an hour a week
                                                <span class="circle">
                                                    <span class="check"></span>
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--  -->
                            <div class="col-md-12">
                                <div class="survey-title">
                                    <p>When you have question/s about your lesson, to whom do you usually ask? </P>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-check form-check-radio">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="radio" name="studentAboutLesson" value="1" <?php echo ($row['student_habit_usually_ask'] == 1) ? 'checked' : null ?>>
                                                Teacher
                                                <span class="circle">
                                                    <span class="check"></span>
                                                </span>
                                            </label>
                                        </div>
                                        <div class="form-check form-check-radio">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="radio" name="studentAboutLesson" value="2" <?php echo ($row['student_habit_usually_ask'] == 2) ? 'checked' : null ?>>
                                                Classmate/s
                                                <span class="circle">
                                                    <span class="check"></span>
                                                </span>
                                            </label>
                                        </div>
                                        <div class="form-check form-check-radio">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="radio" name="studentAboutLesson" value="3" <?php echo ($row['student_habit_usually_ask'] == 3) ? 'checked' : null ?>>
                                                Friend
                                                <span class="circle">
                                                    <span class="check"></span>
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-check form-check-radio">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="radio" name="studentAboutLesson" value="4" <?php echo ($row['student_habit_usually_ask'] == 4) ? 'checked' : null ?>>
                                                Mother
                                                <span class="circle">
                                                    <span class="check"></span>
                                                </span>
                                            </label>
                                        </div>
                                        <div class="form-check form-check-radio">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="radio" name="studentAboutLesson" value="5" <?php echo ($row['student_habit_usually_ask'] == 5) ? 'checked' : null ?>>
                                                Brother
                                                <span class="circle">
                                                    <span class="check"></span>
                                                </span>
                                            </label>
                                        </div>
                                        <div class="form-check form-check-radio">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="radio" name="studentAboutLesson" value="6" <?php echo ($row['student_habit_usually_ask'] == 6) ? 'checked' : null ?>>
                                                Sister
                                                <span class="circle">
                                                    <span class="check"></span>
                                                </span>
                                            </label>
                                        </div>

                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-check form-check-radio">
                                            <label class="form-check-label">
                                                <input class="form-check-input othersRadioButton2" type="radio" name="studentAboutLesson" value="8" targetId='othersRadioButton2' <?php echo ($row['student_habit_usually_ask'] == 8) ? 'checked' : null ?>>
                                                Others
                                                <span class="circle">
                                                    <span class="check"></span>
                                                </span>
                                            </label>
                                        </div>
                                        <div class="form-group bmd-form-group" id="othersRadioButton2">
                                            <label class="bmd-label-floating">Others </label>
                                            <input type="text" name="studentAboutLessonOthers" class="form-control" <?php echo ($row['student_habit_usually_ask'] == 8) ? null : 'disabled="false' ?> value="<?php echo ($row['student_habit_other_second']) ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="survey-title">
                                    <p>As the student’s parent/guardian, how often do you assist your child/ward to study?</P>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-check form-check-radio">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="radio" name="childGuardianAssist" value="1" <?php echo ($row['student_habit_child_guardian_assist'] == 1) ? 'checked' : null ?>>
                                                Everyday
                                                <span class="circle">
                                                    <span class="check"></span>
                                                </span>
                                            </label>
                                        </div>
                                        <div class="form-check form-check-radio">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="radio" name="childGuardianAssist" value="2" <?php echo ($row['student_habit_child_guardian_assist'] == 2) ? 'checked' : null ?>>
                                                Twice a week
                                                <span class="circle">
                                                    <span class="check"></span>
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-check form-check-radio">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="radio" name="childGuardianAssist" value="3" <?php echo ($row['student_habit_child_guardian_assist'] == 3) ? 'checked' : null ?>>
                                                Once a week
                                                <span class="circle">
                                                    <span class="check"></span>
                                                </span>
                                            </label>
                                        </div>
                                        <div class="form-check form-check-radio">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="radio" name="childGuardianAssist" value="4" <?php echo ($row['student_habit_child_guardian_assist'] == 4) ? 'checked' : null ?>>
                                                When there is a quiz
                                                <span class="circle">
                                                    <span class="check"></span>
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-check form-check-radio">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="radio" name="childGuardianAssist" value="5" <?php echo ($row['student_habit_child_guardian_assist'] == 5) ? 'checked' : null ?>>
                                                During examination week
                                                <span class="circle">
                                                    <span class="check"></span>
                                                </span>
                                            </label>
                                        </div>
                                        <div class="form-check form-check-radio">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="radio" name="childGuardianAssist" value="6" <?php echo ($row['student_habit_child_guardian_assist'] == 6) ? 'checked' : null ?>>
                                                When he/she feel like studying
                                                <span class="circle">
                                                    <span class="check"></span>
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    <?php } else { ?>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="survey-title">
                                    <p>When do you usually study?</P>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-check form-check-radio">
                                            <label class="form-check-label">
                                                <input class="form-check-input usuallyStudyClass" type="radio" name="studyClass" value="1" <?php echo ($row['student_habit_usually_study'] == 1) ? 'checked' : null ?>>
                                                Everyday
                                                <span class="circle">
                                                    <span class="check"></span>
                                                </span>
                                            </label>
                                        </div>
                                        <div class="form-check form-check-radio">
                                            <label class="form-check-label">
                                                <input class="form-check-input usuallyStudyClass" type="radio" name="studyClass" value="2" <?php echo ($row['student_habit_usually_study'] == 2) ? 'checked' : null ?>>
                                                Twice a week
                                                <span class="circle">
                                                    <span class="check"></span>
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-check form-check-radio">
                                            <label class="form-check-label">
                                                <input class="form-check-input usuallyStudyClass" type="radio" name="studyClass" value="3" <?php echo ($row['student_habit_usually_study'] == 3) ? 'checked' : null ?>>
                                                When there is a quiz
                                                <span class="circle">
                                                    <span class="check"></span>
                                                </span>
                                            </label>
                                        </div>
                                        <div class="form-check form-check-radio">
                                            <label class="form-check-label">
                                                <input class="form-check-input usuallyStudyClass" type="radio" name="studyClass" value="4" <?php echo ($row['student_habit_usually_study'] == 4) ? 'checked' : null ?>>
                                                During examination week
                                                <span class="circle">
                                                    <span class="check"></span>
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-check form-check-radio">
                                            <label class="form-check-label">
                                                <input class="form-check-input usuallyStudyClass" type="radio" name="studyClass" value="5" <?php echo ($row['student_habit_usually_study'] == 5) ? 'checked' : null ?>>
                                                When I feel like studying
                                                <span class="circle">
                                                    <span class="check"></span>
                                                </span>
                                            </label>
                                        </div>
                                        <div class="form-check form-check-radio">
                                            <label class="form-check-label">
                                                <input class="form-check-input othersRadioButton" type="radio" name="studyClass" value="6" targetId="othersRadioButton" <?php echo ($row['student_habit_usually_study'] == 6) ? 'checked' : null ?>>
                                                Others (pls. specify)
                                                <span class="circle">
                                                    <span class="check"></span>
                                                </span>
                                            </label>
                                        </div>
                                        <div class="form-group bmd-form-group" id="othersRadioButton">
                                            <label class="bmd-label-floating">Others </label>
                                            <input type="text" name="studyClassOthers" class="form-control" <?php echo ($row['student_habit_usually_study'] == 6) ? null : 'disabled="false' ?> value="<?php echo ($row['student_habit_other_first']) ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="survey-title">
                                    <p>How many hours do you usually spend studying?</P>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-check form-check-radio">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="radio" name="studentSpendStudying" value="1" <?php echo ($row['student_habit_spend_studying'] == 1) ? 'checked' : null ?>>
                                                1 hour a day
                                                <span class="circle">
                                                    <span class="check"></span>
                                                </span>
                                            </label>
                                        </div>
                                        <div class="form-check form-check-radio">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="radio" name="studentSpendStudying" value="2" <?php echo ($row['student_habit_spend_studying'] == 2) ? 'checked' : null ?>>
                                                More than an hour a day
                                                <span class="circle">
                                                    <span class="check"></span>
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-check form-check-radio">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="radio" name="studentSpendStudying" value="3" <?php echo ($row['student_habit_spend_studying'] == 3) ? 'checked' : null ?>>
                                                Less than an hour a day
                                                <span class="circle">
                                                    <span class="check"></span>
                                                </span>
                                            </label>
                                        </div>
                                        <div class="form-check form-check-radio">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="radio" name="studentSpendStudying" value="4" <?php echo ($row['student_habit_spend_studying'] == 4) ? 'checked' : null ?>>
                                                1 hour a week
                                                <span class="circle">
                                                    <span class="check"></span>
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-check form-check-radio">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="radio" name="studentSpendStudying" value="5" <?php echo ($row['student_habit_spend_studying'] == 5) ? 'checked' : null ?>>
                                                More than an hour a week
                                                <span class="circle">
                                                    <span class="check"></span>
                                                </span>
                                            </label>
                                        </div>
                                        <div class="form-check form-check-radio">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="radio" name="studentSpendStudying" value="6" <?php echo ($row['student_habit_spend_studying'] == 6) ? 'checked' : null ?>>
                                                Less than an hour a week
                                                <span class="circle">
                                                    <span class="check"></span>
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="survey-title">
                                    <p>When you have question/s about your lesson, to whom do you usually ask? </P>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-check form-check-radio">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="radio" name="studentAboutLesson" value="1" <?php echo ($row['student_habit_usually_ask'] == 1) ? 'checked' : null ?>>
                                                Teacher
                                                <span class="circle">
                                                    <span class="check"></span>
                                                </span>
                                            </label>
                                        </div>
                                        <div class="form-check form-check-radio">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="radio" name="studentAboutLesson" value="2" <?php echo ($row['student_habit_usually_ask'] == 2) ? 'checked' : null ?>>
                                                Classmate/s
                                                <span class="circle">
                                                    <span class="check"></span>
                                                </span>
                                            </label>
                                        </div>
                                        <div class="form-check form-check-radio">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="radio" name="studentAboutLesson" value="3" <?php echo ($row['student_habit_usually_ask'] == 3) ? 'checked' : null ?>>
                                                Friend
                                                <span class="circle">
                                                    <span class="check"></span>
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-check form-check-radio">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="radio" name="studentAboutLesson" value="4" <?php echo ($row['student_habit_usually_ask'] == 4) ? 'checked' : null ?>>
                                                Mother
                                                <span class="circle">
                                                    <span class="check"></span>
                                                </span>
                                            </label>
                                        </div>
                                        <div class="form-check form-check-radio">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="radio" name="studentAboutLesson" value="5" <?php echo ($row['student_habit_usually_ask'] == 5) ? 'checked' : null ?>>
                                                Brother
                                                <span class="circle">
                                                    <span class="check"></span>
                                                </span>
                                            </label>
                                        </div>
                                        <div class="form-check form-check-radio">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="radio" name="studentAboutLesson" value="6" <?php echo ($row['student_habit_usually_ask'] == 6) ? 'checked' : null ?>>
                                                Sister
                                                <span class="circle">
                                                    <span class="check"></span>
                                                </span>
                                            </label>
                                        </div>

                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-check form-check-radio">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="radio" name="studentAboutLesson" value="7" <?php echo ($row['student_habit_usually_ask'] == 7) ? 'checked' : null ?>>
                                                Boyfriend / Girlfriend
                                                <span class="circle">
                                                    <span class="check"></span>
                                                </span>
                                            </label>
                                        </div>
                                        <div class="form-check form-check-radio">
                                            <label class="form-check-label">
                                                <input class="form-check-input othersRadioButton2" type="radio" name="studentAboutLesson" value="8" targetId='othersRadioButton2' <?php echo ($row['student_habit_usually_ask'] == 8) ? 'checked' : null ?>>
                                                Others
                                                <span class="circle">
                                                    <span class="check"></span>
                                                </span>
                                            </label>
                                        </div>
                                        <div class="form-group bmd-form-group" id="othersRadioButton2">
                                            <label class="bmd-label-floating">Others </label>
                                            <input type="text" name="studentAboutLessonOthers" class="form-control" <?php echo ($row['student_habit_usually_ask'] == 8) ? null : 'disabled="false' ?> value="<?php echo ($row['student_habit_other_second']) ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php } ?>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="survey-title">
                                <p>Do you have a study area at home that is conducive for online classes?</P>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-check form-check-radio">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="radio" name="studentStudyCondition" value="1" <?php echo ($row['student_habit_area_home'] == 1) ? 'checked' : null ?>>
                                            Yes
                                            <span class="circle">
                                                <span class="check"></span>
                                            </span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-check form-check-radio">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="radio" name="studentStudyCondition" value="2" <?php echo ($row['student_habit_area_home'] == 2) ? 'checked' : null ?>>
                                            No
                                            <span class="circle">
                                                <span class="check"></span>
                                            </span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="survey-title">
                                <p>Kindly describe the usual quality of your Internet Connection:</P>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-check form-check-radio">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="radio" name="studentInternetConnection" value="1" <?php echo ($row['student_habit_internet'] == 1) ? 'checked' : null ?>>
                                            Poor/Usually unstable
                                            <span class="circle">
                                                <span class="check"></span>
                                            </span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-check form-check-radio">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="radio" name="studentInternetConnection" value="2" <?php echo ($row['student_habit_internet'] == 2) ? 'checked' : null ?>>
                                            Good/Fairly Stable
                                            <span class="circle">
                                                <span class="check"></span>
                                            </span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-check form-check-radio">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="radio" name="studentInternetConnection" value="3" <?php echo ($row['student_habit_internet'] == 3) ? 'checked' : null ?>>
                                            Excellent/Usually stable
                                            <span class="circle">
                                                <span class="check"></span>
                                            </span>
                                        </label>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="col-md-12">
                            <div class="survey-title">
                                <p>Kindly identify the device(s) that you can use for your online classes:</P>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-check form-check-radio">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="radio" name="studentDevice" value="1" <?php echo ($row['student_habit_student_device'] == 1) ? 'checked' : null ?>>
                                            Mobile phone
                                            <span class="circle">
                                                <span class="check"></span>
                                            </span>
                                        </label>
                                    </div>
                                    <div class="form-check form-check-radio">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="radio" name="studentDevice" value="2" <?php echo ($row['student_habit_student_device'] == 2) ? 'checked' : null ?>>
                                            Tablet
                                            <span class="circle">
                                                <span class="check"></span>
                                            </span>
                                        </label>
                                    </div>

                                </div>
                                <div class="col-md-4">
                                    <div class="form-check form-check-radio">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="radio" name="studentDevice" value="3" <?php echo ($row['student_habit_student_device'] == 3) ? 'checked' : null ?>>
                                            Laptop
                                            <span class="circle">
                                                <span class="check"></span>
                                            </span>
                                        </label>
                                    </div>
                                    <div class="form-check form-check-radio">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="radio" name="studentDevice" value="4" <?php echo ($row['student_habit_student_device'] == 4) ? 'checked' : null ?>>
                                            Desktop
                                            <span class="circle">
                                                <span class="check"></span>
                                            </span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-check form-check-radio">
                                        <label class="form-check-label">
                                            <input class="form-check-input othersRadioButton3" type="radio" name="studentDevice" value="5" targetId='othersRadioButton3' <?php echo ($row['student_habit_student_device'] == 5) ? 'checked' : null ?>>
                                            Others
                                            <span class="circle">
                                                <span class="check"></span>
                                            </span>
                                        </label>
                                    </div>
                                    <div class="form-group bmd-form-group" id="othersRadioButton3">
                                        <label class="bmd-label-floating">Others </label>
                                        <input type="text" name="studentDeviceOthers" class="form-control" <?php echo ($row['student_habit_student_device'] == 5) ? null : 'disabled="false' ?> value="<?php echo ($row['student_habit_other_third']) ?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <?php
                // collegeQuestion();
                ?>
                <?php if ($isActive) {
                    echo "";
                } else { ?>
                    <div class="d-flex justify-content-end">
                        <button id="submit-edit-student-habits-form" class="btn btn-primary ">
                            Submit Survey
                        </button>
                    </div>
                <?php } ?>
            </form>
        </div>
    </div>

<?php } ?>