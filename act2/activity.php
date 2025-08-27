<?php 
    $input_text = "";
    $cases = [];

    function changeCase($text) {
        $trimmed = trim($text);
        $lowered = strtolower($trimmed);

        return [
            'Original'                     => $text,
            'UPPERCASE'                    => strtoupper($trimmed),
            'lowercase'                    => $lowered,
            'Capitalize First Letter'      => ucfirst($lowered),
            'Capitalize Each Word (ucwords)' => ucwords($lowered),
            'Trimmed'                      => $trimmed,
        ];
    }

    if (isset($_GET["input_text"]) && !empty($_GET["input_text"])) {
        $input_text = $_GET["input_text"];
        $cases = changeCase($input_text);
    }
?>

<form action="activity.php" method="GET">
    Input: <input type="text" name="input_text" value="<?php echo htmlspecialchars($input_text); ?>"><br><br>
    <input type="submit" value="Submit">
</form>

<?php if (!empty($cases)) : ?>
    <h3>Text Transformations:</h3>
    <ul>
        <?php foreach ($cases as $label => $value) : ?>
            <li><strong><?php echo $label; ?>:</strong> <?php echo htmlspecialchars($value); ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>
