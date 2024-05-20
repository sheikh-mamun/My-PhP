<?php
session_start();

if (!isset($_SESSION["userId"])) {
    header("location: login.php");
}

if (isset($_POST["btnSubmit"])) {
    // Save data to a text file
    $data = "Name: {$_POST['txtName']}, Address: {$_POST['txtAddress']}, Phone: {$_POST['txtPhone']}, 
    Email: {$_POST['txtEmail']}, Password: {$_POST['txtPassword']}" . PHP_EOL;

    file_put_contents("userdata.txt", $data, FILE_APPEND);
    echo "Data submitted successfully!";
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Step 3</title>
</head>
<body>

<form action="#" method="post">
    <div>
        <!-- Display submitted data -->
        <?php
        if (file_exists("userdata.txt")) {
            $userData = file_get_contents("userdata.txt");
            echo "<pre>{$userData}</pre>";
        }
        ?>
    </div>

    <div>
        <input type="submit" name="btnSubmit" value="Submit"/>
    </div>
</form>

<form action="logout.php" method="post">
    <div>
        <input type="submit" name="btnLogout" value="Log Out"/>
    </div>
</form>

</body>
</html>
