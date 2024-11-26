<?php
$title = 'Add User';
$content = function () {
    ?>

    <!-- Begin Page Content -->
    <div class="container-fluid">
        <div class="pt-5 pb-3 pr-4 pl-4">
            <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">สร้างบัญชีผู้ใช้</h1>
            </div>
            <form class="user" action="../controllers/user_store.php" method="POST" id="registerForm"
                onsubmit="return validateForm()" style="font-size: 15px;">
                
                <div class="pronoun form-group" style="margin-left: 1%;" id="pronoun">
                    <span class="star">*</span>คำนำหน้า<br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="pronoun" value="นาย" required>
                        <label class="form-check-label" for="pronoun">นาย</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="pronoun" value="นาง" required>
                        <label class="form-check-label" for="pronoun">นาง</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="pronoun" value="นางสาว" required>
                        <label class="form-check-label" for="pronoun">นางสาว</label>
                    </div>
                    <span id="pronoun-error" class="error-message"></span>
                </div>

                <div class="name form-group row" id="name">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <span class="star">*</span>ชื่อ<br>
                        <input type="text" class="form-control form-control-user" id="FirstName" name="fName"
                            placeholder="ชื่อ" required>
                        <span id="fname-error" class="error-message"></span>
                    </div>
                    <div class="col-sm-6">
                        <span class="star">*</span>นามสกุล<br>
                        <input type="text" class="form-control form-control-user" id="LastName" name="lName"
                            placeholder="นามสกุล" required>
                        <span id="lname-error" class="error-message"></span>
                    </div>
                </div>

                <div class="nickName-group mb-3">
                    <span class="star">*</span>ชื่อเล่น<br>
                    <input type="text" class="form-control form-control-user" id="nickName" name="nickname"
                        placeholder="ชื่อเล่น" required>
                    <span id="nickName-error" class="error-message"></span>
                </div>

                <div class="userName-group mb-3">
                    <span class="star">*</span>ชื่อบัญชีผู้ใช้<br>
                    <input type="text" class="form-control form-control-user" id="userName" name="username"
                        placeholder="ชื่อบัญชีผู้ใช้" required>
                    <span id="userName-error" class="error-message"></span>
                </div>

                <div class="role form-group" id="role" style="margin-left: 1%;">
                    <span class="star">*</span>ตำแหน่ง<br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="position" value="ผู้ดูแลระบบ" required>
                        <label class="form-check-label" for="position">ผู้ดูแลระบบ</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="position" value="เจ้าของ" required>
                        <label class="form-check-label" for="position">เจ้าของฟาร์ม</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="position" value="คนงาน" required>
                        <label class="form-check-label" for="position">คนงาน</label>
                    </div>
                    <span id="role-error" class="error-message"></span>
                </div>

                <div class="email form-group">
                    <span>Email Address</span><br>
                    <input type="email" class="form-control form-control-user" id="Email" name="gmail"
                        placeholder="Email Address">
                    <span id="email-error" class="error-message"></span>
                </div>

                <div class="form-group">
                    <span>Line ID</span><br>
                    <input type="text" class="form-control form-control-user" id="line" name="line" placeholder="Line ID">
                    <span id="line-error" class="error-message"></span>
                </div>

                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <span class="star">*</span>รหัสผ่าน<br>
                        <input type="password" class="form-control form-control-user" id="Password" name="password"
                            placeholder="รหัสผ่าน" required>
                        <small id="passwordHelpInline" class="text-muted">ควรมีความยาว 8-20 ตัวอักษร</small><br>
                        <span id="password-error" class="error-message"></span>
                    </div>
                    <div class="col-sm-6">
                        <span class="star">*</span>ยืนยันรหัสผ่าน<br>
                        <input type="password" class="form-control form-control-user" id="RepeatPassword"
                            name="password_confirmation" placeholder="ยืนยันรหัสผ่าน" required>
                        <span id="repeatpass-error" class="error-message"></span>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary btn-user btn-block">สร้างบัญชีผู้ใช้</button>
            </form>
            <hr>
        </div>
    </div>
    <!-- End of Main Content -->



    <!-- JavaScript & Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"></script>
    <?php
};
include 'layout.php';