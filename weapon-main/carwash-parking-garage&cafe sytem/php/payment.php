<?php

include '../php/connect.php';

date_default_timezone_set('Africa/Nairobi');

// Function to sanitize input
function sanitize($input) {
    return htmlspecialchars(trim($input));
}

// Function to validate input making sure all inputs are filled
function validate($input) {
    return !empty($input);
}

// Check if the form is submitted and sanitizing inputs
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $fname = sanitize($_POST['fname']);
    $lname = sanitize($_POST['lname']);
    $task = sanitize($_POST['task']);
    $regno = sanitize($_POST['regno']);
    $p_no = sanitize($_POST['p_no']);
    $paidamount = sanitize($_POST['paidamount']);
    
    // Automatically get the current date and time
    $payment_date = date("Y-m-d");
    $payment_time = date("H:i:s");

    // Validate input data
    if (!validate($fname) || !validate($lname) || !validate($task) || !validate($regno) || !validate($p_no) || !validate($paidamount)) {
        echo "<div id='overlay' style='position: fixed; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0,0,0,0.5); z-index: 999; display: flex; justify-content: center; align-items: center;'>
        <div style='background-color: white; padding: 20px; border-radius: 10px; text-align: center;'>
            <h2 style='color: red;'>Fill All Fields</h2>
            <button class='login100-form-bgbtn' style='color: white; width: 100px; height: 30px; font-weight: bolder; border-radius: 30px; border: none; cursor: pointer; background: #a64bf4; background: -o-linear-gradient(right, #21d4fd, #b721ff, #21d4fd, #b721ff); background: -moz-linear-gradient(right, #21d4fd, #b721ff, #21d4fd, #b721ff); background: linear-gradient(right, #21d4fd, #b721ff, #21d4fd, #b721ff);'onclick=\"window.location.href = '../html/client.php';\">BACK</button>
        </div>
    </div>";
        exit; 
    }

    $stmt_insert = $conn->prepare("INSERT INTO payment(fname, lname, task, regno, p_no, paidamount, date, time) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");

    if (!$stmt_insert) {
        echo "Error preparing statement: " . $conn->error; 
    } else {
        // Bind parameters to the prepared statement
        $stmt_insert->bind_param("ssssssss", $fname, $lname, $task, $regno, $p_no, $paidamount, $payment_date, $payment_time);
        
        // Execute the insert query
        if ($stmt_insert->execute()) {
            echo "<div id='overlay' style='position: fixed; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0,0,0,0.5); z-index: 999; display: flex; justify-content: center; align-items: center;'>
            <div style='background-color: white; padding: 20px; border-radius: 10px; text-align: center;'>
                <h2 style='color: green;'>Wait To Be Served. Download Receipt</h2>
                <button class='login100-form-bgbtn' style='color: white; width: 130px; height: 30px; font-weight: bolder; border-radius: 30px; border: none; cursor: pointer; background: #a64bf4; background: -o-linear-gradient(right, #21d4fd, #b721ff, #21d4fd, #b721ff); background: -moz-linear-gradient(right, #21d4fd, #b721ff, #21d4fd, #b721ff); background: linear-gradient(right, #21d4fd, #b721ff, #21d4fd, #b721ff);'onclick=\"window.location.href = '../html/receipt.php';\">Done</button>
            </div>
        </div>";
        } else {
            echo "Error executing statement: " . $stmt_insert->error;
        }
    }
    
    // Close the statement
    $stmt_insert->close();
}

// Close the connection
$conn->close();

?>
