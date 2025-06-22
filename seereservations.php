<?php
session_start();

if (!isset($_SESSION['userID'])) {
    header("Location: login.php");
    exit();
}

require_once 'connect.php';

$userID = $_SESSION['userID'];

$sql = "SELECT * FROM finalresservation WHERE res_ID = ?";
$stmt = $con->prepare($sql);
$stmt->bind_param("i", $userID);
$stmt->execute();
$result = $stmt->get_result();

// Check if any reservations found
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "Reservation ID: " . $row['res_ID'] . "<br>";
        echo "Check-in Date: " . $row['checkIn'] . "<br>";
        echo "Check-out Date: " . $row['checkOut'] . "<br>";
        echo "<br>";
    }
} else {
    echo "No reservations found.";
}

$stmt->close();
$con->close();
?>
