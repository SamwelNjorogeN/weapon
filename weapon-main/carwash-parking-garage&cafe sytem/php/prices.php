<?php
include '../php/connect.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Initialize an array to store the fields and their corresponding new values
    $fieldsToUpdate = array();

    // Iterate through each POST field and check if it has a new value
    foreach ($_POST as $field => $value) {
        // Retrieve the current value of the field from the database
        $result = mysqli_query($conn, "SELECT $field FROM prices");
        $row = mysqli_fetch_assoc($result);
        $currentValue = $row[$field];

        // If the field has a new value and it differs from the current value, add it to the update array
        if (!empty($value) && $value != $currentValue) {
            $fieldsToUpdate[$field] = $value;
        }
    }

    // If there are fields to update, construct and execute the SQL query
    if (!empty($fieldsToUpdate)) {
        // Construct the SQL query dynamically based on the fields to update
        $query = "UPDATE prices SET ";
        foreach ($fieldsToUpdate as $field => $value) {
            $query .= "$field=?, ";
        }
        $query = rtrim($query, ", "); // Remove the trailing comma

        // Prepare the SQL query
        $stmt = $conn->prepare($query);

        // Bind parameters and values to the prepared statement
        $types = str_repeat('s', count($fieldsToUpdate));
        $stmt->bind_param($types, ...array_values($fieldsToUpdate));

        // Execute the statement
        if ($stmt->execute()) {
            echo "<div id='overlay' style='position: fixed; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0,0,0,0.5); z-index: 999; display: flex; justify-content: center; align-items: center;'>
                        <div style='background-color: white; padding: 20px; border-radius: 10px; text-align: center;'>
                            <h2 style='color: green;'>Prices have been updated successfully</h2>
                            <button class='login100-form-bgbtn' style='color: red; width: 100px; height: 30px; 
                            font-weight: bolder; border-radius: 30px; border: none; cursor: pointer; background: #a64bf4; background: -webkit-linear-gradient(right, #21d4fd, #b721ff, #21d4fd, #b721ff); background: -o-linear-gradient(right, #21d4fd, #b721ff, #21d4fd, #b721ff); background: -moz-linear-gradient(right, #21d4fd, #b721ff, #21d4fd, #b721ff); background: linear-gradient(right, #21d4fd, #b721ff, #21d4fd, #b721ff);'onclick=\"proceed()\">Dashboard</button>
                            <button class='login100-form-bgbtn' style='color: red; width: 100px; height: 30px; 
                            font-weight: bolder; border-radius: 30px; border: none; cursor: pointer; background: #a64bf4; background: -webkit-linear-gradient(right, #21d4fd, #b721ff, #21d4fd, #b721ff); background: -o-linear-gradient(right, #21d4fd, #b721ff, #21d4fd, #b721ff); background: -moz-linear-gradient(right, #21d4fd, #b721ff, #21d4fd, #b721ff); background: linear-gradient(right, #21d4fd, #b721ff, #21d4fd, #b721ff);'onclick=\"cancel()\">Continue</button>
                        </div>
                    </div>";
        } else {
            echo "<div id='overlay' style='position: fixed; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0,0,0,0.5); z-index: 999; display: flex; justify-content: center; align-items: center;'>
                        <div style='background-color: white; padding: 20px; border-radius: 10px; text-align: center;'>
                            <h2 style='color: red;'>Error updating prices</h2>
                            <button class='login100-form-bgbtn' style='color: red; width: 100px; height: 30px; 
                            font-weight: bolder; border-radius: 30px; border: none; cursor: pointer; background: #a64bf4; background: -webkit-linear-gradient(right, #21d4fd, #b721ff, #21d4fd, #b721ff); background: -o-linear-gradient(right, #21d4fd, #b721ff, #21d4fd, #b721ff); background: -moz-linear-gradient(right, #21d4fd, #b721ff, #21d4fd, #b721ff); background: linear-gradient(right, #21d4fd, #b721ff, #21d4fd, #b721ff);'onclick=\"cancel()\">OK</button>
                        </div>
                    </div>";
        }

        // Close the statement
        $stmt->close();
    } else {
        echo "<div id='overlay' style='position: fixed; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0,0,0,0.5); z-index: 999; display: flex; justify-content: center; align-items: center;'>
        <div style='background-color: white; padding: 20px; border-radius: 10px; text-align: center;'>
            <h2 style='color: red;'>No fields to update.</h2>
            <button class='login100-form-bgbtn' style='color: white; width: 100px; height: 30px; font-weight: bolder; border-radius: 30px; border: none; cursor: pointer; background: #a64bf4; background: -o-linear-gradient(right, #21d4fd, #b721ff, #21d4fd, #b721ff); background: -moz-linear-gradient(right, #21d4fd, #b721ff, #21d4fd, #b721ff); background: linear-gradient(right, #21d4fd, #b721ff, #21d4fd, #b721ff);'onclick=\"window.location.href = '../html/price.php';\">OK</button>
        </div>
    </div>";
    }
} else {
    // Handle case where form is not submitted
    echo "Contact The Admin To Solve The Error!!!";
}

// Close the database connection
$conn->close();
?>

<script>
    function proceed() {
        window.location.href = '../html/admin.php';
    }

    function cancel() {
        window.location.href = '../html/price.php';
    }
</script>
