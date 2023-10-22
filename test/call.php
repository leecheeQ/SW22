<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $expression = $_POST["str"];
    $result = $_POST["result"];
    // Store $expression and $result in the MySQL database using a MySQL library or PDO.
    // Don't forget to sanitize and validate user input.
    // Establish a MySQL connection, create a query, and execute it to insert the data.
    $connection = new PDO('mysql:host=your_host;dbname=your_database', 'your_user', 'your_password');
    $sql = "INSERT INTO history (expression, result) VALUES (?, ?)";
    $stmt = $connection->prepare($sql);
    $stmt->execute([$expression, $result]);
    $connection = null; // Close the connection
}
?>

<!-- Add your HTML and JavaScript here -->