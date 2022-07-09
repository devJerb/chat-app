<?php
    session_start();
    include("DBConnection.php");
    include("links.php");

    if(isset($_GET["userId"])) {
        $_SESSION["userId"] = $_GET["userId"];
        header("location: chatbox.php");
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Log In</title>
    </head>
    <body>
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4>Open Your Account</h4>
                </div>
                <div class="modal-body">
                    <ol>
                        <?php
                            $users = mysqli_query($connect, "SELECT * FROM users")
                            or die("Failed to query database");
                            while($user = mysqli_fetch_assoc($users)) {
                                echo '
                                    <li>
                                        <a href="index.php?userId='.$user["id"].'">' .$user["User"]. '</a>
                                    </li>
                                ';
                            }
                        ?>
                    </ol>
                    <a href="registerUser.php" style="float: right;">Register here!</a>
                </div>
            </div>
        </div>
    </body>
</html>