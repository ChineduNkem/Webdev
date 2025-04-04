<?php
require_once 'config.php';
session_start();

// Redirect if already logged in
if (isset($_SESSION['Active']) && $_SESSION['Active'] === true) {
    header("Location: index.php");
    exit;
}

$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($_POST['Username'] === $Username && $_POST['Password'] === $Password) {
        $_SESSION['Username'] = $Username;
        $_SESSION['Active'] = true;
        header("Location: index.php");
        exit;
    } else {
        $error = 'Invalid username or password';
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="../css/stylesheet.css">
    <style>
        .login-form {
            width: 300px;
            margin: 50px auto;
            padding: 20px;
            border: 1px solid #ddd;
        }
        .error { color: red; }
    </style>
</head>
<body>
    <div class="login-form">
        <h2>Login</h2>
        <?php if ($error): ?>
            <p class="error"><?php echo $error; ?></p>
        <?php endif; ?>
        <form method="post">
            <div>
                <label>Username:</label>
                <input type="text" name="Username" required>
            </div>
            <div>
                <label>Password:</label>
                <input type="password" name="Password" required>
            </div>
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>