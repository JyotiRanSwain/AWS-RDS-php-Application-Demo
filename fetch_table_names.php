<?php
$servername = "mydb.cfquy20yagzu.ap-southeast-1.rds.amazonaws.com";
$username = "admin";
$password = "jyotiranjan";
$dbname = "mydbb";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $conn->query("SHOW TABLES");
    $tables = $stmt->fetchAll(PDO::FETCH_COLUMN);

    header('Content-Type: application/json');
    echo json_encode($tables);
} catch (PDOException $e) {
    echo "Error fetching table names: " . $e->getMessage();
}

$conn = null;
?>
