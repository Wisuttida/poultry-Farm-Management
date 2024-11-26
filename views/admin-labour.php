<?php
$title = 'Labour';
$content = function () {
    ?>
<div id="content-wrapper" class="d-flex flex-column">
    <div id="content">
      <div class="container-fluid pt-4">
        <!-- Page Heading -->
        <div class="d-flex align-items-center mb-2">
          <h1 class="m-0 h3 text-gray-800">คนงานดูแลเล้า</h1>
        </div>

        <!-- DataTales Example Farm -->
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">
              ข้อมูลคนงานดูแลเล้า
            </h6>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table
                class="table table-bordered"
                id="dataTable"
                width="100%"
                cellspacing="0"
              >
                <thead>
                  <tr>
                    <th>ชื่อผู้ดูแลเล้า</th>
                    <th>ชื่อเล่น</th>
                    <th>ชื่อผู้ใช้</th>
                    <th>ฟาร์ม</th>
                    <th>เล้าที่ดูแลปัจจุบัน</th>
                    <th>การจัดการ</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>ชื่อผู้ดูแลเล้า</th>
                    <th>ชื่อเล่น</th>
                    <th>ชื่อผู้ใช้</th>
                    <th>ฟาร์ม</th>
                    <th>เล้าที่ดูแลปัจจุบัน</th>
                    <th>การจัดการ</th>
                  </tr>
                </tfoot>
                <tbody>
                  <tr>
                    <td>นรงณ์ชัย นวนนิล</td>
                    <td>ริจ</td>
                    <td>username</td>
                    <td>ฟาร์มไก่เนื้อรุ่งเรือง</td>
                    <td>
                      <div
                        class="d-flex justify-content-center align-items-center"
                      >
                        <a
                          class="text-decoration-none card shadow bg-success text-center mx-1"
                          type="button"
                          data-toggle="modal"
                          data-target="#ShowDataLabour"
                        >
                          <span class="p-1 text-white small">1</span>
                        </a>
                        <!--<a class="btn btn-primary btn-circle btn-sm" type="button" data-toggle="modal" data-target="#AddCoopModal">
                                                        <i class="fas fa-plus"></i>
                                                    </a>-->
                        <a
                          class="text-decoration-none card shadow bg-success text-center mx-1"
                          type="button"
                          data-toggle="modal"
                          data-target="#ShowDataLabour"
                        >
                          <span class="p-1 text-white small">2</span>
                        </a>
                      </div>
                    </td>
                    <td>
                      <div
                        class="d-flex justify-content-center align-items-center"
                      >
                        <a
                          class="btn"
                          type="button"
                          data-toggle="modal"
                          data-target="#manageLabour"
                          data-toggle="tooltip"
                          title="manageLabour"
                        >
                          <img
                            src="img/farmer-success.png"
                            class="btn-small-block mb-1"
                          />
                        </a>
                        <a
                          class="btn"
                          type="button"
                          data-toggle="modal"
                          data-target="#manageDetaile"
                          data-toggle="tooltip"
                          title="Edit"
                        >
                          <i class="fas fa-clipboard-list text-warning"></i>
                        </a>
                        <a
                          class="btn delete"
                          data-toggle="tooltip"
                          title="Delete"
                        >
                          <i class="fas fa-trash-alt text-danger"></i>
                        </a>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>นรงณ์ชัย นวนนิล</td>
                    <td>ริจ</td>
                    <td>username</td>
                    <td>ฟาร์มไก่เนื้อรุ่งเรือง</td>
                    <td>
                      <div
                        class="d-flex justify-content-center align-items-center"
                      >
                        <a
                          class="text-decoration-none card shadow bg-success text-center mx-1"
                          type="button"
                          data-toggle="modal"
                          data-target="#ShowDataLabour"
                        >
                          <span class="p-1 text-white small">1</span>
                        </a>
                        <!--<a class="btn btn-primary btn-circle btn-sm" type="button" data-toggle="modal" data-target="#AddCoopModal">
                                                        <i class="fas fa-plus"></i>
                                                    </a>-->
                        <a
                          class="text-decoration-none card shadow bg-success text-center mx-1"
                          type="button"
                          data-toggle="modal"
                          data-target="#ShowDataLabour"
                        >
                          <span class="p-1 text-white small">2</span>
                        </a>
                      </div>
                    </td>
                    <td>
                      <div
                        class="d-flex justify-content-center align-items-center"
                      >
                        <a
                          class="btn"
                          type="button"
                          data-toggle="modal"
                          data-target="#manageLabour"
                          data-toggle="tooltip"
                          title="manageLabour"
                        >
                          <img
                            src="img/farmer-success.png"
                            class="btn-small-block mb-1"
                          />
                        </a>
                        <a
                          class="btn"
                          type="button"
                          data-toggle="modal"
                          data-target="#manageDetaile"
                          data-toggle="tooltip"
                          title="Edit"
                        >
                          <i class="fas fa-clipboard-list text-warning"></i>
                        </a>
                        <a
                          class="btn delete"
                          data-toggle="tooltip"
                          title="Delete"
                        >
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

      <!--tableCoopinUse-->
      <div class="container-fluid pt-4">
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">ฟาร์มโชคชัย</h6>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table
                class="table"
                id="dataTable"
                width="100%"
                cellspacing="0"
              >
                <thead>
                  <tr>
                    <th scope="col"></th>
                    <th scope="col">1</th>
                    <th scope="col">2</th>
                    <th scope="col">3</th>
                    <th scope="col">4</th>
                    <th scope="col">5</th>
                    <th scope="col">6</th>
                    <th scope="col">7</th>
                    <th scope="col">8</th>
                    <th scope="col">9</th>
                    <th scope="col">10</th>
                    <th scope="col">11</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">สว่าง</th>
                    <td><i class="fa fa-check-circle text-success"></i></td>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                    <td><i class="fa fa-check-circle text-success"></i></td>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                    <td><i class="fa fa-check-circle text-success"></i></td>
                  </tr>
                  <tr>
                    <th scope="row">บุญรอด</th>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                    <td><i class="fa fa-check-circle text-success"></i></td>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                    <td><i class="fa fa-check-circle text-success"></i></td>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                    <td><i class="fa fa-check-circle text-success"></i></td>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                  </tr>
                  <tr>
                    <th scope="row">แม้ว</th>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                    <td><i class="fa fa-check-circle text-success"></i></td>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                    <td><i class="fa fa-check-circle text-success"></i></td>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                    <td><i class="fa fa-check-circle text-success"></i></td>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                  </tr>
                  <tr>
                    <th scope="row">ผึ้ง</th>
                    <td><i class="fa fa-check-circle text-success"></i></td>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                    <td><i class="fa fa-check-circle text-success"></i></td>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                    <td><i class="fa fa-check-circle text-success"></i></td>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                  </tr>
                  <tr>
                    <th scope="row">เฉลิม</th>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                    <td><i class="fa fa-check-circle text-success"></i></td>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                    <td><i class="fa fa-check-circle text-success"></i></td>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                    <td><i class="fa fa-check-circle text-success"></i></td>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                  </tr>
                  <tr>
                    <th scope="row">กาน</th>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                    <td><i class="fa fa-check-circle text-success"></i></td>
                    <td><i class="fa fa-check-circle text-success"></i></td>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                    <td><i class="fa fa-check-circle text-success"></i></td>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                    <td><i class="fa fa-check-circle text-success"></i></td>
                    <td><i class="fa fa-check-circle text-success"></i></td>
                  </tr>
                  <tr>
                    <th scope="row">ภูณรงณ์</th>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                    <td><i class="fa fa-check-circle text-success"></i></td>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                    <td><i class="fa fa-check-circle text-success"></i></td>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                    <td><i class="fa fa-check-circle text-success"></i></td>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                  </tr>
                  <tr>
                    <th scope="row">ริจ</th>
                    <td><i class="fa fa-check-circle text-success"></i></td>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                    <td><i class="fa fa-check-circle text-success"></i></td>
                    <td><i class="fa fa-check-circle text-success"></i></td>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">
              ฟาร์มไก่เจริญกิจ
            </h6>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table
                class="table"
                id="dataTable"
                width="100%"
                cellspacing="0"
              >
                <thead>
                  <tr>
                    <th scope="col"></th>
                    <th scope="col">1</th>
                    <th scope="col">2</th>
                    <th scope="col">3</th>
                    <th scope="col">4</th>
                    <th scope="col">5</th>
                    <th scope="col">6</th>
                    <th scope="col">7</th>
                    <th scope="col">8</th>
                    <th scope="col">9</th>
                    <th scope="col">10</th>
                    <th scope="col">11</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">สว่าง</th>
                    <td><i class="fa fa-check-circle text-success"></i></td>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                    <td><i class="fa fa-check-circle text-success"></i></td>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                    <td><i class="fa fa-check-circle text-success"></i></td>
                  </tr>
                  <tr>
                    <th scope="row">บุญรอด</th>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                    <td><i class="fa fa-check-circle text-success"></i></td>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                    <td><i class="fa fa-check-circle text-success"></i></td>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                    <td><i class="fa fa-check-circle text-success"></i></td>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                  </tr>
                  <tr>
                    <th scope="row">แม้ว</th>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                    <td><i class="fa fa-check-circle text-success"></i></td>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                    <td><i class="fa fa-check-circle text-success"></i></td>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                    <td><i class="fa fa-check-circle text-success"></i></td>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                  </tr>
                  <tr>
                    <th scope="row">ผึ้ง</th>
                    <td><i class="fa fa-check-circle text-success"></i></td>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                    <td><i class="fa fa-check-circle text-success"></i></td>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                    <td><i class="fa fa-check-circle text-success"></i></td>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                  </tr>
                  <tr>
                    <th scope="row">เฉลิม</th>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                    <td><i class="fa fa-check-circle text-success"></i></td>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                    <td><i class="fa fa-check-circle text-success"></i></td>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                    <td><i class="fa fa-check-circle text-success"></i></td>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                  </tr>
                  <tr>
                    <th scope="row">กาน</th>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                    <td><i class="fa fa-check-circle text-success"></i></td>
                    <td><i class="fa fa-check-circle text-success"></i></td>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                    <td><i class="fa fa-check-circle text-success"></i></td>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                    <td><i class="fa fa-check-circle text-success"></i></td>
                    <td><i class="fa fa-check-circle text-success"></i></td>
                  </tr>
                  <tr>
                    <th scope="row">ภูณรงณ์</th>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                    <td><i class="fa fa-check-circle text-success"></i></td>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                    <td><i class="fa fa-check-circle text-success"></i></td>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                    <td><i class="fa fa-check-circle text-success"></i></td>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                  </tr>
                  <tr>
                    <th scope="row">ริจ</th>
                    <td><i class="fa fa-check-circle text-success"></i></td>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                    <td><i class="fa fa-check-circle text-success"></i></td>
                    <td><i class="fa fa-check-circle text-success"></i></td>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">
              ฟาร์มไก่เนื้อรุ่งเรือง
            </h6>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table
                class="table"
                id="dataTable"
                width="100%"
                cellspacing="0"
              >
                <thead>
                  <tr>
                    <th scope="col"></th>
                    <th scope="col">1</th>
                    <th scope="col">2</th>
                    <th scope="col">3</th>
                    <th scope="col">4</th>
                    <th scope="col">5</th>
                    <th scope="col">6</th>
                    <th scope="col">7</th>
                    <th scope="col">8</th>
                    <th scope="col">9</th>
                    <th scope="col">10</th>
                    <th scope="col">11</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">สว่าง</th>
                    <td><i class="fa fa-check-circle text-success"></i></td>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                    <td><i class="fa fa-check-circle text-success"></i></td>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                    <td><i class="fa fa-check-circle text-success"></i></td>
                  </tr>
                  <tr>
                    <th scope="row">บุญรอด</th>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                    <td><i class="fa fa-check-circle text-success"></i></td>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                    <td><i class="fa fa-check-circle text-success"></i></td>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                    <td><i class="fa fa-check-circle text-success"></i></td>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                  </tr>
                  <tr>
                    <th scope="row">แม้ว</th>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                    <td><i class="fa fa-check-circle text-success"></i></td>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                    <td><i class="fa fa-check-circle text-success"></i></td>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                    <td><i class="fa fa-check-circle text-success"></i></td>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                  </tr>
                  <tr>
                    <th scope="row">ผึ้ง</th>
                    <td><i class="fa fa-check-circle text-success"></i></td>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                    <td><i class="fa fa-check-circle text-success"></i></td>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                    <td><i class="fa fa-check-circle text-success"></i></td>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                  </tr>
                  <tr>
                    <th scope="row">เฉลิม</th>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                    <td><i class="fa fa-check-circle text-success"></i></td>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                    <td><i class="fa fa-check-circle text-success"></i></td>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                    <td><i class="fa fa-check-circle text-success"></i></td>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                  </tr>
                  <tr>
                    <th scope="row">กาน</th>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                    <td><i class="fa fa-check-circle text-success"></i></td>
                    <td><i class="fa fa-check-circle text-success"></i></td>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                    <td><i class="fa fa-check-circle text-success"></i></td>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                    <td><i class="fa fa-check-circle text-success"></i></td>
                    <td><i class="fa fa-check-circle text-success"></i></td>
                  </tr>
                  <tr>
                    <th scope="row">ภูณรงณ์</th>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                    <td><i class="fa fa-check-circle text-success"></i></td>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                    <td><i class="fa fa-check-circle text-success"></i></td>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                    <td><i class="fa fa-check-circle text-success"></i></td>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                  </tr>
                  <tr>
                    <th scope="row">ริจ</th>
                    <td><i class="fa fa-check-circle text-success"></i></td>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                    <td><i class="fa fa-check-circle text-success"></i></td>
                    <td><i class="fa fa-check-circle text-success"></i></td>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                    <td><i class="fa fa-check-circle text-danger"></i></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <!--End tableCoopinUse-->
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
      <!-- manage Labour -->
      <div
      class="modal fade"
      id="manageLabour"
      tabindex="-1"
      role="dialog"
      aria-labelledby="manageLabour"
      aria-hidden="true"
    >
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="manageLabour">จัดการคนงาน</h5>
            <button
              type="button"
              class="close"
              data-dismiss="modal"
              aria-label="Close"
            >
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form class="needs-validation" novalidate>
              <div class="form-group">
                <label for="farm"
                  ><span style="color: #f50000">*</span>ฟาร์มที่สังกัด</label
                >
                <select class="custom-select custom-select-sm" required>
                  <option selected>ฟาร์ม</option>
                  <option value="ฟาร์มโชคชัย">ฟาร์มโชคชัย</option>
                  <option value="ฟาร์มไก่เจริญกิจ">ฟาร์มไก่เจริญกิจ</option>
                  <option value="ฟาร์มไก่เนื้อรุ่งเรือง">
                    ฟาร์มไก่เนื้อรุ่งเรือง
                  </option>
                </select>
              </div>
              <div class="form-group">
                <label for="manageCoop">ดูแลเล้า</label>
                <span class="d-flex h6 small"
                  >สามารถจัดการผู้ดูแลเล้าได้ที่เล้าไก่</span
                >
                <select id="inputState" class="form-control">
                  <option selected>เล้า</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                </select>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button
              type="button"
              class="btn btn-secondary"
              data-dismiss="modal"
            >
              ปิด
            </button>
            <button type="button" class="btn btn-primary">บันทึก</button>
          </div>
        </div>
      </div>
    </div>

    <!-- detaile -->
    <div
      class="modal fade"
      id="manageDetaile"
      tabindex="-1"
      role="dialog"
      aria-labelledby="manageDetaile"
      aria-hidden="true"
    >
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="manageDetaile">ข้อมูลคนงาน</h5>
            <button
              type="button"
              class="close"
              data-dismiss="modal"
              aria-label="Close"
            >
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body"></div>
          <div class="modal-footer">

            <button type="button" class="btn btn-primary">บันทึกข้อมูล</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!--delete farm-->
    <script>
      document.addEventListener("click", function (event) {
        if (event.target.closest(".delete")) {
          const row = event.target.closest("tr");
          if (confirm("คุณแน่ใจหรือว่าต้องการลบข้อมูลนี้?")) {
            row.remove(); // ลบแถว
          }
        }
      });
    </script>
<?php
};
include 'layout.php';
