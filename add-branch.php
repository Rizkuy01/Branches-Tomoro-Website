<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Form Data
  $name     = $_POST["name"];
  $email    = $_POST["email"];
  $city  = $_POST["city"];
  $type  = $_POST["type"];

  // MySQLi
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "tomoro";

  // koneksi
  $conn = new mysqli($servername, $username, $password, $dbname);

  // // Cek koneksi
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  // // Query 
  $sql = "INSERT INTO 
            branch (
              name, 
              email, 
              city, 
              type
              ) VALUES (
                '$name', 
                '$email', 
                '$city', 
                '$type'
                )";

  if ($conn->query($sql) === TRUE) {
    header("Location: confirm.php");
    exit();
} else {
    // Mengirimkan respons JSON jika terjadi kesalahan
    echo json_encode(['success' => false, 'message' => 'Checkout gagal, silakan coba lagi']);
}

  $conn->close();
}
