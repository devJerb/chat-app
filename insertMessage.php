<?php
    session_start();
    include("DBConnection.php");

    $fromUser = $_POST["fromUser"];
    $toUser = $_POST["toUser"];
    $message = $_POST["message"];

    $output = "";

    $sql = "INSERT INTO messages (fromUser, toUser, message) VALUES ('$fromUser', '$toUser', '$message')";

    if($connect -> query($sql)) {
        $output.="";
    } else {
        $output.="Error, try again!";
    }
    echo $output;
?>
