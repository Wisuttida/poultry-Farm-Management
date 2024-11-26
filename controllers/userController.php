<?php
// File: controllers/UserController.php

require_once __DIR__ . '/../config/Database.php';

class UserController
{
    private $conn;

    public function __construct()
    {
        $database = new Database();
        $this->conn = $database->connect();
    }

    // Function สำหรับการดึงข้อมูลทั้งหมดจากตาราง users
    public function getAllUsers()
    {
        $query = "SELECT * FROM users WHERE isDeleteUser = 0";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

}
?>