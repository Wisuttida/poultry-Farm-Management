<?php
require_once __DIR__ . '/../config/database.php';

// เปิดการแสดงข้อผิดพลาดสำหรับการ debug
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// ตรวจสอบว่า request มาจาก POST หรือไม่
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $arrContextOptions = array(
        "ssl" => array(
            "verify_peer" => false,
            "verify_peer_name" => false,
        ),
    );
    $id = $_GET['user_id'];
    $response = file_get_contents("https://bservcpe.eng.kps.ku.ac.th/db24/db24_044/sendmail/users/send.php?id=$id", false, stream_context_create($arrContextOptions));
    header("Location: /db24/db24_044/poultryFarmManagement/public/index.php?page=user-management");
    exit();

} else {
    echo "ไม่รองรับการเข้าถึงแบบนี้";
}
?>