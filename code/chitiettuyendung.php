
<?php
require("header.php");
$ketnoi = mysqli_connect($servername, $username, $password, $dbname);
// Bước 2: Lấy dữ liệu từ trên đường đẫn
$id_tin=$_GET["id_tin"];
 //Bước 3: Hiển thị các dữ liệu trong bảng tbl_sanpham ra đây
$sql = "
        SELECT * 
        FROM tblmotacv 
        WHERE MaMT = ".$id_tin  ;
    
$dulieu = mysqli_query($ketnoi, $sql);
$row = mysqli_fetch_array($dulieu);
?>
<style>
    body{
        font-family: "calibri";
    }
    label{
        color: black;
    }
</style>

    <!-- Contact Section Begin -->
    <section class="contact spad">
        <div class="container">
            <div style="margin-top: 30px"></div>
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="contact__text">
                        <div class="section-title" >
                            <?php
                                    $sql_tin="SELECT * FROM tblmotacv where maMT = ".$id_tin;
                                    $result=$conn->query($sql_tin);
                                    if($result ->num_rows >0)
                                        {
                                            $i=1;
                                            while($row_tin=$result->fetch_assoc())
                                            {
                                            ?>
                                            <h2 style="margin-bottom: 20px"><a style="color: #79C218; font-family: calibri">Mô tả chi tiết công việc</a></h2>
                                            <h5><class style="font-style: italic">Chúng tôi đang cần những cánh tay tham gia làm <?php echo $row_tin['vitriUT'] ?> trong gia đình T&T của chúng tôi 👉❤👈<class></h5>
                                            <h5><strong style="color: red;"> Yêu cầu: </strong></h5>
                                            <h6><?php echo $row_tin['yeucau']?></h6>
                                            <h5><strong style="color: red;"> Mô tả công việc: </strong></h5>
                                            <h6><?php echo $row_tin['chitietcv']?></h6>
                                            <h6>- Thời gian làm việc <?php echo $row_tin['giolam']?></h6>
                                           
                                            <h5><strong style="color: red;"> Đãi ngộ: </strong></h5>
                                            <h6>- Mức lương thử việc tháng đầu <?php echo number_format($row_tin['luongthuviec'])?> nhân viên chính thức <?php echo number_format($row_tin['luongchinhthuc'])?></h6>
                                            <h6><?php echo $row_tin['quyenloi']?></h6>
                                            <h5><class style="font-style: italic"> Còn chần chừ gì nữa mà không trở thành thành viên với chúng tôi <br> Tham gia bằng cách điền thông tin bên cạnh 👉👉👉 <class></h5>

                                          

                                            <?php
                                            }
                                        }
                                            ?>
                            
                            
                        </div>
                    </div>    
                </div>
                <div class="col-lg-6 col-md-5">
                    <div class="contact__form">
                        <form action="themungvien.php" id="contact" method="post" >
                            <div class="row" >
                                <div class="col-lg-12">
                                    <label class="col-form-label">Họ và tên</label>                                     
                                    <input type="text" class="form-control" name="HoTen" placeholder="" required="">
                                </div>                                
                                <div class="col-lg-6">
                                    <label class="col-form-label">Số điện thoại</label> 
                                    <input type="text" class="form-control" name="SoDienThoai" placeholder="" required="">
						        </div>
						        <div class="col-lg-6">
							        <label class="col-form-label">E-mail</label> 
							        <input type="email" class="form-control" name="Email" placeholder="" required="">
						        </div>
                                <div class="col-lg-6">
                                    <label class="col-form-label">Giới tính</label> 
                                    <input type="text" class="form-control" name="GioiTinh" placeholder="" required="">
						        </div>
						        <div class="col-lg-6">
							        <label class="col-form-label">Ngày sinh</label> 
							        <input type="date" class="form-control" name="Ngaysinh" placeholder="" required="">
						        </div>
                                <div class="col-lg-12 contact-me animated wow slideInUp form-group">
						            <label class="col-form-label">Địa chỉ</label>
						            <input name="DiaChi" class="form-control" placeholder="" required=""> </input>
					            </div>
                                <div class="col-lg-6">
                                    <label class="col-form-label">Chuyên môn</label> 
                                    <input type="text" class="form-control" name="ChuyenMon" placeholder="" required="">
						        </div>
						        <div class="col-lg-6">
							        <label class="col-form-label">Vị trí ứng tuyển</label> 
							        <input type="text" class="form-control" name="VTungtuyen" placeholder="" required="">
						        </div>
                                <div class="col-lg-12">
                                    <label class="col-form-label">CV</label>                                     
                                    <input type="text" class="form-control" name="CV" placeholder="Tải CV của bạn lên Drive rồi gửi dưới dạng link, đừng quên cấp quyền xem nhé" required="">
                                </div>                                

                                <div class="col-lg-12 contact-form">
						            <input type="submit" value="Gửi">
					            </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->
    <!-- map -->
    
    <div class="map mt-sm-0 mt-4">
    <iframe style="width: 100%; min-height: 400px; display: inherit;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3727.492712232747!2d105.72434969999999!3d20.8924877!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31344da5677eddcf%3A0xc4862961744ac98c!2sVietnam%20Post!5e0!3m2!1svi!2s!4v1685804466044!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>" 
        allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	</div>

    <!-- //map -->   
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jquery.hoverIntent.min.js"></script>
    <script src="assets/js/jquery.waypoints.min.js"></script>
    <script src="assets/js/superfish.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <!-- Main JS File -->
    <script src="assets/js/bootstrap-input-spinner.js"></script>
    <script src="assets/js/jquery.plugin.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/jquery.countdown.min.js"></script>
   
    <script src="assets/js/main.js"></script>
    <?php
     require("footer.php");
    ?>