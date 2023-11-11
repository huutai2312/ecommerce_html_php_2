<?php
include_once __DIR__ . '/../inc/_header.inc.php';
?>
 
 <!-- Start checkout page area -->
 <div class="checkout__page--area">
        <div class="container">
            <div class="checkout__page--inner d-flex">
                <div class="main checkout__mian">
                    <header class="main__header checkout__mian--header mb-30">
                        <h1 class="main__logo--title"><a class="logo logo__left mb-20" href="index.html"><img src="../public/assets_client/img/logo/nav-log.png" alt="logo"></a></h1>
                        <details class="order__summary--mobile__version">
                            <summary class="order__summary--toggle border-radius-5">
                                <span class="order__summary--toggle__inner">
                                    <span class="order__summary--toggle__icon">
                                        <svg width="20" height="19" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M17.178 13.088H5.453c-.454 0-.91-.364-.91-.818L3.727 1.818H0V0h4.544c.455 0 .91.364.91.818l.09 1.272h13.45c.274 0 .547.09.73.364.18.182.27.454.18.727l-1.817 9.18c-.09.455-.455.728-.91.728zM6.27 11.27h10.09l1.454-7.362H5.634l.637 7.362zm.092 7.715c1.004 0 1.818-.813 1.818-1.817s-.814-1.818-1.818-1.818-1.818.814-1.818 1.818.814 1.817 1.818 1.817zm9.18 0c1.004 0 1.817-.813 1.817-1.817s-.814-1.818-1.818-1.818-1.818.814-1.818 1.818.814 1.817 1.818 1.817z" fill="currentColor"></path>
                                        </svg>
                                    </span>
                                    <span class="order__summary--toggle__text show">
                                        <span>Show order summary</span>
                                        <svg width="11" height="6" xmlns="http://www.w3.org/2000/svg" class="order-summary-toggle__dropdown" fill="currentColor"><path d="M.504 1.813l4.358 3.845.496.438.496-.438 4.642-4.096L9.504.438 4.862 4.534h.992L1.496.69.504 1.812z"></path></svg>
                                    </span>
                                    <span class="order__summary--final__price">$227.70</span>
                                </span>
                            </summary>
                            <div class="order__summary--section">
                                <div class="cart__table checkout__product--table">
                                    <table class="summary__table">
                                        <tbody class="summary__table--body">
                                            <tr class=" summary__table--items">
                                                <td class=" summary__table--list">
                                                    <div class="product__image two  d-flex align-items-center">
                                                        <div class="product__thumbnail border-radius-5">
                                                            <a href="product-details.html"><img class="border-radius-5" src="../public/assets_client/img/product/small-product7.png" alt="cart-product"></a>
                                                            <span class="product__thumbnail--quantity">1</span>
                                                        </div>
                                                        <div class="product__description">
                                                            <h3 class="product__description--name h4"><a href="product-details.html">Fresh-whole-fish</a></h3>
                                                            <span class="product__description--variant">COLOR: Blue</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class=" summary__table--list">
                                                    <span class="cart__price">£65.00</span>
                                                </td>
                                            </tr>
                                            <tr class="summary__table--items">
                                                <td class=" summary__table--list">
                                                    <div class="cart__product d-flex align-items-center">
                                                        <div class="product__thumbnail border-radius-5">
                                                            <a href="product-details.html"><img class="border-radius-5" src="../public/assets_client/img/product/small-product2.png" alt="cart-product"></a>
                                                            <span class="product__thumbnail--quantity">1</span>
                                                        </div>
                                                        <div class="product__description">
                                                            <h3 class="product__description--name h4"><a href="product-details.html">Vegetable-healthy</a></h3>
                                                            <span class="product__description--variant">COLOR: Green</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class=" summary__table--list">
                                                    <span class="cart__price">£82.00</span>
                                                </td>
                                            </tr>
                                            <tr class=" summary__table--items">
                                                <td class=" summary__table--list">
                                                    <div class="cart__product d-flex align-items-center">
                                                        <div class="product__thumbnail border-radius-5">
                                                            <a href="product-details.html"><img class="border-radius-5" src="../public/assets_client/img/product/small-product4.png" alt="cart-product"></a>
                                                            <span class="product__thumbnail--quantity">1</span>
                                                        </div>
                                                        <div class="product__description">
                                                            <h3 class="product__description--name h4"><a href="product-details.html">Raw-onions-surface</a></h3>
                                                            <span class="product__description--variant">COLOR: White</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class=" summary__table--list">
                                                    <span class="cart__price">£78.00</span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table> 
                                </div>
                                <div class="checkout__discount--code">
                                    <form class="d-flex" action="#">
                                        <label>
                                            <input class="checkout__discount--code__input--field border-radius-5" placeholder="Gift card or discount code"  type="text">
                                        </label>
                                        <button class="checkout__discount--code__btn primary__btn border-radius-5" type="submit">Apply</button>
                                    </form>
                                </div>
                                <div class="checkout__total">
                                    <table class="checkout__total--table">
                                        <tbody class="checkout__total--body">
                                            <tr class="checkout__total--items">
                                                <td class="checkout__total--title text-left">Subtotal </td>
                                                <td class="checkout__total--amount text-right">$860.00</td>
                                            </tr>
                                            <tr class="checkout__total--items">
                                                <td class="checkout__total--title text-left">Shipping</td>
                                                <td class="checkout__total--calculated__text text-right">Calculated at next step</td>
                                            </tr>
                                        </tbody>
                                        <tfoot class="checkout__total--footer">
                                            <tr class="checkout__total--footer__items">
                                                <td class="checkout__total--footer__title checkout__total--footer__list text-left">Total </td>
                                                <td class="checkout__total--footer__amount checkout__total--footer__list text-right">$860.00</td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </details>
                        <nav>
                            <ol class="breadcrumb checkout__breadcrumb d-flex">
                                <li class="breadcrumb__item breadcrumb__item--completed d-flex align-items-center">
                                    <a class="breadcrumb__link" href="cart.html">Giỏ hàng</a>
                                    <svg class="readcrumb__chevron-icon" xmlns="http://www.w3.org/2000/svg" width="17.007" height="16.831" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="48" d="M184 112l144 144-144 144"></path></svg>
                                </li>
                                <li class="breadcrumb__item breadcrumb__item--current d-flex align-items-center">
                                    <a class="breadcrumb__link" href="cart.html">Thông tin</a>
                                    <svg class="readcrumb__chevron-icon" xmlns="http://www.w3.org/2000/svg" width="17.007" height="16.831" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="48" d="M184 112l144 144-144 144"></path></svg>
                                </li>
                                <li class="breadcrumb__item breadcrumb__item--blank d-flex align-items-center">
                                    <a class="breadcrumb__link" href="cart.html">Vận chuyển</a>
                                    <svg class="readcrumb__chevron-icon" xmlns="http://www.w3.org/2000/svg" width="17.007" height="16.831" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="48" d="M184 112l144 144-144 144"></path></svg>
                                </li>
                                    <li class="breadcrumb__item breadcrumb__item--blank">
                                    <span class="breadcrumb__text current">Thanh toán</span>
                                </li>
                            </ol>
                            </nav>
                    </header>
                    <main class="main__content_wrapper">
                        <form action="#">
                            <div class="checkout__content--step checkout__contact--information2 border-radius-5">
                                <div class="checkout__review d-flex justify-content-between align-items-center">
                                    <div class="checkout__review--inner d-flex align-items-center">
                                        <label class="checkout__review--label">Liên hệ</label>
                                        <span class="checkout__review--content">suruchi@gmail.com</span>
                                    </div>
                                    <div class="checkout__review--link">
                                        <button class="checkout__review--link__text" type="button">Thay đổi</button>
                                    </div>
                                </div> 
                                <div class="checkout__review d-flex justify-content-between align-items-center">
                                    <div class="checkout__review--inner d-flex align-items-center">
                                        <label class="checkout__review--label">Chuyển đến</label>
                                        <span class="checkout__review--content"> 160/51 Bùi Đình Túy</span>
                                    </div>
                                    <div class="checkout__review--link">
                                        <button class="checkout__review--link__text" type="button">Thay đổi</button>  
                                    </div>
                                </div>
                                <div class="checkout__review d-flex justify-content-between align-items-center">
                                    <div class="checkout__review--inner d-flex align-items-center">
                                        <label class="checkout__review--label"> Voucher</label>
                                        <span class="checkout__review--content">Suruchi<strong> 50K</strong></span>
                                    </div>
                                    <div class="checkout__review--link">
                                        <button class="checkout__review--link__text" type="button">Thay đổi</button>   
                                    </div>
                                </div>
                            </div>
                            <div class="checkout__content--step section__shipping--address">
                                <div class="section__header mb-25">
                                    <h3 class="section__header--title">Thanh Toán</h3>
                                    <p class="section__header--desc">Tất cả các giao dịch đều được bảo mật và mã hóa.</p>
                                </div>
                                <div class="checkout__content--step__inner3 border-radius-5">
                                    <div class="checkout__address--content__header d-flex align-items-center justify-content-between">
                                        <span class="checkout__address--content__title">Thẻ tín dụng</span>
                                        <span class="heckout__address--content__icon"><img src="../public/assets_client/img/icon/credit-card.svg" alt="card"></span>
                                    </div>
                                    <div class="checkout__content--input__box--wrapper ">
                                        <div class="row">
                                            <div class="col-12 mb-12">
                                                <div class="checkout__input--list position__relative">
                                                    <label>
                                                        <input class="checkout__input--field border-radius-5" placeholder="Số thẻ"  type="text">
                                                    </label>
                                                    <button class="checkout__input--field__button" type="button">
                                                        
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="15.51" height="15.443" viewBox="0 0 512 512"><path d="M336 208v-95a80 80 0 00-160 0v95" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><rect x="96" y="208" width="320" height="272" rx="48" ry="48" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="col-12 mb-12">
                                                <div class="checkout__input--list">
                                                    <label>
                                                        <input class="checkout__input--field border-radius-5" placeholder="Tên trên thẻ"  type="text">
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-12">
                                                <div class="checkout__input--list">
                                                    <label>
                                                        <input class="checkout__input--field border-radius-5" placeholder="Ngày cung cấp(MM/YY)"  type="text">
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-12">
                                                <div class="checkout__input--list position__relative">
                                                    <label>
                                                        <input class="checkout__input--field border-radius-5" placeholder="Mã bảo mật"  type="text">
                                                    </label>
                                                    <button class="checkout__input--field__button" type="button">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18.51" height="18.443" viewBox="0 0 512 512"><title>Help Circle</title><path d="M256 80a176 176 0 10176 176A176 176 0 00256 80z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/><path d="M200 202.29s.84-17.5 19.57-32.57C230.68 160.77 244 158.18 256 158c10.93-.14 20.69 1.67 26.53 4.45 10 4.76 29.47 16.38 29.47 41.09 0 26-17 37.81-36.37 50.8S251 281.43 251 296" fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="28"/><circle cx="250" cy="348" r="20"/></svg>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="checkout__content--step section__shipping--address pt-10">
                                <div class="section__header mb-25">
                                    <h3 class="section__header--title">Địa chỉ thanh toán</h3>
                                    <p class="section__header--desc">Chọn địa chỉ phù hợp với thẻ hoặc phương thức thanh toán của bạn.</p>
                                </div>
                                <div class="checkout__content--step__inner3 border-radius-5">
                                    <div class="checkout__address--content__header">
                                        <div class="shipping__contact--box__list">
                                            <div class="shipping__radio--input">
                                                <input class="shipping__radio--input__field" id="radiobox" name="checkmethod" type="radio">
                                            </div>
                                            <label class="shipping__radio--label" for="radiobox">
                                                <span class="shipping__radio--label__primary">Tương tự như địa chỉ giao hàng</span>
                                            </label>
                                        </div>
                                        <div class="shipping__contact--box__list">
                                            <div class="shipping__radio--input">
                                                <input class="shipping__radio--input__field" id="radiobox2" name="checkmethod" type="radio">
                                            </div>
                                            <label class="shipping__radio--label" for="radiobox2">
                                                <span class="shipping__radio--label__primary">Sử dụng địa chỉ thanh toán khác</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="checkout__content--input__box--wrapper ">
                                        <div class="row">
                                            <div class="col-lg-6 mb-12">
                                                <div class="checkout__input--list ">
                                                    <label>
                                                        <input class="checkout__input--field border-radius-5" placeholder="Tên (tùy chọn)"  type="text">
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-12">
                                                <div class="checkout__input--list">
                                                    <label>
                                                        <input class="checkout__input--field border-radius-5" placeholder="Họ"  type="text">
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-12 mb-12">
                                                <div class="checkout__input--list">
                                                    <label>
                                                        <input class="checkout__input--field border-radius-5" placeholder="Địa chỉ 1"  type="text">
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-12 mb-12">
                                                <div class="checkout__input--list">
                                                    <label>
                                                        <input class="checkout__input--field border-radius-5" placeholder="Căn hộ, dãy phòng, v.v. (tùy chọn)"  type="text">
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-12 mb-12">
                                                <div class="checkout__input--list">
                                                    <label>
                                                        <input class="checkout__input--field border-radius-5" placeholder="Thành phố"  type="text">
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-12">
                                                <div class="checkout__input--list checkout__input--select select">
                                                    <label class="checkout__select--label" for="country">Quốc gia/khu vực</label>
                                                    <select class="checkout__input--select__field border-radius-5" id="country">
                                                        <option value="1">VietNam</option>
                                                        <option value="2">CamPuChia</option>
                                                        <option value="3">Trung Quốc</option>
                                                        <option value="4">Thái Lan</option>
                                                        <option value="5">Lào</option>
                                                        <option value="6">Nhật Bản</option>
                                                        <option value="7">Hàn Quốc</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-12">
                                                <div class="checkout__input--list">
                                                    <label>
                                                        <input class="checkout__input--field border-radius-5" placeholder="Mã bưu chính"  type="text">
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="checkout__content--step__footer d-flex align-items-center">
                                <a class="continue__shipping--btn primary__btn border-radius-5" href="checkout-3.html">Tiếp tục vận chuyển</a>
                                <a class="previous__link--content" href="shop.html">Quay lại giỏ hàng</a>
                            </div>
                        </form>
                    </main>
                    <footer class="main__footer checkout__footer">
                        <p class="copyright__content">Bản quyền © 2023 <a class="copyright__content--link text__primary" href="index.html">Suruchi</a>Đã đăng ký Bản quyền. Thiết kế bởi team Suruchi</p>
                    </footer>
                </div>
                <aside class="checkout__sidebar sidebar">
                    <div class="cart__table checkout__product--table">
                        <table class="cart__table--inner">
                            <tbody class="cart__table--body">
                                <tr class="cart__table--body__items">
                                    <td class="cart__table--body__list">
                                        <div class="product__image two  d-flex align-items-center">
                                            <div class="product__thumbnail border-radius-5">
                                                <a href="product-details.html"><img class="border-radius-5" src="../public/assets_client/img/product/small-product7.png" alt="cart-product"></a>
                                                <span class="product__thumbnail--quantity">1</span>
                                            </div>
                                            <div class="product__description">
                                                <h3 class="product__description--name h4"><a href="product-details.html">Áo khoác blazer</a></h3>
                                                <span class="product__description--variant">Màu: Xám</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="cart__table--body__list">
                                        <span class="cart__price">200.00VND</span>
                                    </td>
                                </tr>
                                <tr class="cart__table--body__items">
                                    <td class="cart__table--body__list">
                                        <div class="cart__product d-flex align-items-center">
                                            <div class="product__thumbnail border-radius-5">
                                                <a href="product-details.html"><img class="border-radius-5" src="../public/assets_client/img/product/small-product2.png" alt="cart-product"></a>
                                                <span class="product__thumbnail--quantity">1</span>
                                            </div>
                                            <div class="product__description">
                                                <h3 class="product__description--name h4"><a href="product-details.html">Áo thun form rộng trơn</a></h3>
                                                <span class="product__description--variant">Màu: Đen</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="cart__table--body__list">
                                        <span class="cart__price">200.00VND</span>
                                    </td>
                                </tr>
                                <tr class="cart__table--body__items">
                                    <td class="cart__table--body__list">
                                        <div class="cart__product d-flex align-items-center">
                                            <div class="product__thumbnail border-radius-5">
                                                <a href="product-details.html"><img class="border-radius-5" src="../public/assets_client/img/product/small-product4.png" alt="cart-product"></a>
                                                <span class="product__thumbnail--quantity">1</span>
                                            </div>
                                            <div class="product__description">
                                                <h3 class="product__description--name h4"><a href="product-details.html">Áo thun ngắn tay trắng đục</a></h3>
                                                <span class="product__description--variant">Màu: Trắng</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="cart__table--body__list">
                                        <span class="cart__price">200.00VND</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table> 
                    </div>
                    <div class="checkout__discount--code">
                        <form class="d-flex" action="#">
                            <label>
                                <input class="checkout__discount--code__input--field border-radius-5" placeholder="Thẻ quà tặng hoặc mã giảm giá"  type="text">
                            </label>
                            <button class="checkout__discount--code__btn primary__btn border-radius-5" type="submit">Thanh Toán</button>
                        </form>
                    </div>
                    <div class="checkout__total">
                        <table class="checkout__total--table">
                            <tbody class="checkout__total--body">
                                <tr class="checkout__total--items">
                                    <td class="checkout__total--title text-left">Tổng phụ </td>
                                    <td class="checkout__total--amount text-right">600.00VND</td>
                                </tr>
                                <tr class="checkout__total--items">
                                    <td class="checkout__total--title text-left">Vận chuyển</td>
                                    <td class="checkout__total--calculated__text text-right">Tính toán ở bước tiếp theo</td>
                                </tr>
                            </tbody>
                            <tfoot class="checkout__total--footer">
                                <tr class="checkout__total--footer__items">
                                    <td class="checkout__total--footer__title checkout__total--footer__list text-left">Tổng cộng</td>
                                    <td class="checkout__total--footer__amount checkout__total--footer__list text-right">600.00VND</td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </aside>
            </div>
        </div>
    </div>
    <!-- End checkout page area -->

<?php
include_once __DIR__ . '/../inc/_footer.inc.php';
?>