<?php
require_once '../models/UserModel.php';

class AdminController
{
    private $userModel;

    public function __construct($db)
    {
        $this->userModel = new UserModel($db);
    }

    // ดึงข้อมูลผู้ใช้งานทั้งหมด
    public function listUsers()
    {
        $users = $this->userModel->getAllUsers(); // ดึงข้อมูลผู้ใช้งานทั้งหมดจาก Model
        include '../views/admin-usermanagement.php'; // ส่งไปยัง View
    }


    // เพิ่มผู้ใช้งานใหม่
    public function addUser()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = [
                'username' => $_POST['username'],
                'pronoun' => $_POST['pronoun'],
                'fName' => $_POST['fName'],
                'lName' => $_POST['lName'],
                'nickname' => $_POST['nickname'],
                'gmail' => $_POST['gmail'],
                'line' => $_POST['line'],
                'position' => $_POST['position'],
                'password' => $_POST['password']
            ];
            $this->userModel->addUser($data);
            header('Location: /public/index.php?action=listUsers');
        }
    }

    // แก้ไขข้อมูลผู้ใช้งาน
    public function editUser()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = [
                'userId' => $_POST['userId'],
                'username' => $_POST['username'],
                'fName' => $_POST['fName'],
                'lName' => $_POST['lName'],
                'nickname' => $_POST['nickname'],
                'gmail' => $_POST['gmail'],
                'line' => $_POST['line'],
                'position' => $_POST['position']
            ];
            $this->userModel->updateUser($data);
            header('Location: /public/index.php?action=listUsers');
        }
    }

    // ลบผู้ใช้งาน
    public function deleteUser()
    {
        if (isset($_GET['id'])) {
            $this->userModel->deleteUser($_GET['id']);
            header('Location: /public/index.php?action=listUsers');
        }
    }

    // เปิด/ปิดการใช้งานผู้ใช้งาน
    public function toggleActivate()
    {
        if (isset($_GET['id'])) {
            $userId = $_GET['id'];
            $isActivate = $_GET['activate'] == '1' ? 1 : 0;
            $this->userModel->toggleActivate($userId, $isActivate);
            header('Location: /public/index.php?action=listUsers');
        }
    }
}
?>