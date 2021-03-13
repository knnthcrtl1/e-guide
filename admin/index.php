<?php include('header.php'); ?>
<body>
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
      <div class="content">
        <div class="container-fluid">
          <!-- your content here -->
        </div>
      </div>
<?php include('footer.php'); ?>