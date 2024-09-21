<html>

<head>
    <title>HOME</title>
    <link rel="stylesheet" href="../css/home.css">
    <link rel="shortcut icon" href="../images/car/homeflavicon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .container img {
            margin-top: 40px;
            width: 250px;
            margin-left: 25px;
            border-radius: 20px;
        }

        .car1,
        .car2,
        .car3,
        .car4,
        .car5,
        .car6,
        .car7,
        .car8,
        .car9,
        .car10 {
            margin: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
            transition: box-shadow 0.5s fast;
            border-radius: 30px;
            cursor: pointer;
            width: 300px;
        }

        p {
            width: 250px;
        }
    </style>
</head>

<body>
    <?php
    include '../html/header.php'
    ?>
    <div class="container">
        <div class="car1">
            <img src="../images/car/1.jpg" alt="">
            <div class="service">
                <h5>Hand Wash</h5>
            </div>
            <p id="word">

                With our hand wash service, our trained staff will manually clean your vehicle using mitts, brushes, and
                gentle detergents. This personalized approach ensures a thorough cleaning, especially for delicate
                finishes, and leaves your car looking its best.
            </p>
            <li class="active"><a href="../html/client.php"> WASH @ KSH 2500</a></li>
        </div>
        <div class="car2">

            <img src="../images/car/2.jpg" alt="">
            <div class="service">
                <h5>Soft Cloth Wash</h5>
            </div>
            <p id="word">
                Our soft cloth wash involves gentle cleaning using soft cloth materials that are safe for your vehicle's
                surface. It effectively removes dirt and grime while minimizing the risk of scratches, leaving your car
                looking clean and shiny.
            </p>
            <li class="active"><a href="../html/client.php"> WASH @ KSH 3000</a></li>
        </div>
        <div class="car3">
            <img src="../images/car/3.jpg" alt="">
            <div class="service">
                <h5>Self-Service Wash</h5>
            </div>
            <p id="word">
                Our self-service wash stations provide you with the equipment and space to wash your vehicle yourself.
                You have control over the washing process, with options for high-pressure washing, foaming, and rinsing,
                allowing you to customize the cleaning to your liking
            </p>
            <li class="active"><a href="../html/client.php">WASH @ KSH 1500</a></li>
        </div>
        <div class="car4">
            <img src="../images/car/4.jpg" alt="">
            <div class="service">
                <h5>Detailing Services</h5>
            </div>
            <p id="word">
                Our detailing services offer a comprehensive cleaning and restoration for both the interior and exterior
                of your vehicle. From thorough cleaning and polishing to waxing and protecting your car's surfaces,
                detailing ensures a like-new appearance inside and out
            </p>
            <li class="active"><a href="../html/client.php">WASH @ KSH 3000</a></li>
        </div>
        <div class="car5">
            <img src="../images/car/5.jpg" alt="">
            <div class="service">
                <h5>Automatic/Touchless Wash</h5>
            </div>
            <p id="word">
                Our automatic or touchless wash uses high-pressure water jets and specialized detergents to thoroughly
                clean your vehicle without any physical contact. It's quick, convenient, and ensures a sparkling finish
            </p>
            <li class="active"><a href="../html/client.php">WASH @ KSH 1000</a></li>
        </div>
        <div class="car6">
            <img src="../images/car/6.jpg" alt="">
            <div class="service">
                <h5>Undercarriage Wash</h5>
            </div>
            <p id="word">
                Our undercarriage wash targets the often-neglected underside of your vehicle, where dirt, salt, and
                grime can accumulate. It helps prevent corrosion and rust by thoroughly cleaning the undercarriage,
                ensuring your car stays in top condition
            </p>
            <li class="active"><a href="../html/client.php">WASH @ KSH 3000</a></li>
        </div>
        <div class="car7">
            <img src="../images/car/7.jpg" alt="">
            <div class="service">
                <h5>Wheel Cleaning</h5>
            </div>
            <p id="word">
                Our wheel cleaning service focuses on removing brake dust, dirt, and grime from your wheels, leaving
                them looking clean and shiny. It enhances the overall appearance of your vehicle and helps maintain the
                condition of your wheels
            </p>
            <li class="active"><a href="../html/client.php">WASH @ KSH 2500</a></li>
        </div>
        <div class="car8">
            <img src="../images/car/8.jpg" alt="">
            <div class="service">
                <h5>Bug and Tar Removal</h5>
            </div>
            <p id="word">
                Our bug and tar removal service effectively removes stubborn insect residues and tar stains from your
                vehicle's surface. It's especially useful after long drives or highway travel, restoring your car's
                finish to its pristine condition
            </p>
            <li class="active"><a href="../html/client.php">WASH @ KSH 2000</a></li>
        </div>
        <div class="car9">
            <img src="../images/car/9.jpg" alt="">
            <div class="service">
                <h5>Eco-Friendly Wash Options</h5>
            </div>
            <p id="word">
                Our eco-friendly wash options use biodegradable detergents and environmentally friendly cleaning methods
                to minimize the impact on the environment while still providing a thorough cleaning for your vehicle.
                It's a greener choice for conscientious car owners
            </p>
            <li class="active"><a href="../html/client.php">WASH @ KSH 2500</a></li>
        </div>
        <div class="car10">
            <img src="../images/car/10.jpg" alt="">
            <div class="service">
                <h5>Express Wash</h5>
            </div>
            <p id="word">
                Our express wash offers a quick and efficient cleaning option for customers on the go. It provides a
                basic exterior wash and rinse, perfect for maintaining your vehicle's appearance between more thorough
                cleanings. With its speedy service, you can get a clean car in no time."
                This type of service emphasizes speed and convenience, making it ideal for customers who need a quick
                refresh for their vehicle without the need for extensive cleaning or detailing.
            </p>
            <li class="active" style="margin-bottom: 2em;"><a href="../html/client.php">WASH @ KSH 2500</a></li>
        </div>
    </div>

    <script src="https://kit.fontawesome.com/705b9c51dd.js" crossorigin="anonymous"></script>
    <script src="../js/main.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const buttons = document.querySelectorAll('.container .active a');

            buttons.forEach(function(button) {
                button.addEventListener('click', function(event) {
                    event.preventDefault();

                    const amount = parseInt(button.textContent.match(/\d+/)[0]);
                    const service = button.closest('.container').querySelector('h5').textContent;

                    localStorage.setItem('amount', amount);
                    localStorage.setItem('service', service);

                    window.location.href = '../html/client.php';
                });
            });
        });
    </script>
</body>

</html>