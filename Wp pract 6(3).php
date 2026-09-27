<!DOCTYPE html>
<html>
<head>
    <title>Simple Calculator Using PHP</title>
</head>

<body>

    <h1>Simple Calculator</h1>

    <form method="post">

        Enter First Number:
        <input type="number" name="num1" required>
        <br><br>

        Enter Second Number:
        <input type="number" name="num2" required>
        <br><br>

        <input type="submit" name="calculate" value="Calculate">

    </form>

    <?php

    if (isset($_POST['calculate'])) {

        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];

        echo "<h3>Results:</h3>";

        echo "Addition: " . ($num1 + $num2) . "<br>";
        echo "Subtraction: " . ($num1 - $num2) . "<br>";
        echo "Multiplication: " . ($num1 * $num2) . "<br>";

        if ($num2 != 0) {
            echo "Division: " . ($num1 / $num2) . "<br>";
        } else {
            echo "Division: Cannot divide by zero.<br>";
        }
    }

    ?>

</body>
</html>