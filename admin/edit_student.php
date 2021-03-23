<?php include('header.php'); ?>
<?php include('connection.php'); ?>

<body>
    <div class="wrapper ">
        <?php
        include('sidebar.php');
        navigationList('student');
        ?>
        <div class="main-panel">
            <!-- Navbar -->
            <?php
            include('navbar.php');
            $headerTitle = 'Student';
            navbarContainer($headerTitle);
            ?>
            <!-- End Navbar -->
            <div class="content">
                <div class="container-fluid">

                    <?php

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

                    ?>

                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="card">
                                <div class="card-header card-header-tabs card-header-primary">
                                    <div class="nav-tabs-navigation">
                                        <div class="nav-tabs-wrapper">
                                            <span class="nav-tabs-title">Edit Student:</span>
                                            <ul class="nav nav-tabs" data-tabs="tabs">
                                                <li class="nav-item">
                                                    <a class="nav-link active show" href="#profile" data-toggle="tab">
                                                        <!-- <i class="material-icons">bug_report</i>  -->
                                                        Student Info
                                                        <div class="ripple-container"></div>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#messages" data-toggle="tab">
                                                        <!-- <i class="material-icons">code</i> Website -->
                                                        Family
                                                        <!-- <div class="ripple-container"></div> -->
                                                        <div class="ripple-container"></div>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#settings" data-toggle="tab">
                                                        <i class="material-icons">cloud</i> Server
                                                        <div class="ripple-container"></div>
                                                        <div class="ripple-container"></div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="tab-content">
                                        <div class="tab-pane  active show" id="profile">
                                            <form id="edit-student-form" method="post">
                                                <input type="hidden" name="function-type" value="edit-student" />
                                                <input type="hidden" name="student-id" value="<?php echo $_GET['id'] ?>">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group bmd-form-group">
                                                            <label class="bmd-label-floating">Firstname *</label>
                                                            <input type="text" name="student-firstname" class="form-control" value="<?php echo $row['student_firstname'] ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group bmd-form-group">
                                                            <label class="bmd-label-floating">Lastname *</label>
                                                            <input name="student-lastname" class="form-control" value="<?php echo $row['student_lastname'] ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group bmd-form-group">
                                                            <label class="bmd-label-floating">Middlename *</label>
                                                            <input name="student-middlename" class="form-control" value="<?php echo $row['student_middlname'] ?>">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group bmd-form-group">
                                                            <label class="bmd-label-floating">Nickname</label>
                                                            <input name="student-nickname" class="form-control" value="<?php echo $row['student_nickname'] ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group bmd-form-group">
                                                            <label class="bmd-label-floating">Student No. *</label>
                                                            <input name="student-studid" class="form-control" value="<?php echo $row['student_stud_id'] ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group bmd-form-group">
                                                            <label class="bmd-label-floating">Strand and Section *</label>
                                                            <input name="student-strand-section" class="form-control" value="<?php echo $row['student_section_id'] ?>">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group bmd-form-group">
                                                            <label class="bmd-label-floating">Present Address *</label>
                                                            <input name="student-present-address" class="form-control" value="<?php echo $row['student_address'] ?>">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group bmd-form-group">
                                                            <label class="bmd-label-floating">Permanent Address *</label>
                                                            <input name="student-permanent-address" class="form-control" value="<?php echo $row['student_permanent_address'] ?>">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group bmd-form-group">
                                                            <label class="bmd-label-floating">Contact Number *</label>
                                                            <input type="number" name="student-contact-number" class="form-control" value="<?php echo $row['student_contact'] ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group bmd-form-group">
                                                            <label class="bmd-label-floating">UE Email Address</label>
                                                            <input type="email" name="student-ue-email-address" class="form-control" value="<?php echo $row['student_ue_email_address'] ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group bmd-form-group">
                                                            <label class="bmd-label-floating">Email Address *</label>
                                                            <input type="email" name="student-email-address" class="form-control" value="<?php echo $row['student_email'] ?>">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-group bmd-form-group">
                                                            <label class="bmd-label-floating">Age *</label>
                                                            <input type="number" name="student-age" class="form-control" value="<?php echo $row['student_age'] ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group bmd-form-group">
                                                            <label class="bmd-label-floating">Date of Birth *</label>
                                                            <input type="date" name="student-birthday" class="form-control" value="<?php echo $row['student_birthday'] ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <div class="form-group bmd-form-group">
                                                            <label class="bmd-label-floating">Place of birth *</label>
                                                            <input type="text" name="student-placeofbirth" class="form-control" value="<?php echo $row['student_place_of_birth'] ?>">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group bmd-form-group">
                                                            <label class="bmd-label-floating">Citizenship *</label>
                                                            <input type="text" name="student-citizenship" class="form-control" value="<?php echo $row['student_citizenship'] ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group bmd-form-group">
                                                            <label class="bmd-label-floating">Religion</label>
                                                            <input type="text" name="student-religion" class="form-control" value="<?php echo $row['student_religion'] ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group bmd-form-group">
                                                            <label class="bmd-label-floating">Civil Status</label>
                                                            <input type="text" name="student-civil-status" class="form-control" value="<?php echo $row['student_civil_status'] ?>">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group bmd-form-group">
                                                            <div class="form-group">
                                                                <select class="form-control " name="student-sex" value="<?php echo $row['student_sex'] ?>">
                                                                    <option value="">Gender</option>
                                                                    <option value="1" <?php echo $row['student_sex'] == 1 ? 'selected' : null ?>>Male</option>
                                                                    <option value="2" <?php echo $row['student_sex'] == 2 ? 'selected' : null ?>>Female</option>
                                                                    <option value="3" <?php echo $row['student_sex'] == 3 ? 'selected' : null ?>>Prefer not to say</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group bmd-form-group">
                                                            <div class="form-group">
                                                                <select class="form-control " name="student-gender">
                                                                    <option value="">Gender Identity</option>
                                                                    <option value="0" <?php echo $row['student_gender'] == 0 ? 'selected' : null ?>>Straight/Heterosexual</option>
                                                                    <option value="1" <?php echo $row['student_gender'] == 1 ? 'selected' : null ?>>Transgender </option>
                                                                    <option value="2" <?php echo $row['student_gender'] == 2 ? 'selected' : null ?>>Prefer not to say</option>
                                                                    <option value="3" <?php echo $row['student_gender'] == 3 ? 'selected' : null ?>>Lesbian</option>
                                                                    <option value="4" <?php echo $row['student_gender'] == 4 ? 'selected' : null ?>>Gay</option>
                                                                    <option value="5" <?php echo $row['student_gender'] == 5 ? 'selected' : null ?>>Bisexual</option>
                                                                    <option value="6" <?php echo $row['student_gender'] == 6 ? 'selected' : null ?>>Others</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group bmd-form-group">
                                                            <div class="form-group">
                                                                <select class="form-control " name="student-living-with">
                                                                    <option value="">Living With</option>
                                                                    <option value="1" <?php echo $row['student_living_with'] == 1 ? 'selected' : null ?>>Parents</option>
                                                                    <option value="2" <?php echo $row['student_living_with'] == 2 ? 'selected' : null ?>>Siblings only</option>
                                                                    <option value="3" <?php echo $row['student_living_with'] == 3 ? 'selected' : null ?>>Relatives</option>
                                                                    <option value="4" <?php echo $row['student_living_with'] == 4 ? 'selected' : null ?>>Alone, in a rented space/dormitory</option>
                                                                    <option value="5" <?php echo $row['student_living_with'] == 5 ? 'selected' : null ?>>Alone, as a bed spacer </option>
                                                                    <option value="6" <?php echo $row['student_living_with'] == 6 ? 'selected' : null ?>>Others</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group bmd-form-group">
                                                            <div class="form-group">
                                                                <select class="form-control " name="student-type">
                                                                    <option value="">Student Type *</option>
                                                                    <option value="0" <?php echo $row['student_type'] == 0 ? 'selected' : null ?>>Grade School</option>
                                                                    <option value="1" <?php echo $row['student_type'] == 1 ? 'selected' : null ?>>High School </option>
                                                                    <option value="2" <?php echo $row['student_type'] == 2 ? 'selected' : null ?>>Senior High</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group bmd-form-group">
                                                            <div class="form-group">
                                                                <select class="form-control " name="student-living-condition">
                                                                    <option value="">Present Living Condition</option>
                                                                    <option value="0" <?php echo $row['student_present_living_condition'] == 0 ? 'selected' : null ?>>Lower Class</option>
                                                                    <option value="1" <?php echo $row['student_present_living_condition'] == 1 ? 'selected' : null ?>>Middle Class </option>
                                                                    <option value="2" <?php echo $row['student_present_living_condition'] == 2 ? 'selected' : null ?>>Upper Class</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-flex justify-content-end">
                                                    <button id="submit-edit-student-form" class="btn btn-primary ">
                                                        Submit
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="tab-pane" id="messages">
                                            <?php
                                            $sql = "SELECT * FROM tbl_students_family_guardian WHERE students_family_guardian_student_id = '{$_GET['id']}'";
                                            $result = mysqli_query($conn, $sql);
                                            $row = mysqli_fetch_array($result);
                                            ?>
                                            <form id="edit-student-family-form" method="post">
                                                <input type="hidden" name="function-type" value="edit-student-family" />
                                                <input type="hidden" name="student-id" value="<?php echo $_GET['id'] ?>">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group bmd-form-group">
                                                            <label class="bmd-label-floating">Father Firstname </label>
                                                            <input type="text" name="student-father-name" class="form-control" value="<?php echo $row['students_family_guardian_father_name'] ?>">
                                                        </div>
                                                        <div class="form-group bmd-form-group">
                                                            <label class="bmd-label-floating">Father Contact # </label>
                                                            <input type="text" name="student-father-contact" class="form-control" value="<?php echo $row['students_family_guardian_father_contact'] ?>">
                                                        </div>
                                                        <div class="form-group bmd-form-group">
                                                            <label class="bmd-label-floating">Father Email Address</label>
                                                            <input type="text" name="student-father-email" class="form-control" value="<?php echo $row['students_family_guardian_father_email'] ?>">
                                                        </div>
                                                        <div class="form-group bmd-form-group">
                                                            <label class="bmd-label-floating">Father Occupation </label>
                                                            <input type="text" name="student-father-occupation" class="form-control" value="<?php echo $row['students_family_guardian_father_occupation'] ?>">
                                                        </div>
                                                        <div class="form-group bmd-form-group">
                                                            <label class="bmd-label-floating">Father Work Address</label>
                                                            <input type="text" name="student-father-work-address" class="form-control" value="<?php echo $row['students_family_guardian_father_work_address'] ?>">
                                                        </div>
                                                        <div class="form-group bmd-form-group">
                                                            <label class="bmd-label-floating">Father Work Contact #</label>
                                                            <input type="text" name="student-father-work-contact" class="form-control" value="<?php echo $row['students_family_guardian_father_work_contact'] ?>">
                                                        </div>
                                                        <div class="form-group bmd-form-group">
                                                            <div class="form-group">
                                                            <select class="form-control " name="student-father-is-ofw">
                                                                    <option value="">Is your father an ofw?</option>
                                                                    <option value="0" <?php echo ($row['students_family_guardian_father_is_ofw'] == 0) ? 'selected' : null ?>>Yes</option>
                                                                    <option value="1" <?php echo ($row['students_family_guardian_father_is_ofw'] == 1) ? 'selected' : null ?>>No</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group bmd-form-group">
                                                            <label class="bmd-label-floating">Mother Firstname </label>
                                                            <input type="text" name="student-mother-name" class="form-control" value="<?php echo $row['students_family_guardian_mother_name'] ?>">
                                                        </div>
                                                        <div class="form-group bmd-form-group">
                                                            <label class="bmd-label-floating">Mother Contact # </label>
                                                            <input type="text" name="student-mother-contact" class="form-control" value="<?php echo $row['students_family_guardian_mother_contact'] ?>">
                                                        </div>
                                                        <div class="form-group bmd-form-group">
                                                            <label class="bmd-label-floating">Mother Email Address</label>
                                                            <input type="text" name="student-mother-email" class="form-control" value="<?php echo $row['students_family_guardian_mother_email'] ?>">
                                                        </div>
                                                        <div class="form-group bmd-form-group">
                                                            <label class="bmd-label-floating">Mother Occupation </label>
                                                            <input type="text" name="student-mother-occupation" class="form-control" value="<?php echo $row['students_family_guardian_mother_occupation'] ?>">
                                                        </div>
                                                        <div class="form-group bmd-form-group">
                                                            <label class="bmd-label-floating">Mother Work Address</label>
                                                            <input type="text" name="student-mother-work-address" class="form-control" value="<?php echo $row['students_family_guardian_mother_work_address'] ?>">
                                                        </div>
                                                        <div class="form-group bmd-form-group">
                                                            <label class="bmd-label-floating">Mother Work Contact #</label>
                                                            <input type="text" name="student-mother-work-contact" class="form-control" value="<?php echo $row['students_family_guardian_mother_work_contact'] ?>">
                                                        </div>
                                                        <div class="form-group bmd-form-group">
                                                            <div class="form-group">
                                                                <select class="form-control " name="student-mother-is-ofw">
                                                                    <option value="">Is your mother an ofw?</option>
                                                                    <option value="0" <?php echo ($row['students_family_guardian_mother_is_ofw'] == 0) ? 'selected' : null ?>>Yes</option>
                                                                    <option value="1" <?php echo ($row['students_family_guardian_mother_is_ofw'] == 1) ? 'selected' : null ?>>No</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-flex justify-content-end">
                                                    <button id="submit-edit-student-family-form" class="btn btn-primary ">
                                                        Submit
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="tab-pane" id="settings">
                                            aw
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->
                    <!-- your content here -->
                </div>
            </div>
            <?php include('footer.php'); ?>
            <script src="./custom-js/student-script.js"></script>