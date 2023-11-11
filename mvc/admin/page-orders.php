<?php
include_once __DIR__ . '/../inc/_header.admin.inc.php';
?>

 
        <section class="content-main">
            <div class="content-header">
                <div>
                    <h2 class="content-title card-title">Danh sách đơn đặt hàng</h2>
                    <!-- <p>Lorem ipsum dolor sit amet.</p> -->
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card mb-4">
                        <header class="card-header">
                            <div class="row gx-3">
                                <div class="col-lg-4 col-md-6 me-auto">
                                    <input type="text" placeholder="Tìm kiếm..." class="form-control">
                                </div>
                                <div class="col-lg-2 col-md-3 col-6">
                                    <select class="form-select">
                                        <option>Trạng thái</option>
                                        <option>Đã nhận</option>
                                        <option>Đã hủy</option>
                                        <option>Đang giao</option>
                                        <option>Tất cả</option>
                                    </select>
                                </div>
                                <div class="col-lg-2 col-md-3 col-6">
                                    <select class="form-select">
                                        <option>Hiển thị 20 sản phẩm</option>
                                        <option>Hiển thị 30 sản phẩm</option>
                                        <option>Hiển thị 40 sản phẩm</option>
                                    </select>
                                </div>
                            </div>
                        </header>
                        <!-- card-header end// -->
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Tên Khách Hàng</th>
                                            <th>Tổng Tiền</th>
                                            <th>Trạng Thái</th>
                                            <th>Ngày Đặt Hàng</th>
                                            <th class="text-end"> Chức năng </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>452</td>
                                            <td><b>Devon Lane</b></td>
                                            <td>$948.55</td>
                                            <td><span class="badge rounded-pill alert-success">Đã nhận</span></td>
                                            <td>07.05.2022</td>
                                            <td class="text-end">
                                                <a href="page-orders-detail.php" class="btn btn-md rounded font-sm">Chi tiết</a>
                                                <div class="dropdown">
                                                    <a href="#" data-bs-toggle="dropdown" class="btn btn-light rounded btn-sm font-sm"> <i class="material-icons md-more_horiz"></i> </a>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Xem chi tiết</a>
                                                        <a class="dropdown-item" href="#">Chỉnh sửa</a>
                                                        <a class="dropdown-item text-danger" href="#">Xóa</a>
                                                    </div>
                                                </div>
                                                <!-- dropdown //end -->
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>789</td>
                                            <td><b>Guy Hawkins</b></td>
                                            <td>$0.00</td>
                                            <td><span class="badge rounded-pill alert-danger">Đã hủy</span></td>
                                            <td>25.05.2022</td>
                                            <td class="text-end">
                                                <a href="page-orders-detail.php" class="btn btn-md rounded font-sm">Chi tiết</a>
                                                <div class="dropdown">
                                                    <a href="#" data-bs-toggle="dropdown" class="btn btn-light rounded btn-sm font-sm"> <i class="material-icons md-more_horiz"></i> </a>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Xem chi tiết</a>
                                                        <a class="dropdown-item" href="#">Chỉnh sửa</a>
                                                        <a class="dropdown-item text-danger" href="#">Xóa</a>
                                                    </div>
                                                </div>
                                                <!-- dropdown //end -->
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>478</td>
                                            <td><b>Leslie Alexander</b></td>
                                            <td>$293.01</td>
                                            <td><span class="badge rounded-pill alert-warning">Đang giao hàng</span></td>
                                            <td>18.05.2022</td>
                                            <td class="text-end">
                                                <a href="page-orders-detail.php" class="btn btn-md rounded font-sm">Chi tiết</a>
                                                <div class="dropdown">
                                                    <a href="#" data-bs-toggle="dropdown" class="btn btn-light rounded btn-sm font-sm"> <i class="material-icons md-more_horiz"></i> </a>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Xem chi tiết</a>
                                                        <a class="dropdown-item" href="#">Chỉnh sửa</a>
                                                        <a class="dropdown-item text-danger" href="#">Xóa</a>
                                                    </div>
                                                </div>
                                                <!-- dropdown //end -->
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>589</td>
                                            <td><b>Albert Flores</b></td>
                                            <td>$105.55</td>
                                            <td><span class="badge rounded-pill alert-warning">Đang giao hàng</span></td>
                                            <td>07.02.2022</td>
                                            <td class="text-end">
                                                <a href="page-orders-detail.php" class="btn btn-md rounded font-sm">Chi tiết</a>
                                                <div class="dropdown">
                                                    <a href="#" data-bs-toggle="dropdown" class="btn btn-light rounded btn-sm font-sm"> <i class="material-icons md-more_horiz"></i> </a>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Xem chi tiết</a>
                                                        <a class="dropdown-item" href="#">Chỉnh sửa</a>
                                                        <a class="dropdown-item text-danger" href="#">Xóa</a>
                                                    </div>
                                                </div>
                                                <!-- dropdown //end -->
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>345</td>
                                            <td><b>Eleanor Pena</b></td>
                                            <td>$779.58</td>
                                            <td><span class="badge rounded-pill alert-success">Đã nhận</span></td>
                                            <td>18.03.2022</td>
                                            <td class="text-end">
                                                <a href="page-orders-detail.php" class="btn btn-md rounded font-sm">Chi tiết</a>
                                                <div class="dropdown">
                                                    <a href="#" data-bs-toggle="dropdown" class="btn btn-light rounded btn-sm font-sm"> <i class="material-icons md-more_horiz"></i> </a>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Xem chi tiết</a>
                                                        <a class="dropdown-item" href="#">Chỉnh sửa</a>
                                                        <a class="dropdown-item text-danger" href="#">Xóa</a>
                                                    </div>
                                                </div>
                                                <!-- dropdown //end -->
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>456</td>
                                            <td><b>Dianne Russell</b></td>
                                            <td>$576.28</td>
                                            <td><span class="badge rounded-pill alert-success">Đã nhận</span></td>
                                            <td>23.04.2022</td>
                                            <td class="text-end">
                                                <a href="page-orders-detail.php" class="btn btn-md rounded font-sm">Chi tiết</a>
                                                <div class="dropdown">
                                                    <a href="#" data-bs-toggle="dropdown" class="btn btn-light rounded btn-sm font-sm"> <i class="material-icons md-more_horiz"></i> </a>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Xem chi tiết</a>
                                                        <a class="dropdown-item" href="#">Chỉnh sửa</a>
                                                        <a class="dropdown-item text-danger" href="#">Xóa</a>
                                                    </div>
                                                </div>
                                                <!-- dropdown //end -->
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>768</td>
                                            <td><b>Savannah Nguyen</b></td>
                                            <td>$589.99</td>
                                            <td><span class="badge rounded-pill alert-success">Đã nhận</span></td>
                                            <td>18.05.2022</td>
                                            <td class="text-end">
                                                <a href="page-orders-detail.php" class="btn btn-md rounded font-sm">Chi tiết</a>
                                                <div class="dropdown">
                                                    <a href="#" data-bs-toggle="dropdown" class="btn btn-light rounded btn-sm font-sm"> <i class="material-icons md-more_horiz"></i> </a>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Xem chi tiết</a>
                                                        <a class="dropdown-item" href="#">Chỉnh sửa</a>
                                                        <a class="dropdown-item text-danger" href="#">Xóa</a>
                                                    </div>
                                                </div>
                                                <!-- dropdown //end -->
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>977</td>
                                            <td><b>Kathryn Murphy</b></td>
                                            <td>$169.43</td>
                                            <td><span class="badge rounded-pill alert-success">Đã nhận</span></td>
                                            <td>23.03.2022</td>
                                            <td class="text-end">
                                                <a href="page-orders-detail.php" class="btn btn-md rounded font-sm">Chi tiết</a>
                                                <div class="dropdown">
                                                    <a href="#" data-bs-toggle="dropdown" class="btn btn-light rounded btn-sm font-sm"> <i class="material-icons md-more_horiz"></i> </a>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Xem chi tiết</a>
                                                        <a class="dropdown-item" href="#">Chỉnh sửa</a>
                                                        <a class="dropdown-item text-danger" href="#">Xóa</a>
                                                    </div>
                                                </div>
                                                <!-- dropdown //end -->
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>687</td>
                                            <td><b>Jacob Jones</b></td>
                                            <td>$219.78</td>
                                            <td><span class="badge rounded-pill alert-success">Đã nhận</span></td>
                                            <td>07.05.2022</td>
                                            <td class="text-end">
                                                <a href="page-orders-detail.php" class="btn btn-md rounded font-sm">Chi tiết</a>
                                                <div class="dropdown">
                                                    <a href="#" data-bs-toggle="dropdown" class="btn btn-light rounded btn-sm font-sm"> <i class="material-icons md-more_horiz"></i> </a>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Xem chi tiết</a>
                                                        <a class="dropdown-item" href="#">Chỉnh sửa</a>
                                                        <a class="dropdown-item text-danger" href="#">Xóa</a>
                                                    </div>
                                                </div>
                                                <!-- dropdown //end -->
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>688</td>
                                            <td><b>Jacob Jones</b></td>
                                            <td>$219.78</td>
                                            <td><span class="badge rounded-pill alert-success">Đã nhận</span></td>
                                            <td>07.05.2022</td>
                                            <td class="text-end">
                                                <a href="page-orders-detail.php" class="btn btn-md rounded font-sm">Chi tiết</a>
                                                <div class="dropdown">
                                                    <a href="#" data-bs-toggle="dropdown" class="btn btn-light rounded btn-sm font-sm"> <i class="material-icons md-more_horiz"></i> </a>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Xem chi tiết</a>
                                                        <a class="dropdown-item" href="#">Chỉnh sửa</a>
                                                        <a class="dropdown-item text-danger" href="#">Xóa</a>
                                                    </div>
                                                </div>
                                                <!-- dropdown //end -->
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- table-responsive //end -->
                        </div>
                        <!-- card-body end// -->
                    </div>
                    <!-- card end// -->
                </div>
            </div>
            <div class="pagination-area mt-15 mb-50">
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-start">
                        <li class="page-item active"><a class="page-link" href="#">01</a></li>
                        <li class="page-item"><a class="page-link" href="#">02</a></li>
                        <li class="page-item"><a class="page-link" href="#">03</a></li>
                        <li class="page-item"><a class="page-link dot" href="#">...</a></li>
                        <li class="page-item"><a class="page-link" href="#">16</a></li>
                        <li class="page-item"><a class="page-link" href="#"><i class="material-icons md-chevron_right"></i></a></li>
                    </ul>
                </nav>
            </div>
        </section>
        <!-- content-main end// -->
         

<?php
include_once __DIR__ . '/../inc/_footer.admin.inc.php';
?>