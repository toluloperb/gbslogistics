<?php
session_start();
if (isset($_SESSION['auth']))
{
include('includes/navbar.php');
include('includes/sidebar.php');
?>

<div class="contentContainer">
    <div class="contentAdmin">
        <h3>Shipped Packages</h3>
        <style>
            table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
            }

            table tr th {
                text-align: center;
            }

            td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
            }

            tr:nth-child(even) {
            background-color: #dddddd;
            }
            </style>
            </head>
            <body>

            <!-- <h2>HTML Table</h2> -->
            <br>
            <table>
            <tr>
            <th>S/N</th>
                <th>Customers' names</th>
                <!-- <th>Email</th> -->
                <th>Contact</th>
                <th>Package</th>
                <th>To be shipped from</th>
                <th>Status</th>
                <!-- <th>Action</th> -->
            </tr>
            <?php
                $select = "SELECT * FROM bookings WHERE status = 'Delivered' ORDER by id DESC ";
                $select_run = mysqli_query($con, $select);

                if(mysqli_num_rows($select_run) > 0)
                {
                    foreach($select_run as $data)
                    {
                        ?>
                            <tr>
                                <td><?= $data["id"] ?></td>
                                <td><?= $data["fullname"] ?></td>
                                <!-- <td><?= $data["email"] ?></td> -->
                                <td><?= $data["tel"] ?></td>
                                <td><?= $data["package"] ?></td>
                                <td><?= $data["fromlocation"] ?></td>
                                <td><?= $data["status"] ?></td>
                            </tr>
                        <?php
                    }
                }
                else
                {
                    ?>
                        <tr>
                            <td>No Session Created yet!</td>
                            <td>--</td>
                            <td>--</td>
                            <td>--</td>
                            <td>--</td>
                            <td>--</td>
                            <!-- <td>--</td> -->
                        </tr>
                    <?php
                    // echo "No Dept Created yet";
                }
            ?>
            </table>
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