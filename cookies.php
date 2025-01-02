<?php

setcookie('user_language', 'English', time() + (86400 * 30), "/"); 


if (isset($_COOKIE['user_language'])) {
    echo "Preferred Language: " . $_COOKIE['user_language'] . "<br>";
} else {
    echo "Language preference not set.<br>";
}

// Delete a cookie
if (isset($_GET['delete_cookie'])) {
    setcookie('user_language', '', time() - 3600, "/"); 
    echo "Cookie deleted.";
}
?>
