<?php



function newMenus()
{


    // Check if file already exists

?>

    <div class="row">
        <div class="col-md-3 ">
            <a href="./view_dashboard.php" class="dashboard__fillup__container--link">
                <div class="dashboard__fillup__container">
                    HOME
                </div>
            </a>
        </div>
        <div class="col-md-3 ">
            <a href="./view_student.php?studentType=0" class="dashboard__fillup__container--link">
                <div class="dashboard__fillup__container">
                    ELEMENTARY
                </div>
            </a>
        </div>
        <div class="col-md-3">
            <a href="./view_student.php?studentType=1" class="dashboard__fillup__container--link">
                <div class="dashboard__fillup__container">
                    JUNIOR HIGH SCHOOL
                </div>
            </a>
        </div>
        <div class="col-md-3">
            <a href="./view_student.php?studentType=2" class="dashboard__fillup__container--link">
                <div class="dashboard__fillup__container">
                    SENIOR HIGH SCHOOL
                </div>
            </a>
        </div>
        <div class="col-md-3">
            <a href="./view_student.php?studentType=3" class="dashboard__fillup__container--link">
                <div class="dashboard__fillup__container">
                    COLLEGE
                </div>
            </a>
        </div>
        <div class="col-md-3">
            <a href="./reports.php" class="dashboard__fillup__container--link">
                <div class="dashboard__fillup__container">
                    REPORTS
                </div>
            </a>
        </div>
        <div class="col-md-3">
            <a href="./view_audit_trail.php" class="dashboard__fillup__container--link">
                <div class="dashboard__fillup__container">
                    AUDIT TRAIL
                </div>
            </a>
        </div>
        <div class="col-md-3">
            <a href="./view_notification.php" class="dashboard__fillup__container--link">
                <div class="dashboard__fillup__container">
                    NOTIFICATION
                </div>
            </a>
        </div>
        <div class="col-md-3">
            <a href="./change_password.php" class="dashboard__fillup__container--link">
                <div class="dashboard__fillup__container">
                    CHANGE PASSWORD
                </div>
            </a>
        </div>
        <div class="col-md-3">
            <a href="./logout.php" class="dashboard__fillup__container--link">
                <div class="dashboard__fillup__container">
                    LOGOUT
                </div>
            </a>
        </div>
    </div>
<?php
}

?>