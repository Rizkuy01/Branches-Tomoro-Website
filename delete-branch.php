<?php
require_once '../conn.php';

if (isset($_POST['deleteBranchId'])) {
    $branchId = $_POST['deleteBranchId'];
    $sql = "DELETE FROM branch WHERE id = ?";
    
    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("i", $branchId);
        $stmt->execute();
        
        if ($stmt->affected_rows > 0) {
            echo "Branch Request deleted successfully.";
        } else {
            echo "Error deleting Branch Request.";
        }
        $stmt->close();
    } else {
        echo "Error preparing statement.";
    }
    $conn->close();
}
header("Location: admin-branches.php");
exit();
