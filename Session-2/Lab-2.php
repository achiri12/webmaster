<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
    <style>
        body { font-family: Arial, sans-serif; background: #eef; padding: 20px; }
        .calculator { background: #fff; padding: 20px; border-radius: 8px; max-width: 300px; margin: auto; }
        input { width: 100%; padding: 10px; margin: 5px 0; }
    </style>
</head>
<body>
    <div class="calculator">
        <h2>Calculator</h2>
        <form action="calculator.php" method="POST">
            <input type="number" name="num1" placeholder="First number" required>
            <input type="number" name="num2" placeholder="Second number" required>
            <button type="submit">Add</button>
        </form>
    </div>
</body>
</html>
