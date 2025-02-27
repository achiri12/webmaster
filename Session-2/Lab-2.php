<?php
$sum = "";
$message = "Enter any two numbers";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = isset($_POST['num1']) ? $_POST['num1'] : 0;
    $num2 = isset($_POST['num2']) ? $_POST['num2'] : 0;
    $sum = $num1 + $num2;
    session_start();
    $_SESSION['sum'] = $sum;
    header("Location: " . $_SERVER['PHP_SELF']);
    exit;
}
session_start();
if (isset($_SESSION['sum'])) {
    $sum = $_SESSION['sum'];
    unset($_SESSION['sum']);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
    <style>
        body { font-family: Arial, sans-serif; background: #eef; padding: 20px; }
        .calculator { background: #fff; padding: 20px; border-radius: 8px; max-width: 300px; margin: auto; }
        input { width: 90%; padding: 10px; margin: 5px 0; }
    </style>
</head>
<body>
    <div class="calculator">
        <h2>Calculator</h2>
        <form action="Lab-2.php" method="POST">
            <input type="number" name="num1" placeholder="First number" required>
            <input type="number" name="num2" placeholder="Second number" required>
            <button type="submit">Add</button>
        </form>
        <div>
        <?php if ($sum !== ""): ?>
        <h3>The sum is: <?php echo $sum; ?></h3>
    <?php endif; ?>
    <p><?php echo $message; ?></p>
        </div>
    </div>
</body>
</html>
