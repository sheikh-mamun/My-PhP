<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Process</title>
  <style>
    body {
      background-color: teal;
      text-align: center;
      padding: 60px;
    }
  </style>
</head>
<body>
  <fieldset>
    <h3>USER INFORMATION</h3>
    <hr>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Form data processing logic here
        $name = $_POST["name"];
        $address = $_POST["address"];
        $mobile = $_POST["mobile"];
        $email = $_POST["email"];
        $password = $_POST["password"];

        // Example: Displaying data
        echo "Name: " . $name . "<br>";
        echo "Address: " . $address . "<br>";
        echo "Mobile Number: " . $mobile . "<br>";
        echo "Email: " . $email . "<br>";
        echo "Password: " . $password . "<br>";
    }
    ?>
  </fieldset>
</body>
</html>
