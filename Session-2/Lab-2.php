<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$sum = $num1 + $num2;
} else {
    $sum = "No numbers provided";
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
            <p>The sum is <?php echo $sum ?></p>
        </div>
    </div>
</body>
</html>
