<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic Calculator</title>
</head>
<body>
    <h1>Simple Calculator</h1>
    <form action="calculator.php" method="post">
        <label for="number1">Number 1:</label>
        <input type="number" name="number1" required>
        
        <label for="number2">Number 2:</label>
        <input type="number" name="number2" required>

        <label for="operation">Operation:</label>
        <select name="operation" required>
            <option value="add">Addition (+)</option>
            <option value="subtract">Subtraction (-)</option>
            <option value="multiply">Multiplication (×)</option>
            <option value="divide">Division (÷)</option>
        </select>

        <button type="submit">Calculate</button>
    </form>
</body>
</html>