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

    public function delete($id) {
        $stmt = $this->db->prepare("DELETE FROM branch WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $affected_rows = $stmt->affected_rows;
        $stmt->close();
        return $affected_rows > 0;
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['deleteBranchId'])) {
    $branchId = $_POST['deleteBranchId'];

    $db = new Database("localhost", "root", "", "tomoro");
    $branch = new Branch($db);

    if ($branch->delete($branchId)) {
        echo "Branch Request deleted successfully.";
    } else {
        echo "Error deleting Branch Request.";
    }

    $db->close();
    header("Location: admin-branches.php");
    exit();
}
?>
