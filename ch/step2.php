<?php
session_start();

if (!isset($_SESSION["userId"])) {
    header("location: login.php");
}

if (isset($_POST["btnNext"])) {
    header("location: step3.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Step 2</title>
</head>
<body>

<form action="#" method="post">
    <div>
        <!-- Include fields for name, address, phone, email, password, file upload -->
        Name:<br/>
        <input type="text" name="txtName" required/><br/>

        Address:<br/>
        <input type="text" name="txtAddress" required/><br/>

        Phone:<br/>
        <input type="text" name="txtPhone" required/><br/>

        Email:<br/>
        <input type="email" name="txtEmail" required/><br/>

        Password:<br/>
        <input type="password" name="txtPassword" required/><br/>

        File Upload:<br/>
        <input type="file" name="fileUpload"/><br/>
    </div>

    <div>
        <input type="submit" name="btnNext" value="Next"/>
    </div>
</form>

<form action="logout.php" method="post">
    <div>
        <input type="submit" name="btnLogout" value="Log Out"/>
    </div>
</form>

</body>
</html>
