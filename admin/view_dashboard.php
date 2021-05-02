<?php include('header.php'); ?>

<body class="dashboard__content">
  <div class="wrapper ">
    <?php
    include('sidebar.php');
    navigationList('dashboard');
    ?>
    <div class="main-panel">
      <!-- Navbar -->
      <?php
      include('navbar.php');
      $headerTitle = 'Dashboard';
      navbarContainer($headerTitle);
      ?>
      <!-- End Navbar -->
      <div class="content " >
        <div class="container-fluid">
          <!-- your content here -->

          <div class="row">
            <div class="col-md-6">
              <div class="mission_container">
                <h3>THE UE MISSION STATEMENT</h3>
                <p>
                  Imploring the aid of Divine Providence, the University of the East dedicates itself to the service of youth, country and God, and declares adherence to academic freedom, progressive instruction, creative scholarship, goodwill among nations and constructive educational leadership.
                </p>
                <p>
                  Inspired and sustained by a deep sense of dedication and a compelling yearning for relevance, the University of the East hereby declares as its goal and addresses itself to the development of a just, progressive and humane society.
                </p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="vision_container">
                <h3>THE UE VISION STATEMENT</h3>
                <p>
                  As a private non-sectarian institution of higher learning, the University of the East commits itself to producing, through relevant and affordable quality education, morally upright and competent leaders in various professions, imbued with a strong sense of service to their fellowmen and their country.
                </p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
    <?php include('footer.php'); ?>