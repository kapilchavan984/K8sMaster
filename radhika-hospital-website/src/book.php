<?php
include 'db.php';

$name = $_POST['name'];
$phone = $_POST['phone'];
$doctor = $_POST['doctor'];
$date = $_POST['appointment_date'];
$slot = $_POST['slot'];
$message = $_POST['message'];

$stmt = $conn->prepare("INSERT INTO appointments (name, phone, doctor, appointment_date, slot, message) VALUES (?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssss", $name, $phone, $doctor, $date, $slot, $message);

if ($stmt->execute()) {
    echo "<h2>Appointment Booked ✅</h2>";
} else {
    echo "Error: " . $conn->error;
}
?>