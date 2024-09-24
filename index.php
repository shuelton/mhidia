<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Instagram Clone</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="login-form">
            <img src="logo.png" alt="Instagram Logo" class="logo">
            <form action="login.php" method="POST">
                <input type="text" name="username" placeholder="Username" required>
                <input type="password" name="password" placeholder="Password" required>
                <button type="submit">Log In</button>
            </form>
            <div class="or-divider">
                <span class="line"></span>
                <span class="or-text">OR</span>
                <span class="line"></span>
            </div>
            <button class="fb-login">Log in with Facebook</button>
            <a href="#" class="forgot-password">Forgot password?</a>
        </div>
        <div class="signup-link">
            <p>Don't have an account? <a href="register.php">Sign up</a></p>
        </div>
    </div>
</body>
</html>
