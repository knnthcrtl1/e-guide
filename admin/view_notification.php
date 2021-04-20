<?php include('header.php'); ?>
<?php include('./connection.php'); ?>
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
      ?>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">

          <div class="row">
            <div class="col-lg-12 col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Add Student</h4>
                  <p class="card-category">Complete student profile</p>
                </div>
                <div class="card-body">
                  <div class="tab-content">
                    <div class="tab-pane active" id="pi">
                      <form id="add-student-notification-form" method="post">
                        <input type="hidden" name="function-type" value="add-student-notification" />
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group bmd-form-group">
                              <div class="form-group">
                                <select class="form-control " name="student-sex">
                                  <option value="">Student Name</option>
                                  <?php
                                    $sql = "SELECT * FROM tbl_students";
                                    $result = mysqli_query($conn, $sql);
                                    $row = mysqli_fetch_array($result);
                                  ?>
                                  <option value="<?php echo $row['student_id']; ?>"><?php echo $row['student_id'] . '-' . $row['student_firstname'] . ' ' . $row['student_lastname'] ?></option>
                                </select>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group bmd-form-group">
                              <label class="bmd-label-floating">Title</label>
                              <input type="text" name="student-elementry-school" class="form-control">
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="form-group bmd-form-group">
                              <label class="bmd-label-floating">Message</label>
                              <input name="student-vocational" class="form-control">
                            </div>
                          </div>
                        </div>
                        <div class="d-flex justify-content-end">
                          <button id="submit-student-form" class="btn btn-primary ">
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

            <div class="col-md-12">
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

          </div>
          <!-- your content here -->
        </div>
      </div>
      <?php include('footer.php'); ?>
      <script src="./custom-js/notification-script.js"></script>