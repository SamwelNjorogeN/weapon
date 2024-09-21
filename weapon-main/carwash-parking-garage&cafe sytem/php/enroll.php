<?php
include '../php/connect.php';

$fname = $_POST['fname'];
$mname = $_POST['mname'];
$lname = $_POST['lname'];
$nationalID = $_POST['nationalID'];
$p_no = $_POST['p_no'];
$model = $_POST['model'];
$regno = $_POST['regno'];
$email = $_POST['email'];
$pass = $_POST['pass'];

// Hash the password
$hashed_password = password_hash($pass, PASSWORD_DEFAULT);

// Check if email and nationalID are unique
$stmt_check = mysqli_prepare($connection, "SELECT * FROM enroll WHERE email = ? OR nationalID = ?");
mysqli_stmt_bind_param($stmt_check, "ss", $email, $nationalID);
mysqli_stmt_execute($stmt_check);
$result = mysqli_stmt_get_result($stmt_check);

if (mysqli_num_rows($result) > 0) {
    // Display message indicating duplicate entry
    echo "<div id='overlay' style='position: fixed; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0,0,0,0.5); z-index: 999; display: flex; justify-content: center; align-items: center;'>
        <div style='background-color: white; padding: 20px; border-radius: 10px; text-align: center;'>
            <h2 style='color: red;'>National ID and Email Already Registered !</h2>
            <button class='login100-form-bgbtn' style='color: white; width: 100px; height: 30px; font-weight: bolder; border-radius: 30px; border: none; cursor: pointer; background: #a64bf4; background: -o-linear-gradient(right, #21d4fd, #b721ff, #21d4fd, #b721ff); background: -moz-linear-gradient(right, #21d4fd, #b721ff, #21d4fd, #b721ff); background: linear-gradient(right, #21d4fd, #b721ff, #21d4fd, #b721ff);'onclick=\"window.location.href = '../html/signup.php';\">OK</button>
        </div>
    </div>";
    exit; // Stop further execution if duplicate found
}

// Prepare and execute the insertion query
$stmt = mysqli_prepare($connection, "INSERT INTO enroll (fname, lname, mname, nationalID, p_no, regno, model, email, pass) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
mysqli_stmt_bind_param($stmt, "sssssssss", $fname, $lname, $mname, $nationalID, $p_no, $regno, $model, $email, $hashed_password);
mysqli_stmt_execute($stmt);

if ($stmt) {
    // Display success message
    echo "<div id='overlay' style='position: fixed; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0,0,0,0.5); z-index: 999; display: flex; justify-content: center; align-items: center;'>
        <div style='background-color: white; padding: 20px; border-radius: 10px; text-align: center;'>
            <h2 style='color: green;'>Registered Successfully! Continue To Login</h2>
            <button class='login100-form-bgbtn' style='color: white; width: 100px; height: 30px; font-weight: bolder; border-radius: 30px; border: none; cursor: pointer; background: #a64bf4; background: -o-linear-gradient(right, #21d4fd, #b721ff, #21d4fd, #b721ff); background: -moz-linear-gradient(right, #21d4fd, #b721ff, #21d4fd, #b721ff); background: linear-gradient(right, #21d4fd, #b721ff, #21d4fd, #b721ff);'onclick=\"window.location.href = 'http://localhost/waypalace/html/login.php';\">OK</button>
        </div>
    </div>";
} else {
    echo "You have Encountered a Technical Error Please Contact Admin";
}

// Close connection
mysqli_close($connection);
?>
