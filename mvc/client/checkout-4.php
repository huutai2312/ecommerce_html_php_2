<?php
include_once __DIR__ . '/../inc/_header.inc.php';
?>
  
  <main class="main__content_wrapper">

        <!-- Start breadcrumb section -->
        <section class="breadcrumb__section breadcrumb__bg">
            <div class="container">
                <div class="row row-cols-1">
                    <div class="col">
                        <div class="breadcrumb__content text-center">
                            <h1 class="breadcrumb__content--title text-white mb-25">Tài khoản</h1>
                            <ul class="breadcrumb__content--menu d-flex justify-content-center">
                                <li class="breadcrumb__content--menu__items"><a class="text-white" href="index.html">Trang chủ</a></li>
                                <li class="breadcrumb__content--menu__items"><span class="text-white">Tài khoản</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End breadcrumb section -->
        
        <!-- my account section start -->
        <section class="my__account--section section--padding">
            <div class="container">
                <div class="my__account--section__inner">
                    <div class="row">
                        <div class="col-lg-9">
                            <div class="account__wrapper account__wrapper--style4 border-radius-10">
                                <div class="account__content">
                                    <h2 class="account__content--title h3 mb-20">Lịch sử đơn hàng</h2>
                                    <div class="account__table--area">
                                        <table class="account__table">
                                            <thead class="account__table--header">
                                                <tr class="account__table--header__child">
                                                    <th class="account__table--header__child--items">Đơn hàng</th>
                                                    <th class="account__table--header__child--items">Ngày</th>
                                                    <th class="account__table--header__child--items">Tình trạng thanh toán</th>
                                                    <th class="account__table--header__child--items">Tình trạng hoàn thành</th>
                                                    <th class="account__table--header__child--items">Tổng cộng</th>	 	 	 	
                                                </tr>
                                            </thead>
                                            <tbody class="account__table--body mobile__none">
                                                <tr class="account__table--body__child">
                                                    <td class="account__table--body__child--items">#2014</td>
                                                    <td class="account__table--body__child--items">Ngày 06 tháng 2 năm 2022</td>
                                                    <td class="account__table--body__child--items">Trả</td>
                                                    <td class="account__table--body__child--items">Chưa thực hiện</td>
                                                    <td class="account__table--body__child--items">200.00VND</td>
                                                </tr>
                                                <tr class="account__table--body__child">
                                                    <td class="account__table--body__child--items">#2024</td>
                                                    <td class="account__table--body__child--items">Ngày 06 tháng 2 năm 2022</td>
                                                    <td class="account__table--body__child--items">Trả</td>
                                                    <td class="account__table--body__child--items">Hoàn thành</td>
                                                    <td class="account__table--body__child--items">200.00VND</td>
                                                </tr>
                                                <tr class="account__table--body__child">
                                                    <td class="account__table--body__child--items">#2164</td>
                                                    <td class="account__table--body__child--items">Ngày 06 tháng 2 năm 2022</td>
                                                    <td class="account__table--body__child--items">Trả</td>
                                                    <td class="account__table--body__child--items">Chưa thực hiện</td>
                                                    <td class="account__table--body__child--items">200.00VND</td>
                                                </tr>
                                                <tr class="account__table--body__child">
                                                    <td class="account__table--body__child--items">#2345</td>
                                                    <td class="account__table--body__child--items">Ngày 06 tháng 2 năm 2022</td>
                                                    <td class="account__table--body__child--items">Trả</td>
                                                    <td class="account__table--body__child--items">Chưa thực hiện</td>
                                                    <td class="account__table--body__child--items">200.00VND</td>
                                                </tr>
                                                <tr class="account__table--body__child">
                                                    <td class="account__table--body__child--items">#1244</td>
                                                    <td class="account__table--body__child--items">Ngày 06 tháng 2 năm 2022</td>
                                                    <td class="account__table--body__child--items">Trả</td>
                                                    <td class="account__table--body__child--items">Hoàn thành</td>
                                                    <td class="account__table--body__child--items">200.00VND</td>
                                                </tr>
                                                <tr class="account__table--body__child">
                                                    <td class="account__table--body__child--items">#3455</td>
                                                    <td class="account__table--body__child--items">Ngày 06 tháng 2 năm 2022</td>
                                                    <td class="account__table--body__child--items">Trả</td>
                                                    <td class="account__table--body__child--items">Hoàn thành</td>
                                                    <td class="account__table--body__child--items">200.00VND</td>
                                                </tr>
                                                <tr class="account__table--body__child">
                                                    <td class="account__table--body__child--items">#4566</td>
                                                    <td class="account__table--body__child--items">Ngày 06 tháng 2 năm 2022</td>
                                                    <td class="account__table--body__child--items">Trả</td>
                                                    <td class="account__table--body__child--items">Chưa thực hiện</td>
                                                    <td class="account__table--body__child--items">200.00VND</td>
                                                </tr>
                                            </tbody>
                                            <tbody class="account__table--body mobile__block">
                                                <tr class="account__table--body__child">
                                                    <td class="account__table--body__child--items">
                                                        <strong>Đơn hàng</strong>
                                                        <span>#2014</span>
                                                    </td>
                                                    <td class="account__table--body__child--items">
                                                        <strong>Ngày</strong>
                                                        <span>Ngày 06 tháng 2 năm 2022</span>
                                                    </td>
                                                    <td class="account__table--body__child--items">
                                                        <strong>Tình trạng thanh toán</strong>
                                                        <span>Trả</span>
                                                    </td>
                                                    <td class="account__table--body__child--items">
                                                        <strong>Tình trạng hoàn thành</strong>
                                                        <span>Chưa thực hiện</span>
                                                    </td>
                                                    <td class="account__table--body__child--items">
                                                        <strong>Tổng cộng</strong>
                                                        <span>200.00VND</span>
                                                    </td>
                                                </tr>
                                                <tr class="account__table--body__child">
                                                    <td class="account__table--body__child--items">
                                                        <strong>Order</strong>
                                                        <span>#2014</span>
                                                    </td>
                                                    <td class="account__table--body__child--items">
                                                        <strong>Ngày</strong>
                                                        <span>Ngày 06 tháng 2 năm 2022</span>
                                                    </td>
                                                    <td class="account__table--body__child--items">
                                                        <strong>Tình trạng thanh toán</strong>
                                                        <span>Trả</span>
                                                    </td>
                                                    <td class="account__table--body__child--items">
                                                        <strong>Tình trạng hoàn thành</strong>
                                                        <span>Chưa thực hiện</span>
                                                    </td>
                                                    <td class="account__table--body__child--items">
                                                        <strong>Tổng cộng</strong>
                                                        <span>200.00VND</span>
                                                    </td>
                                                </tr>
                                                <tr class="account__table--body__child">
                                                    <td class="account__table--body__child--items">
                                                        <strong>Order</strong>
                                                        <span>#2014</span>
                                                    </td>
                                                    <td class="account__table--body__child--items">
                                                        <strong>Ngày</strong>
                                                        <span>Ngày 06 tháng 2 năm 2022</span>
                                                    </td>
                                                    <td class="account__table--body__child--items">
                                                        <strong>Tình trạng thanh toán</strong>
                                                        <span>Trả</span>
                                                    </td>
                                                    <td class="account__table--body__child--items">
                                                        <strong>Tình trạng hoàn thành</strong>
                                                        <span>Chưa thực hiện</span>
                                                    </td>
                                                    <td class="account__table--body__child--items">
                                                        <strong>Tổng cộng</strong>
                                                        <span>200.00VND</span>
                                                    </td>
                                                </tr>
                                                <tr class="account__table--body__child">
                                                    <td class="account__table--body__child--items">
                                                        <strong>Order</strong>
                                                        <span>#2014</span>
                                                    </td>
                                                    <td class="account__table--body__child--items">
                                                        <strong>Ngày</strong>
                                                        <span>Ngày 06 tháng 2 năm 2022</span>
                                                    </td>
                                                    <td class="account__table--body__child--items">
                                                        <strong>Tình trạng thanh toán</strong>
                                                        <span>Trả</span>
                                                    </td>
                                                    <td class="account__table--body__child--items">
                                                        <strong>Tình trạng hoàn thành</strong>
                                                        <span>Chưa thực hiện</span>
                                                    </td>
                                                    <td class="account__table--body__child--items">
                                                        <strong>Tổng cộng</strong>
                                                        <span>200.00VND</span>
                                                    </td>
                                                </tr>
                                                <tr class="account__table--body__child">
                                                    <td class="account__table--body__child--items">
                                                        <strong>Order</strong>
                                                        <span>#2014</span>
                                                    </td>
                                                    <td class="account__table--body__child--items">
                                                        <strong>Ngày</strong>
                                                        <span>Ngày 06 tháng 2 năm 2022</span>
                                                    </td>
                                                    <td class="account__table--body__child--items">
                                                        <strong>Tình trạng thanh toán</strong>
                                                        <span>Trả</span>
                                                    </td>
                                                    <td class="account__table--body__child--items">
                                                        <strong>Tình trạng hoàn thành</strong>
                                                        <span>Chưa thực hiện</span>
                                                    </td>
                                                    <td class="account__table--body__child--items">
                                                        <strong>Tổng cộng</strong>
                                                        <span>200.00VND</span>
                                                    </td>
                                                </tr>
                                                <tr class="account__table--body__child">
                                                    <td class="account__table--body__child--items">
                                                        <strong>Order</strong>
                                                        <span>#2014</span>
                                                    </td>
                                                    <td class="account__table--body__child--items">
                                                        <strong>Ngày</strong>
                                                        <span>Ngày 06 tháng 2 năm 2022</span>
                                                    </td>
                                                    <td class="account__table--body__child--items">
                                                        <strong>Tình trạng thanh toán</strong>
                                                        <span>Trả</span>
                                                    </td>
                                                    <td class="account__table--body__child--items">
                                                        <strong>Tình trạng hoàn thành</strong>
                                                        <span>Chưa thực hiện</span>
                                                    </td>
                                                    <td class="account__table--body__child--items">
                                                        <strong>Tổng cộng</strong>
                                                        <span>200.00VND</span>
                                                    </td>
                                                </tr>
                                                <tr class="account__table--body__child">
                                                    <td class="account__table--body__child--items">
                                                        <strong>Order</strong>
                                                        <span>#2014</span>
                                                    </td>
                                                    <td class="account__table--body__child--items">
                                                        <strong>Ngày</strong>
                                                        <span>Ngày 06 tháng 2 năm 2022</span>
                                                    </td>
                                                    <td class="account__table--body__child--items">
                                                        <strong>Tình trạng thanh toán</strong>
                                                        <span>Trả</span>
                                                    </td>
                                                    <td class="account__table--body__child--items">
                                                        <strong>Tình trạng hoàn thành</strong>
                                                        <span>Chưa thực hiện</span>
                                                    </td>
                                                    <td class="account__table--body__child--items">
                                                        <strong>Tổng cộng</strong>
                                                        <span>200.00VND</span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="account__details">
                                <h4 class="account__details--title">Chi tiết tài khoản</h4>
                                <p class="account__details--desc">thachphat<br>160/51<br>Bùi Đình Túy<br> Hồ Chí Minh</p>
                                <a class="account__details--link" href="my-account-2.html">Xem địa chỉ (1)</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- my account section end -->

        <!-- Start shipping section -->
        <section class="shipping__section2 shipping__style3 section--padding pt-0">
            <div class="container">
                <div class="shipping__section2--inner shipping__style3--inner d-flex justify-content-between">
                    <div class="shipping__items2 d-flex align-items-center">
                        <div class="shipping__items2--icon">
                            <img src="../public/assets_client/img/other/shipping1.png" alt="">
                        </div>
                        <div class="shipping__items2--content">
                            <h2 class="shipping__items2--content__title h3">Vận Chuyển</h2>
                            <p class="shipping__items2--content__desc">Miễn Phí Vận Chuyển</p>
                        </div>
                    </div>
                    <div class="shipping__items2 d-flex align-items-center">
                        <div class="shipping__items2--icon">
                            <img src="../public/assets_client/img/other/shipping2.png" alt="">
                        </div>
                        <div class="shipping__items2--content">
                            <h2 class="shipping__items2--content__title h3">Thanh Toán</h2>
                            <p class="shipping__items2--content__desc">Thanh toán trực tiếp và trực tuyến</p>
                        </div>
                    </div>
                    <div class="shipping__items2 d-flex align-items-center">
                        <div class="shipping__items2--icon">
                            <img src="../public/assets_client/img/other/shipping3.png" alt="">
                        </div>
                        <div class="shipping__items2--content">
                            <h2 class="shipping__items2--content__title h3">Liên Hệ</h2>
                            <p class="shipping__items2--content__desc">Hotline: 10072004</p>
                        </div>
                    </div>
                    <div class="shipping__items2 d-flex align-items-center">
                        <div class="shipping__items2--icon">
                            <img src="../public/assets_client/img/other/shipping4.png" alt="">
                        </div>
                        <div class="shipping__items2--content">
                            <h2 class="shipping__items2--content__title h3">Hỗ trợ</h2>
                            <p class="shipping__items2--content__desc">Hỗ trợ 24/7</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End shipping section -->

    </main>

<?php
include_once __DIR__ . '/../inc/_footer.inc.php';
?>