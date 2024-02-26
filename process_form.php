<?php
// Include the database connection configuration
include('config.php');

// Get data from the form
$pickupDate = $_POST['pickup_date'];
$pickupTime = $_POST['pickup_time'];
$dropoffDate = $_POST['dropoff_date'];
$dropoffTime = $_POST['dropoff_time'];

// Prepare and execute SQL query to insert data into the database
$sql = "INSERT INTO your_table_name (pickup_date, pickup_time, dropoff_date, dropoff_time) 
        VALUES ('$pickupDate', '$pickupTime', '$dropoffDate', '$dropoffTime')";

if (mysqli_query($con, $sql)) {
    echo "Record inserted successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}

// Close the connection
mysqli_close($con);
?>
