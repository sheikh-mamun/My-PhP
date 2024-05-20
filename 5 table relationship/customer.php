<!DOCTYPE html>
<html>
<head>
    <title>Create Customer</title>
</head>
<body>
    <h2>Create New Customer</h2>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ecommarce"; // Replace with your actual database name

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['name'];
        $email = $_POST['email'];

        // Basic validation
        if (empty($name) || empty($email)) {
            echo "Name and Email are required.";
        } else {
            // Prepare an SQL statement to prevent SQL injection
            $stmt = $conn->prepare("INSERT INTO customers (name, email) VALUES (?, ?)");
            $stmt->bind_param("ss", $name, $email);

            if ($stmt->execute()) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $stmt->error;
            }

            $stmt->close();
        }

        $conn->close();
    }
    ?>
    <form method="post" action="">
        Name: <input type="text" name="name" required><br><br>
        Email: <input type="email" name="email" required><br><br>
        <input type="submit" value="Submit">
    </form>


    <!DOCTYPE html>
<html>
<head>
    <title>Create Order</title>
</head>
<body>
    <h2>Create New Order</h2>
    <?php
    // Database connection details
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ecommarce"; // Replace with your actual database name

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Handle form submission for creating a new order
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $order_date = $_POST['order_date'];
        $customer_id = $_POST['customer_id'];

        // Basic validation
        if (empty($order_date) || empty($customer_id)) {
            echo "Order date and Customer ID are required.";
        } else {
            // Prepare an SQL statement to prevent SQL injection
            $stmt = $conn->prepare("INSERT INTO orders (order_date, customer_id) VALUES (?, ?)");
            $stmt->bind_param("si", $order_date, $customer_id);

            if ($stmt->execute()) {
                echo "New order created successfully";
            } else {
                echo "Error: " . $stmt->error;
            }

            $stmt->close();
        }
    }

    $conn->close();
    ?>

    <!-- Create Order Form -->
    <form method="post" action="">
        Order Date: <input type="date" name="order_date" required><br><br>
        Customer ID: <input type="number" name="customer_id" required><br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>





</body>
</html>
