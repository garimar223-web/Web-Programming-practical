<!DOCTYPE html>
<html>

<head>

    <title>Validate and Sanitize User Input</title>

</head>

<body>

<h2>User Information Form</h2>

<form method="post"
      action="">

    <label>Name:</label>

    <br>

    <input type="text"
           name="name"
           required>

    <br><br>


    <label>Email Address:</label>

    <br>

    <input type="text"
           name="email"
           required>

    <br><br>


    <label>Age:</label>

    <br>

    <input type="text"
           name="age"
           required>

    <br><br>


    <label>Website URL:</label>

    <br>

    <input type="text"
           name="website"
           required>

    <br><br>


    <label>IP Address:</label>

    <br>

    <input type="text"
           name="ip"
           required>

    <br><br>


    <input type="submit"
           name="submit"
           value="Submit">

</form>

<br>

<?php

if (isset($_POST["submit"]))
{

    // Sanitizing the name

    $name = filter_input(
        INPUT_POST,
        "name",
        FILTER_SANITIZE_STRING
    );


    // Validating the email address

    $email = filter_input(
        INPUT_POST,
        "email",
        FILTER_VALIDATE_EMAIL
    );


    // Validating the age

    $age = filter_input(
        INPUT_POST,
        "age",
        FILTER_VALIDATE_INT
    );


    // Validating the website URL

    $website = filter_input(
        INPUT_POST,
        "website",
        FILTER_VALIDATE_URL
    );


    // Validating the IP address

    $ip = filter_input(
        INPUT_POST,
        "ip",
        FILTER_VALIDATE_IP
    );


    // Displaying Name

    echo "<h3>Submitted Information</h3>";

    echo "Name: ";

    echo htmlspecialchars($name);

    echo "<br><br>";


    // Displaying Email

    echo "Email Address: ";

    if ($email !== false)
    {
        echo $email;
    }
    else
    {
        echo "Invalid Email Address";
    }

    echo "<br><br>";


    // Displaying Age

    echo "Age: ";

    if ($age !== false)
    {
        echo $age;
    }
    else
    {
        echo "Invalid Age";
    }

    echo "<br><br>";


    // Displaying Website

    echo "Website URL: ";

    if ($website !== false)
    {
        echo $website;
    }
    else
    {
        echo "Invalid Website URL";
    }

    echo "<br><br>";


    // Displaying IP Address

    echo "IP Address: ";

    if ($ip !== false)
    {
        echo $ip;
    }
    else
    {
        echo "Invalid IP Address";
    }

}

?>

</body>

</html>