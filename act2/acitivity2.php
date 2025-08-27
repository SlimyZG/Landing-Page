<?php
session_start(); // Start the session to store array between requests

$maxSize = 10;

// Initialize fruits array in session if not set
if (!isset($_SESSION['fruits'])) {
    $_SESSION['fruits'] = ["apple", "banana"];
}

// Handle form submission
if (isset($_GET['fruit']) && !empty(trim($_GET['fruit']))) {
    $newFruit = trim($_GET['fruit']);

    // Only add if array size is less than maxSize
    if (count($_SESSION['fruits']) < $maxSize) {
        $_SESSION['fruits'][] = $newFruit;
    } else {
        $error = "Sorry, the array is full. Maximum size is $maxSize.";
    }
}
?>

<form method="GET" action="">
    Enter a fruit: <input type="text" name="fruit" />
    <input type="submit" value="Submit" />
</form>

<?php if (!empty($error)) : ?>
    <p style="color: red;"><?php echo htmlspecialchars($error); ?></p>
<?php endif; ?>

<?php if (!empty($_SESSION['fruits'])): ?>
    <h3>Array contents:</h3>
    <?php
        // Display each fruit on its own line
        foreach ($_SESSION['fruits'] as $fruit) {
            echo htmlspecialchars($fruit) . "<br>";
        }
    ?>
    <br>
    <strong>Array size: <?php echo count($_SESSION['fruits']); ?></strong>
<?php endif; ?>
