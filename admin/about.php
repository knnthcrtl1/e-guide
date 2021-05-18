<?php include('header.php'); ?>
<?php include('connection.php'); ?>

<?php 
    function BuildCardHeader($title) {
?>
    <style type="text/css">
        .survey-results .survey-value {
            text-align: right;
        }
    </style>
    <div class="card">
        <div class="card-header card-header-primary">
            <h4 class="card-title "><?=$title?></h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table">
                    <thead class=" text-primary">
                        <tr>
                            <th>
                                Answer
                            </th>
                            <th style="text-align: right;">
                                Elementary
                            </th>
                            <th style="text-align: right;">
                                Junior High School
                            </th>
                            <th style="text-align: right;">
                                Senior Highschool
                            </th>
                            <th style="text-align: right;">
                                Total
                            </th>
                        </tr>
                    </thead>
                    <tbody>
<?php
    }

    function GetTotalCount($conn, $column, $student_type)  {
        $sql = " SELECT count(T1." . $column . ") as total_count";
        $sql .= " FROM tbl_student_habit t1 ";
        $sql .= " JOIN tbl_students t2 ";
        $sql .= " ON t1.student_habit_student_id = t2.student_id ";
        $sql .= " WHERE T2.student_type = '" . $student_type . "'";

        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result);
        return $row['total_count'];
    }

    function GetIndividualCount($conn, $column, $student_type, $database_value) {
        $sql = " SELECT count(T1." . $column . ") as individual_count";
        $sql .= " FROM tbl_student_habit t1 ";
        $sql .= " JOIN tbl_students t2 ";
        $sql .= " ON t1.student_habit_student_id = t2.student_id ";
        $sql .= " WHERE T2.student_type = '" . $student_type . "'";
        $sql .= " AND T1." . $column . " = '" . $database_value . "'";

        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result);
        return $row['individual_count'];
    }

    function BuildCardAnswer($conn, $answer, $column, $database_value) {
        $total0 = GetTotalCount($conn, $column, 0);
        $total1 = GetTotalCount($conn, $column, 1);
        $total2 = GetTotalCount($conn, $column, 2);

        $count0 = GetIndividualCount($conn, $column, 0, $database_value);
        $count1 = GetIndividualCount($conn, $column, 1, $database_value);
        $count2 = GetIndividualCount($conn, $column, 2, $database_value);

        $percentage0 = number_format((($count0 / $total0) * 100), 2) . "%";
        $percentage1 = number_format((($count1 / $total1) * 100), 2) . "%";
        $percentage2 = number_format((($count2 / $total2) * 100), 2) . "%";
?>
        <tr class="survey-results">
            <td><?=$answer?></td>
            <td class="survey-value"><?=$count0?> out of <?=$total0?> = <?=$percentage0?></td>
            <td class="survey-value"><?=$count1?> out of <?=$total1?> = <?=$percentage1?></td>
            <td class="survey-value"><?=$count2?> out of <?=$total2?> = <?=$percentage2?></td>
            <td class="survey-value"><?=($count0 + $count1 + $count2)?></td>
        </tr>
<?php
    }

    function BuildCardFooter() {
?>
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
<?php
    }
?>

