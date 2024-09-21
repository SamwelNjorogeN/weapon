<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../images/icons/price.png" type="image/x-icon">
    <title>Prices</title>
    <link rel="stylesheet" href="../css/prices.css">
</head>

<body>
    <h2>Add Prices for Services</h2>
    <form action="../php/prices.php" method="POST">
        <label for="soft-cloth-wash">Hand Wash</label>
        <input type="number" id="hand-wash" name="HandWash" placeholder="Enter price for Hand Wash" value="<?php echo $defaultHandWash; ?>">
        <label for="soft-cloth-wash">Soft-Cloth Wash</label>
        <input type="number" id="soft-cloth-wash" name="SoftClothWash" placeholder="Enter price for Soft Cloth cloth" value="<?php echo $defaultSoftClothWash; ?>">
        <label for="self-service-wash">Self-Service Wash </label>
        <input type="number" id="self-service-wash" name="SelfServiceWash" placeholder="Enter price for Self Service" value="<?php echo $defaultSelfServiceWash; ?>">
        <label for="detailing-service">Detailing Service</label>
        <input type="number" id="detailing-service" name="DetailingService" placeholder="Enter price for Detailing Service" value="<?php echo $defaultDetailingService; ?>">
        <label for="automatic-touchless-wash">Automatic/Touchless Wash</label>
        <input type="number" id="automatic-touchless-wash" name="AutomaticTouchlessWash" placeholder="Enter price for Automatic Touchless" value="<?php echo $defaultAutomaticTouchlessWash; ?>">
        <label for="undercarriage-wash">Undercarriage Wash</label>
        <input type="number" id="undercarriage-wash" name="UndercarriageWash" placeholder="Enter price for Under Carriage" value="<?php echo $defaultUndercarriageWash; ?>">
        <label for="wheel-cleaning">Wheel Cleaning</label>
        <input type="number" id="wheel-cleaning" name="WheelCleaning" placeholder="Enter price for wheel Cleaning" value="<?php echo $defaultWheelCleaning; ?>">
        <label for="bug-tar-removal">Bug & Tar Removal</label>
        <input type="number" id="bug-tar-removal" name="BugTarRemoval" placeholder="Enter price for Bug Tar Removal" value="<?php echo $defaultBugTarRemoval; ?>">
        <label for="eco-friendly-wash">Eco Friendly Wash</label>
        <input type="number" id="eco-friendly-wash" name="EcoFriendlyWash" placeholder="Enter price for Eco Friendly" value="<?php echo $defaultEcoFriendlyWash; ?>">
        <label for="express-wash">Express Wash</label>
        <input type="number" id="express-wash" name="ExpressWash" placeholder="Enter price Express Wash" value="<?php echo $defaultExpressWash; ?>">
        <div class="but"><button type="submit">Submit</button></div>
    </form>
</body>

</html>