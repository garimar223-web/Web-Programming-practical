<?php

// Checking whether the form has been submitted

if ($_SERVER["REQUEST_METHOD"] == "POST")
{

    // Getting the selected technology category

    $category = $_POST["category"];


    // Creating a cookie

    // Cookie will remain for 30 days

    setcookie(
        "preferredTechnology",
        $category,
        time() + (86400 * 30)
    );


    echo "Your preferred technology category has been saved.";

    echo "<br><br>";

}


// Checking whether the cookie already exists

if (isset($_COOKIE["preferredTechnology"]))
{

    echo "<h3>Welcome Back!</h3>";

    echo "Your preferred technology category is: ";

    echo $_COOKIE["preferredTechnology"];

}

?>

<!DOCTYPE html>
<html>

<head>

    <title>Technology Preference</title>

</head>

<body>

<h2>Select Your Preferred Technology</h2>

<form method="post">

    <label>Technology Category:</label>

    <br><br>

    <select name="category">

        <option value="Artificial Intelligence">
            Artificial Intelligence
        </option>

        <option value="Software Technology">
            Software Technology
        </option>

        <option value="Cyber Security">
            Cyber Security
        </option>

        <option value="Cloud Computing">
            Cloud Computing
        </option>

        <option value="Healthcare Technology">
            Healthcare Technology
        </option>

    </select>

    <br><br>

    <input type="submit"
           value="Save Preference">

</form>

</body>

</html>