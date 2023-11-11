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
        <!-- <p class="account__welcome--text">Hello, Admin welcome to your dashboard!</p> -->
        <div class="my__account--section__inner border-radius-10 d-flex">
            <div class="account__left--sidebar">
                <h2 class="account__content--title h3 mb-20">Thông tin của tôi</h2>
                <ul class="account__menu">
                    <li class="account__menu--list active"><a href="my-account.html">Thông tin mua hàng</a></li>
                    <li class="account__menu--list"><a href="my-account-2.html">Địa chỉ</a></li>
                    <li class="account__menu--list"><a href="login.html">Đăng xuất</a></li>
                </ul>
            </div>
            <div class="account__wrapper">
                <div class="account__content">
                    <h2 class="account__content--title h3 mb-20">Lịch sử đơn hàng</h2>
                    <div class="account__table--area">
                        <table class="account__table">
                            <thead class="account__table--header">
                                <tr class="account__table--header__child">
                                    <th class="account__table--header__child--items">Sản phẩm</th>
                                    <th class="account__table--header__child--items">Ngày</th>
                                    <th class="account__table--header__child--items">Tình trạng thanh toán</th>
                                    <th class="account__table--header__child--items">Tình trạng hoàn thành</th>
                                    <th class="account__table--header__child--items">Tổng tiền</th>
                                </tr>
                            </thead>
                            <tbody class="account__table--body mobile__none">
                                <tr class="account__table--body__child">
                                    <td class="account__table--body__child--items">#2014</td>
                                    <td class="account__table--body__child--items">11/11/2023</td>
                                    <td class="account__table--body__child--items">Trả</td>
                                    <td class="account__table--body__child--items">Hoàn Thành</td>
                                    <td class="account__table--body__child--items">600.000VND</td>
                                </tr>
                                <tr class="account__table--body__child">
                                    <td class="account__table--body__child--items">#2014</td>
                                    <td class="account__table--body__child--items">11/11/2023</td>
                                    <td class="account__table--body__child--items">Trả</td>
                                    <td class="account__table--body__child--items">Hoàn Thành</td>
                                    <td class="account__table--body__child--items">600.000VND</td>
                                </tr>
                                <tr class="account__table--body__child">
                                    <td class="account__table--body__child--items">#2014</td>
                                    <td class="account__table--body__child--items">11/11/2023</td>
                                    <td class="account__table--body__child--items">Trả</td>
                                    <td class="account__table--body__child--items">Hoàn Thành</td>
                                    <td class="account__table--body__child--items">600.000VND</td>
                                </tr>
                                <tr class="account__table--body__child">
                                    <td class="account__table--body__child--items">#2014</td>
                                    <td class="account__table--body__child--items">11/11/2023</td>
                                    <td class="account__table--body__child--items">Trả</td>
                                    <td class="account__table--body__child--items">Hoàn Thành</td>
                                    <td class="account__table--body__child--items">600.000VND</td>
                                </tr>
                                <tr class="account__table--body__child">
                                    <td class="account__table--body__child--items">#2014</td>
                                    <td class="account__table--body__child--items">11/11/2023</td>
                                    <td class="account__table--body__child--items">Trả</td>
                                    <td class="account__table--body__child--items">Hoàn Thành</td>
                                    <td class="account__table--body__child--items">600.000VND</td>
                                </tr>
                                <tr class="account__table--body__child">
                                    <td class="account__table--body__child--items">#2014</td>
                                    <td class="account__table--body__child--items">11/11/2023</td>
                                    <td class="account__table--body__child--items">Trả</td>
                                    <td class="account__table--body__child--items">Hoàn Thành</td>
                                    <td class="account__table--body__child--items">600.000VND</td>
                                </tr>
                                <tr class="account__table--body__child">
                                    <td class="account__table--body__child--items">#2014</td>
                                    <td class="account__table--body__child--items">11/11/2023</td>
                                    <td class="account__table--body__child--items">Trả</td>
                                    <td class="account__table--body__child--items">Hoàn Thành</td>
                                    <td class="account__table--body__child--items">600.000VND</td>
                                </tr>
                            </tbody>
                        </table>
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
                    <h2 class="shipping__items2--content__title h3">Vận chuyển </h2>
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
                    <p class="shipping__items2--content__desc">Hỗ trợ 24/7 </p>
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