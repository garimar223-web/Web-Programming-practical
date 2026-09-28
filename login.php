
<?php

// Starting the session

session_start();


// Getting username and password from the form

$username = $_POST["username"];

$password = $_POST["password"];


// Checking login credentials

if ($username == "admin" && $password == "1234")
{

    // Creating session

    $_SESSION["username"] = $username;


    echo "<h2>Login Successful!</h2>";

    echo "Welcome, " . $_SESSION["username"] . "<br><br>";

    echo "<a href='suggest.php'>Go to Technology Suggestion Form</a>";

}

else
{

    echo "<h2>Invalid Login!</h2>";

    echo "Username or password is incorrect.<br><br>";

    echo "<a href='login.html'>Try Again</a>";

}

?>