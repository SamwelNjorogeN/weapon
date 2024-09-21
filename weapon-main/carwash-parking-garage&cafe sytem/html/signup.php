<!DOCTYPE html>

<head>
    <title>SIGNUP</title>

    <link rel="stylesheet" type="text/css" href="../css/util.css">
    <link rel="stylesheet" type="text/css" href="../css/signup.css">

    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/png" href="../images/icons/bump.jpg" />

    <link rel="stylesheet" type="text/css" href="../vendor/bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="../fonts/font-awesome-4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="../fonts/iconic/css/material-design-iconic-font.min.css">

    <link rel="stylesheet" type="text/css" href="../vendor/animate/animate.css">

    <link rel="stylesheet" type="text/css" href="../vendor/css-hamburgers/hamburgers.min.css">

    <link rel="stylesheet" type="text/css" href="../vendor/animsition/css/animsition.min.css">

    <link rel="stylesheet" type="text/css" href="../vendor/select2/select2.min.css">

    <link rel="stylesheet" type="text/css" href="../vendor/daterangepicker/daterangepicker.css">

</head>

<body>

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <form class="login100-form validate-form" action="../php/enroll.php" method="post">
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
                        <label for="last name">National ID</label>
                        <input type="text" name="nationalID" placeholder="National ID" required>
                        <label for="phonenumber">Phone Number</label>
                        <input type="text" name="p_no" placeholder="Cell Number" required>
                        <label for="car">Regitration Number</label>
                        <input type="text" name="regno" placeholder="Regitration Number" required>
                        <label for="model">Model</label>
                        <input type="text" name="model" placeholder="Car Model" required>
                        <label for="email">Email</label>
                        <input type="email" name="email" placeholder="Email address" required>
                        <div class="wrap-input100 validate-input" data-validate="Enter password">
                            <label for="password">Password</label>
                            <span class="btn-show-pass">
                                <i class="zmdi zmdi-eye"></i>
                            </span>
                            <input class="input100" type="password" name="pass" placeholder="password" required>
                            <span class="focus-input100" data-placeholder="Password"></span>
                        </div>
                    </div>
                    <div class="container-login100-form-btn">
                        <a href="../html/login.php" style="text-decoration: none;">
                            <div class="wrap-login100-form-btn">
                                <div class="login100-form-bgbtn"></div>
                                <div class="sam"><button class="login100-form-btn" id="login" > LogIn </button>
                        </a>
                    </div>
            </div>
            <div class="wrap-login100-form-btn">
                <div class="login100-form-bgbtn"></div>
                <button class="login100-form-btn" type="submit">
                    SignUp
                </button>
            </div>
        </div>


        </form>
    </div>
    </div>
    </div>


    <div id="dropDownSelect1"></div>


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

</html>