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
                                <div class="card-header card-header-primary">
                                    <h4 class="card-title">Edit Student</h4>
                                    <p class="card-category">Edit student profile</p>
                                </div>

                                <div class="card-body">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="pi">
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
                                        </div>
                                        </form>

                                        <!-- <div class="tab-pane" id="cd">
                                            2
                                        </div>
                                        <div class="tab-pane" id="ref">
                                            3
                                        </div> -->
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