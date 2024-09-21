<?php
session_start();

date_default_timezone_set('Africa/Nairobi');

include '../php/connect.php';

// Fetching email and password credentials from the database

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    // Check if the user exists in the enroll table
    $sql = "SELECT nationalID, email, pass FROM enroll WHERE email = ?";
    $stmt = $conn->prepare($sql);
    if (!$stmt) {
        die("Error in SQL query: " . $conn->error);
    }
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result_enroll = $stmt->get_result();

    if ($result_enroll->num_rows == 1) {
        // User exists in enroll table
        $user = $result_enroll->fetch_assoc();
        $usertype = 'client'; // No user type for enroll table

        // Verify password
        if (password_verify($pass, $user['pass'])) {
            // Password is correct
            $nationalID = $user['nationalID'];

            // Save login attempt to logs table
            saveToLogs($conn, $email, $nationalID, $usertype);

            // Store user session data
            $_SESSION['email'] = $email;
            $_SESSION['nationalID'] = $nationalID;
            $_SESSION['usertype'] = $usertype;

            // Redirect to the client page
            header("Location: ../html/clientpage.php");
            exit();
        }
    }

    // Check if the user exists in the users table
    $sql = "SELECT nationalID, email, userType, pass FROM users WHERE email = ?";
    echo "SQL: $sql <br>"; // Debug statement
    $stmt = $conn->prepare($sql);
    if (!$stmt) {
        die("Error in SQL query: " . $conn->error);
    }
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result_users = $stmt->get_result();
    echo "Rows returned from users table: " . $result_users->num_rows . "<br>"; // Debug statement

    if ($result_users->num_rows == 1) {
        // User exists in users table
        $user = $result_users->fetch_assoc();
        $usertype = $user['userType'];

        echo "Fetched user details: <pre>" . print_r($user, true) . "</pre>"; // Debug statement

        // Verify password
        $storedPassword = $user['pass'];
        echo "Stored password hash: $storedPassword<br>"; // Debug statement
        if (password_verify($pass, $storedPassword)) {
            // Password is correct
            $nationalID = $user['nationalID'];

            // Save login attempt to logs table
            saveToLogs($conn, $email, $nationalID, $usertype);

            // Store user session data
            $_SESSION['email'] = $email;
            $_SESSION['nationalID'] = $nationalID;
            $_SESSION['usertype'] = $usertype;

            // Redirect based on user type
            if ($usertype == 'admin') {
                header("Location: ../html/admin_page.php");
                exit();
            } elseif ($usertype == 'receptionist') {
                header("Location: ../html/receptionist_page.php");
                exit();
            }
        } else {
            echo "Password verification failed<br>"; // Debug statement
        }
    }

    // If user not found or password is incorrect, redirect to error page with error message
    header("Location: ../html/error.php?error=Invalid%20credentials");
}

function saveToLogs($conn, $email, $nationalID, $usertype) {
    $login_time = date('Y-m-d H:i:s');
    $login_date = date('Y-m-d');

    $sql = "INSERT INTO logs (nationalID, email, login_time, login_date, usertype) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    if (!$stmt) {
        die("Error in SQL query: " . $conn->error);
    }
    $stmt->bind_param("sssss", $nationalID, $email, $login_time, $login_date,

 $usertype);
    $stmt->execute();
    $stmt->close();
}

$conn->close();
?>
```

Please run the code again and share the output with me. We'll use this information to further diagnose the issue.