<?php
include 'db.php';

$result = $conn->query("SELECT * FROM appointments");

echo "<h2>Appointments</h2>";

while($row = $result->fetch_assoc()) {
    echo "<p>{$row['name']} - {$row['appointment_date']} - {$row['slot']}</p>";
}
?>