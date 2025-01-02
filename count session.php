<?php

session_start();


if (isset($_SESSION['page_count'])) {

    $_SESSION['page_count'] += 1;
} else {
    
    $_SESSION['page_count'] = 1;
}

echo "You have visited this page " . $_SESSION['page_count'] . " times.";


if (isset($_GET['reset'])) {
    session_unset(); 
    session_destroy(); 
    echo "<br>Page count reset.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Count</title>
</head>
<body>
    <br><a href="?reset=true">Reset Page Count</a>
</body>
</html>
