<?php
$title = 'details Farm';
$content = function () {
    ?>

@section('content')
    <div id="content-wrapper" class="d-flex flex-column">
        <div id="content">
            <!-- Begin Page Content -->
            <!-- DataTales Example -->
            <div class="container-fluid">
                <div class="d-flex align-items-center mt-4">
                    <h1 class="m-0 h3 text-gray-800">ข้อมูลของฟาร์มไก่</h1>
                </div>
                <!-- DataTales Example -->
                <div class="card shadow mb-4" style="margin-top: 1%">
                    <div class="card-header py-3 d-flex justify-content-between align-items-center">
                        <h6 class="m-0 font-weight-bold text-primary">
                            ข้อมูลของฟาร์มไก่
                        </h6>
                        <!-- Add Farm Button -->
                        <button class="btn btn-primary" data-toggle="modal" data-target="#AddFarmModal">
                            เพิ่มฟาร์มโดยผู้ดูแลระบบ
                        </button>
                    </div>

                    <!--AddFarm-->
                    <div class="modal fade" id="AddFarmModal" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <div class="flex-column">
                                        <h3 class="modal-title font-weight-bold text-primary" id="exampleModalLabel">
                                            เพิ่มฟาร์มโดยผู้ดูแลระบบ
                                        </h3>
                                    </div>
                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <form class="p-3">
                                    <div class="form-group">
                                        <label for="nameFarm" class="font-weight-bold">ชื่อ</label>
                                        <input class="form-control" type="text" id="nameFarm"
                                            placeholder="*ชื่อฟาร์ม" />
                                    </div>
                                    <div class="form-group">
                                        <label for="nameFarm" class="font-weight-bold">ชื่อเจ้าของฟาร์ม</label>
                                        <input class="form-control" type="text" id="nameOwnFarm"
                                            placeholder="*ชื่อเจ้าฟาร์ม" />
                                    </div>

                                    <div class="form-group">
                                        <label for="dateAddFarm" class="font-weight-bold">วันที่เพิ่มฟาร์ม</label>
                                        <input type="date" class="form-control" id="dateAddFarm"
                                            placeholder="DD/MM/YYYY" />
                                    </div>
                                    <div class="m-0 form-group">
                                        <label for="baseFarm" class="font-weight-bold">ที่ตั้งฟาร์ม</label>
                                        <div class="form-group">
                                            <label for="baseFarm" class="font-weight-normal">ที่อยู่</label>
                                            <input class="form-control" type="text" id="ownerFarm"
                                                placeholder="*บ้านเลขที่ หมู่ ซอย ถนน" />
                                        </div>
                                        <div class="form-row">
                                            <div class="col-xl-6 form-group">
                                                <label for="baseFarm" class="font-weight-normal">แขวง/ตำบล</label>
                                                <select id="inputState" class="form-control">
                                                    <option selected>แขวง/ตำบล</option>
                                                    <option>...</option>
                                                </select>
                                            </div>
                                            <div class="col-xl-6 form-group">
                                                <label for="baseFarm" class="font-weight-normal">เขตอำเภอ</label>
                                                <select id="inputState" class="form-control" placeholder="*">
                                                    <option>เขตอำเภอ</option>
                                                    <option>...</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-xl-6 form-group">
                                                <label for="baseFarm" class="font-weight-normal">จังหวัด</label>
                                                <select id="inputState" class="form-control">
                                                    <option selected>จังหวัด</option>
                                                    <option>...</option>
                                                </select>
                                            </div>
                                            <div class="col-xl-6 form-group">
                                                <label for="baseFarm" class="font-weight-normal">รหัสไปรษณีย์</label>
                                                <select id="inputState" class="form-control" placeholder="*">
                                                    <option>รหัสไปรษณีย์</option>
                                                    <option>...</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <div class="p-3">
                                    <button class="btn btn-info btn-user btn-block mt-3 mb-3" type="button"
                                        data-dismiss="modal" id="saveFarmButton">
                                        บันทึกข้อมูล
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Scroll to Top Button-->
                    <a class="scroll-to-top rounded" href="#page-top">
                        <i class="fas fa-angle-up"></i>
                    </a>

                    <!--saveFarmButton-->
                    <script>
                        document
                            .getElementById("saveFarmButton")
                            .addEventListener("click", function() {
                                const farmName = document
                                    .getElementById("nameFarm")
                                    .value.trim();
                                const owner = document
                                    .getElementById("nameOwnFarm")
                                    .value.trim();
                                const dateAdded =
                                    document.getElementById("dateAddFarm").value;
                                const location = document
                                    .getElementById("ownerFarm")
                                    .value.trim();

                                if (farmName && owner && dateAdded && location) {
                                    // ค่าเริ่มต้นสำหรับจำนวนเล้า, จำนวนคนงาน, และจำนวนไก่
                                    const numCoops = 0;
                                    const numWorkers = 0;
                                    const numChickens = 0;

                                    // เพิ่มข้อมูลลงในตาราง
                                    const table = document.querySelector("#dataTable tbody");
                                    const newRow = `
                      <tr>
                        <td>${farmName}</td>
                        <td>${owner}</td>
                        <td>${numCoops}</td>
                        <td>${numWorkers}</td>
                        <td>${numChickens}</td>
                        <td>
                          <div style="display: flex; align-items: center">
                            <a class="addCoop" title="AddCoopModal" data-toggle="modal" data-target="#AddCoopModal">
                              <i class="bi bi-plus-circle-fill" style="font-size: 16px;"></i>
                            </a>
                            <a class="edit" title="Edit">
                              <i class="fas fa-clipboard-list" style="font-size: 19px"></i>
                            </a>
                            <a class="delete" title="Delete">
                              <i class="fas fa-trash-alt" style="font-size: 16px"></i>
                            </a>
                          </div>
                        </td>
                      </tr>
                    `;
                                    table.insertAdjacentHTML("beforeend", newRow);

                                    $("#AddFarmModal").modal("hide");

                                    document.getElementById("nameFarm").value = "";
                                    document.getElementById("nameOwnFarm").value = "";
                                    document.getElementById("dateAddFarm").value = "";
                                    document.getElementById("ownerFarm").value = "";
                                } else {
                                    alert("กรุณากรอกข้อมูลให้ครบทุกช่องที่บังคับ");
                                }
                            });
                    </script>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>ชื่อของฟาร์ม</th>
                                        <th>ชื่อเจ้าของฟาร์ม</th>
                                        <th>จำนวนเล้าทั้งหมด</th>
                                        <th>จำนวนคนงานทั้งหมด</th>
                                        <th>จำนวนไก่ทั้งหมด</th>
                                        <th>การจัดการฟาร์ม</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>ชื่อของฟาร์ม</th>
                                        <th>ชื่อเจ้าของฟาร์ม</th>
                                        <th>จำนวนเล้าทั้งหมด</th>
                                        <th>จำนวนคนงานทั้งหมด</th>
                                        <th>จำนวนไก่ทั้งหมด</th>
                                        <th>การจัดการฟาร์ม</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <tr>
                                        <td id="farmNameCell">ฟาร์มเรือนขวัญ</td>
                                        <td id="ownerNameCell">มลิวรรณ ทวนทอง</td>
                                        <td id="totalCoopsCell">10</td>
                                        <td id="totalLabour">61</td>
                                        <td id="totalChicken">1000</td>
                                        <td>
                                            <div
                                                style="
                          display: flex;
                          justify-content: space-between;
                        ">
                                                <a class="addCoop" title="เพิ่มเล้า" data-toggle="modal"
                                                    data-target="#AddCoopModal" onclick="setFarmName('ฟาร์มเรือนขวัญ')">
                                                    <i class="bi bi-plus-circle-fill"
                                                        style="font-size: 18px; top: -5px"></i>
                                                </a>
                                                <a class="edit" title="แก้ไขข้อมูล"
                                                    onclick="openModal('ฟาร์มเรือนขวัญ', 'มลิวรรณ ทวนทอง', '123 ถนน หมู่บ้าน', this)">
                                                    <i class="fas fa-clipboard-list" style="font-size: 20px"></i>
                                                </a>
                                                <a class="delete" title="ลบข้อมูล">
                                                    <i class="fas fa-trash-alt" style="font-size: 17px"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- AddCoop Modal-->
                    <div class="modal fade" id="AddCoopModal" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <div class="flex-column">
                                        <h3 class="modal-title font-weight-bold text-primary" id="exampleModalLabel">
                                            เพิ่มเล้าโดยผู้ดูแลระบบ
                                        </h3>
                                    </div>
                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <form class="p-3" id="coopForm">
                                    <!-- farmName Field (Readonly) -->
                                    <div class="mb-3">
                                        <label for="farmName" class="form-label">ชื่อฟาร์ม</label>
                                        <input type="text" class="form-control" id="farmName" readonly />
                                    </div>
                                    <div class="form-group">
                                        <label for="start-date" class="font-weight-bold">วันที่เริ่ม</label>
                                        <input type="date" class="form-control" id="start-date"
                                            aria-describedby="dateHelp" placeholder="DD/MM/YYYY" max=""
                                            required />
                                    </div>
                                    <div class="form-group">
                                        <label for="duration" class="font-weight-bold">ระยะเวลา (วัน)</label>
                                        <input type="number" class="form-control" id="duration" required />
                                    </div>
                                    <div class="form-group">
                                        <label for="end-date" class="font-weight-bold">วันที่สิ้นสุด</label>
                                        <input type="date" class="form-control" id="end-date" readonly />
                                    </div>
                                    <div class="form-group">
                                        <label for="amount-chicken" class="font-weight-bold">จำนวนไก่(ตัว)</label>
                                        <input class="form-control" type="number" id="amount-chicken" required />
                                    </div>
                                    <div class="form-group">
                                        <label for="expected-weight"
                                            class="font-weight-bold">น้ำหนักที่ต้องการ(กก)</label>
                                        <input class="form-control" type="number" id="expected-weight" required />
                                    </div>
                                    <div class="form-group">
                                        <label for="manageCoop" class="mb-0">คนงานดูแลเล้า</label>
                                        <select id="inputState" class="form-control">
                                            <option selected>คนงาน</option>
                                            <option value="นรงณ์ชัย">นรงณ์ชัย</option>
                                            <option value="นรงณ์ชัย">...</option>
                                        </select>
                                    </div>
                                </form>
                                <div class="p-3">
                                    <button class="btn btn-info btn-user btn-block mb-3" type="button"
                                        id="saveFarmButton" onclick="saveInformation()">
                                        บันทึกข้อมูล
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <script>
                        // Set farm name in modal when it opens
                        function setFarmName(farmName) {
                            document.getElementById("farmName").value = farmName;

                            // Disable future dates for start-date
                            let today = new Date().toISOString().split("T")[0];
                            document
                                .getElementById("start-date")
                                .setAttribute("max", today);
                        }

                        // Automatically calculate end-date based on start-date and duration
                        document
                            .getElementById("duration")
                            .addEventListener("input", function() {
                                let startDate = new Date(
                                    document.getElementById("start-date").value
                                );
                                let duration = parseInt(this.value);

                                if (!isNaN(duration) && startDate) {
                                    startDate.setDate(startDate.getDate() + duration);
                                    let endDate = startDate.toISOString().split("T")[0];
                                    document.getElementById("end-date").value = endDate;
                                }
                            });

                        // Handle saving information and displaying success message
                        function saveInformation() {
                            let startDate = document.getElementById("start-date").value;
                            let duration = document.getElementById("duration").value;
                            let amountChicken =
                                document.getElementById("amount-chicken").value;
                            let expectedWeight =
                                document.getElementById("expected-weight").value;

                            if (
                                startDate &&
                                duration &&
                                amountChicken &&
                                expectedWeight
                            ) {
                                // Display success message
                                alert("Data recorded successfully");

                                // Get the current total number of coops
                                let totalCoopsCell =
                                    document.getElementById("totalCoopsCell");
                                let currentCoops = parseInt(totalCoopsCell.innerText);

                                // Increment the number of coops by 1
                                totalCoopsCell.innerText = currentCoops + 1;

                                // Optionally, clear the form after saving
                                document.getElementById("coopForm").reset();
                                document.getElementById("end-date").value = ""; // Clear end-date
                            } else {
                                alert("Please fill in all required fields.");
                            }
                        }
                    </script>

                    <!-- Edit Farm Modal -->
                    <div class="modal fade" id="editFarmModal" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h3 class="modal-title font-weight-bold text-primary" id="exampleModalLabel">
                                        แก้ไขฟาร์มโดยผู้ดูแลระบบ
                                    </h3>
                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <form class="p-3">
                                    <div class="form-group">
                                        <label for="editNameFarm" class="font-weight-bold">ชื่อ</label>
                                        <input class="form-control" type="text" id="editNameFarm"
                                            placeholder="*ชื่อฟาร์ม" />
                                    </div>
                                    <div class="form-group">
                                        <label for="editNameOwnFarm" class="font-weight-bold">ชื่อเจ้าของฟาร์ม</label>
                                        <input class="form-control" type="text" id="editNameOwnFarm"
                                            placeholder="*ชื่อเจ้าของฟาร์ม" />
                                    </div>
                                    <div class="form-group">
                                        <label for="editLocationFarm" class="font-weight-bold">ที่ตั้งฟาร์ม</label>
                                        <input class="form-control" type="text" id="editLocationFarm"
                                            placeholder="*ที่อยู่ฟาร์ม" />
                                    </div>
                                </form>
                                <div class="p-3">
                                    <button class="btn btn-info btn-user btn-block" type="button" id="saveEditButton">
                                        บันทึกข้อมูล
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <script>
                        let selectedRow = null;

                        function openModal(farmName, ownerName, farmLocation, element) {
                            document.getElementById("editNameFarm").value = farmName;
                            document.getElementById("editNameOwnFarm").value = ownerName;
                            document.getElementById("editLocationFarm").value =
                                farmLocation;

                            selectedRow = element.closest("tr");

                            $("#editFarmModal").modal("show");
                        }

                        document
                            .getElementById("saveEditButton")
                            .addEventListener("click", function() {
                                const updatedFarmName =
                                    document.getElementById("editNameFarm").value;
                                const updatedOwnerName =
                                    document.getElementById("editNameOwnFarm").value;
                                const updatedLocation =
                                    document.getElementById("editLocationFarm").value;

                                if (selectedRow) {
                                    selectedRow.querySelector("#farmNameCell").innerText =
                                        updatedFarmName;
                                    selectedRow.querySelector("#ownerNameCell").innerText =
                                        updatedOwnerName;

                                    $("#editFarmModal").modal("hide");
                                }
                            });
                    </script>
                    <!-- delete farm -->
                    <script>
                        document.addEventListener("click", function(event) {
                            if (event.target.closest(".delete")) {
                                const row = event.target.closest("tr");
                                if (confirm("คุณแน่ใจหรือว่าต้องการลบข้อมูลนี้?")) {
                                    row.remove(); // ลบแถว
                                }
                            }
                        });
                    </script>
                </div>
                <footer class="sticky-footer bg-white">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>Copyright &copy; Your Website 2020</span>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
    </div>
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
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">
                        Cancel
                    </button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>
    <?php
};
include 'layout.php';
