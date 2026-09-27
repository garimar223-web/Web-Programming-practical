<!DOCTYPE html>
<html>
<head>
    <title>Technology Suggestion Form</title>
</head>

<body>

    <h1>Technology Suggestion Form</h1>

    <form method="post">

        Name:
        <input type="text" name="name" required>
        <br><br>

        Technology:
        <input type="text" name="technology" required>
        <br><br>

        Category:
        <input type="text" name="category" required>
        <br><br>

        Suggestion:
        <textarea name="suggestion" required></textarea>
        <br><br>

        <input type="submit" name="submit" value="Submit">

    </form>

    <?php

    if (isset($_POST['submit'])) {

        $name = $_POST['name'];
        $technology = $_POST['technology'];
        $category = $_POST['category'];
        $suggestion = $_POST['suggestion'];

        echo "<h3>Submitted Information:</h3>";

        echo "Name: " . $name . "<br>";
        echo "Technology: " . $technology . "<br>";
        echo "Category: " . $category . "<br>";
        echo "Suggestion: " . $suggestion . "<br>";
    }

    ?>

</body>
</html>