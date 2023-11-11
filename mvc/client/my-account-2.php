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
                    <h1 class="breadcrumb__content--title text-white mb-25">My Account</h1>
                    <ul class="breadcrumb__content--menu d-flex justify-content-center">
                        <li class="breadcrumb__content--menu__items"><a class="text-white" href="index.html">Home</a></li>
                        <li class="breadcrumb__content--menu__items"><span class="text-white">My Account</span></li>
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
        <div class="my__account--section__inner border-radius-10 d-flex">
            <div class="account__left--sidebar">
                <h2 class="account__content--title h3 mb-20">Thông tin của tôi</h2>
                <ul class="account__menu">
                    <li class="account__menu--list"><a href="my-account.html">Thông tin mua hàng</a></li>
                    <li class="account__menu--list active"><a href="my-account-2.html">Địa chỉ</a></li>
                    <li class="account__menu--list"><a href="login.html">Đăng xuất</a></li>
                </ul>
            </div>
            <div class="account__wrapper">
                <div class="account__content">
                    <h3 class="account__content--title mb-20">Địa chỉ</h3>
                    <button class="new__address--btn primary__btn mb-25" type="button">Thêm địa chỉ mới</button>
                    <div class="account__details two">
                        <h4 class="account__details--title">Mặc định</h4>
                        <p class="account__details--desc">Nghĩa <br> Nguyễn <br> Nghĩa Nguyễn 2023 <br> VietNam</p>
                        <a class="account__details--link" href="my-account-2.html">Xem địa chỉ(1)</a>
                    </div>
                    <div class="account__details--footer d-flex">
                        <button class="account__details--footer__btn" type="button">Sửa</button>
                        <button class="account__details--footer__btn" type="button">Xóa</button>
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
                    <h2 class="shipping__items2--content__title h3">Shipping</h2>
                    <p class="shipping__items2--content__desc">From handpicked sellers</p>
                </div>
            </div>
            <div class="shipping__items2 d-flex align-items-center">
                <div class="shipping__items2--icon">
                    <img src="../public/assets_client/img/other/shipping2.png" alt="">
                </div>
                <div class="shipping__items2--content">
                    <h2 class="shipping__items2--content__title h3">Payment</h2>
                    <p class="shipping__items2--content__desc">From handpicked sellers</p>
                </div>
            </div>
            <div class="shipping__items2 d-flex align-items-center">
                <div class="shipping__items2--icon">
                    <img src="../public/assets_client/img/other/shipping3.png" alt="">
                </div>
                <div class="shipping__items2--content">
                    <h2 class="shipping__items2--content__title h3">Return</h2>
                    <p class="shipping__items2--content__desc">From handpicked sellers</p>
                </div>
            </div>
            <div class="shipping__items2 d-flex align-items-center">
                <div class="shipping__items2--icon">
                    <img src="../public/assets_client/img/other/shipping4.png" alt="">
                </div>
                <div class="shipping__items2--content">
                    <h2 class="shipping__items2--content__title h3">Support</h2>
                    <p class="shipping__items2--content__desc">From handpicked sellers</p>
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