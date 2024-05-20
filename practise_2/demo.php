<?php
session_start();

if (!isset($_SESSION["sname"])) {
    header("location:login.php");
}

// Step 2: Include the Student class file
require_once("student_class.php");

if (isset($_POST["btnSubmit"])) {
    $id = $_POST["txtId"];
    $name = $_POST["txtName"];
    $email = $_POST["email"];
    $phone = $_POST["txtPhone"];

    if (!preg_match("/^[0-9+]{11,14}$/", $phone)) {
        echo "Phone is not valid";
    } elseif (!preg_match("/^[a-zA-Z0-9]{4,}[@][a-zA-Z]{4,6}[.][a-zA-Z]{2,3}$/", $email)) {
        echo "Email is not valid";
    } else {
        // File upload handling
        $uploadsDir = "uploads/";
        $fileName = $_FILES['fileUpload']['name'];
        $targetFilePath = $uploadsDir . $fileName;
        $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

        // Check if file is a valid image
        $allowTypes = array('jpg', 'jpeg', 'png', 'gif');
        if (in_array($fileType, $allowTypes)) {
            move_uploaded_file($_FILES["fileUpload"]["tmp_name"], $targetFilePath);
            $student = new Student($id, $name, $email, $phone, $fileName);
            $student->save();
            echo "Success!";
        } else {
            echo "File type not allowed";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Student Form</title>
    <style>
        /* Your existing styles */
    </style>
</head>
<body>
<fieldset>
    <legend>User-personal-information</legend>
    <form action="#" method="post" enctype="multipart/form-data">
        <div>
            ID:<br/>
            <input type="text" name="txtId"/>
        </div>

        <div>
            Name<br/>
            <input type="text" name="txtName"/>
        </div>

        <div>
            Email<br/>
            <input type="text" name="email"/>
        </div>

        <div>
            Phone<br/>
            <input type="text" name="txtPhone"/>
        </div>

        <div>
            File Upload<br/>
            <input type="file" name="fileUpload"/>
        </div>

        <br>
        <br>
        <div>
            <input type="submit" name="btnSubmit" value="Submit"/>
        </div>
    </form>
</fieldset>

<?php
Student::display_students();
?>
</body>
</html>
