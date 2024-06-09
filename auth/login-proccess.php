<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tomoro";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Request Method: " . $_SERVER['REQUEST_METHOD'] . "<br>"; 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    echo "POST Data:<br>";
    print_r($_POST);

    if (isset($_POST['email']) && isset($_POST['password'])) {
        $email_or_username = $conn->real_escape_string($_POST['email']);
        $password = $_POST['password'];

        $sql = "SELECT * FROM user WHERE email='$email_or_username' OR username='$email_or_username'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();
            if (password_verify($password, $user['password'])) {
                $_SESSION['username'] = $user['username'];
                header("Location: join-branch.php"); 
                exit();
            } else {
                echo "Invalid password.";
            }
        } else {
            echo "No user found with that email or username.";
        }
    } else {
        echo "Please fill in all fields.";
    }
} else {
    echo "Invalid request method.";
}

$conn->close();
