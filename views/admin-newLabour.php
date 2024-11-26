<?php
$title = 'New labour';
$content = function () {
    ?>

    <!-- Begin Page Content -->
    <div class="container-fluid">
        <div class="d-flex align-items-center mt-4">
            <h1 class="ml-4 h3 text-gray-800">ข้อมูลของคนงานที่ไม่มีสังกัด</h1>
        </div>
        <!-- DataTales Example -->
        <div class="container-fluid" style="margin-top: 1%">
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex justify-content-between align-items-center">
                    <h6 class="m-0 font-weight-bold text-primary">ข้อมูลของคนงานที่ไม่มีสังกัด</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>ชื่อบัญชีผู้ใช้</th>
                                    <th>ชื่อคนงาน</th>
                                    <th style="width: 175px">การจัดการคนงาน</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>phaarwii67</td>
                                    <td>พันเกล้า ติณรัตน์</td>
                                    <td>
                                        <div style="display: flex; margin-left: 5%">
                                            <a class="edit" title="Edit"
                                                onclick="openModal('phaarwii67','พันเกล้า ติณรัตน์')">
                                                <i class="fas fa-clipboard-list" style="font-size: 20px"></i>
                                            </a>
                                            <a class="delete" title="Delete" onclick="delInfo(this);" data-toggle="tooltip"
                                                style="margin-left: 7%">
                                                <i class="fas fa-trash-alt" style="font-size: 16px"></i>
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
    <!-- End of Main Content -->

    <!-- Footer -->
    <footer class="sticky-footer bg-white">
        <div class="container my-auto">
            <div class="copyright text-center my-auto">
                <span>Copyright &copy; Your Website 2020</span>
            </div>
        </div>
    </footer>
    <!-- End of Footer -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    Select "Logout" below if you are ready to end your current session.
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript & Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"></script>

    <!-- modals add labour to farm -->
    <script>
        function openModal(id, name) {
            document.getElementById("username").value = id;
            document.getElementById("fullName").value = name;

            var myModal = new bootstrap.Modal(
                document.getElementById("addLabourToFarmModal"), {
                keyboard: false,
            }
            );
            myModal.show();
        }

        document.getElementById("farmWorkerForm").addEventListener("submit", function (event) {
            event.preventDefault();
            const username = document.getElementById("username").value;
            const farm = document.getElementById("farm").value;
            const coop = document.getElementById("coop").value;
            const dateAddLabour = document.getElementById("dateAddFarm").value;

            if (!farm || !coop || !dateAddLabour) {
                alert("กรุณากรอกข้อมูลให้ครบถ้วน");
                return;
            }

            const row = document.querySelector(`tr[data-username="${username}"]`);
            if (row) {
                row.remove();
            }

            alert("เพิ่มคนงานสู่ฟาร์มและเล้าสำเร็จ");
            const modal = bootstrap.Modal.getInstance(document.getElementById("addLabourToFarmModal"));
            modal.hide();
        });

        document.addEventListener("click", function (event) {
            if (event.target.closest(".delete")) {
                const row = event.target.closest("tr");
                if (confirm("คุณแน่ใจหรือว่าต้องการลบข้อมูลนี้?")) {
                    row.remove();
                }
            }
        });
    </script>
    <?php
};
include 'layout.php';