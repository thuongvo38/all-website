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
                                <li class="about-p"><span>Đăng Ký</span></li>
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
                    <div class="register-area">
                        <div class="register-box">
                            <h1>Tạo Tài Khoản</h1>
                            <p>Vui lòng điền các thông tin bên dưới</p>
                            <form>
                                <input type="text" name="name" placeholder="Họ Và Tên">
                                <input type="text" name="l-name" placeholder="Tên Đăng Nhập">
                                <input type="text" name="email" placeholder="Email">
                                <input type="text" name="password" placeholder="Mật Khẩu">
                                <a href="#" class="btn-style1">Khởi Tạo</a>
                            </form>
                        </div>
                        <div class="register-account">
                            <h4>Bạn đã có tài khoản?</h4>
                            <a href="login.html" class="ceate-a">Đăng Nhập</a>
                            <div class="register-info">
                                <a href="#" class="terms-link"><span>*</span> Điều kiện & Điều khoản.</a>
                                <p>Khoi farm cam kết bảo mật các thông tin khách hàng <a href="#">Chính sách bảo mật</a></p>
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