<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperature Converter</title>
</head>
<body>
    <h1>Temperature Converter</h1>
    <form action="temperatureconverter.php" method="post">
        <label for="temperature">Temperature:</label>
        <input type="number" name="temperature" required>

        <label for="conversion">Convert:</label>
        <select name="conversion" required>
            <option value="celsius_to_fahrenheit">Celsius to Fahrenheit</option>
            <option value="fahrenheit_to_celsius">Fahrenheit to Celsius</option>
        </select>

        <button type="submit">Convert</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $temperature = $_POST['temperature'];
        $conversion = $_POST['conversion'];
        $convertedTemperature = "";

        if ($conversion == 'celsius_to_fahrenheit') {
            $convertedTemperature = ($temperature * 9/5) + 32;
            $unit = "Fahrenheit";
        } elseif ($conversion == 'fahrenheit_to_celsius') {
            $convertedTemperature = ($temperature - 32) * 5/9;
            $unit = "Celsius";
        }

        echo "<h2>Converted Temperature</h2>";
        echo "<p>$temperature degrees have been converted to $convertedTemperature degrees $unit.</p>";
        echo '<a href="temperatureconverter.php">Convert another temperature</a>';
    }
    ?>
</body>
</html>
