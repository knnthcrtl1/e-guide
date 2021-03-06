<?php include('./header.php'); ?>
<?php include('./admin/connection.php'); ?>

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
                            Title
                          </th>
                          <th>
                            Message
                          </th>
                          <th>
                            Date
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
    <script src="./js/notification-script.js"></script>