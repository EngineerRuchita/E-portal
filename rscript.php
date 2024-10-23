<?php
session_start();
include("db.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $FullName = $_POST['fullname'];
    $DOB = $_POST['dob'];
    $Email = $_POST['email'];
    $Password = $_POST['password'];

    if (empty($FullName) || empty($DOB) || empty($Email) || empty($Password)) {
        echo "All fields are required.";
        exit(); 
    }

    $stmt_check = $con->prepare("SELECT Email FROM reg_1 WHERE Email = ?");
    $stmt_check->bind_param("s", $Email);
    $stmt_check->execute();
    $result_check = $stmt_check->get_result();

    if ($result_check->num_rows > 0) {
        echo "Email is already registered.";
        exit(); 
    }

    $stmt_insert = $con->prepare("INSERT INTO reg_1 (FullName, DOB, Email, Password) VALUES (?, ?, ?, ?)");
    $stmt_insert->bind_param("ssss", $FullName, $DOB, $Email, $Password);
$stmt_insert->execute();

    if ($stmt_insert->affected_rows > 0) {
        
        header('location: login.php');
        exit();
    } else {
        echo "Registration failed. Please try again later.";
    }


    $stmt_check->close();
    $stmt_insert->close();
}
?>
