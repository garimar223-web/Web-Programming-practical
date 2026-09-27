<!DOCTYPE html>
<html>
<head>
    <title>Mathematical Operations</title>
</head>

<body>

    <h1>Mathematical Operations Using PHP</h1>

    <?php

        // Declare two numbers
        $num1 = 20;
        $num2 = 10;

        // Perform mathematical operations
        $addition = $num1 + $num2;
        $subtraction = $num1 - $num2;
        $multiplication = $num1 * $num2;
        $division = $num1 / $num2;

        // Display results
        echo "<h3>Results:</h3>";

        echo "Addition: " . $addition . "<br>";
        echo "Subtraction: " . $subtraction . "<br>";
        echo "Multiplication: " . $multiplication . "<br>";
        echo "Division: " . $division . "<br>";

    ?>

</body>
</html>