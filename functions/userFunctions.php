<?php
include("../config/dbcon.php");

if(isset($_POST["registerStudent"]))
{
    $student_id = rand(00000, 99999);
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];
    $tel = $_POST["tel"];
    $status = "new";
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];

    if($cpassword == $password)
    {
        // Check if user exist
        $check = "SELECT * FROM students WHERE email = '$email'";
        $check_run = mysqli_query($con, $check);

        if(mysqli_num_rows($check_run) > 0)
        {
            echo "Seems this account already exists";
        }
        else
        {
            $insert_query = "INSERT into students(student_id,fname,lname,email,tel,status,password) 
            VALUE ('$student_id','$fname','$lname','$email','$tel','$status','$password')";
            $insert_query_run = mysqli_query($con, $insert_query);

            if($insert_query_run)
            {
                header("Location: ../student-dashboard/login.php");
            }
        }
    }
}
else if(isset($_POST["getQuote"]))
{
    $fullname = $_POST["fullname"];
    $email = $_POST["email"];
    $tel = $_POST["tel"];
    $package = $_POST["package"];
    $fromlocation = $_POST["fromlocation"];
    $tolocation = $_POST["tolocation"];

    // Emailing Deets
    // $msgHead = $_POST["subject"];
    // $zoom_link = $_POST["zoom_link"];
    // $message = $_POST["message"];

    $insert_query = "INSERT into bookings(fullname,email,tel,package,fromlocation,tolocation) 
    VALUE ('$fullname','$email','$tel','$package','$fromlocation','$tolocation')";
    $insert_query_run = mysqli_query($con, $insert_query);

    if($insert_query_run)
    {
        $name = "GBS Logistics";
        $email = "admin@gbslogistics.com";
        $subject = "Hi, $fullname";
        $comments ="<html>
                    <body style=\"@import url(\'https://fonts.googleapis.com/css2?family=Sora:wght@300&display=swap'); font-family: 'Sora', sans-serif; width: 100%; height: 100%; background-color: aliceblue; text-align: center; align-items: center;\">
                        <img style=\"width: 25%; margin-top: 5%; background-color: #0202c4; padding-top: 2%; padding-bottom: 2%; border-radius: 15px; padding-left: 20%; padding-right: 20%; align-items:center;\" src=\"https://alphapowerbase-group.co.uk/assets/images/AlphaConsults%20logo.png\">
                        <h1 style=\"background-color: aliceblue; font-size: 30pt; margin-top: 2%;\">Hello $fullname</h1>
                        <p>You have successfully booked a shipment, an admin will attend to you shortly.</p>
                        
                        
                        <p>Follow us on our social media channels: </p>
                        <a href=\"https://instagram.com/gbslogistics\"><img style=\"width: 20px; margin-left: 10px;\" src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/5/58/Instagram-Icon.png/1024px-Instagram-Icon.png\"></a>
                    </body>
                </html>";
        $to = $email;

        // headers
        $headers .= "From: $name <$email>" . "\r\n";
        $headers .= "Reply-To: $email" . "\r\n";
        $headers .= "X-Mailer: PHP/" . phpversion();

        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type: text/html; charset=UTF-8" . "\r\n";

        $body = "$comments";

        if (mail($to, $subject, $body, $headers))
        {
            header('Location: ../success-page.php');
        } 
        else 
        {
            echo 'Error.';
        }           
    }
}
?>