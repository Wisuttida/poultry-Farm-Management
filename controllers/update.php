<?php
require_once __DIR__ . '/../config/Database.php';

// เปิดการแสดงข้อผิดพลาดสำหรับการ debug
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// ตรวจสอบว่า request มาจาก POST หรือไม่
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // ตรวจสอบว่ามีข้อมูลที่จำเป็นหรือไม่
    if (isset($_POST['user_id'], $_POST['fName'], $_POST['lName'], $_POST['userName'], $_POST['position'], $_POST['gmail'], $_POST['line'])) {

        // ดึงข้อมูลจาก POST
        $userId = $_POST['user_id'];
        $fName = $_POST['fName'];
        $lName = $_POST['lName'];
        $userName = $_POST['userName'];
        $position = $_POST['position'];
        $gmail = $_POST['gmail'];
        $lineId = $_POST['line'];

        // สร้างการเชื่อมต่อฐานข้อมูล
        $database = new Database();
        $conn = $database->connect();

        // อัพเดทข้อมูลในตาราง users
        $sql = "UPDATE users SET fName = :fName, lName = :lName, userName = :userName, position = :position, gmail = :gmail, lineId = :lineId WHERE userId = :userId";

        try {
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':fName', $fName);
            $stmt->bindParam(':lName', $lName);
            $stmt->bindParam(':userName', $userName);
            $stmt->bindParam(':position', $position);
            $stmt->bindParam(':gmail', $gmail);
            $stmt->bindParam(':lineId', $lineId);
            $stmt->bindParam(':userId', $userId);

            // ดำเนินการอัพเดท
            if ($stmt->execute()) {
                // สำเร็จ -> เปลี่ยนกลับไปที่หน้าการจัดการผู้ใช้งาน
                header("Location: /poultryFarmManagement/views/admin-usermanagement.php");
                exit();
            } else {
                echo "การอัพเดทไม่สำเร็จ";
            }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }

    } else {
        echo "ข้อมูลที่จำเป็นไม่ครบถ้วน";
    }
} else {
    echo "ไม่รองรับการเข้าถึงแบบนี้";
}
?>