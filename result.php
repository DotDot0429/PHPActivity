<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $a = $_POST["a"];
    $b = $_POST["b"];
    $c = $_POST["c"];

    // Discriminant formula: D = b^2 - 4ac
    $discriminant = ($b * $b) - (4 * $a * $c);

    echo "<p><strong>" . $discriminant . "</strong></p>";
} else {
    echo "<p>No data received. Please go back and submit the form.</p>";
}
?>

<br>
<a href="index.php">Go Back</a>

</body>
</html>
