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
                            <h1 class="breadcrumb__content--title text-white mb-25">Đăng nhập - Đăng ký</h1>
                            <ul class="breadcrumb__content--menu d-flex justify-content-center">
                                <li class="breadcrumb__content--menu__items"><a class="text-white" href="index.html">Trang chủ</a></li>
                                <li class="breadcrumb__content--menu__items"><span class="text-white">Đăng nhập - Đăng ký</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End breadcrumb section -->

        <!-- Start login section  -->
        <div class="login__section section--padding">
            <div class="container">
                <form action="#">
                    <div class="login__section--inner">
                        <div class="row row-cols-md-2 row-cols-1">
                            <div class="col">
                                <div class="account__login">
                                    <div class="account__login--header mb-25">
                                        <h2 class="account__login--header__title h3 mb-10">Đăng Nhập</h2>
                                        <p class="account__login--header__desc">Đăng nhập nếu bạn là khách hàng cũ.</p>
                                    </div>
                                    <div class="account__login--inner">
                                        <input class="account__login--input" placeholder="Email của bạn" type="text">
                                        <input class="account__login--input" placeholder="Mật khẩu" type="password">
                                        <div class="account__login--remember__forgot mb-15 d-flex justify-content-between align-items-center">
                                            <div class="account__login--remember position__relative">
                                                <input class="checkout__checkbox--input" id="check1" type="checkbox">
                                                <span class="checkout__checkbox--checkmark"></span>
                                                <label class="checkout__checkbox--label login__remember--label" for="check1">Ghi nhớ mật khẩu</label>
                                            </div>
                                            <button class="account__login--forgot" type="submit">Quên mật khẩu</button>
                                        </div>
                                        <button class="account__login--btn primary__btn" type="submit">Đăng Nhập</button>
                                        <div class="account__login--divide">
                                            <span class="account__login--divide__text">OR</span>
                                        </div>
                                        <div class="account__social d-flex justify-content-center mb-15">
                                            <a class="account__social--link facebook" target="_blank" href="https://www.facebook.com">Facebook</a>
                                            <a class="account__social--link google" target="_blank" href="https://www.google.com">Google</a>
                                            <a class="account__social--link twitter" target="_blank" href="https://twitter.com">Twitter</a>
                                        </div>
                                        <p class="account__login--signup__text">Bạn chưa có tài khoản? <button type="submit">Đăng ký ngay</button></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="account__login register">
                                    <div class="account__login--header mb-25">
                                        <h2 class="account__login--header__title h3 mb-10">Tạo tài khoản</h2>
                                        <p class="account__login--header__desc">Đăng ký tại đây nếu bạn là khách hàng mới</p>
                                    </div>
                                    <div class="account__login--inner">
                                        <input class="account__login--input" placeholder="Tên của bạn" type="text">
                                        <input class="account__login--input" placeholder="Email của bạn" type="text">
                                        <input class="account__login--input" placeholder="Mật khẩu" type="password">
                                        <input class="account__login--input" placeholder="Xác nhận mật khẩu" type="password">
                                        <button class="account__login--btn primary__btn mb-10" type="submit">Đăng Ký</button>
                                        <div class="account__login--remember position__relative">
                                            <input class="checkout__checkbox--input" id="check2" type="checkbox">
                                            <span class="checkout__checkbox--checkmark"></span>
                                            <label class="checkout__checkbox--label login__remember--label" for="check2">
                                                Tôi đã đọc và đồng ý với các điều khoản và điều kiện</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>     
        </div>
        <!-- End login section  -->

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