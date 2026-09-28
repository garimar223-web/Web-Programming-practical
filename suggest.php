
<?php

// Starting the session

session_start();


// Checking whether the user is logged in

if (!isset($_SESSION["username"]))
{

    // If session does not exist,
    // redirect user to login page

    header("Location: login.html");

    exit();

}

?>

<!DOCTYPE html>
<html>

<head>

    <title>Technology Suggestion</title>

</head>

<body>

<h2>Technology Suggestion Form</h2>

<?php

echo "Welcome, " . $_SESSION["username"];

?>

<br><br>

<form action="save.php" method="post">

    <label>Technology Name:</label>

    <br>

    <input type="text"
           name="technology"
           required>

    <br><br>


    <label>Technology Category:</label>

    <br>

    <input type="text"
           name="category"
           required>

    <br><br>


    <label>Reason for Suggestion:</label>

    <br>

    <textarea name="reason"
              rows="5"
              cols="40"
              required></textarea>

    <br><br>


    <input type="submit"
           value="Submit Suggestion">

</form>

<br>

<a href="logout.php">Logout</a>

</body>

</html>