<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../images/icons/parking.png" type="image/x-icon">
    <title>Parking Bay</title>
    <link rel="stylesheet" href="../css/parking.css">
    <script src="../js/park.js"></script>
    
    <script>
        window.addEventListener('pageshow', function(event) {
            var form = document.getElementById('parkingForm');
            if (event.persisted) {
                // Clear form fields when page is loaded from cache (navigated back)
                form.reset();
            }
        });
    </script>
</head>
<body>
    <h2>Car Parking User Registration</h2>
    <form id="parkingForm" action="../php/parking.php" method="POST">
        <div class="container">
            <div class="form-group">
                <label for="firstName">First Name</label>
                <input type="text" id="firstName" name="fname" placeholder="Enter your first name" required>
            </div>
            <div class="form-group">
                <label for="middleName">Middle Name</label>
                <input type="text" id="middleName" name="mname" placeholder="Enter your middle name">
            </div>
            <div class="form-group">
                <label for="lastName">Last Name</label>
                <input type="text" id="lastName" name="lname" placeholder="Enter your last name" required>
            </div>
            <div class="form-group">
                <label for="nationalID">National ID</label>
                <input type="text" id="nationalID" name="nationalID" placeholder="Enter your national ID" oninput="validateNationalID(this)" required>
            </div>
            <div class="form-group">
                <label for="phoneNumber">Phone Number</label>
                <input type="tel" id="phoneNumber" name="phonenumber" placeholder="Enter your phone number" oninput="validatePhoneNumber(this)" required>
                
            </div>
            <div id="phoneError" class="error-message"></div> 
            <div class="form-group">
                <label for="carModel">Car Model</label>
                <input type="text" id="carModel" name="model" placeholder="Enter your car model" required>
            </div>
            <div class="form-group">
                <label for="carRegistrationNumber">Plate Number</label>
                <input type="text" id="carRegistrationNumber" name="registration" placeholder="Enter your car registration number" required>
            </div>
            <div class="form-group but">
            <button type="submit" onclick="submitForm()">Proceed To Pay</button>
            </div>
        </div>
    </form>
</body>
</html>
