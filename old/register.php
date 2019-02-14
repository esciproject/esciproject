<?php
    include("includes/config.php");
    include("includes/classes/Account.php");
    include("includes/classes/Constants.php");
    
    $account = new Account($con);

    include("includes/handlers/register-handler.php");
    include("includes/handlers/login-handler.php");

    function rememberInputValue($name) {
        if(isset($_POST[$name])){
            echo $_POST[$name];
        }
    }
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
                <?php echo $account->getError(Constants::$loginFailed); ?>
                <label for="loginUsername">Username</label>
                <input id="loginUsername" name="loginUsername" type="text" placeholder="login here" required>
            </p>
            <p>
                <label for="loginPassword">Password</label>
                <input id="loginPassword" name="loginPassword" type="password" placeholder="your password" required>
            </p>

            <button typo="submit" name="loginButton">LOG IN</button>
        </form>
        <form id="registerForm" action="register.php" method="POST">
            <h2>Create your account</h2>
            <p>
                <?php echo $account->getError(Constants::$usernameCharacters); ?>
                <?php echo $account->getError(Constants::$usernameUsed); ?>
                <label for="username">Username<label>
                <input id="username" name="username" type="text" placeholder=" " value="<?php rememberInputValue('username') ?>" required>
            </p>
            <p>
                <?php echo $account->getError(Constants::$firstNameCharacters); ?>
                <label for="firstName">First name<label>
                <input id="firstName" name="firstName" type="text" placeholder=" " value="<?php rememberInputValue('firstName') ?>" required>
            </p>
            <p>
                <?php echo $account->getError(Constants::$lastNameCharacters); ?>
                <label for="lastName">Last name<label>
                <input id="lastName" name="lastName" type="text" placeholder=" " value="<?php rememberInputValue('lastName') ?>" required>
            </p>
            <p>
                <?php echo $account->getError(Constants::$emailsDoNotMatch); ?>
                <?php echo $account->getError(Constants::$emailInvalid); ?>
                <?php echo $account->getError(Constants::$emailUsed); ?>
                <label for="email">Email<label>
                <input id="email" name="email" type="email" placeholder=" " value="<?php rememberInputValue('email') ?>" required>
            </p>
            <p>
                <label for="email2">Email</label>
                <input id="email2" name="email2" type="email" placeholder=" " value="<?php rememberInputValue('email2') ?>" required>
            </p>
            <p>
                <?php echo $account->getError(Constants::$passwordsDoNotMatch); ?>
                <?php echo $account->getError(Constants::$passwordNotAlphanumeric); ?>
                <?php echo $account->getError(Constants::$passwordCharacters); ?>
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