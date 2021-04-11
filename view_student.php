<?php 

include('./header.php'); 

?>

<body>
    <div class="wrapper ">
        <?php
        include('./sidebar.php');
        navigationList('student');
        ?>
        <div class="main-panel">
            <!-- Navbar -->
            <?php
            include('./admin/navbar.php');
            $headerTitle = 'Student';
            navbarContainer($headerTitle);
            ?>
            <!-- End Navbar -->
            <div class="content">
                <div class="container-fluid">
                    
                    <!-- end row -->
                    <!-- your content here -->
                </div>
            </div>
            <?php include('./footer.php'); ?>
            <script src="./admin/custom-js/student-script.js"></script>
            <script src="./admin/assets/js/plugins/jquery.dataTables.min"></script>