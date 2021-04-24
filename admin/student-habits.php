<?php

function studentHabits($conn, $studentType)
{
?>

    <?php
    $sql = "SELECT * FROM tbl_student_habit WHERE student_habit_student_id = '{$_GET['id']}'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    ?>
    <form id="edit-student-habits-form" method="post">
        <input type="hidden" name="student-id" value="<?php echo $_GET['id'] ?>">
        <input type="hidden" name="function-type" value="edit-student-habits" />

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

            <div class="row">
                <div class="col-md-12">
                    <div class="survey-title">
                        <p>What is the condition of your child’s general health? </P>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-check form-check-radio">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="studentPhysicalHealth" value="1" <?php echo ($row['student_habit_general_health'] == 1) ? 'checked' : null ?>>
                                    Excellent
                                    <span class="circle">
                                        <span class="check"></span>
                                    </span>
                                </label>
                            </div>
                            <div class="form-check form-check-radio">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="studentPhysicalHealth" value="2" <?php echo ($row['student_habit_general_health'] == 2) ? 'checked' : null ?>>
                                    Good
                                    <span class="circle">
                                        <span class="check"></span>
                                    </span>
                                </label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-check form-check-radio">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="studentPhysicalHealth" value="3" <?php echo ($row['student_habit_general_health'] == 3) ? 'checked' : null ?>>
                                    Fair
                                    <span class="circle">
                                        <span class="check"></span>
                                    </span>
                                </label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-check form-check-radio">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="studentPhysicalHealth" value="4" <?php echo ($row['student_habit_general_health'] == 4) ? 'checked' : null ?>>
                                    Poor
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
                        <p>Does he/she have any serious physical illness? </P>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-check form-check-radio">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="studentIllness" value="1" <?php echo ($row['student_habit_physical_illness'] == 1) ? 'checked' : null ?>>
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
                                    <input class="form-check-input" type="radio" name="studentIllness" value="2" <?php echo ($row['student_habit_physical_illness'] == 2) ? 'checked' : null ?>>
                                    No
                                    <span class="circle">
                                        <span class="check"></span>
                                    </span>
                                </label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-check form-check-radio">
                                <label class="form-check-label">
                                    <input class="form-check-input othersRadioButton4" type="radio" name="studentIllness" value="3" targetId="othersRadioButton4" <?php echo ($row['student_habit_physical_illness'] == 3) ? 'checked' : null ?>>
                                    Others
                                    <span class="circle">
                                        <span class="check"></span>
                                    </span>
                                </label>
                            </div>
                            <div class="form-group bmd-form-group" id="othersRadioButton4">
                                <label class="bmd-label-floating">Others </label>
                                <input type="text" name="studentIllnessOthers" class="form-control" <?php echo ($row['student_habit_physical_illness'] == 3) ? null : 'disabled="false' ?> value="<?php echo ($row['student_habit_other_fourth']) ?>">
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-md-12">
                    <div class="survey-title">
                        <p>Have you been previously diagnosed with any mental health condition?</P>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-check form-check-radio">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="healthCondition" value="1" <?php echo ($row['student_habit_health_condition'] == 1) ? 'checked' : null ?>>
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
                                    <input class="form-check-input" type="radio" name="healthCondition" value="2" <?php echo ($row['student_habit_health_condition'] == 2) ? 'checked' : null ?>>
                                    No
                                    <span class="circle">
                                        <span class="check"></span>
                                    </span>
                                </label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-check form-check-radio">
                                <label class="form-check-label">
                                    <input class="form-check-input othersRadioButton5" type="radio" name="healthCondition" value="3" targetId='othersRadioButton5' <?php echo ($row['student_habit_health_condition'] == 3) ? 'checked' : null ?>>
                                    Others
                                    <span class="circle">
                                        <span class="check"></span>
                                    </span>
                                </label>
                            </div>
                            <div class="form-group bmd-form-group" id="othersRadioButton5">
                                <label class="bmd-label-floating">Others </label>
                                <input type="text" name="healthConditionOthers" class="form-control" <?php echo ($row['student_habit_health_condition'] == 3) ? null : 'disabled="false' ?> value="<?php echo ($row['student_habit_other_fifth']) ?>">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="survey-title">
                        <p>For the past six (6) months, have you experienced any of the following? (Kindly put a
                            ✓ mark on all that applies)</P>
                    </div>

                    <?php

                    $sixExpArr = explode(",", $row['student_habit_multiple_feelings']);

                    ?>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" name="experienceAny[]" value="1" <?php if (in_array(1, $sixExpArr)) {
                                                                                                                            echo "checked";
                                                                                                                        } ?>>
                                    Excessive worry about your physical health
                                    <span class="form-check-sign">
                                        <span class="check"></span>
                                    </span>
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" value="2" name="experienceAny[]" <?php if (in_array(2, $sixExpArr)) {
                                                                                                                            echo "checked";
                                                                                                                        } ?>>
                                    Excessive worry about the physical health of a family member
                                    <span class="form-check-sign">
                                        <span class="check"></span>
                                    </span>
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" value="3" name="experienceAny[]" <?php if (in_array(3, $sixExpArr)) {
                                                                                                                            echo "checked";
                                                                                                                        } ?>>
                                    Excessive worry about a distressing situation at home
                                    <span class="form-check-sign">
                                        <span class="check"></span>
                                    </span>
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" value="4" name="experienceAny[]" <?php if (in_array(4, $sixExpArr)) {
                                                                                                                            echo "checked";
                                                                                                                        } ?>>
                                    Threatening situation at home involving your safety and security
                                    <span class="form-check-sign">
                                        <span class="check"></span>
                                    </span>
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" value="5" name="experienceAny[]" <?php if (in_array(5, $sixExpArr)) {
                                                                                                                            echo "checked";
                                                                                                                        } ?>>
                                    Intense fear or discomfort with chest pain, shortness of breath, increase in heart rate
                                    <span class="form-check-sign">
                                        <span class="check"></span>
                                    </span>
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" value="6" name="experienceAny[]" <?php if (in_array(6, $sixExpArr)) {
                                                                                                                            echo "checked";
                                                                                                                        } ?>>
                                    Fear of losing control or “going crazy”
                                    <span class="form-check-sign">
                                        <span class="check"></span>
                                    </span>
                                </label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" value="7" name="experienceAny[]" <?php if (in_array(7, $sixExpArr)) {
                                                                                                                            echo "checked";
                                                                                                                        } ?>>
                                    Restlessness
                                    <span class="form-check-sign">
                                        <span class="check"></span>
                                    </span>
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" value="8" name="experienceAny[]" <?php if (in_array(8, $sixExpArr)) {
                                                                                                                            echo "checked";
                                                                                                                        } ?>>
                                    Irritability and/or anger outbursts
                                    <span class="form-check-sign">
                                        <span class="check"></span>
                                    </span>
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" value="9" name="experienceAny[]" <?php if (in_array(9, $sixExpArr)) {
                                                                                                                            echo "checked";
                                                                                                                        } ?>>
                                    Problems with concentration or mind going blank
                                    <span class="form-check-sign">
                                        <span class="check"></span>
                                    </span>
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" value="10" name="experienceAny[]" <?php if (in_array(10, $sixExpArr)) {
                                                                                                                            echo "checked";
                                                                                                                        } ?>>
                                    Difficulty falling or staying asleep
                                    <span class="form-check-sign">
                                        <span class="check"></span>
                                    </span>
                                </label>
                            </div>

                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" value="11" name="experienceAny[]" <?php if (in_array(11, $sixExpArr)) {
                                                                                                                            echo "checked";
                                                                                                                        } ?>>
                                    Muscle tension
                                    <span class="form-check-sign">
                                        <span class="check"></span>
                                    </span>
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" value="12" name="experienceAny[]" <?php if (in_array(12, $sixExpArr)) {
                                                                                                                            echo "checked";
                                                                                                                        } ?>>
                                    Difficulty in controlling the worry
                                    <span class="form-check-sign">
                                        <span class="check"></span>
                                    </span>
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" value="13" name="experienceAny[]" <?php if (in_array(13, $sixExpArr)) {
                                                                                                                            echo "checked";
                                                                                                                        } ?>>
                                    Feeling sad, empty or hopeless
                                    <span class="form-check-sign">
                                        <span class="check"></span>
                                    </span>
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" value="14" name="experienceAny[]" <?php if (in_array(14, $sixExpArr)) {
                                                                                                                            echo "checked";
                                                                                                                        } ?>>
                                    Loss of interest or pleasure in almost all activities most of the day
                                    <span class="form-check-sign">
                                        <span class="check"></span>
                                    </span>
                                </label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" value="15" name="experienceAny[]" <?php if (in_array(15, $sixExpArr)) {
                                                                                                                            echo "checked";
                                                                                                                        } ?>>
                                    Loss of energy/fatigue
                                    <span class="form-check-sign">
                                        <span class="check"></span>
                                    </span>
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" value="16" name="experienceAny[]" <?php if (in_array(16, $sixExpArr)) {
                                                                                                                            echo "checked";
                                                                                                                        } ?>>
                                    Feelings of worthlessness
                                    <span class="form-check-sign">
                                        <span class="check"></span>
                                    </span>
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" value="17" name="experienceAny[]" <?php if (in_array(17, $sixExpArr)) {
                                                                                                                            echo "checked";
                                                                                                                        } ?>>
                                    Thoughts about suicide
                                    <span class="form-check-sign">
                                        <span class="check"></span>
                                    </span>
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" value="18" name="experienceAny[]" <?php if (in_array(18, $sixExpArr)) {
                                                                                                                            echo "checked";
                                                                                                                        } ?>>
                                    Suicide attempt/s
                                    <span class="form-check-sign">
                                        <span class="check"></span>
                                    </span>
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" value="19" name="experienceAny[]" <?php if (in_array(19, $sixExpArr)) {
                                                                                                                            echo "checked";
                                                                                                                        } ?>>
                                    Self-harm or self-injurious behavior
                                    <span class="form-check-sign">
                                        <span class="check"></span>
                                    </span>
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" value="20" name="experienceAny[]" <?php if (in_array(20, $sixExpArr)) {
                                                                                                                            echo "checked";
                                                                                                                        } ?>>
                                    Excessive or inappropriate guilt
                                    <span class="form-check-sign">
                                        <span class="check"></span>
                                    </span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-md-12">
                    <?php

                    $twelveExpArr = explode(",", $row['student_habit_multiple_experience']);

                    ?>
                    <?php if ($studentType == 0) { ?>
                        <div class="survey-title">
                            <p>Which of the following emotions do you usually express (through words and/or actions)?</P>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox" value="1" name="healthTwelve[]" <?php if (in_array(1, $twelveExpArr)) {
                                                                                                                            echo "checked";
                                                                                                                        } ?>>
                                        Happiness
                                        <span class="form-check-sign">
                                            <span class="check"></span>
                                        </span>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox" value="2" name="healthTwelve[]" <?php if (in_array(2, $twelveExpArr)) {
                                                                                                                            echo "checked";
                                                                                                                        } ?>>
                                        Sad
                                        <span class="form-check-sign">
                                            <span class="check"></span>
                                        </span>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox" value="3" name="healthTwelve[]" <?php if (in_array(3, $twelveExpArr)) {
                                                                                                                            echo "checked";
                                                                                                                        } ?>>
                                        Fear
                                        <span class="form-check-sign">
                                            <span class="check"></span>
                                        </span>
                                    </label>
                                </div>

                            </div>
                            <div class="col-md-4">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox" value="4" name="healthTwelve[]" <?php if (in_array(4, $twelveExpArr)) {
                                                                                                                            echo "checked";
                                                                                                                        } ?>>
                                        Pain
                                        <span class="form-check-sign">
                                            <span class="check"></span>
                                        </span>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox" value="5" name="healthTwelve[]" <?php if (in_array(5, $twelveExpArr)) {
                                                                                                                            echo "checked";
                                                                                                                        } ?>>
                                        Anger
                                        <span class="form-check-sign">
                                            <span class="check"></span>
                                        </span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox" value="6" name="healthTwelve[]" <?php if (in_array(6, $twelveExpArr)) {
                                                                                                                            echo "checked";
                                                                                                                        } ?>>
                                        Irritability
                                        <span class="form-check-sign">
                                            <span class="check"></span>
                                        </span>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox" value="7" name="healthTwelve[]" <?php if (in_array(7, $twelveExpArr)) {
                                                                                                                            echo "checked";
                                                                                                                        } ?>>
                                        Worry/Anxiety
                                        <span class="form-check-sign">
                                            <span class="check"></span>
                                        </span>
                                    </label>
                                </div>
                            </div>
                        </div>

                    <?php } else { ?>

                        <div class="survey-title">
                            <p>For the past twelve (12) months, have you experienced any of the following:</P>
                        </div>


                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-check">
                                    <label class="form-check-label">

                                        <input class="form-check-input" type="checkbox" value="1" name="healthTwelve[]" <?php if (in_array(1, $twelveExpArr)) {
                                                                                                                            echo "checked";
                                                                                                                        } ?>>
                                        Bullying
                                        <span class="form-check-sign">
                                            <span class="check"></span>
                                        </span>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox" value="2" name="healthTwelve[]" <?php if (in_array(2, $twelveExpArr)) {
                                                                                                                            echo "checked";
                                                                                                                        } ?>>
                                        Physical
                                        <span class="form-check-sign">
                                            <span class="check"></span>
                                        </span>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox" value="3" name="healthTwelve[]" <?php if (in_array(3, $twelveExpArr)) {
                                                                                                                            echo "checked";
                                                                                                                        } ?>>
                                        Verbal
                                        <span class="form-check-sign">
                                            <span class="check"></span>
                                        </span>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox" value="4" name="healthTwelve[]" <?php if (in_array(4, $twelveExpArr)) {
                                                                                                                            echo "checked";
                                                                                                                        } ?>>
                                        Physical
                                        <span class="form-check-sign">
                                            <span class="check"></span>
                                        </span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox" value="5" name="healthTwelve[]" <?php if (in_array(5, $twelveExpArr)) {
                                                                                                                            echo "checked";
                                                                                                                        } ?>>
                                        Abuse at Home
                                        <span class="form-check-sign">
                                            <span class="check"></span>
                                        </span>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox" value="6" name="healthTwelve[]" <?php if (in_array(6, $twelveExpArr)) {
                                                                                                                            echo "checked";
                                                                                                                        } ?>>
                                        Neglect/abandonment by parent(s)/guardian
                                        <span class="form-check-sign">
                                            <span class="check"></span>
                                        </span>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox" value="7" name="healthTwelve[]" <?php if (in_array(7, $twelveExpArr)) {
                                                                                                                            echo "checked";
                                                                                                                        } ?>>
                                        Death of a family member
                                        <span class="form-check-sign">
                                            <span class="check"></span>
                                        </span>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox" value="8" name="healthTwelve[]" <?php if (in_array(8, $twelveExpArr)) {
                                                                                                                            echo "checked";
                                                                                                                        } ?>>
                                        Social/Relational
                                        <span class="form-check-sign">
                                            <span class="check"></span>
                                        </span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox" value="9" name="healthTwelve[]" <?php if (in_array(9, $twelveExpArr)) {
                                                                                                                            echo "checked";
                                                                                                                        } ?>>
                                        Cyber
                                        <span class="form-check-sign">
                                            <span class="check"></span>
                                        </span>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox" value="10" name="healthTwelve[]" <?php if (in_array(10, $twelveExpArr)) {
                                                                                                                                echo "checked";
                                                                                                                            } ?>>
                                        Sexual
                                        <span class="form-check-sign">
                                            <span class="check"></span>
                                        </span>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox" value="11" name="healthTwelve[]" <?php if (in_array(11, $twelveExpArr)) {
                                                                                                                                echo "checked";
                                                                                                                            } ?>>
                                        Economic
                                        <span class="form-check-sign">
                                            <span class="check"></span>
                                        </span>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox" value="12" name="healthTwelve[]" <?php if (in_array(12, $twelveExpArr)) {
                                                                                                                                echo "checked";
                                                                                                                            } ?>>
                                        Emotional
                                        <span class="form-check-sign">
                                            <span class="check"></span>
                                        </span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="survey-title">
                        <p>Check the concern/s problems that bother you at present: </P>
                    </div>

                    <?php

                    $botherYouArr = explode(",", $row['student_habit_multiple_concern']);

                    ?>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" name="botherYou[]" value="1" <?php if (in_array(1, $botherYouArr)) {
                                                                                                                        echo "checked";
                                                                                                                    } ?>>
                                    Academic
                                    <span class="form-check-sign">
                                        <span class="check"></span>
                                    </span>
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" name="botherYou[]" value="2" <?php if (in_array(2, $botherYouArr)) {
                                                                                                                        echo "checked";
                                                                                                                    } ?>>
                                    Personal (own thoughts and feelings)
                                    <span class="form-check-sign">
                                        <span class="check"></span>
                                    </span>
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" name="botherYou[]" value="3" <?php if (in_array(3, $botherYouArr)) {
                                                                                                                        echo "checked";
                                                                                                                    } ?>>
                                    Social (relationships with friends, classmates and teacher(s))
                                    <span class="form-check-sign">
                                        <span class="check"></span>
                                    </span>
                                </label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" name="botherYou[]" value="4" <?php if (in_array(4, $botherYouArr)) {
                                                                                                                        echo "checked";
                                                                                                                    } ?>>
                                    Future Goals/Career Plans (for Senior High School)
                                    <span class="form-check-sign">
                                        <span class="check"></span>
                                    </span>
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" name="botherYou[]" value="5" <?php if (in_array(5, $botherYouArr)) {
                                                                                                                        echo "checked";
                                                                                                                    } ?>>
                                    Family (relationship with parent(s), sibling(s), relative(s))
                                    <span class="form-check-sign">
                                        <span class="check"></span>
                                    </span>
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" name="botherYou[]" value="6" <?php if (in_array(6, $botherYouArr)) {
                                                                                                                        echo "checked";
                                                                                                                    } ?>>
                                    Housing
                                    <span class="form-check-sign">
                                        <span class="check"></span>
                                    </span>
                                </label>
                            </div>

                        </div>
                        <div class="col-md-4">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" name="botherYou[]" value="7" <?php if (in_array(7, $botherYouArr)) {
                                                                                                                        echo "checked";
                                                                                                                    } ?>>
                                    Financial
                                    <span class="form-check-sign">
                                        <span class="check"></span>
                                    </span>
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input othersRadioButton6" name="botherYou[]" type="checkbox" value="8" targetId='othersRadioButton6' <?php if (in_array(8, $botherYouArr)) {
                                                                                                                                                                        echo "checked";
                                                                                                                                                                    } ?>>
                                    Others
                                    <span class="form-check-sign">
                                        <span class="check"></span>
                                    </span>
                                </label>
                            </div>
                            <!-- <div class="form-group bmd-form-group" id="othersRadioButton6">
                                <label class="bmd-label-floating">Others </label>
                                <input type="text" name="student-elementry-school" name="botherYou[]" class="form-control" disabled="false">
                            </div> -->
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" name="botherYou[]" type="checkbox" value="9" <?php if (in_array(9, $botherYouArr)) {
                                                                                                                        echo "checked";
                                                                                                                    } ?>>
                                    None at present
                                    <span class="form-check-sign">
                                        <span class="check"></span>
                                    </span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-end">
            <button id="submit-edit-student-habits-form" class="btn btn-primary ">
                Submit
            </button>
        </div>
    </form>

<?php } ?>