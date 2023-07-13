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
                                <li class="go-home"><a href="index1.html">Trang Chủ</a></li>
                                <li class="about-p"><span>Đăng Nhập</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb end -->
    <!-- login start -->
    <section class="section-tb-padding">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="login-area">
                        <div class="login-box">
                            <h1>Đăng Nhập</h1>
                            <p>Vui lòng điền thông tin bên dưới</p>
                            <form>
                                <label>Email</label>
                                <input type="text" name="email" placeholder="Email của bạn">
                                <label>Mật Khẩu</label>
                                <input type="text" name="password" placeholder="Mật khẩu của bạn">
                                <a href="login.html" class="btn-style1">Đăng Nhập</a>
                                <a href="#" class="re-password">Bạn quên mật khẩu?</a>
                            </form>
                        </div>
                        <div class="login-account">
                            <h4>Bạn chưa có tài khoản?</h4>
                            <a href="register.html" class="ceate-a">Tạo Tài khoản</a>
                            <div class="login-info">
                                <a href="#" class="terms-link"><span>*</span> Điều khoản & Điều kiện.</a>
                                <p>Khoi farm cam kết bảo mật các thông tin khách hàng <a href="#">Chính sách bảo mật</a></a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- login end -->
 <?php
 include "footer.php"
 ?>