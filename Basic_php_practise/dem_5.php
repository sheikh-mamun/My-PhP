<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>demo</title>
  <style>
     body {
            font-family: Arial, sans-serif;
            background-color: teal;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: #fff;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        .message {
            margin-top: 16px;
            font-weight: bold;
        }

  </style>
</head>
<body>
<form action="process_form.php" method="post">
        <h2 class="title">Create a new account</h2>
        <hr>
        <br>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" placeholder="Enter your name" required>

        <label for="address">Address:</label>
        <input type="text" id="address" name="address" placeholder="Enter your address" required>

        <label for="mobile">Mobile Number:</label>
        <input type="tel" id="mobile" name="mobile" placeholder="Enter your mobile number" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" placeholder="Enter your email" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" placeholder="Enter your password" required>

        <input type="submit" value="Submit">
    </form>
    
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "post") {
        echo '<div class="message">Form submitted successfully!</div>';
    }
    ?>
  
  
</body>
</html>