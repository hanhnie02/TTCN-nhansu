<!DOCTYPE html>
<html lang="en">
    <?php //require("index1.php");?>
<?php require("header.php");
$ketnoi = mysqli_connect($servername, $username, $password, $dbname);
/*mysqli_set_charset($ketnoi, 'UTF8');*/
//Bước 2: Hiển thị các dữ liệu trong bảng blog ra đây
$sql = "SELECT * FROM tblmotacv"  ;
$dulieu = mysqli_query($ketnoi, $sql);
//  $product = mysqli_fetch_assoc($dulieu);
$row = mysqli_fetch_array($dulieu);
?>
<style>
    aside.col-lg-3 div.sidebar, div.widget.widget-cats.widget-title.ul.li a {
        font-family: roboto;
    }
</style>
<body>
    <div class="page-wrapper">
        <main class="main">

            <div class="page-content">
                <div class="container">
                	<div class="row">
                		<div class="col-lg-9">
                            <article class="entry entry-list">
                                <div class="row align-items-center">
                                </div><!-- End .row -->
                            </article><!-- End .entry -->
                            <?php
                                $sql_tin="SELECT * FROM tblmotacv ";
                                $result=$conn->query($sql_tin);
                                if($result ->num_rows >0)
                                    {
                                        $i=1;
                                         while($row_tin=$result->fetch_assoc())
                                         {
                                          ?>
                                          <article class="entry entry-list">
                                <div class="row align-items-center">
                                    <div class="col-md-5">
                                        <figure >
                                            <a style="font-family: roboto" href="#">
                                                <img src="admin/<?php echo $row_tin['mota_image']?>">
                                            </a>
                                        </figure><!-- End .entry-media -->
                                    </div><!-- End .col-md-5 -->

                                    <div class="col-md-7">
                                        <div class="entry-body">
                                            <h2 class="entry-title">
                                                <a style="font-family: roboto" href="chitiettuyendung.php?id_tin=<?php echo $row_tin["MaMT"];?>" style="font-family:roboto"><?php echo $row_tin['mota']?></a>
                                            </h2><!-- End .entry-title -->

                                            <div class="entry-content">
                                                <ul>
                                                    <li style="font-family:roboto"><?php echo $row_tin['mota']?></li>
                                                    <br><br>
                                                    <li style="font-family:roboto; font-style: italic">Ngày đăng: <?php echo $row_tin['ngaydang']?></li>
                                                </ul>                                             
                                                <a style="font-family: roboto" href="chitiettuyendung.php?id_tin=<?php echo $row_tin["MaMT"];?>" class="read-more">Xem thêm</a>
                                            </div><!-- End .entry-content -->
                                        </div><!-- End .entry-body -->
                                    </div><!-- End .col-md-7 -->
                                </div><!-- End .row -->
                            </article><!-- End .entry -->                                          
                                        <?php
                                             $i++;
                                        }
                                    }
                            ?>

                          
                			<nav aria-label="Page navigation">
							    <ul class="pagination">
							        <li class="page-item disabled">
							            <a style="font-family: roboto" class="page-link page-link-prev" href="#" aria-label="Previous" tabindex="-1" aria-disabled="true">
							                <span aria-hidden="true"><i class="icon-long-arrow-left"></i></span>Prev
							            </a>
							        </li>
							        <li class="page-item active" aria-current="page"><a style="font-family: roboto" class="page-link" href="#">1</a></li>
							        <li class="page-item"><a style="font-family: roboto" class="page-link" href="#">2</a></li>
							        <li class="page-item">
							            <a style="font-family: roboto" class="page-link page-link-next" href="#" aria-label="Next">
							                Next <span aria-hidden="true"><i class="icon-long-arrow-right"></i></span>
							            </a>
							        </li>
							    </ul>
							</nav>
                		</div><!-- End .col-lg-9 -->

                		<aside class="col-lg-3">
                			<div class="sidebar">
                            <div class="widget widget-search">

                				</div><!-- End .widget -->
                                <div class="widget widget-cats">
                                    <h3 class="widget-title" style="color:blue">Danh mục</h3><!-- End .widget-title -->

                                    <ul>
                                        <li><a style="font-family: roboto" href="#">Giới thiệu công ty</a></li> 
                                        <li><a style="font-family: roboto" href="#">Chính sách công ty</a></li>
                                        <li><a style="font-family: roboto" href="#">Phúc lợi công ty</a></li>
                                        <li><a style="font-family: roboto" href="#">Sản phẩm</a></li>
                                    </ul>
                                </div><!-- End .widget -->

                                <div class="widget">
                                    <h3 class="widget-title" style="color:blue">Giới thiệu chung</h3><!-- End .widget-title -->
                                    <ul class="posts-list">
                                        <li>
                                            <h3 class="widget-title">Cung cấp dịch vụ mua hộ, giao hàng nước ngoài về Việt Nam</h3><!-- End .widget-title -->
                                            <h3 class="widget-title">Cung cấp đa dạng các dịch vụ đến từ các tuyến khác nhau</h3><!-- End .widget-title -->
                                            <h3 class="widget-title">Dịch vụ của T&T đã thu hút được 30 khách hàng tiềm năng</h3><!-- End .widget-title -->
                                            <h3 class="widget-title">T&T là nhà phân phối chính thức cho các nhà bán lẻ toàn quốc</h3><!-- End .widget-title -->
                                        </li>
                                    </ul><!-- End .posts-list -->
                                </div><!-- End .widget -->

                                <div class="widget widget-banner-sidebar">
                                    <div class="banner-sidebar-title" style="font-family: roboto"style="color:blue">Join Us</div><!-- End .ad-title -->
                                    </div><!-- End .banner-ad -->
                                </div><!-- End .widget -->

                                <div class="widget">
                                    <h3 class="widget-title" style="color:blue">Tags</h3><!-- End .widget-title -->

                                    <div class="tagcloud">
                                        <a style="font-family: roboto" href="#">Parttime</a>
                                        <a style="font-family: roboto" href="#">Fulltime</a>
                                        <a style="font-family: roboto" href="#">Remote</a>
                                        <a style="font-family: roboto" href="#">Lương nghìn đô</a>
                                        <a style="font-family: roboto" href="#">Làm việc thoải mái</a>
                                        <a style="font-family: roboto" href="#">Chính sách ưu đãi cho nhân viên</a>
                                        <a style="font-family: roboto" href="#">Sếp dễ tính</a>
                                    </div><!-- End .tagcloud -->
                                </div><!-- End .widget -->
                                </div><!-- End .widget -->
                			</div><!-- End .sidebar -->
                		</aside><!-- End .col-lg-3 -->
                	</div><!-- End .row -->
                </div><!-- End .container -->
            </div><!-- End .page-content -->
        </main><!-- End .main -->
    </div><!-- End .page-wrapper -->
    <button id="scroll-top" title="Back to Top"><i class="icon-arrow-up"></i></button>
