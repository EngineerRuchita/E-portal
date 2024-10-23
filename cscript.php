<?php
include("db.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $Name = $_POST['name'];
    $Email = $_POST['email'];
    $Message = $_POST['message'];

    // Validate input (you might want to add more robust validation)
    if (empty($Name) || empty($Email) || empty($Message)) {
        echo "All fields are required.";
        exit(); 
    }

    // Insert the data into the database using prepared statement to prevent SQL injection
    $query = "INSERT INTO con_1(Name,Email,Message) VALUES (?, ?, ?)";
    $stmt = $con->prepare($query);
    $stmt->bind_param("sss", $Name, $Email, $Message);

    if ($stmt->execute()) {
        echo "Thank you for your message!";
    } else {
        echo "There was an issue processing your request.";
        // You can also echo $stmt->error to get more details about the error
    }

    // Close statement
    $stmt->close();
}
?>
