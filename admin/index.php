<?php
session_start();
if (isset($_SESSION['auth']))
{
include('includes/navbar.php');
include('includes/sidebar.php');
?>

<div class="contentContainer">
    <div class="contentAdmin">
        <h3>Bookings</h3>
        <?php include("dept-table.php"); ?>
    </div>
</div>
<?php
}
else
{
    header("Location: login.php?error=Login to continue");
    exit();
}
?>