<!--popup khuyễn mãi-->
<div class="container newsletter-popup-container mfp-hide" id="newsletter-popup-form">
        <div class="row justify-content-center">
            <div class="col-10">
                <div class="row no-gutters bg-white newsletter-popup-content">
                    <div class="col-xl-3-5col col-lg-7 banner-content-wrap">
                        
                        <div class="banner-content text-center">
                            <img src="admin/images/tuyendung1.jpg" class="logo" alt="logo" width="300" height="250">
                            <h2 class="banner-title">Nhận thông báo<span><light></light></h2>
                            <p style="font-family:roboto">Đăng ký để không bỏ lỡ tin tuyển dụng</p>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="register-policy-2" required>
                                <label style="font-family:roboto" class="custom-control-label" for="register-policy-2">Không hiển thị lần nữa</label>
                            </div><!-- End .custom-checkbox -->
                            
                        </div>
                    </div>
                    <div class="col-xl-2-5col col-lg-5 ">
                        <img src="admin/images/anh_tuyen.jpg" class="newsletter-img" alt="newsletter" width="300px" height="320px">
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Mobile Menu -->
    <div class="mobile-menu-overlay"></div><!-- End .mobil-menu-overlay -->

    <!-- Plugins JS File -->
    <div class="container">
                <div class="cta cta-separator cta-border-image cta-half mb-0">
                    <div class="cta-border-wrapper bg-white">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="cta-wrapper cta-text text-center">
                                    <h3 style="font-family:roboto" class="cta-title">T&T Checkout</h3><!-- End .cta-title -->
                                    <p style="font-family:roboto; " class="cta-desc">Kinh doanh DropShipping với vốn nhập hàng 0d</p><!-- End .cta-desc -->
                            
                                    <div class="social-icons social-icons-colored justify-content-center">
                                        <a href="https://www.facebook.com/FPTShopOnline" class="social-icon social-facebook" title="Facebook" target="_blank"><i class="icon-facebook-f"></i></a>
                                        <a href="https://twitter.com/FPTShopcomvn?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor" class="social-icon social-twitter" title="Twitter" target="_blank"><i class="icon-twitter"></i></a>
                                        <a href="https://www.instagram.com/fptshop.official/" class="social-icon social-instagram" title="Instagram" target="_blank"><i class="icon-instagram"></i></a>
                                        <a href="https://www.youtube.com/channel/UCReIrO3npnrMpRzB5xgE7fQ" class="social-icon social-youtube" title="Youtube" target="_blank"><i class="icon-youtube"></i></a>
                                        <a href="https://www.pinterest.com/fptshoponline/" class="social-icon social-pinterest" title="Pinterest" target="_blank"><i class="icon-pinterest"></i></a>
                                    </div><!-- End .soial-icons -->
                                </div><!-- End .cta-wrapper -->
                            </div><!-- End .col-lg-6 -->

                            <div class="col-lg-6">
                                <div class="cta-wrapper text-center">
                                    <h3 style="font-family:roboto; " class="cta-title">Nhận thông báo sớm nhất</h3><!-- End .cta-title -->
                                    <p style="font-family:roboto; " class="cta-desc"> <br> <span class="text-primary">Join us</p><!-- End .cta-desc -->
                            
                                    <form action="#" method="post">
                                        <div class="input-group">
                                            <input style="font-family:roboto; " name="mail" type="email" class="form-control" placeholder="Nhập Email" aria-label="Email Adress" required>
                                            <div class="input-group-append">
                                                <button class="btn btn-primary btn-rounded" type="submit" name="send" ><i class="icon-long-arrow-right"></i></button>
                                            </div><!-- .End .input-group-append -->
                                        </div><!-- .End .input-group -->
                                      
                                        <?php
                                    
                                    require('./mail/sendMail.php');
                                    if(isset($_POST["send"]))
                                    {
                                $tieude = "T&T gửi bạn thông tin tuyển dụng mới nhất";
                                $noidung = "<h2>Cảm ơn bạn đã quan tâm.</h2>";
                                    $gmail = $_POST['mail'];
                                
                                $_SESSION['mail']=$gmail;  
                                $maildathang=$_SESSION['mail'];
                                    $mail =new mailer2();
                                    $mail->dathangmail($tieude, $noidung, $maildathang);
                            }

                                ?>
                                    </form>
                                    
                                </div><!-- End .cta-wrapper -->
                            </div><!-- End .col-lg-6 -->
                        </div><!-- End .row -->
                    </div><!-- End .bg-white -->
                </div><!-- End .cta -->
            </div><!-- End .container -->
            <!--popup khuyễn mãi-->
    <div class="container newsletter-popup-container mfp-hide" id="newsletter-popup-form">
        <div class="row justify-content-center">
            <div class="col-10">
                <div class="row no-gutters bg-white newsletter-popup-content">
                    <div class="col-xl-3-5col col-lg-7 banner-content-wrap">
                        
                        <div class="banner-content text-center">
                            <img src="assets/images/sunphonec.png" class="logo" alt="logo" width="300" height="250">
                            <h2 class="banner-title">get <span>10<light>%</light></span> off</h2>
                            <p style="font-family:roboto">Đón chờ samsung S23 ra mắt. Đặt trước để được ưu đãi liền tay</p>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="register-policy-2" required>
                                <label style="font-family:roboto" class="custom-control-label" for="register-policy-2">Không hiển thị lần nữa</label>
                            </div><!-- End .custom-checkbox -->
                            
                        </div>
                    </div>
                    <div class="col-xl-2-5col col-lg-5 ">
                        <img src="assets/images/banners/pop.png" class="newsletter-img" alt="newsletter" width="396px" height="420px">
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Plugins JS File -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jquery.hoverIntent.min.js"></script>
    <script src="assets/js/jquery.waypoints.min.js"></script>
    <script src="assets/js/superfish.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/bootstrap-input-spinner.js"></script>
    <script src="assets/js/jquery.plugin.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/jquery.countdown.min.js"></script>
    <!-- Main JS File -->
    <script src="assets/js/main.js"></script>
    <script src="assets/js/demos/demo-3.js"></script>

</body>

<?php require("footer.php");?>
<!-- molla/blog-listing.html  22 Nov 2019 10:04:12 GMT -->
</html>