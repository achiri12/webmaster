<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date & Time Display</title>
    <style>
        body { font-family: Arial, sans-serif; background: #fff; padding: 20px; text-align: center; }
        .datetime { font-size: 1.5em; color: #333; }
    </style>
</head>
<body>
    <div class="datetime">
        <h1>Current Date & Time</h1>
        <?php
        date_default_timezone_set('UTC');
        $currentDateTime = date('Y-m-d H:i:s');
        echo "<p>$currentDateTime</p>";
    ?>
    </div>
</body>
</html>

