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
                                                            <h3 class="product__description--name h4"><a href="product-details.html">Áo khoác blazer</a></h3>
                                                            <span class="product__description--variant">Màu: Xám</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class=" summary__table--list">
                                                    <span class="cart__price">200.00VND</span>
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
                                                            <h3 class="product__description--name h4"><a href="product-details.html">Áo thun form rộng trơn</a></h3>
                                                            <span class="product__description--variant">Màu: Đen</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class=" summary__table--list">
                                                    <span class="cart__price">200.00VND</span>
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
                                                            <h3 class="product__description--name h4"><a href="product-details.html">Áo thun ngắn tay trắng đục</a></h3>
                                                            <span class="product__description--variant">Màu: Trắng</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class=" summary__table--list">
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
                                        <button class="checkout__discount--code__btn btn border-radius-5" type="submit">Thanh Toán</button>
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
                                                <td class="checkout__total--footer__title checkout__total--footer__list text-left">Tổng cộng </td>
                                                <td class="checkout__total--footer__amount checkout__total--footer__list text-right">600.00VND</td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </details>
                    </header>
                    <main class="main__content_wrapper">
                        <form action="#">
                            <div class="checkout__content--step section__shipping--address pt-0">
                                <div class="section__header checkout__header--style3 position__relative mb-25">
                                    <span class="checkout__order--number">Đơn hàng số 0021</span>
                                    <h2 class="section__header--title h3">Cảm ơn bạn đã gửi</h2>
                                    <div class="checkout__submission--icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="25.995" height="25.979" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M416 128L192 384l-96-96"/></svg>
                                    </div>
                                </div>
                                <div class="order__confirmed--area border-radius-5 mb-15">
                                    <h3 class="order__confirmed--title h4">Đơn hàng của bạn đã được xác nhận</h3>
                                    <p class="order__confirmed--desc">Bạn sẽ sớm nhận được email xác nhận kèm theo số đơn đặt hàng của bạn</p>
                                </div>
                                <div class="customer__information--area border-radius-5">
                                    <h3 class="customer__information--title h4">Thông tin khách hàng</h3>
                                    <div class="customer__information--inner d-flex">
                                        <div class="customer__information--list">
                                            <div class="customer__information--step">
                                                <h4 class="customer__information--subtitle h5">Thông tin liên lạc</h4>
                                                <ul>
                                                    <li><a class="customer__information--text__link" href="#">thachphat@gmail.com</a></li>
                                                </ul>
                                            </div>
                                            <div class="customer__information--step">
                                                <h4 class="customer__information--subtitle h5">Địa chỉ giao hàng</h4>
                                                <ul>
                                                    <li><span class="customer__information--text">160/51</span></li>
                                                    <li><span class="customer__information--text">Bùi Đình Túy</span></li>
                                                    <li><span class="customer__information--text">Bình Thạnh</span></li>
                                                    <li><span class="customer__information--text">Hồ Chí minh</span></li>
                                                </ul>
                                            </div>
                                            <div class="customer__information--step">
                                                <h4 class="customer__information--subtitle h5">Phương pháp vận chuyển</h4>
                                                <ul>
                                                    <li><span class="customer__information--text">Vận chuyển nhanh</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="customer__information--list">
                                            <div class="customer__information--step">
                                                <h4 class="customer__information--subtitle h5">Phương thức thanh toán</h4>
                                                <ul>
                                                    <li><span class="customer__information--text">Thanh toán khi nhận hàng</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="checkout__content--step__footer d-flex align-items-center">
                                <a class="continue__shipping--btn primary__btn border-radius-5" href="checkout-4.html">Thanh toán ngay</a>
                                <a class="previous__link--content" href="shop.html">Quay lại giỏ hàng</a>
                            </div>
                        </form>
                    </main>
                    <footer class="main__footer checkout__footer">
                        <p class="copyright__content">Bản quyền © 2023 <a class="copyright__content--link text__primary" href="index.html">Suruchi</a> . Đã đăng ký Bản quyền.Thiết kế bởi Suruchi</p>
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
                                    <td class="checkout__total--footer__title checkout__total--footer__list text-left">Tổng cộng </td>
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