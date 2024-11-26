<?php
require_once __DIR__ . '/../config/Database.php';

// เปิดการแสดงข้อผิดพลาดสำหรับการ debug
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// ตรวจสอบว่า request มาจาก POST หรือไม่
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['user_id'])) {
        $userId = $_POST['user_id'];

        // สร้างการเชื่อมต่อฐานข้อมูล
        $database = new Database();
        $conn = $database->connect();

        if ($conn) {
            // ทำการ Soft Delete โดยการตั้งค่า isDeleteUser เป็น 1
            $stmt = $conn->prepare("UPDATE users SET isDeleteUser = 1 WHERE userId = :userId");
            $stmt->bindParam(':userId', $userId, PDO::PARAM_INT);

            if ($stmt->execute()) {
                // การลบสำเร็จ
                header("Location: /poultryFarmManagement/views/admin-usermanagement.php");
                exit();
            } else {
                echo "การลบผู้ใช้ล้มเหลว";
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