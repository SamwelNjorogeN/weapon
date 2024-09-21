<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../images/icons/cafelogo.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/cafe.css">
    <title>Cafe</title>
    <style>
        .container {
    margin-top: 110px;
        }
        h2{
            display: flex;
            margin-top: 10px;
            justify-content: center;
        }
    </style>
</head>
<body>

<div class="topmenu">
    <h2>WELCOME TO WAYPALACE FAST FOOD CAFE</h2>
        <marquee behavior="scroll" direction="left" id="myMarquee">
            <h1>TO OUR ESTEEMED CUSTOMERS PLEASE MAKE THE ORDER UPON ENTERING THE CAFE FOR FAST SERVICE TO BE GIVEN TO YOU</h1>
        </marquee>
    </div>

    <div class="container">
        <div class="car">
            <img src="../images/cafe/bur.avif" alt="">
            <div class="service">
                <h5>Burger</h5>
            </div>
            <li class="active"><a href="../html/client.php"> Order Burger @ KSH 2500</a></li>
        </div>
        <div class="car">
            <img src="../images/cafe/coffee.jpeg" alt="">
            <div class="service">
                <h5>Black Coffee</h5>
            </div>
            <li class="active"><a href="../html/client.php"> Order Coffee @ KSH 3000</a></li>
        </div>
        <div class="car">
            <img src="../images/cafe/delamere.jpeg" alt="">
            <div class="service">
                <h5>Delamere</h5>
            </div>
            <li class="active"><a href="../html/client.php"> Order Delamere @ KSH 1500</a></li>
        </div>
        <div class="car">
            <img src="../images/cafe/Fried Mbuzi.jpeg" alt="">
            <div class="service">
                <h5>Fried Mbuzi</h5>
            </div>
            <li class="active"><a href="../html/client.php"> Order Fried Mbuzi @ KSH 3000</a></li>
        </div>
        <div class="car">
            <img src="../images/cafe/grilled fish.jpeg" alt="">
            <div class="service">
                <h5>Grilled Fish</h5>
            </div>
            <li class="active"><a href="../html/client.php"> Order Fish @ KSH 1000</a></li>
        </div>
        <div class="car">
            <img src="../images/cafe/hotdog.jpeg" alt="">
            <div class="service">
                <h5>HotDog</h5>
            </div>
            <li class="active"><a href="../html/client.php"> Order HotDog @ KSH 3000</a></li>
        </div>
        <div class="car">
            <img src="../images/cafe/loaded chapati.avif" alt="">
            <div class="service">
                <h5>Chapati</h5>
            </div>
            <li class="active"><a href="../html/client.php"> Order Chapati @ KSH 2500</a></li>
        </div>
        <div class="car">
            <img src="../images/cafe/mandazi.jpeg" alt="">
            <div class="service">
                <h5>Mandazi</h5>
            </div>
            <li class="active"><a href="../html/client.php"> Order Mandazi @ KSH 2000</a></li>
        </div>
        <div class="car">
            <img src="../images/cafe/Matumbo Stew.jpeg" alt="">
            <div class="service">
                <h5>Matumbo</h5>
            </div>
            <li class="active"><a href="../html/client.php"> Order Matumbo @ KSH 2500</a></li>
        </div>
        <div class="car">
            <img src="../images/cafe/milk tea.jpeg" alt="">
            <div class="service">
                <h5>Milk Tea</h5>
            </div>
            <li class="active"><a href="../html/client.php"> Order Milk Tea @ KSH 2500</a></li>
        </div>
        <div class="car">
            <img src="../images/cafe/Nyama Choma Special.webp" alt="">
            <div class="service">
                <h5>Nyama Choma</h5>
            </div>
            <li class="active"><a href="../html/client.php"> Order Choma @ KSH 2500</a></li>
        </div>
        <div class="car">
            <img src="../images/cafe/Regular Fries.jpeg" alt="">
            <div class="service">
                <h5>Fries</h5>
            </div>
            <li class="active"><a href="../html/client.php"> Order Fries @ KSH 2500</a></li>
        </div>
        <div class="car">
            <img src="../images/cafe/smochaa.jpg" alt="">
            <div class="service">
                <h5>Smocha</h5>
            </div>
            <li class="active"><a href="../html/client.php"> Order Smocha @ KSH 2500</a></li>
        </div>
        <div class="car">
            <img src="../images/cafe/sodas.jpeg" alt="">
            <div class="service">
                <h5>Soda</h5>
            </div>
            <li class="active"><a href="../html/client.php"> Order Soda @ KSH 2500</a></li>
        </div>
        <div class="car">
            <img src="../images/cafe/toast bread.jpg" alt="">
            <div class="service">
                <h5>Toast Bread</h5>
            </div>
            <li class="active"><a href="../html/client.php"> Order Toast @ KSH 2500</a></li>
        </div>
        <div class="car">
            <img src="../images/cafe/Whole Broiler Chicken FRIED.jpeg" alt="">
            <div class="service">
                <h5>Fried Chicken</h5>
            </div>
            <li class="active"><a href="../html/client.php"> Order Fried Chicken @ KSH 2500</a></li>
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
                    const service = button.closest('.car').querySelector('h5').textContent;

                    localStorage.setItem('amount', amount);
                    localStorage.setItem('service', service);

                    window.location.href = '../html/client.php';
                });
            });
        });
        // pousing of the marquee when hoovered
        var marquee = document.getElementById('myMarquee');

        marquee.addEventListener('mouseenter', function() {
            marquee.stop();
        });

        marquee.addEventListener('mouseleave', function() {
            marquee.start();
        });
    </script>
</body>
</html>