<body>
    <div class="wrapper ">
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="logo__user__container">
                        <img src="./assets/img/logo.png" />
                    </div>
                </div>
                <hr />
                <?php include('./newMenus.php');
                newMenus();
                ?>
                <div class="row">
                    <div class="col-md-12">
                        <?php 
                            // ------------------
                            $currentColumn = "student_habit_usually_study";
                            // ------------------

                            echo BuildCardHeader("Q1 - Is your child/ward studying alone or with your assistance?");

                            // ------------------
                            echo BuildCardAnswer($conn, "Yes, s/he is often studying alone", $currentColumn, 1);
                            echo BuildCardAnswer($conn, "No, s/he is often studying with assistance", $currentColumn, 3);
                            echo BuildCardAnswer($conn, "Others", $currentColumn, 6);
                            echo BuildCardAnswer($conn, "Did not answer", $currentColumn, "");
                            // ------------------
                        ?>
                        <?=BuildCardFooter()?>

                        <?php 
                            // ------------------
                            $currentColumn = "student_habit_spend_studying";
                            // ------------------

                            echo BuildCardHeader("Q2 - How often does s/he study?");

                            // ------------------
                            echo BuildCardAnswer($conn, "Everyday", $currentColumn, 1);
                            echo BuildCardAnswer($conn, "Twice a week", $currentColumn, 2);
                            echo BuildCardAnswer($conn, "Once a week", $currentColumn, 3);
                            echo BuildCardAnswer($conn, "When there is a quiz", $currentColumn, 4);
                            echo BuildCardAnswer($conn, "During examination week", $currentColumn, 5);
                            echo BuildCardAnswer($conn, "When he/she feels like studying", $currentColumn, 6);
                            echo BuildCardAnswer($conn, "Did not answer", $currentColumn, "");
                            // ------------------
                        ?>
                        <?=BuildCardFooter()?>

                        <?php 
                            // ------------------
                            $currentColumn = "student_habit_child_usual_study";
                            // ------------------

                            echo BuildCardHeader("Q3 - How many hours is your child usually studying?");

                            // ------------------
                            echo BuildCardAnswer($conn, "1 hour a day", $currentColumn, 1);
                            echo BuildCardAnswer($conn, "More than an hour a day", $currentColumn, 2);
                            echo BuildCardAnswer($conn, "Less than an hour a day", $currentColumn, 3);
                            echo BuildCardAnswer($conn, "1 hour a week", $currentColumn, 4);
                            echo BuildCardAnswer($conn, "More than an hour a week", $currentColumn, 5);
                            echo BuildCardAnswer($conn, "Less than an hour a week", $currentColumn, 6);
                            echo BuildCardAnswer($conn, "Did not answer", $currentColumn, "");
                            // ------------------
                        ?>
                        <?=BuildCardFooter()?>

                        <?php 
                            // ------------------
                            $currentColumn = "student_habit_usually_ask";
                            // ------------------

                            echo BuildCardHeader("Q4 - When you have question/s about your lesson, to whom do you usually ask?");

                            // ------------------
                            echo BuildCardAnswer($conn, "Teacher", $currentColumn, 1);
                            echo BuildCardAnswer($conn, "Classmate/s", $currentColumn, 2);
                            echo BuildCardAnswer($conn, "Friend", $currentColumn, 3);
                            echo BuildCardAnswer($conn, "Mother", $currentColumn, 4);
                            echo BuildCardAnswer($conn, "Brother", $currentColumn, 5);
                            echo BuildCardAnswer($conn, "Sister", $currentColumn, 6);
                            echo BuildCardAnswer($conn, "Did not answer", $currentColumn, "");
                            // ------------------
                        ?>
                        <?=BuildCardFooter()?>

                        <?php 
                            // ------------------
                            $currentColumn = "student_habit_child_guardian_assist";
                            // ------------------

                            echo BuildCardHeader("Q5 - As the student’s parent/guardian, how often do you assist your child/ward to study?");

                            // ------------------
                            echo BuildCardAnswer($conn, "Everyday", $currentColumn, 1);
                            echo BuildCardAnswer($conn, "Twice a week", $currentColumn, 2);
                            echo BuildCardAnswer($conn, "Once a week", $currentColumn, 3);
                            echo BuildCardAnswer($conn, "When there is a quiz", $currentColumn, 4);
                            echo BuildCardAnswer($conn, "During examination week", $currentColumn, 5);
                            echo BuildCardAnswer($conn, "When he/she feel like studying", $currentColumn, 6);
                            echo BuildCardAnswer($conn, "Did not answer", $currentColumn, "");
                            // ------------------
                        ?>
                        <?=BuildCardFooter()?>

                        <?php 
                            // ------------------
                            $currentColumn = "student_habit_usually_study";
                            // ------------------

                            echo BuildCardHeader("Q6 - When do you usually study?");

                            // ------------------
                            echo BuildCardAnswer($conn, "Everyday", $currentColumn, 1);
                            echo BuildCardAnswer($conn, "Twice a week", $currentColumn, 2);
                            echo BuildCardAnswer($conn, "When there is a quiz", $currentColumn, 3);
                            echo BuildCardAnswer($conn, "During examination week", $currentColumn, 4);
                            echo BuildCardAnswer($conn, "When I feel like studying", $currentColumn, 5);
                            echo BuildCardAnswer($conn, "Others", $currentColumn, 6);
                            echo BuildCardAnswer($conn, "Did not answer", $currentColumn, "");
                            // ------------------
                        ?>
                        <?=BuildCardFooter()?>

                        <?php 
                            // ------------------
                            $currentColumn = "student_habit_spend_studying";
                            // ------------------

                            echo BuildCardHeader("Q7 - How many hours do you usually spend studying?");

                            // ------------------
                            echo BuildCardAnswer($conn, "1 hour a day", $currentColumn, 1);
                            echo BuildCardAnswer($conn, "More than an hour a day", $currentColumn, 2);
                            echo BuildCardAnswer($conn, "Less than an hour a day", $currentColumn, 3);
                            echo BuildCardAnswer($conn, "1 hour a week", $currentColumn, 4);
                            echo BuildCardAnswer($conn, "More than an hour a week", $currentColumn, 5);
                            echo BuildCardAnswer($conn, "Less than an hour a week", $currentColumn, 6);
                            echo BuildCardAnswer($conn, "Did not answer", $currentColumn, "");
                            // ------------------
                        ?>
                        <?=BuildCardFooter()?>
                        
                        <?php 
                            // ------------------
                            $currentColumn = "student_habit_usually_ask";
                            // ------------------

                            echo BuildCardHeader("Q8 - When you have question/s about your lesson, to whom do you usually ask?");

                            // ------------------
                            echo BuildCardAnswer($conn, "Teacher", $currentColumn, 1);
                            echo BuildCardAnswer($conn, "Classmate/s", $currentColumn, 2);
                            echo BuildCardAnswer($conn, "Friend", $currentColumn, 3);
                            echo BuildCardAnswer($conn, "Mother", $currentColumn, 4);
                            echo BuildCardAnswer($conn, "Brother", $currentColumn, 5);
                            echo BuildCardAnswer($conn, "Sister", $currentColumn, 6);
                            echo BuildCardAnswer($conn, "Boyfriend / Girlfriend", $currentColumn, 7);
                            echo BuildCardAnswer($conn, "Others", $currentColumn, 8);
                            echo BuildCardAnswer($conn, "Did not answer", $currentColumn, "");
                            // ------------------
                        ?>
                        <?=BuildCardFooter()?>

                        <?php 
                            // ------------------
                            $currentColumn = "student_habit_area_home";
                            // ------------------

                            echo BuildCardHeader("Q9 - Do you have a study area at home that is conducive for online classes?");

                            // ------------------
                            echo BuildCardAnswer($conn, "Yes", $currentColumn, 1);
                            echo BuildCardAnswer($conn, "No", $currentColumn, 2);
                            echo BuildCardAnswer($conn, "Did not answer", $currentColumn, "");
                            // ------------------
                        ?>
                        <?=BuildCardFooter()?>

                        <?php 
                            // ------------------
                            $currentColumn = "student_habit_internet";
                            // ------------------

                            echo BuildCardHeader("Q10 - Kindly describe the usual quality of your Internet Connection");

                            // ------------------
                            echo BuildCardAnswer($conn, "Poor/Usually unstable", $currentColumn, 1);
                            echo BuildCardAnswer($conn, "Good/Fairly Stable", $currentColumn, 2);
                            echo BuildCardAnswer($conn, "Excellent/Usually stable", $currentColumn, 3);
                            echo BuildCardAnswer($conn, "Did not answer", $currentColumn, "");
                            // ------------------
                        ?>
                        <?=BuildCardFooter()?>

                        <?php 
                            // ------------------
                            $currentColumn = "student_habit_student_device";
                            // ------------------

                            echo BuildCardHeader("Q11 - Kindly identify the device(s) that you can use for your online classes");

                            // ------------------
                            echo BuildCardAnswer($conn, "Mobile phone", $currentColumn, 1);
                            echo BuildCardAnswer($conn, "Tablet", $currentColumn, 2);
                            echo BuildCardAnswer($conn, "Laptop", $currentColumn, 3);
                            echo BuildCardAnswer($conn, "Desktop", $currentColumn, 4);
                            echo BuildCardAnswer($conn, "Others", $currentColumn, 5);
                            echo BuildCardAnswer($conn, "Did not answer", $currentColumn, "");
                            // ------------------
                        ?>
                        <?=BuildCardFooter()?>

                        <?php 
                            // ------------------
                            $currentColumn = "student_habit_general_health";
                            // ------------------

                            echo BuildCardHeader("Q12 - What is the condition of your child’s general health?");

                            // ------------------
                            echo BuildCardAnswer($conn, "Excellent", $currentColumn, 1);
                            echo BuildCardAnswer($conn, "Good", $currentColumn, 2);
                            echo BuildCardAnswer($conn, "Fair", $currentColumn, 3);
                            echo BuildCardAnswer($conn, "Poor", $currentColumn, 4);
                            echo BuildCardAnswer($conn, "Did not answer", $currentColumn, "");
                            // ------------------
                        ?>
                        <?=BuildCardFooter()?>

                        <?php 
                            // ------------------
                            $currentColumn = "student_habit_physical_illness";
                            // ------------------

                            echo BuildCardHeader("Q13 - Does he/she have any serious physical illness?");

                            // ------------------
                            echo BuildCardAnswer($conn, "Yes", $currentColumn, 1);
                            echo BuildCardAnswer($conn, "No", $currentColumn, 2);
                            echo BuildCardAnswer($conn, "Others", $currentColumn, 3);
                            echo BuildCardAnswer($conn, "Did not answer", $currentColumn, "");
                            // ------------------
                        ?>
                        <?=BuildCardFooter()?>

                        <?php 
                            // ------------------
                            $currentColumn = "student_habit_health_condition";
                            // ------------------

                            echo BuildCardHeader("Q14 - Have you been previously diagnosed with any mental health condition?");

                            // ------------------
                            echo BuildCardAnswer($conn, "Yes", $currentColumn, 1);
                            echo BuildCardAnswer($conn, "No", $currentColumn, 2);
                            echo BuildCardAnswer($conn, "Others", $currentColumn, 3);
                            echo BuildCardAnswer($conn, "Did not answer", $currentColumn, "");
                            // ------------------
                        ?>
                        <?=BuildCardFooter()?>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include('footer.php'); ?>