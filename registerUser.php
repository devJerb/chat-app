<?php
    session_start();
    include("DBConnection.php");
    include("links.php");

    if(isset($_POST["uName"])) {
        $sql = "INSERT INTO users (User) VALUES('".$_POST["uName"]."')";
        if($connect->query($sql)) {
            header('location: index.php');
        } else {
            echo "Invalid Entry!";
        }
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Registration</title>
    </head>
    <body>
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4>Register an account</h4>
                </div>
                <div class="modal-body">
                    <form action="registerUser.php" method="POST">
                        <p>Username</p>
                        <input type="text" name="uName" id="uName" class="form-control" autocomplete="off" placeholder="Name" required/>
                        <br>
                        <input type="submit" name="submit" class="btn btn-primary" style="float: right;" value="Confirm"/>
                    </form>
                    <a href="index.php">Return</a>
                </div>
            </div>
        </div>
    </body>
</html>