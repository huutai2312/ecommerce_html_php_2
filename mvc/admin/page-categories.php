<?php
include_once __DIR__ . '/../inc/_header.admin.inc.php';
?>

 
        <section class="content-main">
            <div class="content-header">
                <div>
                    <h2 class="content-title card-title">Danh mục </h2>
                    <p>Thêm, chỉnh sửa hoặc xóa một danh mục</p>
                </div>
                <div>
                    <input type="text" placeholder="Tìm kiếm danh mục" class="form-control bg-white">
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3">
                            <form>
                                <div class="mb-4">
                                    <label for="product_name" class="form-label">ID</label>
                                    <input type="text" placeholder="Type here" class="form-control" id="product_name" />
                                </div>
                                <div class="mb-4">
                                    <label for="product_slug" class="form-label">Tên Danh mục</label>
                                    <input type="text" placeholder="Type here" class="form-control" id="product_slug" />
                                </div>
                              
                                <div class="d-grid">
                                    <button class="btn btn-primary">Tạo danh mục</button>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-9">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th class="text-center">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" />
                                                </div>
                                            </th>
                                            <th>ID</th>
                                            <th>Tên Danh Mục</th>
                                            <th class="text-end">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" />
                                                </div>
                                            </td>
                                            <td>21</td>
                                            <td><b>Men clothes</b></td>
                                            <td class="text-end">
                                                <div class="dropdown">
                                                    <a href="#" data-bs-toggle="dropdown" class="btn btn-light rounded btn-sm font-sm"> <i class="material-icons md-more_horiz"></i> </a>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Sửa Danh Mục</a>
                                                        <a class="dropdown-item text-danger" href="#">Xóa</a>
                                                    </div>
                                                </div>
                                                <!-- dropdown //end -->
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" />
                                                </div>
                                            </td>
                                            <td>2</td>
                                            <td><b>Women fashion</b></td>
                                            <td class="text-end">
                                                <div class="dropdown">
                                                    <a href="#" data-bs-toggle="dropdown" class="btn btn-light rounded btn-sm font-sm"> <i class="material-icons md-more_horiz"></i> </a>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Sửa Danh Mục</a>
                                                        <a class="dropdown-item text-danger" href="#">Xóa</a>
                                                    </div>
                                                </div>
                                                <!-- dropdown //end -->
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" />
                                                </div>
                                            </td>
                                            <td>3</td>
                                            <td><b>Kids clothes</b></td>
                                            <td class="text-end">
                                                <div class="dropdown">
                                                    <a href="#" data-bs-toggle="dropdown" class="btn btn-light rounded btn-sm font-sm"> <i class="material-icons md-more_horiz"></i> </a>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Sửa Danh Mục</a>
                                                        <a class="dropdown-item text-danger" href="#">Xóa</a>
                                                    </div>
                                                </div>
                                                <!-- dropdown //end -->
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center"><i class="material-icons md-subdirectory_arrow_right text-muted"></i></td>
                                            <td>4</td>
                                            <td><b>Hot Gifts</b></td>
                                            <td class="text-end">
                                                <div class="dropdown">
                                                    <a href="#" data-bs-toggle="dropdown" class="btn btn-light rounded btn-sm font-sm"> <i class="material-icons md-more_horiz"></i> </a>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Sửa Danh Mục</a>
                                                        <a class="dropdown-item text-danger" href="#">Delete</a>
                                                    </div>
                                                </div>
                                                <!-- dropdown //end -->
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center"><i class="material-icons md-subdirectory_arrow_right text-muted"></i></td>
                                            <td>5</td>
                                            <td><b>Electronics</b></td>
                                            <td class="text-end">
                                                <div class="dropdown">
                                                    <a href="#" data-bs-toggle="dropdown" class="btn btn-light rounded btn-sm font-sm"> <i class="material-icons md-more_horiz"></i> </a>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Sửa Danh Mục</a>
                                                        <a class="dropdown-item text-danger" href="#">Xóa</a>
                                                    </div>
                                                </div>
                                                <!-- dropdown //end -->
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" />
                                                </div>
                                            </td>
                                            <td>6</td>
                                            <td><b>Accessories</b></td>
                                            <td class="text-end">
                                                <div class="dropdown">
                                                    <a href="#" data-bs-toggle="dropdown" class="btn btn-light rounded btn-sm font-sm"> <i class="material-icons md-more_horiz"></i> </a>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Sửa Danh Mục</a>
                                                        <a class="dropdown-item text-danger" href="#">Xóa</a>
                                                    </div>
                                                </div>
                                                <!-- dropdown //end -->
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" />
                                                </div>
                                            </td>
                                            <td>7</td>
                                            <td><b>Jewellery</b></td>
                                            <td class="text-end">
                                                <div class="dropdown">
                                                    <a href="#" data-bs-toggle="dropdown" class="btn btn-light rounded btn-sm font-sm"> <i class="material-icons md-more_horiz"></i> </a>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Sửa Danh Mục</a>
                                                        <a class="dropdown-item text-danger" href="#">Xóa</a>
                                                    </div>
                                                </div>
                                                <!-- dropdown //end -->
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" />
                                                </div>
                                            </td>
                                            <td>8</td>
                                            <td><b>Interiors</b></td>
                                            <td class="text-end">
                                                <div class="dropdown">
                                                    <a href="#" data-bs-toggle="dropdown" class="btn btn-light rounded btn-sm font-sm"> <i class="material-icons md-more_horiz"></i> </a>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Sửa Danh Mục</a>
                                                        <a class="dropdown-item text-danger" href="#">Xóa</a>
                                                    </div>
                                                </div>
                                                <!-- dropdown //end -->
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- .col// -->
                    </div>
                    <!-- .row // -->
                </div>
                <!-- card body .// -->
            </div>
            <!-- card .// -->
        </section>
        <!-- content-main end// -->
         

<?php
include_once __DIR__ . '/../inc/_footer.admin.inc.php';
?>