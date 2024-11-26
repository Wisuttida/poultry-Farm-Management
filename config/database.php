<?php

class Database
{
    private $host = 'localhost'; // ใช้ localhost เมื่อทำงานบนเครื่อง local
    private $db_name = 'db24_044_farmkai'; // เปลี่ยนเป็นชื่อฐานข้อมูลที่คุณสร้างใน phpMyAdmin
    private $username = 'db24_044'; // Default username สำหรับ XAMPP คือ root
    private $password = 'db24_044'; // Default password สำหรับ XAMPP คือว่างเปล่า (ไม่มีรหัสผ่าน)
    private $conn;

    // Function สำหรับการเชื่อมต่อฐานข้อมูล
    public function connect()
    {
        $this->conn = null;

        try {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->conn->exec("SET NAMES 'utf8'"); // รองรับภาษาไทย
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }

        return $this->conn;
    }
}
