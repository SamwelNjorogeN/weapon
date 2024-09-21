<?php
include 'connect.php'; // Include your database connection file

// Retrieve task from POST data
$task = $_POST['task'];

// Query to fetch amount from the database based on the selected task
$sql = "SELECT amount FROM prices WHERE task_name = ?"; // Update your_table with your actual table name

// Prepare the statement
$stmt = $conn->prepare($sql);

if ($stmt) {
    // Bind parameters
    $stmt->bind_param("s", $task);

    // Execute the statement
    if ($stmt->execute()) {
        // Bind result variables
        $stmt->bind_result($amount);

        // Fetch the value
        $stmt->fetch();

        // Close statement
        $stmt->close();

        // Return the amount
        echo $amount;
    } else {
        echo "Error executing statement";
    }
} else {
    echo "Error preparing statement";
}

// Close database connection
$conn->close();
?>
