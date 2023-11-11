<?php
include_once __DIR__ . '/../inc/_header.admin.inc.php';
?>

 
        <section class="content-main">
            <div class="content-header">
                <h2 class="content-title">Danh Sách Khách Hàng</h2>
                <div>
                    <a href="#" class="btn btn-primary"><i class="material-icons md-plus"></i>Thêm Tài Khoản</a>
                </div>
            </div>
            <div class="card mb-4">
                <header class="card-header">
                    <div class="row gx-3">
                        <div class="col-lg-4 col-md-6 me-auto">
                            <input type="text" placeholder="Tìm..." class="form-control">
                        </div>
                        <div class="col-lg-2 col-md-3 col-6">
                            <select class="form-select">
                                <option>Trạng thái</option>
                                <option>Active</option>
                                <option>Disabled</option>
                                <option>Show all</option>
                            </select>
                        </div>
                        <div class="col-lg-2 col-md-3 col-6">
                            <select class="form-select">
                                <option>Show 10</option>
                                <option>Show 20</option>
                                <option>Show 30</option>
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
                                    <th>Tài Khoản</th>
                                    <th>Email</th>
                                    <th>SDT</th>
                                    <th>Địa Chỉ</th>
                                    <th class="text-end"> Action </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td width="40%">
                                        <a href="#" class="itemside">
                                            <div class="left">
                                                <img src="../public/assets_admin/imgs/people/avatar1.jpg" class="img-sm img-avatar" alt="Userpic">
                                            </div>
                                            <div class="info pl-3">
                                                <h6 class="mb-0 title">Eleanor Pena</h6>
                                                <small class="text-muted">Seller ID: #439</small>
                                            </div>
                                        </a>
                                    </td>
                                    <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="dabfb6bfbbb4b5a8e8eae8e89abfa2bbb7aab6bff4b9b5b7">[email&#160;protected]</a></td>
                                    <td><span class="badge rounded-pill alert-success">Active</span></td>
                                    <td>08.07.2022</td>
                                    <td class="text-end">
                                        <a href="#" class="btn btn-sm btn-brand rounded font-sm mt-15">View details</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="40%">
                                        <a href="#" class="itemside">
                                            <div class="left">
                                                <img src="../public/assets_admin/imgs/people/avatar2.jpg" class="img-sm img-avatar" alt="Userpic">
                                            </div>
                                            <div class="info pl-3">
                                                <h6 class="mb-0 title">Mary Monasa</h6>
                                                <small class="text-muted">Seller ID: #129</small>
                                            </div>
                                        </a>
                                    </td>
                                    <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="2a4745444b4643594b6a4f524b475a464f04494547">[email&#160;protected]</a></td>
                                    <td><span class="badge rounded-pill alert-success">Active</span></td>
                                    <td>11.07.2022</td>
                                    <td class="text-end">
                                        <a href="#" class="btn btn-sm btn-brand rounded font-sm mt-15">View details</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="40%">
                                        <a href="#" class="itemside">
                                            <div class="left">
                                                <img src="../public/assets_admin/imgs/people/avatar3.jpg" class="img-sm img-avatar" alt="Userpic">
                                            </div>
                                            <div class="info pl-3">
                                                <h6 class="mb-0 title">Jonatan Ive</h6>
                                                <small class="text-muted">Seller ID: #400</small>
                                            </div>
                                        </a>
                                    </td>
                                    <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="0e637c646166604e6b766f637e626b206d6163">[email&#160;protected]</a></td>
                                    <td><span class="badge rounded-pill alert-success">Active</span></td>
                                    <td>08.07.2022</td>
                                    <td class="text-end">
                                        <a href="#" class="btn btn-sm btn-brand rounded font-sm mt-15">View details</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="40%">
                                        <a href="#" class="itemside">
                                            <div class="left">
                                                <img src="../public/assets_admin/imgs/people/avatar4.jpg" class="img-sm img-avatar" alt="Userpic">
                                            </div>
                                            <div class="info pl-3">
                                                <h6 class="mb-0 title">Eleanor Pena</h6>
                                                <small class="text-muted">Seller ID: #439</small>
                                            </div>
                                        </a>
                                    </td>
                                    <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="caafa6afaba4a5b8f8faf8f88aafb2aba7baa6afe4a9a5a7">[email&#160;protected]</a></td>
                                    <td><span class="badge rounded-pill alert-danger">Inactive</span></td>
                                    <td>08.07.2022</td>
                                    <td class="text-end">
                                        <a href="#" class="btn btn-sm btn-brand rounded font-sm mt-15">View details</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="40%">
                                        <a href="#" class="itemside">
                                            <div class="left">
                                                <img src="../public/assets_admin/imgs/people/avatar1.jpg" class="img-sm img-avatar" alt="Userpic">
                                            </div>
                                            <div class="info pl-3">
                                                <h6 class="mb-0 title">Albert Pushkin</h6>
                                                <small class="text-muted">Seller ID: #439</small>
                                            </div>
                                        </a>
                                    </td>
                                    <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="d9aab6b4bcb6b7bc99b4a0b4b8b0b5f7bab6b4">[email&#160;protected]</a></td>
                                    <td><span class="badge rounded-pill alert-success">Active</span></td>
                                    <td>20.11.2019</td>
                                    <td class="text-end">
                                        <a href="#" class="btn btn-sm btn-brand rounded font-sm mt-15">View details</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="40%">
                                        <a href="#" class="itemside">
                                            <div class="left">
                                                <img src="../public/assets_admin/imgs/people/avatar2.jpg" class="img-sm img-avatar" alt="Userpic">
                                            </div>
                                            <div class="info pl-3">
                                                <h6 class="mb-0 title">Alexandra Pena</h6>
                                                <small class="text-muted">Seller ID: #439</small>
                                            </div>
                                        </a>
                                    </td>
                                    <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="1b7e777e7a757469292b29295b7e637a766b777e35787476">[email&#160;protected]</a></td>
                                    <td><span class="badge rounded-pill alert-danger">Inactive</span></td>
                                    <td>08.07.2022</td>
                                    <td class="text-end">
                                        <a href="#" class="btn btn-sm btn-brand rounded font-sm mt-15">View details</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="40%">
                                        <a href="#" class="itemside">
                                            <div class="left">
                                                <img src="../public/assets_admin/imgs/people/avatar3.jpg" class="img-sm img-avatar" alt="Userpic">
                                            </div>
                                            <div class="info pl-3">
                                                <h6 class="mb-0 title">Eleanor Pena</h6>
                                                <small class="text-muted">Seller ID: #439</small>
                                            </div>
                                        </a>
                                    </td>
                                    <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="65000900040b0a175755575725001d04081509004b060a08">[email&#160;protected]</a></td>
                                    <td><span class="badge rounded-pill alert-danger">Inactive</span></td>
                                    <td>08.07.2022</td>
                                    <td class="text-end">
                                        <a href="#" class="btn btn-sm btn-brand rounded font-sm mt-15">View details</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="40%">
                                        <a href="#" class="itemside">
                                            <div class="left">
                                                <img src="../public/assets_admin/imgs/people/avatar4.jpg" class="img-sm img-avatar" alt="Userpic">
                                            </div>
                                            <div class="info pl-3">
                                                <h6 class="mb-0 title">Alex Pushkina</h6>
                                                <small class="text-muted">Seller ID: #439</small>
                                            </div>
                                        </a>
                                    </td>
                                    <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="4d2c2128350d2a202c242163223f2a">[email&#160;protected]</a></td>
                                    <td><span class="badge rounded-pill alert-success">Active</span></td>
                                    <td>08.07.2022</td>
                                    <td class="text-end">
                                        <a href="#" class="btn btn-sm btn-brand rounded font-sm mt-15">View details</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="40%">
                                        <a href="#" class="itemside">
                                            <div class="left">
                                                <img src="../public/assets_admin/imgs/people/avatar1.jpg" class="img-sm img-avatar" alt="Userpic">
                                            </div>
                                            <div class="info pl-3">
                                                <h6 class="mb-0 title">Eleanor Pena</h6>
                                                <small class="text-muted">Seller ID: #439</small>
                                            </div>
                                        </a>
                                    </td>
                                    <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="f0959c95919e9f82c2c0c2c2b09588919d809c95de939f9d">[email&#160;protected]</a></td>
                                    <td><span class="badge rounded-pill alert-success">Active</span></td>
                                    <td>08.07.2022</td>
                                    <td class="text-end">
                                        <a href="#" class="btn btn-sm btn-brand rounded font-sm mt-15">View details</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="40%">
                                        <a href="#" class="itemside">
                                            <div class="left">
                                                <img src="../public/assets_admin/imgs/people/avatar2.jpg" class="img-sm img-avatar" alt="Userpic">
                                            </div>
                                            <div class="info pl-3">
                                                <h6 class="mb-0 title">Eleanor Pena</h6>
                                                <small class="text-muted">Seller ID: #439</small>
                                            </div>
                                        </a>
                                    </td>
                                    <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="81e4ede4e0efeef3b3b1b3b3c1e4f9e0ecf1ede4afe2eeec">[email&#160;protected]</a></td>
                                    <td><span class="badge rounded-pill alert-success">Active</span></td>
                                    <td>08.07.2022</td>
                                    <td class="text-end">
                                        <a href="#" class="btn btn-sm btn-brand rounded font-sm mt-15">View details</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <!-- table-responsive.// -->
                    </div>
                </div>
                <!-- card-body end// -->
            </div>
            <!-- card end// -->
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