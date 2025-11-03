<?php
// tambah_data.php
require_once 'database.php';

function tambahData($nama, $email) {
    global $conn;
    
    $sql = "INSERT INTO users (nama, email) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $nama, $email);
    
    if ($stmt->execute()) {
        echo "Data berhasil ditambahkan!";
        return true;
    } else {
        echo "Error: " . $stmt->error;
        return false;
    }
}

// Contoh penggunaan
tambahData("John Doe", "john@example.com");
?>