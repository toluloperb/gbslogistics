<?php
include("../config/dbcon.php");

if(isset($_POST["createDpt"]))
{
    $title = $_POST["title"];
    $description = $_POST["description"];
    $price = $_POST["price"];
    $status = $_POST["status"];

    $check = "SELECT * FROM dept WHERE title = '$title'";
    $check_run = mysqli_query($con, $check);

    if(mysqli_num_rows($check_run) > 0)
    {
        echo "Department already exist in database";
    }
    else
    {
        $insert_query = "INSERT into dept(title,description,price,status) VALUE ('$title','$description','$price','$status')";
        $insert_query_run = mysqli_query($con, $insert_query);

        if($insert_query_run)
        {
            header("Location: ../admin/index.php");
        }
    }
}
else if(isset($_POST["updateDpt"]))
{
    $id = $_POST["id"];
    $fullname = $_POST["fullname"];
    $email = $_POST["email"];
    $tel = $_POST["tel"];
    $package = $_POST["package"];
    $fromlocation = $_POST["fromlocation"];
    $tolocation = $_POST["tolocation"];
    $weight = $_POST["weight"];
    $status = $_POST["status"];

    $update = "UPDATE bookings SET fullname = '$fullname',email = '$email',tel = '$tel',
    package = '$package',fromlocation = '$fromlocation',tolocation = '$tolocation',status = '$status',
    weight = '$weight',status = '$status' WHERE id = '$id'";
    $update_run = mysqli_query($con, $update);

    if($update_run)
    {
        header("Location: ../admin/eachbooking.php?id=$id");
    }
}
else if(isset($_POST["createSession"]))
{
    $title = $_POST["title"];
    $description = $_POST["description"];
    $zoom_link = $_POST["zoom_link"];
    $commencing_date = $_POST["commencing_date"];

    $check = "SELECT * FROM taster_sessions WHERE zoom_link = '$zoom_link'";
    $check_run = mysqli_query($con, $check);

    if(mysqli_num_rows($check_run) > 0)
    {
        echo "This session link already exist in database";
    }
    else
    {
        $insert_query = "INSERT into taster_sessions(title,description,zoom_link,commencing_date) VALUE ('$title','$description','$zoom_link','$commencing_date')";
        $insert_query_run = mysqli_query($con, $insert_query);

        if($insert_query_run)
        {
            header("Location: ../admin/index.php");
        }
    }
}
?>