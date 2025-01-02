<?php

session_start();


$_SESSION['username'] = 'Rahma';
$_SESSION['user_role'] = 'Admin';

echo "Username: " . $_SESSION['username'] . "<br>";
echo "Role: " . $_SESSION['user_role'] . "<br>";

if (isset($_GET['logout'])) {
    session_unset(); 
    session_destroy(); 
    echo "Session destroyed.";
}
?>
