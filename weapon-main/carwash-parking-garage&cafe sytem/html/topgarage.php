<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/home.css">
    <style>
        .topmenu {
            height: 100px;
            background: rgb(0, 100, 0);
            color: white;
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 999; 
            overflow: hidden; 
        }

        h1 {
            cursor: pointer;
            display: flex;
            justify-content: center;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        }

        marquee {
            display: block;
            cursor: pointer;
            height: 100%;
            line-height: 70px; 
            overflow: hidden; 
        }
        h2{
            display: flex;
            margin-top: 10px;
            justify-content: center;
        }
        .container {
    margin-top: 110px;
        }
    </style>
</head>
<body>
    <div class="topmenu">
    <h2>WELCOME TO WAYPALACE GARAGE SERVICES</h2>
        <marquee behavior="scroll" direction="left" id="myMarquee">
            <h1>TO OUR ESTEEMED CUSTOMERS PLEASE NOTE THAT THE FINAL CHARGES OF THE SERVICE WILL BE COMMUNICATED AFTER SERVICE.</h1>
        </marquee>
    </div>

    <script>
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
