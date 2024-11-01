<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number1 = $_POST['number1'];
    $number2 = $_POST['number2'];
    $operation = $_POST['operation'];
    $result = "";

    switch ($operation) {
        case 'add':
            $result = $number1 + $number2;
            break;
        case 'subtract':
            $result = $number1 - $number2;
            break;
        case 'multiply':
            $result = $number1 * $number2;
            break;
        case 'divide':
            if ($number2 != 0) {
                $result = $number1 / $number2;
            } else {
                $result = "Error: Division by zero.";
            }
            break;
        default:
            $result = "Invalid operation.";
    }

    echo "<h1>Result</h1>";
    echo "<p>Result of $number1 and $number2 with operation $operation: $result</p>";
    echo '<a href="calculator.html">Go back</a>';
}
?>