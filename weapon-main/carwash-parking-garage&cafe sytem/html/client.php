<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client</title>
    <link rel="stylesheet" type="text/css" href="../css/util.css">
    <link rel="stylesheet" type="text/css" href="../css/signup.css">

    <meta charset="UTF-8">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/png" href="../images/icons/fav.png" />

    <link rel="stylesheet" type="text/css" href="../vendor/bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="../fonts/font-awesome-4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="../fonts/iconic/css/material-design-iconic-font.min.css">

    <link rel="stylesheet" type="text/css" href="../vendor/animate/animate.css">

    <link rel="stylesheet" type="text/css" href="../vendor/css-hamburgers/hamburgers.min.css">

    <link rel="stylesheet" type="text/css" href="../vendor/animsition/css/animsition.min.css">

    <link rel="stylesheet" type="text/css" href="../vendor/select2/select2.min.css">

    <link rel="stylesheet" type="text/css" href="../vendor/daterangepicker/daterangepicker.css">
    <style>
        select {
            width: 270px;
            outline: none;
            border-bottom: #21d4fd;
            border-style: dashed;
            border-top: none;
            border-left: none;
            border-right: none;
        }
    </style>
</head>

<body>

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <form class="login100-form validate-form" action="../php/client.php" method="POST">
                    <span class="login100-form-title p-b-26">
                        Welcome To Our System
                    </span>
                    <span class="login100-form-title p-b-48">
                        <img src="../images/icons/deaj.jpg" alt="" srcset="">
                    </span>
                    <div class="sign">
                        <label for="first name">First Name</label>
                        <input type="text" name="fname" placeholder="First Name" required>
                        <label for="middle name">Middle Name</label>
                        <input type="text" name="mname" placeholder="Middle Name" required>
                        <label for="last name">Last Name</label>
                        <input type="text" name="lname" placeholder="Last Name" required>
                        <label for="nationalID">National ID</label>
                        <input type="text" name="nationalID" placeholder="National ID" required>
                        <label for="phonenumber">Phone Number</label>
                        <input type="text" name="p_no" placeholder="Cell Number" required>
                        <label for="car">Regitration Number</label>
                        <input type="text" name="regno" placeholder="Regitration Number" required>
                        <label for="model">Model</label>
                        <input type="text" name="model" placeholder="Car Model" required>
                        <label for="service">Service</label>
                        <select name="task" id="taskSelect">
                            <optgroup label="Car Wash Services">
                                <option><strong>--------</strong></option>
                                <option value="Hand Wash">Hand Wash</option>
                                <option value="Soft-Cloth Wash">Soft-Cloth Wash</option>
                                <option value="Self-Service Wash">Self-Service Wash</option>
                                <option value="Detailing Service">Detailing Service</option>
                                <option value="Automatic/Touchless Wash">Automatic/Touchless Wash</option>
                                <option value="Undercarriage Wash">Undercarriage Wash</option>
                                <option value="Wheel Cleaning">Wheel Cleaning</option>
                                <option value="Bug and Tar Removal">Bug and Tar Removal</option>
                                <option value="Eco-Friendly Wash">Eco-Friendly Wash</option>
                                <option value="Express Wash">Express Wash</option>
                            </optgroup>
                            <optgroup label="Garage Services">
                                <option value="Vehicle Maintenance">Vehicle Maintenance</option>
                                <option value="Repairs">Repairs</option>
                                <option value="Diagnostic Services">Diagnostic Services</option>
                                <option value="Brake and Suspension Services">Brake and Suspension Services</option>
                                <option value="Exhaust System Services">Exhaust System Services</option>
                                <option value="Wheel Alignment and Balancing">Wheel Alignment and Balancing</option>
                                <option value="Air Conditioning Services">Air Conditioning Services</option>
                                <option value="Electrical System Services">Electrical System Services</option>
                                <option value="Tire Services">Tire Services</option>
                                <option value="Inspections and Emissions Testing">Inspections and Emissions Testing
                                </option>
                                <option value="Fuel System Services">Fuel System Services</option>
                                <option value="Engine Tune-Ups">Engine Tune-Ups</option>
                                <option value="Overhauls or Rebuilds"> Overhauls or Rebuilds</option>
                            </optgroup>
                        </select>

                        <label for="email">Amount</label>
                        <input type="number" name="amount" id="amount" placeholder="amount" required>
                        <div class="container-login100-form-btn">
                            <a href="../html/payment.html" style="text-decoration: none;">
                                <div class="wrap-login100-form-btn">
                                    <div class="login100-form-bgbtn"></div>
                                    <div class="sam" style="width: 600px;"><button class="login100-form-btn" id="login" style="width: 600px;"> Proceed To Payment
                                        </button>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>



    <script src="../vendor/jquery/jquery-3.2.1.min.js"></script>

    <script src="../vendor/animsition/js/animsition.min.js"></script>

    <script src="../vendor/bootstrap/js/popper.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <script src="../vendor/select2/select2.min.js"></script>

    <script src="../vendor/daterangepicker/moment.min.js"></script>
    <script src="../vendor/daterangepicker/daterangepicker.js"></script>

    <script src="../vendor/countdowntime/countdowntime.js"></script>

    <script src="../js/main.js"></script>
</body>