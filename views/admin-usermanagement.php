<?php
require_once __DIR__ . '/../controllers/UserController.php';

// เปิดการแสดงข้อผิดพลาดสำหรับการ debug
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// เรียกใช้งาน UserController
$userController = new UserController();
$users = $userController->getAllUsers();

$title = 'User Management';
$content = function () use ($users) {
    if (isset($users) && !empty($users)) {
        ?>
        <div class="container-fluid">
            <h1 class="h3 mb-2 mt-4 text-gray-800">User Account Management</h1>
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">All User Accounts</h6>
                    <form class="user" action="/poultryFarmManagement/controllers/user_store.php" method="POST" id="registerForm" onsubmit="return validateForm()" style="font-size: 15px;"></form>
                    <a href="/poultryFarmManagement/views/admin-adduser.php" class="btn btn-primary btn-user btn-sm">สร้างบัญชีผู้ใช้</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Username</th>
                                    <th>Line</th>
                                    <th>Gmail</th>
                                    <th>Role</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($users as $user): ?>
    <tr>
        
        <td><?php echo $user['userName']; ?></td>
        <td><?php echo !empty($user['lineId']) ? $user['lineId'] : 'N/A'; ?></td>
        <td><?php echo !empty($user['gmail']) ? $user['gmail'] : 'N/A'; ?></td>
        <td><?php echo $user['position']; ?></td>
        <td>
            <div style="display: flex; justify-content: space-between; align-items: center;">
                <!-- Activate/Deactivate user checkbox -->
                <form action="/poultryFarmManagement/controllers/toggleActivate.php" method="POST" class="d-inline">
                    <input type="hidden" name="user_id" value="<?php echo $user['userId']; ?>">
                    <input type="checkbox" onchange="this.form.submit()" <?php echo $user['isActivate'] ? 'checked' : ''; ?>>
                </form>

                <!-- Edit user button to open edit modal -->
                <button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#editUserModal<?php echo $user['userId']; ?>">
                    <i class="fas fa-clipboard-list"></i>
                </button>
                <!-- Delete user form for soft delete -->
<form action="/poultryFarmManagement/controllers/delete.php" method="POST" class="d-inline">
    <input type="hidden" name="user_id" value="<?php echo $user['userId']; ?>">
    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this user?');">
        <i class="fas fa-trash-alt"></i>
    </button>
</form>

            </div>
        </td>
    </tr>

    <!-- Edit User Modal -->
    <form id="editAccountForm<?php echo $user['userId']; ?>" action="/poultryFarmManagement/controllers/update.php" method="POST" class="needs-validation" novalidate>
    <div class="modal fade" id="editUserModal<?php echo $user['userId']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        การจัดการบัญชีผู้ใช้งาน (แก้ไขข้อมูลผู้ใช้งาน)
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col d-flex flex-column align-items-center">
                            <img class="img-profile rounded-circle mb-3" width="139" src="/poultryFarmManagement/public/img/login1.png" />
                                <div class="mb-3 w-100">
                                    <label for="line<?php echo $user['userId']; ?>" class="form-label">Line</label>
                                    <input type="text" class="form-control" id="line<?php echo $user['userId']; ?>" name="line" value="<?php echo $user['lineId']; ?>" required />
                                    <div class="invalid-feedback">โปรดกรอก Line</div>
                                </div>

                                <div class="mb-3 w-100">
                                    <label for="gmail<?php echo $user['userId']; ?>" class="form-label">Gmail</label>
                                    <input type="email" class="form-control" id="gmail<?php echo $user['userId']; ?>" name="gmail" value="<?php echo $user['gmail']; ?>" required />
                                    <div class="invalid-feedback">โปรดกรอก Gmail</div>
                                </div>

                                <div class="d-grid gap-2 w-100 mb-3">
                                    <button class="btn btn-outline-success" type="button">
                                        ส่ง line สำหรับเปลี่ยนรหัสผ่าน
                                    </button>
                                </div>
                            </div>

                            <div class="col">
                                    <input type="hidden" name="user_id" value="<?php echo $user['userId']; ?>">

                                    <div class="mb-3">
                                        <label for="firstname<?php echo $user['userId']; ?>" class="form-label">ชื่อ</label>
                                        <input type="text" class="form-control" id="firstname<?php echo $user['userId']; ?>" name="fName" value="<?php echo $user['fName']; ?>" required />
                                        <div class="invalid-feedback">โปรดกรอกชื่อ</div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="lastname<?php echo $user['userId']; ?>" class="form-label">นามสกุล</label>
                                        <input type="text" class="form-control" id="lastname<?php echo $user['userId']; ?>" name="lName" value="<?php echo $user['lName']; ?>" required />
                                        <div class="invalid-feedback">โปรดกรอกนามสกุล</div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="username<?php echo $user['userId']; ?>" class="form-label">ชื่อบัญชีผู้ใช้</label>
                                        <input type="text" class="form-control" id="username<?php echo $user['userId']; ?>" name="userName" value="<?php echo $user['userName']; ?>" required />
                                        <div class="invalid-feedback">โปรดกรอกชื่อบัญชีผู้ใช้</div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="role<?php echo $user['userId']; ?>" class="form-label">ตำแหน่ง</label>
                                        <select name="position" class="form-control" id="role<?php echo $user['userId']; ?>" required>
                                            <option value="" disabled>เลือกตำแหน่ง</option>
                                            <option value="ผู้ดูแลระบบ" <?php echo ($user['position'] == 'ผู้ดูแลระบบ') ? 'selected' : ''; ?>>ผู้ดูแลระบบ</option>
                                            <option value="เจ้าของ" <?php echo ($user['position'] == 'เจ้าของ') ? 'selected' : ''; ?>>เจ้าของฟาร์ม</option>
                                            <option value="คนงาน" <?php echo ($user['position'] == 'คนงาน') ? 'selected' : ''; ?>>คนงาน</option>
                                        </select>
                                        <div class="invalid-feedback">โปรดเลือกตำแหน่ง</div>
                                    </div>

                                    <div class="d-grid gap-2 w-100 mb-3">
                                        <button class="btn btn-outline-success" type="button">
                                            ส่ง Gmail สำหรับเปลี่ยนรหัสผ่าน
                                        </button>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
                    <button type="submit" form="editAccountForm<?php echo $user['userId']; ?>" class="btn btn-primary">บันทึกการเปลี่ยนแปลง</button>
                </div>
            </div>
        </div>
    </div>
    </form>
<?php endforeach; ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <?php
    } else {
        echo '<p>No users found.</p>';
    }
};
include 'layout.php';
?>
