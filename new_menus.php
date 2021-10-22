<?php


function newMenus()
{
    include('./admin/connection.php');
    $sql = "SELECT * FROM tbl_students WHERE student_id = '{$_SESSION['student_user_id']}'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);

?>

    <div class="row">
        <div class="logo__user__container">
            <img src="<?php echo $row['student_image'] ?>" />
        </div>
    </div>
    <hr />
    <div class="row justify-content-center">
        <form action="upload.php" method="post" enctype="multipart/form-data">
            Select photo:
            <input type="file" name="fileToUpload" id="fileToUpload">
            <input type="submit" value="Upload Image" class="btn-info" name="submit">
        </form>
    </div>
    <div class="row">
        <div class="col-md-4 ">
            <a href="./view_student.php" class="dashboard__fillup__container--link">
                <div class="dashboard__fillup__container">
                    FILL-UP FORM
                </div>
            </a>
        </div>
        <div class="col-md-4">
            <a href="./about.php" class="dashboard__fillup__container--link">
                <div class="dashboard__fillup__container">
                    About GCCSO
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
    </div>
    <div class="row">

        <div class="col-md-6">
            <a href="./change_password.php" class="dashboard__fillup__container--link">
                <div class="dashboard__fillup__container">
                    CHANGE PASSWORD
                </div>
            </a>
        </div>
        <div class="col-md-6">
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