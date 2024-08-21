<?php
include 'dbcon.php';

if (isset($_POST['vehicleNumber'])) {
    $vehicleNumber = $_POST['vehicleNumber'];

    $sql = "SELECT * FROM insurance WHERE vehicle_no = '$vehicleNumber'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<p>Policy No: " . $row["policy_no"] . "</p>";
            echo "<p>Customer Name: " . $row["customer_name"] . "</p>";
            echo "<p>Vehicle No: " . $row["vehicle_no"] . "</p>";
            echo "<p>Vehicle Model: " . $row["vehicle_model"] . "</p>";
            echo "<p>Vehicle Make Year: " . $row["vehicle_make_year"] . "</p>";
            echo "<p>Insurance Status: " . $row["insurance_status"] . "</p>";
        }
    } else {
        echo "<p>No record found for this vehicle number.</p>";
    }
} else {
    echo "<p>Invalid request.</p>";
}

$conn->close();
?>
