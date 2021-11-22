<?php include('header.php'); ?>
<?php
include('connection.php')
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
          <div class="col-lg-12">
            <div class="card">
              <div class="card-header card-header-primary">
                <h4 class="card-title ">Notification Table</h4>
                <!-- <p class="card-category"> Here is a subtitle for this table</p> -->
              </div>
              <div class="card-body">
                <form method="post" action="./export_notification.php">
                  <input type="submit" name="export_excel" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" value="Export to Excel" />
                </form>
                <div class="table-responsive" id="notificationTable">
                  <table class="table" id="studentNotificationTable">
                    <thead class="text-primary">
                      <tr>
                        <th>
                          ID
                        </th>
                        <th>
                          Student Name
                        </th>
                        <th>
                          Student ID
                        </th>
                        <th>
                          Title
                        </th>
                        <th>
                          Message
                        </th>
                        <th>
                          Date
                        </th>
                        <!-- <th>
                          Sent by
                        </th> -->
                        <th>
                          Action
                        </th>
                      </tr>
                    </thead>
                    <tbody>

                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-12">
            <div class="card">
              <div class="card-header card-header-primary">
                <h4 class="card-title">Send Notification</h4>
                <p class="card-category">Complete notification</p>
              </div>
              <div class="card-body">
                <div class="tab-content">
                  <div class="tab-pane active" id="pi">
                    <form id="add-student-notification-form" method="POST">
                      <input type="hidden" name="function-type" value="add-student-notification" />
                      <input type="hidden" name="user-id" value="<?php echo $_SESSION['user']; ?>">
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group bmd-form-group">
                            <div class="form-group">
                              <select class="form-control " name="notification-student-id" required>
                                <option value="">Student Name</option>
                                <?php
                                $sql = "SELECT * FROM tbl_students";
                                $result = mysqli_query($conn, $sql);
                                if (mysqli_num_rows($result) != 0) {
                                  while ($row = mysqli_fetch_assoc($result)) {
                                    $studentName = $row['student_firstname'] . ' ' . $row['student_lastname'];
                                ?>
                                    <option value="<?php echo $row['student_id']; ?>"><?php echo $studentName; ?></option>
                                <?php }
                                }
                                ?>
                              </select>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group bmd-form-group">
                            <label class="bmd-label-floating">Title</label>
                            <input type="text" name="notification-title" class="form-control" required>
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-group bmd-form-group">
                            <label class="bmd-label-floating">Message</label>
                            <input name="notification-message" class="form-control" required>
                          </div>
                        </div>
                      </div>
                      <div class="d-flex justify-content-end">
                        <button class="btn btn-primary ">
                          Submit
                        </button>
                      </div>
                  </div>
                  </form>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
    <?php include('footer.php'); ?>
    <script src="./custom-js/notification-script.js"></script>