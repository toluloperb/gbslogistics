    
<?php 
include('includes/header.php'); 
include('../config/dbcon.php'); 

?>

<!-- Super Admin -->
<?php if($_SESSION["auth"]) : ?>
<div class="sidebarContainer">
    <div class="sidebarMenu">
        <!-- <p><a href="index.php">Dashboard</a></p>
        <br><br> -->

        <!-- Main -->
        <p>Main</p>
        <p><a href="index.php">Bookings</a></p>
        <p><a href="shipped.php">Shipped Packages</a></p>
        <p><a href="delivered.php">Delivered Packages</a></p>
        <!-- <p><a href="">Customers</a></p> -->

        <!-- Main -->

        <!-- CRM Tools -->
        <!-- <br><br>
        <p>CRM Tools</p>
        <br>
        <p><a href="">Subscribers</a></p> -->

        <!-- Configurations -->
        <br><br>
        <p>Configurations</p>
        <br>
        <p><a href="">Users</a></p>
        <p><a href="">Profile Settings</a></p>
    </div>
</div>
<?php endif; ?>