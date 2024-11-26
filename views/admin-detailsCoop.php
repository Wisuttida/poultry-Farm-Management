<?php
$title = 'details Copp';
$content = function () {
    ?>
    <div id="content-wrapper" class="d-flex flex-column">
        <div id="content">
            <div class="container-fluid pt-4">

                <!-- Page Heading -->
                <div class="d-flex align-items-center mb-2">
                    <h1 class="m-0 h3 text-gray-800">เล้าไก่</h1>
                    <div class="px-2" data-toggle="tooltip" title="เพิ่มเล้า">
                        <a class="btn btn-primary btn-circle btn-sm" type="button" data-toggle="modal"
                            data-target="#AddCoopModal">
                            <i class="fas fa-plus"></i>
                        </a>
                    </div>
                </div>
                <!-- DataTales Example Farm -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">ข้อมูลเล้า</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>ขื่อฟาร์ม</th>
                                        <th>เลขที่เล้า</th>
                                        <th>เริ่ม</th>
                                        <th>สิ้นสุด</th>
                                        <th>น้ำหนักที่ต้องการ(กก.)</th>
                                        <th>น้ำหนักปัจจุบัน(กก.)</th>
                                        <th>ไก่ทั้งหมด(ตัว)</th>
                                        <th>ไก่ตาย(ตัว)</th>
                                        <th>คนงานดูแลเล้า</th>
                                        <th>การจัดการ</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>ขื่อฟาร์ม</th>
                                        <th>เลขเล้า</th>
                                        <th>เริ่ม</th>
                                        <th>สิ้นสุด</th>
                                        <th>น้ำหนักที่ต้องการ(กก.)</th>
                                        <th>น้ำหนักปัจจุบัน(กก.)</th>
                                        <th>ไก่ทั้งหมด(ตัว)</th>
                                        <th>ไก่ตาย(ตัว)</th>
                                        <th>คนงานดูแลเล้า</th>
                                        <th>การจัดการ</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <tr>
                                        <td>ฟาร์มไก่ขาว</td>
                                        <td class="text-center">1</td>
                                        <td>2024-09-01</td>
                                        <td>2024-11-01</td>
                                        <td class="text-right">3.2</td>
                                        <td class="text-right">0.5</td>
                                        <td class="text-right">1000</td>
                                        <td class="text-right">20</td>
                                        <td>
                                            <div class="d-flex justify-content-center align-items-center">
                                                <a href="#" class="card shadow bg-info text-center text-decoration-none">
                                                    <span class="p-1 text-white">นรงณ์ชัย</span>
                                                </a>
                                            </div>
                                        </td>
                                        <td class="d-flex align-items-center justify-content-center">
                                            <div class="d-flex align-items-center ">
                                                <a class="btn" href="WeightOfChicken.html" data-toggle="tooltip"
                                                    title="บันทึกน้ำหนักไก่">
                                                    <i class="fas fa-weight text-success"></i>
                                                </a>
                                                <a class="btn" href="own_numberofchicken.html" data-toggle="tooltip"
                                                    title="บันทึกไก่ตาย">
                                                    <i class="fas fa-dizzy text-gray-800"></i>
                                                </a>
                                                <a class="btn" href="gerneral.html" data-toggle="tooltip"
                                                    title="ข้อมูลทั่วไป">
                                                    <i class="fas fa-clipboard-list text-warning"></i>
                                                </a>
                                                <a class="btn delete" data-toggle="tooltip" title="ลบข้อมูล">
                                                    <i class="fas fa-trash-alt text-danger"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>ฟาร์มเรือนขวัญ</td>
                                        <td class="text-center">1</td>
                                        <td>2024-09-01</td>
                                        <td>2024-11-01</td>
                                        <td class="text-right">3.2</td>
                                        <td class="text-right">0.5</td>
                                        <td class="text-right">1000</td>
                                        <td class="text-right">20</td>
                                        <td>
                                            <div class="d-flex justify-content-center align-items-center">
                                                <a href="#" class="card shadow bg-info text-center text-decoration-none">
                                                    <span class="p-1 text-white">นรงณ์ชัย</span>
                                                </a>
                                            </div>
                                        </td>
                                        <td class="d-flex align-items-center justify-content-center">
                                            <div class="d-flex align-items-center ">
                                                <a class="btn" href="WeightOfChicken.html" data-toggle="tooltip"
                                                    title="บันทึกน้ำหนักไก่">
                                                    <i class="fas fa-weight text-success"></i>
                                                </a>
                                                <a class="btn" href="own_numberofchicken.html" data-toggle="tooltip"
                                                    title="บันทึกไก่ตาย">
                                                    <i class="fas fa-dizzy text-gray-800"></i>
                                                </a>
                                                <a class="btn" href="gerneral.html" data-toggle="tooltip"
                                                    title="ข้อมูลทั่วไป">
                                                    <i class="fas fa-clipboard-list text-warning"></i>
                                                </a>
                                                <a class="btn delete" data-toggle="tooltip" title="ลบข้อมูล">
                                                    <i class="fas fa-trash-alt text-danger"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- Footer -->
        <footer class="sticky-footer bg-white">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright &copy; Your Website 2020</span>
                </div>
            </div>
        </footer>
        <!-- End of Footer -->
    </div>
    <?php
};
include 'layout.php';
