<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
<style>
    #header {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        z-index: 1000;
        /* Ensure the header appears above other content */
    }

    .content {
        margin-top: 100px;
        /* Adjust margin top to accommodate the fixed header */
        /* Other styles for your content */
    }
</style>

<div id="header">
    <div class="menu-bar">
        <div class="menu-toggle">
            <i class="fa fa-bars"> Menu</i>
        </div>
        <ul class="top">
            <?php
            // Check if the current page is not admin.php
            $current_page = basename($_SERVER['PHP_SELF']);
            if ($current_page !== 'admin.php') {
                // Display "Home" link if the current page is not admin.php
                echo '<li class="active"><a href="#"><i class="fa fa-home"></i> Home</a></li>';
            }

            // Display "About us" link if the current page is clientpage.php
            if ($current_page === 'clientpage.php') {
                echo '<li class="active"><a href="#"><i class="fa fa-user"></i> About us</a>
                <div class="sub-menu-1">
                    <ul>
                        <li><a href="#"> Mission</a></li>
                        <li><a href="#"> Vision</a></li>
                        <li><a href="#"> Team</a></li>
                    </ul>
                </div>
            </li>';
            }
            ?>
            <li class="active"><a href="../html/clientpage.php"><i class="bi bi-droplet-half"></i></i> Carwash</a></li>
            <li class="active"><a href="../html/parking.php"><i class="bi bi-p-circle"></i></i> Parking</a></li>
            <li class="active"><a href="../html/garage.php"><i class="fa-solid fa-wrench"></i></i> Garage</a></li>
            <li class="active"><a href="../html/cafe.php"><i class="fa-solid fa-mug-saucer"></i></i></i> Cafe</a></li>
            <?php
            // Check if the current page is home.php
            if ($current_page === 'home.php') {
                echo '<li class="active"><a href="../html/signup.php"><i class="fa-solid fa-user-plus"></i></i> SIGNUP</a></li>';
                echo '<li class="active"><a href="../html/login.php"><i class="fa-solid fa-user-plus"></i></i> LOGIN</a></li>';
            }
            ?>

            <?php
            // Check if the current page is admn.php
            if ($current_page === 'admin.php') {
                echo '<li class="active"><a href="../html/adduser.php"><i class="fa-solid fa-user-plus"></i></i> ADD USER</a></li>';
                echo '<li class="active"><a href="../html/price.php"><i class="fa-solid fa-user-plus"></i></i> PRICE</a></li>';
            }
            ?>


            <?php
            // Check if the current page is not home.php
            if ($current_page !== 'home.php') {
                echo '<li class="active"><a href="off#"><i class="fa-solid fa-user-plus"></i></i> SIGNOFF</a></li>';
            }
            ?>
        </ul>
    </div>
</div>
<script>
    // Get the header element
    const header = document.getElementById('header');
    // Get the initial offset position of the header
    const sticky = header.offsetTop;

    // Function to add sticky class to header when scrolling
    function stickHeader() {
        if (window.pageYOffset > sticky) {
            header.classList.add("sticky");
        } else {
            header.classList.remove("sticky");
        }
    }

    // When the user scrolls the page, execute stickHeader function
    window.onscroll = function() {
        stickHeader();
    };
</script>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>