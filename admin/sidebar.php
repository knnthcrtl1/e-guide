
<?php 

function navigationList($active) {
?>
<div class="sidebar" data-color="purple" data-background-color="white">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
    <div class="logo">
        <img src='./assets/img/logo.png' class="eguide-logo"/>
        <a href='./index.php' class="simple-text logo-mini">
            E-GUIDE
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="nav-item <?php echo $active == "dashboard" ? 'active': null?> ">
                <a class="nav-link" href="./index.php">
                    <i class="material-icons">dashboard</i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="nav-item <?php echo $active == "student" ? 'active': null?> ">
                <a class="nav-link" href="./student.php">
                <i class="material-icons">person</i>
                    <p>Student</p>
                </a>
            </li>
            <!-- your sidebar here -->
        </ul>
    </div>
</div>

<?php } ?>