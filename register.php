<?php
    include("includes/classes/Account.php");

    $account = new Account();

    include("includes/handlers/register-handler.php");
    include("includes/handlers/login-handler.php");
?>
<html>
<head>
    <title>Welcome to Esciproject</title>
</head>
<body>

    <div id="inputConteiner">
        <form id="loginForm" action="register.php" methon="POST">
            <h2>Login to your account<h2>
            <p>
                <label for="loginUsername">Username<label>
                <input id="loginUsername" name="loginUsername" type="text" placeholder="login here" required>
            </p>
            <p>
                <laber for="loginPassword">Password</label>
                <input id="loginPassword" name="loginPassword" type="password" required>
            </p>

            <button typo="submit" name="loginButton">LOG IN</button>
        </form>
        <form id="registerForm" action="register.php" methon="POST">
            <h2>Create your account<h2>
            <p>
                <label for="username">Username<label>
                <input id="username" name="username" type="text" placeholder="" required>
            </p>
            <p>
                <label for="firstName">First name<label>
                <input id="firstName" name="firstName" type="text" placeholder="" required>
            </p>
            <p>
                <label for="lastName">Last name<label>
                <input id="lastName" name="lastName" type="text" placeholder="" required>
            </p>
            <p>
                <label for="email">Email<label>
                <input id="email" name="email" type="email" placeholder="" required>
            </p>
            <p>
                <laber for="email2">Email</label>
                <input id="email2" name="email2" type="email" placeholder="" required>
            </p>
            <p>
                <laber for="password">Password</label>
                <input id="password" name="password" type="password" required>
            </p>
            <p>
                <laber for="password2">Confirm Password</label>
                <input id="password2" name="password2" type="password" required>
            </p>

            <button typo="submit" name="registerButton">SIGN UP</button>
        </form>
    </div>
</body>
</html>