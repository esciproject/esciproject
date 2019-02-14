<?php
include("includes/config.php");

//session_destroy();

if(isset($_SESSION['userLoggedIn'])) {
    $userLoggedIn = $_SESSION['userLoggedIn'];
}
else{
    header("Location: register.php");
}

?>
<<!DOCTYPE html>
<html>
<head>
    <title>Welcome to Esci Project</title>
</head>

<body>
Index page.
</body>
</html>