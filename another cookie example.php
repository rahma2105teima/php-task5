<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];

    
    if (isset($_POST['remember_me'])) {
        setcookie('remembered_user', $username, time() + (86400 * 30), "/"); 
        echo "Cookie set for user: $username<br>";
    } else {
        
        setcookie('remembered_user', '', time() - 3600, "/");
        echo "Cookie cleared.<br>";
    }
}


$rememberedUser = $_COOKIE['remembered_user'] ?? '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie Example</title>
</head>
<body>
    <h1>Login</h1>
    <form method="POST">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" value="<?php echo htmlspecialchars($rememberedUser); ?>" required>
        <br><br>
        <label>
            <input type="checkbox" name="remember_me" <?php if ($rememberedUser) echo 'checked'; ?>>
            Remember Me
        </label>
        <br><br>
        <button type="submit">Login</button>
    </form>
</body>
</html>
