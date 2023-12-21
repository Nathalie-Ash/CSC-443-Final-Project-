<?php
// create_event.php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get data from the POST request
    $title = $_POST['title'];
    $color = $_POST['color'];

    // Perform any server-side logic (e.g., save to database)
    try {
        $pdo = new PDO("mysql:host=localhost;dbname=your_database_name", "your_username", "your_password");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Prepare and execute the SQL statement
        $stmt = $pdo->prepare("INSERT INTO events (title, color) VALUES (:title, :color)");
        $stmt->bindParam(':title', $title, PDO::PARAM_STR);
        $stmt->bindParam(':color', $color, PDO::PARAM_STR);
        $stmt->execute();

        // Send a response
        echo json_encode(['status' => 'success', 'message' => 'Event created successfully']);
    } catch (PDOException $e) {
        // Handle database connection errors
        http_response_code(500);
        echo json_encode(['status' => 'error', 'message' => 'Internal Server Error']);
    }
} else {
    // Handle invalid request method
    http_response_code(400);
    echo json_encode(['status' => 'error', 'message' => 'Invalid request method']);
}
