<?php
include_once __DIR__ . '/../inc/_header.admin.inc.php';
?>

 
        <section class="content-main">
            <div class="row">
                <div class="col-9">
                    <div class="content-header">
                        <h2 class="content-title">Thêm sản phẩm mới</h2>
                        <div>
                            <button class="btn btn-md rounded font-sm hover-up">Lưu</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card mb-4">
                        <div class="card-header">
                            <h4>Thông tin sản phẩm</h4>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="mb-4">
                                    <label for="product_name" class="form-label">Mã Sản Phẩm</label>
                                    <input type="text" placeholder="Type here" class="form-control" id="product_id">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Tên Sản Phẩm</label>
                                    <input type="text" placeholder="Type here" class="form-control" id="product_name">
                                </div>
                                <div class="mb-4">
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="mb-4">
                                            <label class="form-label">Giá Gốc</label>
                                            <div class="row gx-2">
                                                <input placeholder="VND" type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mb-4">
                                            <label class="form-label">Giá Đã Giảm</label>
                                            <input placeholder="VND" type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Besteller</label>
                                    <input type="checkbox" class="form-control1" id="product_bestseller">

                                    <label class="form-label">New</label>
                                    <input type="checkbox" class="form-control1" id="product_new">

                                    <label class="form-label">Hot</label>
                                    <input type="checkbox" class="form-control1" id="product_hot">
                                </div>
                            
                            </form>
                        </div>
                    </div>
                    <!-- card end// -->
                    <!-- card end// -->
                </div>
                <div class="col-lg-3">
                    <div class="card mb-4">
                        <div class="card-header">
                            <h4>Hình ảnh</h4>
                        </div>
                        <div class="card-body">
                            <div class="input-upload">
                                <img src="../public/assets_admin/imgs/theme/upload.svg" alt="">
                                <input class="form-control" type="file">
                            </div>
                        </div>
                    </div>
                    <!-- card end// -->
                    <div class="card mb-4">
                        <div class="card-header">
                            <h4>Danh Mục</h4>
                        </div>
                        <div class="card-body">
                            <div class="row gx-2">
                                <div class="col-sm-6 mb-3">
                                    <label class="form-label">Danh Mục</label>
                                    <select class="form-select">
                                        <option> Automobiles </option>
                                        <option> Home items </option>
                                        <option> Electronics </option>
                                        <option> Smartphones </option>
                                        <option> Sport items </option>
                                        <option> Baby and Tous </option>
                                    </select>
                                </div>
                            </div>
                            <!-- row.// -->
                        </div>
                    </div>
                    <!-- card end// -->
                </div>
            </div>
        </section>
        <!-- content-main end// -->
         

<?php
include_once __DIR__ . '/../inc/_footer.admin.inc.php';
?>