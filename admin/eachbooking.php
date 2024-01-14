<?php
session_start();
if (isset($_SESSION['auth']))
{
include('includes/navbar.php');
include('includes/sidebar.php');
include('../config/dbcon.php');

if(isset($_GET["id"]))
{
    $id = $_GET["id"];
    $select_query = "SELECT * FROM bookings WHERE id = '$id'";
    $select_query_run = mysqli_query($con, $select_query);

    if($select_query_run)
    {
        foreach($select_query_run as $data)
        {
            ?>
                <div class="contentContainer">
                    <div class="contentAdmin">
                        <h3>Edit a Department</h3>

                        <br>
                        <form action="../functions/adminFunction.php" method="POST">
                            <input type="text" name="id" value="<?= $data["id"] ?>" hidden>
                            <div>
                                <label for="">Customer's Names</label>
                                <input readonly value="<?= $data["fullname"] ?>" name="fullname" style="padding-left: 10px; background:none; border: #333 1px solid; border-radius:5px; width: 100%; height: 40px" type="text" required>
                            </div><br>

                            <div>
                                <label for="">Email</label>
                                <input readonly value="<?= $data["email"] ?>" name="email" style="padding-left: 10px; background:none; border: #333 1px solid; border-radius:5px; width: 100%; height: 40px" type="text" required>
                            </div><br>

                            <div>
                                <label for="">Contact Number</label>
                                <input readonly value="<?= $data["tel"] ?>" name="tel" style="padding-left: 10px; background:none; border: #333 1px solid; border-radius:5px; width: 100%; height: 40px" type="text" required>
                            </div><br>

                            <div>
                                <label for="">Package</label>
                                <input readonly value="<?= $data["package"] ?>" name="package" style="padding-left: 10px; background:none; border: #333 1px solid; border-radius:5px; width: 100%; height: 40px" type="text" required>
                            </div><br>

                            <div>
                                <label for="">Shipping from</label>
                                <input readonly value="<?= $data["fromlocation"] ?>" name="fromlocation" style="padding-left: 10px; background:none; border: #333 1px solid; border-radius:5px; width: 100%; height: 40px" type="text" required>
                            </div><br>

                            <div>
                                <label for="">Shipping to</label>
                                <input readonly value="<?= $data["tolocation"] ?>" name="tolocation" style="padding-left: 10px; background:none; border: #333 1px solid; border-radius:5px; width: 100%; height: 40px" type="text" required>
                            </div><br>

                            <div>
                                <label for="">Weight</label>
                                <input readonly value="<?= $data["weight"] ?>" name="weight" style="padding-left: 10px; background:none; border: #333 1px solid; border-radius:5px; width: 100%; height: 40px" type="text" required>
                            </div><br>

                            <div>
                                <label for="">Status</label>
                                <select name="status" style="background:none; border: #333 1px solid; color: #333;width: 100%; margin-top:none;">
                                    <option value="" selected readonly><?= $data["status"] ?></option>
                                    <option value="Shipped">Shipped</option>
                                    <option value="Delivered">Delivered</option>
                                </select>
                            </div>
                            <br>
                            <input type="submit" value="Update" name="updateDpt">
                        </form>
                    </div>
                </div>
            <?php
        }
    }
}
}
else
{
    header("Location: login.php?error=Login to continue");
    exit();
}
?>