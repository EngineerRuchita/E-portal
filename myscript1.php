<?php
session_start();
include("db.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (empty($_POST['email']) || empty($_POST['password'])) {
        echo "All fields are required.";
        exit(); 
    }
    
    $Email = $_POST['email'];
    $Password = $_POST['password'];
    
    $stmt = $con->prepare("SELECT * FROM login_1 WHERE Email = ?");
    $stmt->bind_param("s", $Email);
    $stmt->execute();
    $admin_result = $stmt->get_result();

    if ($admin_result->num_rows == 1) {
        $admin_row = $admin_result->fetch_assoc();
        $adminPassword = $admin_row['Password'];

        if ($Password === $adminPassword) {
            $_SESSION['admin'] = true;
            header('location: admin/i.php');
            exit();
        } else {
            echo "Invalid admin password";
            exit();
        }
    }

    $stmt = $con->prepare("SELECT * FROM reg_1 WHERE Email = ?");
    $stmt->bind_param("s", $Email);
    $stmt->execute();
    $user_result = $stmt->get_result();

    if ($user_result->num_rows == 1) {
        $user_row = $user_result->fetch_assoc();
        $userPassword = $user_row['Password'];

        if ($Password === $userPassword) {
         
            $_SESSION['user'] = $Email;
            header('location: admin/demo1.php');
            exit();
        } else {
            echo "Invalid user password";
            exit();
        }
    }

    echo "User does not exist";
    $stmt->close();
}
?>
