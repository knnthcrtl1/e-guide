<?php include('header.php'); ?>

<body class="student__background__image__container">
    <div class="wrapper ">

        <div class="content">
            <div class="container">
                <?php include('./new_menus.php');
                newMenus();
                ?>

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
                                        <div class="col-sm-4 mb-4 mb-sm-0">
                                            <input type="hidden" name="password-user-id" id="equipmentRequired3" value="<?php echo $_SESSION['student_user_id']; ?>">
                                            <div class="form-group bmd-form-group">
                                                <label class="bmd-label-floating">Enter old password *</label>
                                                <input type="password" class="form-control form-control-user" name="oldPassword" id="equipmentRequired3">
                                            </div>
                                        </div>
                                        <div class="col-sm-4 mb-4 mb-sm-0">
                                            <div class="form-group bmd-form-group">
                                                <label class="bmd-label-floating">Enter new password *</label>
                                                <input type="password" class="form-control form-control-user" name="password" id="equipmentRequired1">
                                            </div>
                                        </div>
                                        <div class="col-sm-4 mb-4 mb-sm-0">
                                            <div class="form-group bmd-form-group">
                                                <label class="bmd-label-floating">Re type new password *</label>
                                                <input type="password" class="form-control form-control-user" name="password-retype-password" id="equipmentRequired2">
                                            </div>
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

    <script>
        $(document).on("click", "#submit-change-password-form", function(e) {

            e.preventDefault();
            var changePassFormData = $("#change-password-form").serialize();
            var equipmentRequired1 = $("#equipmentRequired1").val();
            var equipmentRequired2 = $("#equipmentRequired2").val();
            var id = $('#equipmentRequired3').val();

            if (equipmentRequired1.length <= 6 || equipmentRequired2.length <= 6) {
                // checks the password value length
                alert('Password must be greater than 6 characters');
                return false;
            }

            if (equipmentRequired1.length >= 12 || equipmentRequired2.length >= 12) { // checks the password value length
                alert('Password must be less than 12 characters');
                return false;
            }

            if (equipmentRequired1 == "" || equipmentRequired2 == "") {
                alert("Fill all the required fields!");
                return false;
            }

            if (equipmentRequired1 !== equipmentRequired2) {
                alert('Password and retype password are not the same');
                return false;
            }

            jQuery.ajax({
                method: "POST",
                url: "./functions/function-user.php",
                data: changePassFormData + `&ajax=true&id=${id}`,
                success: function(data) {
                    if (data == 1) {
                        alert('invalid old password');
                        return false;
                    }
                    if (data == 2) {
                        alert('new password must not be the same with previous password');
                        return false;
                    }
                    location.reload()
                    alert("Password Updated Successfully!");
                }
            });


        });
    </script>