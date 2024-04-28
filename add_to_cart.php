<?php
session_start();

// Modify the database credentials to match your configuration
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "medical";

// Establish a database connection
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['product_id'])) {
        $product_id = $_POST['product_id'];

        // Add the product to the cart
        $sql = "INSERT INTO cart (product_id, quantity) VALUES ($product_id, 1)";
        if ($conn->query($sql) === TRUE) {
            // Redirect the user to the cart page or any other desired page
            header("Location: carts.php");
            exit();
        } else {
            // Handle database insertion error
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        // Handle error case when product_id is not provided
        echo "Error: Product ID is missing.";
    }
} else {
    // Handle error case when the form is not submitted via POST method
    echo "Error: Invalid request.";
}

// Close the database connection
$conn->close();
?>
