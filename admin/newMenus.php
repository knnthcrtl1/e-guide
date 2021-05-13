<?php



function newMenus()
{

?>
    <div class="row">
        <div class="col-md-4 ">
            <a href="./view_student.php?studentType=0" class="dashboard__fillup__container--link">
                <div class="dashboard__fillup__container">
                    ELEMENTARY
                </div>
            </a>
        </div>
        <div class="col-md-4">
            <a href="./view_student.php?studentType=1" class="dashboard__fillup__container--link">
                <div class="dashboard__fillup__container">
                    JUNIOR HIGH SCHOOL
                </div>
            </a>
        </div>
        <div class="col-md-4">
            <a href="./view_student.php?studentType=2" class="dashboard__fillup__container--link">
                <div class="dashboard__fillup__container">
                    SENIOR HIGH SCHOOL
                </div>
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <a href="#" class="dashboard__fillup__container--link">
                <div class="dashboard__fillup__container">
                    REQUEST DATA
                </div>
            </a>
        </div>
        <div class="col-md-4">
            <a href="./view_notification.php" class="dashboard__fillup__container--link">
                <div class="dashboard__fillup__container">
                    NOTIFICATION
                </div>
            </a>
        </div>
        <div class="col-md-4">
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