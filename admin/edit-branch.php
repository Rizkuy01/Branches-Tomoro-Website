<?php

class Database {
    private $servername;
    private $username;
    private $password;
    private $dbname;
    private $conn;

    public function __construct($servername, $username, $password, $dbname) {
        $this->servername = $servername;
        $this->username = $username;
        $this->password = $password;
        $this->dbname = $dbname;
        $this->connect();
    }

    private function connect() {
        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    public function prepare($sql) {
        return $this->conn->prepare($sql);
    }

    public function close() {
        $this->conn->close();
    }
}

class Branch {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function update($id, $name, $email, $city, $type) {
        $stmt = $this->db->prepare("UPDATE branch SET name = ?, email = ?, city = ?, type = ? WHERE id = ?");
        $stmt->bind_param("ssssi", $name, $email, $city, $type, $id);
        return $stmt->execute();
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id    = $_POST["id"];
    $name  = $_POST["name"];
    $email = $_POST["email"];
    $city  = $_POST["city"];
    $type  = $_POST["type"];

    $db = new Database("localhost", "root", "", "tomoro");
    $branch = new Branch($db);

    if ($branch->update($id, $name, $email, $city, $type)) {
        header("Location: confirm.php");
        exit();
    } else {
        echo json_encode(['success' => false, 'message' => 'Update gagal, silakan coba lagi']);
    }

    $db->close();
}
?>
