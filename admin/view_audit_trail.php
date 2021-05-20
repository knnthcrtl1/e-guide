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
                <h4 class="card-title ">Audit Trail Table</h4>
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
                          Student ID
                        </th>
                        <th>
                          Student Name
                        </th>
                        <th>
                          Action
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
      </div>
    </div>
    <?php include('footer.php'); ?>
    <script src="./custom-js/auditTrail-script.js"></script>