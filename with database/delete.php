<?php
include("validation.php");
include("session.php");
    $email_log= $_SESSION["login"];
    $conn = mysqli_connect('localhost', 'param', '161607', 'user');
    if (!$conn) {
        die('Could not connect: ' . mysqli_connect_error());
    }
    $sql1 = "DELETE from file_task WHERE email='$email_log'";
    $sql = "DELETE from registration WHERE email='$email_log'";
    mysqli_query($conn, $sql1);
    mysqli_query($conn, $sql);
   
    // $row = mysqli_fetch_assoc($result);
    header("location:registrationform.php");
?>