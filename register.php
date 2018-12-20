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
        <form id="loginForm" action="register.php" method="POST">
            <h2>Login to your account</h2>
            <p>
                <label for="loginUsername">Username</label>
                <input id="loginUsername" name="loginUsername" type="text" placeholder="login here" required>
            </p>
            <p>
                <label for="loginPassword">Password</label>
                <input id="loginPassword" name="loginPassword" type="password" required>
            </p>

            <button typo="submit" name="loginButton">LOG IN</button>
        </form>
        <form id="registerForm" action="register.php" method="POST">
            <h2>Create your account</h2>
            <p>
                <?php echo $account->getError("Your username must be between 5-25 characters"); ?>
                <label for="username">Username<label>
                <input id="username" name="username" type="text" placeholder=" " required>
            </p>
            <p>
                <?php echo $account->getError("Your first name must be between 3-25 characters"); ?>
                <label for="firstName">First name<label>
                <input id="firstName" name="firstName" type="text" placeholder=" " required>
            </p>
            <p>
                <?php echo $account->getError("Your last name must be between 3-25 characters"); ?>
                <label for="lastName">Last name<label>
                <input id="lastName" name="lastName" type="text" placeholder=" " required>
            </p>
            <p>
                <?php echo $account->getError("Your emails don't match"); ?>
                <?php echo $account->getError("Your email is invalid"); ?>
                <label for="email">Email<label>
                <input id="email" name="email" type="email" placeholder=" " required>
            </p>
            <p>
                <label for="email2">Email</label>
                <input id="email2" name="email2" type="email" placeholder=" " required>
            </p>
            <p>
                <?php echo $account->getError("Your password don't match"); ?>
                <?php echo $account->getError("Password can contain only letters and numbers"); ?>
                <?php echo $account->getError("Your password have to be more than 6 characters"); ?>
                <label for="password">Password</label>
                <input id="password" name="password" type="password" placeholder=" " required>
            </p>
            <p>
                <label for="password2">Confirm Password</label>
                <input id="password2" name="password2" type="password" placeholder=" " required>
            </p>

            <button type="submit" name="registerButton">SIGN UP</button>
        </form>
    </div>
</body>
</html>