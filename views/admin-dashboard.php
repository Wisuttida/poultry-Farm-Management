<?php
$title = 'dashboard';
$content = function () {
    ?>

    <!-- Begin Page Content -->
    <div id="content-wrapper" class="d-flex flex-column">
        <!-- Main Content -->
        <div id="content">
            <!-- Begin Page Content -->
            <div class="container-fluid pt-4">
                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                            class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                </div>

                <!-- Content Row -->
                <div class="row">
                    <!-- Card Example: จำนวนผู้ใช้งานในตอนนี้ -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            จำนวนผู้ใช้งานในตอนนี้
                                        </div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                                            100 บัญชี
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card Example: จำนวนผู้ใช้งานทั้งหมด -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-success shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                            จำนวนผู้ใช้งานทั้งหมด
                                        </div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                                            1,000 บัญชี
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card Example: จำนวนฟาร์มทั้งหมด -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-info shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                            จำนวนฟาร์มทั้งหมด
                                        </div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                                            100 ฟาร์ม
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card Example: จำนวนเล้าทั้งหมด -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-warning shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                            จำนวนเล้าทั้งหมด
                                        </div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                                            180 เล้า
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Content Row: Pie Charts -->
                <div class="row">
                    <!-- Pie Chart 1: ประเภทผู้ใช้งาน -->
                    <div class="col-xl-4 col-lg-5">
                        <div class="card shadow mb-4">
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-primary">ประเภทผู้ใช้งาน</h6>
                            </div>
                            <div class="card-body">
                                <div class="chart-pie pt-4 pb-2">
                                    <canvas id="userTypePiechart"></canvas>
                                </div>
                                <div class="text-center small">
                                    <p class="mb-2">
                                        <i class="fas fa-circle text-primary"></i> ผู้ดูแลระบบ
                                    </p>
                                    <p class="mb-2">
                                        <i class="fas fa-circle text-success"></i> เจ้าของฟาร์ม
                                    </p>
                                    <p class="mb-2">
                                        <i class="fas fa-circle text-info"></i> คนงาน
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Pie Chart 2: สถานะของบัญชีผู้ใช้งาน -->
                    <div class="col-xl-4 col-lg-5">
                        <div class="card shadow mb-4">
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-primary">สถานะของบัญชีผู้ใช้งาน</h6>
                            </div>
                            <div class="card-body">
                                <div class="chart-pie pt-4 pb-2">
                                    <canvas id="accountVerifyPiechart"></canvas>
                                </div>
                                <div class="text-center small">
                                    <p class="mb-2">
                                        <i class="fas fa-circle text-success"></i> บัญชีที่ได้รับการยืนยันแล้ว
                                    </p>
                                    <p class="mb-2">
                                        <i class="fas fa-circle text-warning"></i> บัญชีที่ไม่ได้รับการยืนยัน
                                    </p>
                                    <p class="mb-2">
                                        <i class="fas fa-circle text-danger"></i> บัญชีที่ถูกระงับ
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Pie Chart 3: สถานะของไก่ -->
                    <div class="col-xl-4 col-lg-5">
                        <div class="card shadow mb-4">
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-primary">สถานะของไก่</h6>
                            </div>
                            <div class="card-body">
                                <div class="chart-pie pt-4 pb-2">
                                    <canvas id="isChickenAlivePiechart"></canvas>
                                </div>
                                <div class="text-center small">
                                    <p class="mb-2">
                                        <i class="fas fa-circle text-success"></i> มีชีวิต
                                    </p>
                                    <p class="mb-2">
                                        <i class="fas fa-circle text-danger"></i> ตาย
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <footer class="sticky-footer bg-white">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright &copy; Your Website 2021</span>
                </div>
            </div>
        </footer>
        <!-- End of Footer -->
    </div>

    <!-- JavaScript & Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Custom scripts for all pages -->
    <script src="js/sb-admin-2.min.js"></script>
    <script src="vendor/chart.js/Chart.min.js"></script>

    <script>
        // Example of pie chart code (same as before)
        var ctx = document.getElementById("userTypePiechart");
        var userTypePiechart = new Chart(ctx, {
            type: "doughnut",
            data: {
                labels: ["ผู้ดูแลระบบ", "เจ้าของฟาร์ม", "คนงาน"],
                datasets: [{
                    data: [100, 100, 800],
                    backgroundColor: ["#4e73df", "#1cc88a", "#36b9cc"],
                }],
            },
            options: {
                maintainAspectRatio: false,
                legend: { display: false },
                cutoutPercentage: 80,
            },
        });
    </script>
    <?php
};
include 'layout.php';