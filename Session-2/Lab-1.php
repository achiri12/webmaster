<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Greeting Page</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f9f9f9; padding: 20px; }
        .container { background: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 0 10px rgba(0,0,0,0.1); }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome!</h1>
    <?php
    if (isset($_GET['name'])){
        $name = htmlspecialchars(string: $_GET['name']);
        echo "<p> Hello $name </p>";
    } else {
        $name = 'Guest';
        echo "<p> Hello $name </p>";
    }
    ?>
    </div>
</body>
</html>
