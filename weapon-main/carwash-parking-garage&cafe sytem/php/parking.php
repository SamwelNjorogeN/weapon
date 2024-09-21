<?php
include '../php/connect.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $lname = $_POST['lname'];
    $nationalID = $_POST['nationalID'];
    $phonenumber = $_POST['phonenumber'];
    $model = $_POST['model'];
    $registration = $_POST['registration'];

    
    $submissionDate = date("Y-m-d");
    $submissionTime = date("H:i:s");

    
    $insertQuery = "INSERT INTO parking (fname, lname, mname, nationalID, phonenumber, model, registration, date, time)
                    VALUES ('$fname', '$lname', '$mname', '$nationalID', '$phonenumber', '$model', '$registration', '$submissionDate', '$submissionTime')";

    $insertResult = mysqli_query($conn, $insertQuery);

    
    if ($insertResult) {
        
        header("Location: ../html/payment.php");
        exit;
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
