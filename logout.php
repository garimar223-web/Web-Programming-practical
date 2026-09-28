<?php

// Starting the session

session_start();


// Destroying the session

session_destroy();


// Returning the user to login page

header("Location: login.html");

exit();

?>