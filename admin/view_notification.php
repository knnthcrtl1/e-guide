<?php include('header.php'); ?>
<?php

?>


<body>
  <div class="wrapper ">
    <?php
    include('sidebar.php');
    navigationList('notification');
    ?>
    <div class="main-panel">
      <!-- Navbar -->
      <?php

      include('navbar.php');
      $headerTitle = 'Notification';
      navbarContainer($headerTitle);

      // checkAuthPage(authPages($_SESSION['user_id'], "", $conn), "Notification");

      ?>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">

          <div class="row">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Simple Table</h4>
                  <p class="card-category"> Here is a subtitle for this table</p>
                </div>
                <div class="card-body">
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
                            Title
                          </th>
                          <th>
                            Message
                          </th>
                          <th>
                            Date
                          </th>
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
                                      $studentName = $row['student_id'] . ' - ' . $row['student_firstname'] . ' ' . $row['student_lastname'];
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
          <!-- your content here -->
        </div>
      </div>
      <?php include('footer.php'); ?>
      <script src="./custom-js/notification-script.js"></script>