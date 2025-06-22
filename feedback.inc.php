<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {


    include_once 'connect.php';


    $username = $_POST['userN'];
    $email = $_POST['userE'];
    $contact = $_POST['userTP'];
    $feedback = $_POST['userFeedback'];


    $sql = "INSERT INTO feedback (userN, userE, userTP, userFeedback) VALUES (?, ?, ?, ?)";


    $stmt = mysqli_stmt_init($con);


    if (!mysqli_stmt_prepare($stmt, $sql)) {

        header("Location: feedback.php?error=sqlerror");
        exit();
    } else {

        mysqli_stmt_bind_param($stmt, "ssss", $username, $email, $contact, $feedback);


        mysqli_stmt_execute($stmt);


        mysqli_stmt_close($stmt);
        mysqli_close($con);


        echo "<script>alert('Feedback submitted successfully');</script>";
        echo "<script>window.location.href = 'feedback.php';</script>";
        exit();
    }
} else {

    header("Location: feedback.php");
    exit();
}
