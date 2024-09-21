<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Receipt</title>
    <link rel="shortcut icon" href="../images/icons/Receipt.png" type="image/x-icon">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bangers|Roboto">
    <link rel="stylesheet" href="../css/receipt.css">
    <style>
        /* Your additional styles here */
        .head img {
            height: 100px;
        }

        .receipt {
            padding: 3mm;
            width: 300px;
            border: 1px solid black;
            justify-content: center;
            font-size: 12px;
            margin-top: 30px;
            margin-left: 30px   ;

        }

        .keepIt,
        .headerSubTitle {
            display: flex;
            margin: 0.5em;
            font-weight: bolder;
            justify-content: center;
        }

        .head {
            text-align: center;
        }

        #location {
            display: flex;
            flex-direction: column;
            margin-left: 30px;
            margin-top: 30px;
            font-size: 14px;
        }

        #location label {
            margin-right: 10px;
        }

        #location div {
            margin-bottom: 10px;
            display: flex;
            align-items: flex-start;
        }

        #PrintButton {
            float: right;
            margin-right: 100px;
            margin-top: 100px;
            border-radius: 30px;
            outline: none;
            border: none;

        }

        .keepItBody,
        strong {
            font-size: 10px;
        }

        button {
            width: 150px;
            height: 40px;
            background: linear-gradient(to right, green, yellow);
            color: white;
            font-weight: bolder;
            cursor: pointer;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            text-align: center;
            font-size: 12px;
            border: none;
        }

        tr {
            border: none;
        }

        .paymentID img{
            height: 30px;

        }
    </style>
</head>

<body>

    <div class="download">
        <button id="PrintButton" onClick="PrintPage()">Save To Device</button>
    </div>
    <div class="receipt">
    <!-- Display paymentID here -->
    <div class="paymentID">
        <img src="../images/icons/waypalace.png" alt="" srcset="">
    </div>
        <div class="headerTitle">
            WAYPALACE
        </div>
        <div class="head">
            <img src="../images/icons/fav.png" alt="">
        </div>
        <div class="headerSubTitle">
            With Waypalace We Shine Together
        </div>
        <div id="location">
            <div><label for="">Email:</label> waypalace@gmail.com</div>
            <div><label for="">Phone Number:</label> +254793878068</div>
            <div><label for="">Location:</label> Rwika, Embu</div>
        </div>
        <div id="date"> </div>
        <svg id="barcode"></svg>
        <div class="keepIt">
            Keep your receipt!
        </div>
        <div class="keepItBody">
            This original receipt is required to be provided to the receptionist or to the person who Will give you back your Car after washing/parking faillure to produce this receipt or loss of receipt the owner will be charged extra <strong>KSH 200</strong> inorder for their receipt tobe reproduce again. This measure is put in place to make both the client and owner responsible. Thank You For Choosing Waypalace Car Wash.
        </div>
        <hr>

        <!-- Client Details and task offered -->
        <table border="3">
            <thead>
                <th>Client</th>
                <th>Service</th>
                <th>Car</th>
                <th>Amount</th>
            </thead>
            <tbody id="paymentDetails"><?php
                                        include '../php/connect.php'; // Make sure this includes the file with your database connection

                                        $paymentID = "";
                                        $clientName = "";
                                        $task = "";
                                        $regno= "";
                                        $amount = "";

                                        // Fetch the latest payment record
                                        $stmt_select = $conn->prepare("SELECT * FROM payment ORDER BY paymentID DESC LIMIT 1");

                                        // Check if the prepare() succeeded
                                        if ($stmt_select === false) {
                                            $errorMsg = "Prepare failed: " . $conn->error;
                                        } else {
                                            // Execute the query
                                            $executeResult = $stmt_select->execute();

                                            // Check if execute() succeeded
                                            if ($executeResult === false) {
                                                $errorMsg = "Execute failed: " . $stmt_select->error;
                                            } else {
                                                // Get the result set
                                                $result = $stmt_select->get_result();

                                                // Check if any rows were returned
                                                if ($result->num_rows > 0) {
                                                    // Fetch the row
                                                    $row = $result->fetch_assoc();
                                                    $paymentID = $row['paymentID'];
                                                    $clientName = $row['fname'] . ' ' . $row['lname'];
                                                    $task = $row['task'];
                                                    $regno =$row['regno'];
                                                    $amount = $row['paidamount'];
                                                } else {
                                                    // Set error message if no records found
                                                    $errorMsg = "No Records Found";
                                                }
                                            }
                                            // Close the statement
                                            $stmt_select->close();
                                        }

                                        // Close the database connection
                                        $conn->close();
                                        ?>

                <!-- Error message display -->
                <?php if (!empty($errorMsg)) : ?>
                    <div style="color: red; text-align: center;"><?php echo $errorMsg; ?></div>
                <?php endif; ?>

                <tr>
                    <td><?php echo $clientName; ?></td>
                    <td><?php echo $task; ?></td>
                    <td><?php echo $regno; ?></td> <!-- You can fill this with car details if needed -->
                    <td><?php echo $amount; ?></td>
                </tr>
            </tbody>
        </table>

        <!-- Totals -->
        <hr>
        <div class="flex">
            <div id="qrcode"></div>
        </div>

        <div class="footer">
            <div class="printType">Thank You For Choosing Waypalace</div>
        </div>
    </div>

    <!-- Error message display -->
    <?php if (!empty($errorMsg)) : ?>
        <div style="color: red; text-align: center;"><?php echo $errorMsg; ?></div>
    <?php endif; ?>

    <script>
        // Get current date and time
        var currentDate = new Date();
        // Format date
        var formattedDate = currentDate.toLocaleString('en-US', {
            weekday: 'long',
            month: 'short',
            day: 'numeric',
            year: 'numeric',
            hour: 'numeric',
            minute: 'numeric',
            second: 'numeric',
            timeZoneName: 'short'
        });
        // Update the content of the element with id 'date'
        document.getElementById('date').textContent = formattedDate;


        function PrintPage() {
            // Hide print button before printing
            var printButton = document.getElementById("PrintButton");
            printButton.style.visibility = 'hidden';

            // Print the receipt content
            window.print();

            // Show print button after printing
            printButton.style.visibility = 'visible';
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/jsbarcode@3.8.0/dist/barcodes/JsBarcode.code128.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/davidshimjs-qrcodejs@0.0.2/qrcode.min.js"></script>
    <script src="../js/receipt.js"></script>

</body>

</html>