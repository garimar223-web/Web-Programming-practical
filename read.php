
<!DOCTYPE html>
<html>

<head>

    <title>Read Technology Information</title>

</head>

<body>

<h2>Technology Suggestions</h2>

<?php

// Checking whether the file exists

if (file_exists("technology.txt"))
{

    // Opening the file in read mode

    $file = fopen("technology.txt", "r");


    // Reading the file line by line

    while (!feof($file))
    {

        $line = fgets($file);

        echo $line . "<br>";

    }


    // Closing the file

    fclose($file);

}

else
{

    echo "The technology.txt file does not exist.";

}

?>

</body>

</html>