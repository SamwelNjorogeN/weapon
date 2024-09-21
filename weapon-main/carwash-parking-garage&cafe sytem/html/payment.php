<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>M-Pesa Payment</title>
    <link rel="shortcut icon" href="../images/icons/mpesa.jpg" type="image/x-icon">
    <link rel="stylesheet" href="../css/payment.css">
    <style>
        input[type="text"] {
            text-transform: uppercase;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>M-Pesa Payment</h2>
        <form id="paymentForm" onsubmit="return validatePhoneNumber()" action="../php/payment.php" method="POST">
            <div class="info">
                <label for="firstName">First Name</label>
                <input type="text" id="firstName" name="fname" placeholder="Enter Your First Name" required>
                <label for="lastName">Last Name</label>
                <input type="text" id="lastName" name="lname" placeholder="Enter Your Last Name" required>
                <label for="task">Service Selected</label>
                <input type="text" id="task" name="task" placeholder="Please Confirm Service To Pay" required>
                <label for="car">Regitration Number</label>
                <input type="text" name="regno" placeholder="Confirm Regitration Number" required>
                <label for="phoneNumber">Phone Number</label>
                <input type="tel" id="phoneNumber" name="p_no" placeholder="Enter M-Pesa Phone Number" required>
                <div id="phoneNumberError" class="error-message"></div>
                <label for="phoneNumber">Amount Paid</label>
                <input type="text" id="paidamount" name="paidamount" placeholder="Enter Amount Paid" required>
            </div>
            <button type="submit">VERIFY PAYMENT</button>
        </form>
    </div>
    <script src="../js/dom.js"></script>
</body>

</html>