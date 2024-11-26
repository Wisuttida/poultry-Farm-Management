<?php
// db_connect.php
global $conn;

$servername = "localhost";
$username = "db24_044";
$password = "db24_044";
$dbname = "db24_044_farmkai";

// สร้างการเชื่อมต่อฐานข้อมูล
$conn = new mysqli($servername, $username, $password, $dbname);

// ตรวจสอบการเชื่อมต่อ
if ($conn->connect_error) {
    die("<br>Connection failed: " . $conn->connect_error);
} else {
    echo "Database connection successful";
}

// ตั้งค่าการเชื่อมต่อให้รองรับภาษาไทย
$conn->set_charset("utf8");
?>