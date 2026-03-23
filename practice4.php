<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication Table</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav>
        <a href="index.html">Home</a>
        <a href="practice1.html">Practice 1</a>
        <a href="practice2.html">Practice 2</a>
        <a href="practice3.html">Practice 3</a>
        <a href="practice4.php">Practice 4</a>
    </nav>

    <h1>Multiplication Table</h1>

    <form method="get" style="margin-bottom: 20px;">
        <label>Enter number: <input type="number" name="n" value="<?php echo isset($_GET['n']) ? htmlspecialchars($_GET['n']) : '10'; ?>" min="1" max="20"></label>
        <button type="submit">Generate</button>
    </form>

    <?php
    $n = 10;
    if (isset($_GET["n"]) && is_numeric($_GET["n"])) {
        $n = (int)$_GET["n"];
        if ($n < 1) $n = 1;
        if ($n > 20) $n = 20;
    }
    ?>

    <table style="margin-top: 15px;">
    <tr>
        <td></td>
        <?php for ($j = 1; $j <= $n; $j++) echo "<td><strong>" . $j . "</strong></td>"; ?>
    </tr>
    <?php
    for ($i = 1; $i <= $n; $i++) {
        echo "<tr>";
        echo "<td><strong>" . $i . "</strong></td>";
        for ($j = 1; $j <= $n; $j++) {
            echo "<td>" . ($i * $j) . "</td>";
        }
        echo "</tr>";
    }
    ?>
    </table>
</body>
</html>
