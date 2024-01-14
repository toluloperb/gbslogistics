<?php
session_start();
if (isset($_SESSION['auth']))
{
include('includes/navbar.php');
include('includes/sidebar.php');
include('../config/dbcon.php');
?>
<?php
    if(isset($_GET['id']))
    {
        $id = $_GET["id"];
        $select_query = "SELECT * FROM dept WHERE id = '$id'";
        $select_query_run = mysqli_query($con, $select_query);

        if($select_query_run)
        {
            foreach($select_query_run as $data)
            {
                ?>
                    <div class="contentContainer">
                        <div class="contentAdmin">
                            <h3><?= $data["title"] ?> Departments</h3>
                            <div class="chatroom">
                                <div class="messagesContainer">

                                </div>
                                <div class="messagetools">
                                    <!-- <form action="" method="post">
                                        <div class="actions">
                                            <div>
                                                <label for="">Subject</label>
                                                <input type="text" name="subject" placeholder="Type subject">
                                            </div>
                                            <div>
                                                <label for="">Message</label>
                                                <textarea name="message" id="" cols="30" rows="10" placeholder="Type message"></textarea>
                                            </div>
                                        </div>
                                        <input class="send" type="submit" value="Send">
                                    </form> -->
                                    <a href=""><button>Compose</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
            }
        }
    }
?>
<?php
}
else
{
    header("Location: login.php?error=Login to continue");
    exit();
}
?>