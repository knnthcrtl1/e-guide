<?php include('header.php'); ?>

<body>
    <div class="wrapper ">
        <?php
        include('sidebar.php');
        navigationList(null);
        ?>
        <div class="main-panel">
            <!-- Navbar -->
            <?php
            include('navbar.php');
            $headerTitle = 'Change Password';
            navbarContainer($headerTitle);
            ?>
            <!-- End Navbar -->
            <div class="content">
                <div class="container-fluid">
                    <!-- your content here -->

                    <div class="row">

                        <div class="col-lg-12">

                            <!-- Basic Card Example -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Change Password</h6>
                                </div>
                                <div class="card-body">
                                    <form id="change-password-form" method="post">
                                        <input type="hidden" name="function-type" value="change-password">
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <input type="hidden" name="password-user-id" id="equipmentRequired3" value="<?php echo $_SESSION['user_id']; ?>">
                                                <input type="password" class="form-control form-control-user" name="password" id="equipmentRequired1" placeholder="Enter new password*">
                                            </div>
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <input type="password" class="form-control form-control-user" name="password-retype-password" id="equipmentRequired2" placeholder="Re type new password">
                                            </div>
                                        </div>
                                        <div class="form-group row d-flex justify-content-center">
                                            <div class="col-lg-3">
                                                <button id="submit-change-password-form" class="btn btn-primary btn-user btn-block">
                                                    Submit
                                                </button>
                                            </div>
                                        </div>

                                        <hr>
                                    </form>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>
            </div>
        </div>
        <?php include('footer.php'); ?>