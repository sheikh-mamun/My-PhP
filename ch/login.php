<?php
session_start();

if (isset($_SESSION["userId"])) {
    header("location: step2.php");
}

if (isset($_POST["btnLogin"])) {
    $userId = $_POST["txtUserId"];
    $password = $_POST["txtPassword"];

    // In a real-world scenario, you should validate the credentials securely.
    // For simplicity, we are using a basic check in this example.
    if ($userId === "admin" && $password === "admin123") {
        $_SESSION["userId"] = $userId;
        header("location: step2.php");
    } else {
        echo "Invalid credentials";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Login</title>
</head>
<body>

<form action="#" method="post">
    <div>
        User ID:<br/>
        <input type="text" name="txtUserId"/>
    </div>

    <div>
        Password:<br/>
        <input type="password" name="txtPassword"/>
    </div>

    <div>
        <input type="submit" name="btnLogin" value="Login"/>
    </div>
</form>

</body>
</html>
