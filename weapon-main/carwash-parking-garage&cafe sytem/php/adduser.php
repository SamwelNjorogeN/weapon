<?php
$servername = "localhost";
$username = "root";
$password = "@S4n5kw8s";
$database = "carwash";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form data is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $lname = $_POST['lname'];
    $nationalID = $_POST['nationalID'];
    $p_no = $_POST['p_no'];
    $usertype = $_POST['usertype'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    //Password Encryption
    $hashed_password = password_hash($pass, PASSWORD_DEFAULT);

    
    $sql = "INSERT INTO users (fname, mname, lname, nationalID, p_no, usertype, email, pass) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

    //Checking Whether user is registered
    $check_duplicate = "SELECT * FROM users WHERE email = ? OR nationalID = ?";
    $stmt_check = $conn->prepare($check_duplicate);
    $stmt_check->bind_param("ss", $email, $nationalID);
    $stmt_check->execute();
    $result = $stmt_check->get_result();

    if ($result->num_rows > 0) {
        echo "<div id='overlay' style='position: fixed; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0,0,0,0.5); z-index: 999; display: flex; justify-content: center; align-items: center;'>
        <div style='background-color: white; padding: 20px; border-radius: 10px; text-align: center;'>
            <h2 style='color: red;'>National ID and Email Already Registered !</h2>
            <button class='login100-form-bgbtn' style='color: white; width: 100px; height: 30px; font-weight: bolder; border-radius: 30px; border: none; cursor: pointer; background: #a64bf4; background: -o-linear-gradient(right, #21d4fd, #b721ff, #21d4fd, #b721ff); background: -moz-linear-gradient(right, #21d4fd, #b721ff, #21d4fd, #b721ff); background: linear-gradient(right, #21d4fd, #b721ff, #21d4fd, #b721ff);'onclick=\"window.location.href = '../html/adduser.php';\">OK</button>
        </div>
    </div>";
        exit; 
    }

    // Prepare and bind parameters
    $stmt = $conn->prepare($sql);
    if ($stmt === false) {
        die("Error: " . $conn->error); 
    }

    $stmt->bind_param("ssssssss", $fname, $mname, $lname, $nationalID, $p_no, $usertype, $email, $hashed_password);

    // Execute the statement
    if ($stmt->execute()) {
        echo "<div id='overlay' style='position: fixed; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0,0,0,0.5); z-index: 999; display: flex; justify-content: center; align-items: center;'>
        <div style='background-color: white; padding: 20px; border-radius: 10px; text-align: center;'>
            <h2 style='color: green;'>User Registered Successfully</h2>
            <button class='login100-form-bgbtn' style='color: white; width: 100px; height: 30px; font-weight: bolder; border-radius: 30px; border: none; cursor: pointer; background: #a64bf4; background: -o-linear-gradient(right, #21d4fd, #b721ff, #21d4fd, #b721ff); background: -moz-linear-gradient(right, #21d4fd, #b721ff, #21d4fd, #b721ff); background: linear-gradient(right, #21d4fd, #b721ff, #21d4fd, #b721ff);'onclick=\"window.location.href = '../html/admin.php';\">OK</button>
        </div>
    </div>";
    } else {
        echo "Error: " . $stmt->error;
    }
    

    $stmt->close();
    $stmt_check->close();
} else {
    echo "Form submission error!";
}

// Close connection
$conn->close();
?>
