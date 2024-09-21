<?php

include '../php/connect.php';

// Function to sanitize input
function sanitize($input) {

    return htmlspecialchars(trim($input));
}

// Function to validate input making sure all inputs are filled
function validate($input) {
    return !empty($input);
}

// Check if the form is submitted and sunitizing of inputs
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $fname = sanitize($_POST['fname']);
    $mname = sanitize($_POST['mname']);
    $lname = sanitize($_POST['lname']);
    $nationalID = sanitize($_POST['nationalID']);
    $p_no = sanitize($_POST['p_no']);
    $regno = sanitize($_POST['regno']);
    $task = sanitize($_POST['task']);
    $amount = sanitize($_POST['amount']);

    // Validate input data
    if (!validate($fname) || !validate($lname) || !validate($nationalID) || !validate($p_no) || !validate($regno) || !validate($task) || !validate($amount)) {
        echo "<div id='overlay' style='position: fixed; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0,0,0,0.5); z-index: 999; display: flex; justify-content: center; align-items: center;'>
        <div style='background-color: white; padding: 20px; border-radius: 10px; text-align: center;'>
            <h2 style='color: red;'>Fill All Fields</h2>
            <button class='login100-form-bgbtn' style='color: white; width: 100px; height: 30px; font-weight: bolder; border-radius: 30px; border: none; cursor: pointer; background: #a64bf4; background: -o-linear-gradient(right, #21d4fd, #b721ff, #21d4fd, #b721ff); background: -moz-linear-gradient(right, #21d4fd, #b721ff, #21d4fd, #b721ff); background: linear-gradient(right, #21d4fd, #b721ff, #21d4fd, #b721ff);'onclick=\"window.location.href = '../html/client.php';\">BACK</button>
        </div>
    </div>";
        exit; 
    }

    $stmt_insert = $conn->prepare("INSERT INTO client(fname, lname, mname, nationalID, p_no, regno, task, amount) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");

    if (!$stmt_insert) {
        echo "Error: " . $conn->error; 
    } else {
        // Bind parameters to the prepared statement
        $stmt_insert->bind_param("ssssssss", $fname, $lname, $mname, $nationalID, $p_no, $regno, $task, $amount);
        
        // Execute the insert query
        if ($stmt_insert->execute()) {
            echo "<div id='overlay' style='position: fixed; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0,0,0,0.5); z-index: 999; display: flex; justify-content: center; align-items: center;'>
            <div style='background-color: white; padding: 20px; border-radius: 10px; text-align: center;'>
                <h2 style='color: green;'>Car Wash Appointment Confirmed.</h2>
                <button class='login100-form-bgbtn' style='color: white; width: 130px; height: 30px; font-weight: bolder; border-radius: 30px; border: none; cursor: pointer; background: #a64bf4; background: -o-linear-gradient(right, #21d4fd, #b721ff, #21d4fd, #b721ff); background: -moz-linear-gradient(right, #21d4fd, #b721ff, #21d4fd, #b721ff); background: linear-gradient(right, #21d4fd, #b721ff, #21d4fd, #b721ff);'onclick=\"window.location.href = '../html/client.php';\">Cancel</button>
                <button class='login100-form-bgbtn' style='color: white; width: 130px; height: 30px; font-weight: bolder; border-radius: 30px; border: none; cursor: pointer; background: #a64bf4; background: -o-linear-gradient(right, #21d4fd, #b721ff, #21d4fd, #b721ff); background: -moz-linear-gradient(right, #21d4fd, #b721ff, #21d4fd, #b721ff); background: linear-gradient(right, #21d4fd, #b721ff, #21d4fd, #b721ff);'onclick=\"window.location.href = '../html/payment.php';\">Proceed To Pay</button>
            </div>
        </div>";
        } else {
            echo "Error: " . $conn->error;
        }
    }

    
    if ($stmt_insert) {
        $stmt_insert->close();
    }
}


$conn->close();

?>
