<?php
session_start();
include ('../config/dbcon.php');

if(isset($_POST['login_btn']))
{
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $password = mysqli_real_escape_string($con, $_POST['password']);

    $login_query = "SELECT * FROM admin WHERE username = '$username' AND password = '$password' LIMIT 1";
    $login_query_run = mysqli_query($con, $login_query);

    if(mysqli_num_rows($login_query_run) > 0)
    {
        foreach($login_query_run as $data)
        {
            $user_id = $data['id'];
            $user_fname = $data['firstname'];
            $user_lname = $data['lastname'];
            $user_email = $data['email'];
            // $role_as = $data['role_as'];
        }

        $_SESSION['auth'] = true;
        $_SESSION['auth_role'] = "$role_as";
        $_SESSION['auth_user'] = [
            'user_id'=>$user_id,
            'user_name'=>$user_fname,
            'user_email'=>$user_email,
        ];

        if($_SESSION['auth'])
        {
            $_SESSION["status"] = "$user_name Welcome to Dashboard";
            header("Location: ../admin");
            exit();
        }
        // elseif($_SESSION['auth_role'] == '1')
        // {
        //     $_SESSION["status"] = "$user_name Welcome to Dashboard";
        //     header("Location: ../admin");
        //     exit();
        // }
        // elseif($_SESSION['auth_role'] == '0')
        // {
        //     $_SESSION["status"] = "$user_name Welcome to Dashboard";
        //     header("Location: ../admin");
        //     exit();
        // }
    }
    else
    {
        $_SESSION["status"] = "Invalid Login or Password";
        header("Location: ../admin/login.php");
        exit();
    }
}
else
{
    $_SESSION["status"] = "You are not allowed here";
    header("Location: ../admin/login.php");
    exit();
}

// if (isset($_POST['username']) && isset($_POST['password']))
// {
//     function validate($data)
//     {
//         $data = trim($data);
//         $data = stripslashes($data);
//         $data = htmlspecialchars($data);
//         return $data;
//     }
//     $username = validate($_POST['username']);
//     $password = validate($_POST['password']);

//     if (empty($username))
//     {
//         header("Location: login.php?error=User Name is required");
//         exit();
//     }
//     else if(empty($password))
//     {
//         header("Location: login.php?error=Password is required");
//         exit();
//     }
//     else
//     {
//         $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
//         $result = mysqli_query($con, $sql);

//         if (mysqli_num_rows($result) === 1)
//         {
//             $row =mysqli_fetch_assoc($result);
//             if ($row['username'] === $username && $row['password'] === $password)
//             {
//                 $_SESSION['username'] = $row['username'];
//                 header("Location: ../index.php");
//                 exit();
//             }
//             else
//             {
//                 header("Location: login.php?error=Password/Username incorrect");
//                 exit();
//             }
//         }
//         else
//         {
//             header("Location: login.php?error=Password/Username incorrect");
//             exit();
//         }
//     }
// }
// else
// {
//     header("Location: login.php?");
//     exit();
// }
