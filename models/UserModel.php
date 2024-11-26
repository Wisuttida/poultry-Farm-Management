<?php
// File: userController.php

require_once 'D:/poultryFarmManagement/config/Database.php';
class UserController
{
    private $conn;

    public function __construct() {
        $database = new Database();
        $this->conn = $database->connect();
    }

    // Function สำหรับการดึงข้อมูลทั้งหมดจากตาราง users
    public function getAllUsers() {
        $query = "SELECT * FROM users WHERE isDeleteUser = 0";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Update user information
    public function updateUser($data)
    {
        $stmt = $this->conn->prepare("
            UPDATE users 
            SET fName = ?, lName = ?, gmail = ?, line = ?, position = ? 
            WHERE id = ?
        ");
        return $stmt->execute([
            $data['fName'],
            $data['lName'],
            $data['gmail'],
            $data['line'],
            $data['position'],
            $data['userId']
        ]);
    }

    // Delete user
    public function deleteUser($userId)
    {
        $stmt = $this->conn->prepare("UPDATE users SET isDeleteUser = 1 WHERE id = ?");
        return $stmt->execute([$userId]);
    }
}
?>
