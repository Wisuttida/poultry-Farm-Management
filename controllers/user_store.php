<?php
require_once __DIR__ . '/../config/Database.php';

// เปิดการแสดงข้อผิดพลาดสำหรับการ debug
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// ตรวจสอบว่า request มาจาก POST หรือไม่
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // ตรวจสอบว่ามีข้อมูลที่จำเป็นมาครบถ้วน
    if (
        isset($_POST['pronoun'], $_POST['fName'], $_POST['lName'], $_POST['nickname'],
            $_POST['username'], $_POST['position'], $_POST['password'])
    ) {
        // ดึงค่าจากฟอร์ม
        $pronoun = $_POST['pronoun'];
        $fName = $_POST['fName'];
        $lName = $_POST['lName'];
        $nickname = $_POST['nickname'];
        $username = $_POST['username'];
        $position = $_POST['position'];
        $gmail = $_POST['gmail'] ?? null; // ไม่จำเป็นต้องกรอก
        $line = $_POST['line'] ?? null;   // ไม่จำเป็นต้องกรอก
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT); // แฮชรหัสผ่าน

        // สร้างการเชื่อมต่อฐานข้อมูล
        $database = new Database();
        $conn = $database->connect();

        if ($conn) {
            try {
                // เตรียมคำสั่ง SQL สำหรับการเพิ่มข้อมูลผู้ใช้ใหม่
                $stmt = $conn->prepare("INSERT INTO users (pronoun, fName, lName, nickname, userName, position, gmail, lineId, password) 
                                        VALUES (:pronoun, :fName, :lName, :nickname, :username, :position, :gmail, :line, :password)");

                // ผูกค่าตัวแปร
                $stmt->bindParam(':pronoun', $pronoun);
                $stmt->bindParam(':fName', $fName);
                $stmt->bindParam(':lName', $lName);
                $stmt->bindParam(':nickname', $nickname);
                $stmt->bindParam(':username', $username);
                $stmt->bindParam(':position', $position);
                $stmt->bindParam(':gmail', $gmail);
                $stmt->bindParam(':line', $line);
                $stmt->bindParam(':password', $password);

                // ดำเนินการ SQL
                if ($stmt->execute()) {
                    // เพิ่มผู้ใช้สำเร็จ
                    header("Location: /poultryFarmManagement/views/admin-usermanagement.php");
                    exit();
                } else {
                    echo "ไม่สามารถเพิ่มผู้ใช้ได้";
                }
            } catch (Exception $e) {
                echo "มีข้อผิดพลาดเกิดขึ้น: " . $e->getMessage();
            }
        } else {
            echo "ไม่สามารถเชื่อมต่อฐานข้อมูลได้";
        }
    } else {
        echo "ข้อมูลไม่ครบถ้วน";
    }
} else {
    echo "ไม่รองรับการเข้าถึงแบบนี้";
}
?>
