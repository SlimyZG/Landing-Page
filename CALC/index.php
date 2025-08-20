<?php
// Initialize variables
$x = isset($_GET['num1']) ? (float) $_GET['num1'] : 0;
$y = isset($_GET['num2']) ? (float) $_GET['num2'] : 0;
$result = 0;

// Functions for operations
function add($x, $y) {
    return $x + $y;
}

function sub($x, $y) {
    return $x - $y;
}

function mul($x, $y) {
    return $x * $y;
}

function div($x, $y) {
    if ($y != 0) {
        return $x / $y;
    } else {
        return "Cannot be divided by 0";
    }
}

// Check which operation is selected
if (isset($_GET['operation'])) {
    switch ($_GET['operation']) {
        case 'add':
            $result = add($x, $y);
            break;
        case 'sub':
            $result = sub($x, $y);
            break;
        case 'mul':
            $result = mul($x, $y);
            break;
        case 'div':
            $result = div($x, $y);
            break;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
</head>
<body>
    <form action="<?= $_SERVER["PHP_SELF"] ?>" method="get">
        <!-- Num1 -->
        <div>
            <label for="num1">Number 1:</label>
            <input type="number" name="num1" id="num1" value="<?= $x ?>" step="any">
        </div>
        <!-- Num2 -->
        <div>
            <label for="num2">Number 2:</label>
            <input type="number" name="num2" id="num2" value="<?= $y ?>" step="any">
        </div>
        <!-- Result -->
        <div>
            <label for="result">Result:</label>
            <input type="text" id="result" value="<?= $result ?>" readonly>
        </div>
        <!-- Operation Buttons -->
        <div>
            <input type="submit" value="ADDITION" name="operation">
            <input type="submit" value="SUBTRACTION" name="operation">
            <input type="submit" value="MULTIPLICATION" name="operation">
            <input type="submit" value="DIVISION" name="operation">
        </div>
    </form>
</body>
</html>
