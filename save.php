
<!DOCTYPE html>
<html>

<head>

    <title>Save Technology Suggestion</title>

</head>

<body>

<?php

// Getting data submitted from the form

$technology = $_POST["technology"];

$category = $_POST["category"];

$reason = $_POST["reason"];


// Creating the data to be stored in the file

$data = "Technology Name: " . $technology . "\n";

$data .= "Technology Category: " . $category . "\n";

$data .= "Reason for Suggestion: " . $reason . "\n";

$data .= "----------------------------------------\n";


// Opening technology.txt file in append mode

$file = fopen("technology.txt", "a");


// Writing data into the file

fwrite($file, $data);


// Closing the file

fclose($file);


// Displaying confirmation message

echo "<h2>Technology Suggestion Saved Successfully!</h2>";

echo "The submitted information has been saved in technology.txt.";

?>

</body>

</html>