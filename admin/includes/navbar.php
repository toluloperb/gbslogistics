<?php 
include('includes/header.php')
?>

<div class="nav">
  <input type="checkbox" id="nav-check">
  
  <div class="nav-header">
    <div class="nav-title">
      <a href="index.php"><img src="../images/fibe logo.png" alt=""></a>
    </div>
  </div>

  <div class="nav-btn">
    <label for="nav-check">
      <span></span>
      <span></span>
      <span></span>
    </label>
  </div>
  
  <!-- Super Admin -->
  <?php if($_SESSION["auth"]) : ?>
  <div class="nav-links" id="adminNavLinks">
    <a href="index.php">Bookings</a>
    <a href="shipped.php">Shipped Packages</a>
    <a href="delivered.php">Delivered Packages</a>
    <!-- <a href="">Resources</a>
    <a href="">Service Booked</a>
    <a href="">Users</a>
    <a href="">Profile Settings</a> -->
    <button><a href="logout.php">Logout</a></button>
  </div>
  <?php endif; ?>
  
  <div class="nav-links" id="adminNavLinksHide">
    <a href=""></a>
    <button><a href="logout.php">Logout</a></button>
  </div>
</div>