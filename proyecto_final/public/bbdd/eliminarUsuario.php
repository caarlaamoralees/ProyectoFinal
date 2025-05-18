<?php
session_start();
include 'conn.php';

if (isset($_SESSION['userId'])) {
    $stmt = $conn->prepare("DELETE FROM USUARIOS WHERE ID = ?");
    $stmt->bind_param("s", $_SESSION['userId']);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        $_SESSION = array();
        session_destroy();
        header("Location: http://localhost:8000/inicio");
        exit();
    }


}


?>