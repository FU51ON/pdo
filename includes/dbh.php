<?php
    $servername = "localhost";
    $username = "root";
    $password = "";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=portfolio", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo"connected to database successfully<br><br><br>";
    }
    catch(PDOException $e) {
        echo "failed: " . $e->getMessage();
    }
?>