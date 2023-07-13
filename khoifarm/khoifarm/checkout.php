<?php
include "header.php"
?>
        <!-- breadcrumb start -->
        <section class="about-breadcrumb">
            <div class="about-back section-tb-padding" style="background-image: url(image/about-image.jpg)">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="about-l">
                                <ul class="about-link">
                                    <li class="go-home"><a href="index.html">Trang Chủ</a></li>
                                    <li class="about-p"><span>Thanh Toán</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb end -->
        <!-- checkout page start -->
        <section class="section-tb-padding">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="checkout-area">
                            <div class="billing-area">
                                <form>
                                    <h2>Thông tin Giao hàng</h2>
                                    <div class="billing-form">
                                     
                                        <ul class="billing-ul">
                                            <li class="billing-li">
                                                <label>Họ Và Tên</label>
                                                <input type="text" name="company details" placeholder="Họ và tên của bạn">
                                            </li>
                                        </ul>
                                    
                                        <ul class="billing-ul">
                                            <li class="billing-li">
                                                <label>Số nhà/Đường</label>
                                                <input type="text" name="address" placeholder="Địa chỉ">
                                            </li>
                                        </ul>
                                        <ul class="billing-ul">
                                            <li class="billing-li">
                                                <label>Phường/Xã</label>
                                                <input type="text" name="--" placeholder="">
                                            </li>
                                        </ul>
                                        <ul class="billing-ul">
                                            <li class="billing-li">
                                                <label>Quận/Huyện</label>
                                                <input type="text" name="city" placeholder="">
                                            </li>
                                        </ul>
                                      
                                        <ul class="billing-ul input-2">
                                            <li class="billing-li">
                                                <label>Email</label>
                                                <input type="text" name="mail" placeholder="Email của bạn">
                                            </li>
                                            <li class="billing-li">
                                                <label>Số điện thoại</label>
                                                <input type="text" name="phone" placeholder="Số điện thoại của bạn">
                                            </li>
                                        </ul>
                                    </div>
                                </form>
                                <div class="billing-details">
                                    <form>
                                        <h2>Địa chỉ khác</h2>
                                        <ul class="shipping-form">
                                            <li class="check-box">
                                                <input type="checkbox" name="--">
                                                <label>Bạn muốn giao hàng tại địa chỉ khác?</label>
                                            </li>
                                            <li class="comment-area">
                                                <label>Vui lòng điền địa chỉ</label>
                                                <textarea name="comments" rows="4" cols="80"></textarea>
                                            </li>
                                        </ul>
                                        
                                    </form>
                                </div>
                            </div>
                            <div class="order-area">
                                <div class="check-pro">
                                    <h2>Sản phẩm trong giỏ hàng (2)</h2>
                                    <ul class="check-ul">
                                        <li>
                                            <div class="check-pro-img">
                                                <a href="product.html"><img src="image/pro-page-image/check-image-1.jpg" class="img-fluid" alt="image"></a>
                                            </div>
                                            <div class="check-content">
                                                <a href="product.html">Vài thiều Bắc Giang</a>
                                                
                                                <span class="check-price">93.000<sup>đ</sup></span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="check-pro-img">
                                                <a href="product.html"><img src="image/pro-page-image/check-image-2.jpg" class="img-fluid" alt="image"></a>
                                            </div>
                                            <div class="check-content">
                                                <a href="product.html">Cam vàng Nhập khẩu</a>
                                                
                                                <span class="check-price">230.000<sup>đ</sup></span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <h2>Hóa Đơn</h2>
                                <ul class="order-history">
                                    <li class="order-details">
                                        <span>Sản Phẩm:</span>
                                        <span>Tổng</span>
                                    </li>
                                    <li class="order-details">
                                        <span>Vài thiều Bắc Giang:</span>
                                        <span>93.000<sup>đ</sup></span>
                                    </li>
                                    <li class="order-details">
                                        <span>Cam vàng Nhập khẩu:</span>
                                        <span>230.000<sup>đ</sup></span>
                                    </li>
                                    <li class="order-details">
                                        <span>Thành Tiền:</span>
                                        <span>323.000<sup>đ</sup></span>
                                    </li>
                                    <li class="order-details">
                                        <span>Phí giao hàng:</span>
                                        <span>Miễn phí</span>
                                    </li>
                                    <li class="order-details">
                                        <span>Tổng Cộng:</span>
                                        <span>323.000<sup>đ</sup></span>
                                    </li>
                                </ul>
                                <form>
                                    <ul class="order-form">
                                        <li>
                                            <input type="checkbox" name="--">
                                            <label>Chuyển khoản </label>
                                        </li>
                                        <li>
                                            <input type="checkbox" name="--">
                                            <label>Giao hàng thu tiền</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" name="--">
                                            <label>Internet Banking </label>
                                        </li>
                                        <li class="pay-icon">
                                            <a href="javascript:void(0)"><i class="fa fa-credit-card"></i></a>
                                            <a href="javascript:void(0)"><i class="fa fa-cc-visa"></i></a>
                                            <a href="javascript:void(0)"><i class="fa fa-cc-paypal"></i></a>
                                            <a href="javascript:void(0)"><i class="fa fa-cc-mastercard"></i></a>
                                        </li>
                                    </ul>
                                </form>
                                <div class="checkout-btn">
                                    <a href="javascript:void(0)" class="btn-style1">Đặt Hàng</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- checkout page end -->
 <?php
 include "footer.php"
 ?>