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
            // ตรวจสอบสถานะผู้ใช้ปัจจุบัน
            $stmt = $conn->prepare("SELECT isActivate FROM users WHERE userId = :userId");
            $stmt->bindParam(':userId', $userId, PDO::PARAM_INT);

            if ($stmt->execute()) {
                $user = $stmt->fetch(PDO::FETCH_ASSOC);

                if ($user) {
                    // เปลี่ยนสถานะการ Activate (จาก 1 เป็น 0 หรือจาก 0 เป็น 1)
                    $newStatus = ($user['isActivate'] == 1) ? 0 : 1;

                    // อัปเดตสถานะในฐานข้อมูล
                    $updateStmt = $conn->prepare("UPDATE users SET isActivate = :newStatus WHERE userId = :userId");
                    $updateStmt->bindParam(':newStatus', $newStatus, PDO::PARAM_INT);
                    $updateStmt->bindParam(':userId', $userId, PDO::PARAM_INT);

                    if ($updateStmt->execute()) {
                        // การอัปเดตสำเร็จ
                        header("Location: /poultryFarmManagement/views/admin-usermanagement.php");
                        exit();
                    } else {
                        echo "การอัปเดตสถานะไม่สำเร็จ";
                    }
                } else {
                    echo "ไม่พบผู้ใช้ที่ต้องการอัปเดต";
                }
            } else {
                echo "การดึงข้อมูลผู้ใช้ล้มเหลว";
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