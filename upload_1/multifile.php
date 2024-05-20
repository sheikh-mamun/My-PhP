<?php
if (isset($_POST['submit'])) {
    $files = $_FILES['file'];

    foreach ($files['tmp_name'] as $key => $tempname) {
        $filename = $files['name'][$key];
        $uploc = 'images/' . $filename;

        if (move_uploaded_file($tempname, $uploc)) {
            echo "uploaded successfully.<br>";
        } else {
            echo "Error uploading file.<br>";
        }
    }
}
?>

<form action="multifile.php" method="POST" enctype="multipart/form-data">
    Select File(s):<br><br>
    <input type="file" name="file[]" multiple><br><br>
    <input type="submit" name="submit" value="Upload">
</form>
