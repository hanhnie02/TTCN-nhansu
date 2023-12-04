
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="icon" type="image/png" sizes="16x16" href="images/logo.jpg"/>

    <title>T&T| Trang quản trị</title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    
    <!-- bootstrap-progressbar -->
    <link href="../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="../vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
    
  </head>

  <body class="nav-md" style="background-color:#212529;" >
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <?php include("top.php");?>

            <!-- page content -->
            <div class="right_col" role="main" style="background-image: 'https://cf.shopee.vn/file/20e412383a477faec24caf8544863e8f'">
            <br><br><br>
           
            
            <?php
                //1. ket noi den may chu du lieu va co so du lieu, lau them moi sua, xoa du lieu
                include("../config/dbconfig.php");
                $ketnoi = mysqli_connect($host, $dbusername, $dbpassword, $dbname); //(ten truy cap, ten tai khoan, mk, ten database)

                //2. viet cau lenh truy van lay ra du lieu mong muon
                $sql = "SELECT * FROM tblnhanvien";
                $sql1 = "SELECT * FROM tblquanly";
                $sql2 = "SELECT * FROM tblmotacv";
                $sql3 = "SELECT * FROM tbldspvan";
                $sql4 = "SELECT * FROM tbldsthuviec";
                $sql5 = "SELECT * FROM tbldsnhanvienchinhthuc";
                $sql6 = "SELECT * FROM tblungvien";

               

                //3. thuc thi cau lech truy van
                $noidungtruyvan = mysqli_query($ketnoi, $sql);
                $noidungtruyvan1 = mysqli_query($ketnoi, $sql1);
                $noidungtruyvan2 = mysqli_query($ketnoi, $sql2);
                $noidungtruyvan3 = mysqli_query($ketnoi, $sql3);
                $noidungtruyvan4 = mysqli_query($ketnoi, $sql4);
                $noidungtruyvan5 = mysqli_query($ketnoi, $sql5);
                $noidungtruyvan6 = mysqli_query($ketnoi, $sql6);
             
                //4. dem so tin tuc
                $soluong = mysqli_num_rows($noidungtruyvan);
                $soluong1 = mysqli_num_rows($noidungtruyvan1);
                $soluong2 = mysqli_num_rows($noidungtruyvan2);
                $soluong3 = mysqli_num_rows($noidungtruyvan3);
                $soluong4 = mysqli_num_rows($noidungtruyvan4);
                $soluong5 = mysqli_num_rows($noidungtruyvan5);
                $soluong6 = mysqli_num_rows($noidungtruyvan6);
            
             
            ;?>
              <h1>QUẢN TRỊ HỆ THỐNG</h1>
              <br><br>
            
              <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        
                        <div class="row">
                            <div class="col-md-3" style="margin-bottom: 30px;" >
                                <div class="card bg-primary text-white mb-4"  style="border-radius: 5px; background-color: #0D6EFD">
                                <br>
                                    <div style="margin-left: 15px; font-size: 16px;" >Quản trị nhân viên<br>(<?php echo $soluong ;?> nhân viên)</div>
                                    <hr style="margin-bottom: 5px;">
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a style="margin-left: 15px;color: white;" href="danh_sach_nhan_vien.php"><u>Chi tiết</u></a>                                     
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3" style="margin-bottom: 30px;">
                                <div class="card bg-primary text-white mb-4"  style="border-radius: 5px; background-color: #F79F1F">
                                <br>
                                    <div style="margin-left: 15px; font-size: 16px">Quản trị ứng viên<br>(<?php echo $soluong6 ;?> ứng viên)</div>
                                    <hr style="margin-bottom: 5px">
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a style="margin-left: 15px;color: white;" href="danh_sach_ung_vien.php"><u>Chi tiết</u></a>                                     
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3" style="margin-bottom: 30px;">
                                <div class="card bg-primary text-white mb-4"  style="border-radius: 5px; background-color: #05C46B">
                                <br>
                                    <div style="margin-left: 15px; font-size: 16px">Quản trị Admin<br>(<?php echo $soluong1 ;?> người)</div>
                                    <hr style="margin-bottom: 5px">
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a style="margin-left: 15px;color: white;" href="danh_sach_admin.php"><u>Chi tiết</u></a>                                     
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-3" style="margin-bottom: 30px;">
                                <div class="card bg-primary text-white mb-4"  style="border-radius: 5px; background-color: #F78FB3">
                                <br>
                                    <div style="margin-left: 15px; font-size: 16px">Quản trị bài đăng<br>(<?php echo $soluong2 ;?> bài)</div>
                                    <hr style="margin-bottom: 5px">
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a style="margin-left: 15px;color: white;" href="danh_sach_bai_dang.php"><u>Chi tiết</u></a>                                     
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3" style="margin-bottom: 30px;">
                                <div class="card bg-primary text-white mb-4"  style="border-radius: 5px; background-color: #4b4b4b">
                                <br>
                                    <div style="margin-left: 15px; font-size: 16px">Danh sách phỏng vấn<br>(<?php echo $soluong3;?> ứng viên)</div>
                                    <hr style="margin-bottom: 5px">
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a style="margin-left: 15px;color: white;" href="danh_sach_phong_van.php"><u>Chi tiết</u></a>                                     
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3" style="margin-bottom: 30px;">
                                <div class="card bg-primary text-white mb-4"  style="border-radius: 5px; background-color: #ff3838">
                                <br>
                                    <div style="margin-left: 15px; font-size: 16px">Danh sách thử việc<br>(<?php echo $soluong4 ;?> ứng viên)</div>
                                    <hr style="margin-bottom: 5px">
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a style="margin-left: 15px;color: white;" href="danh_sach_thu_viec.php"><u>Chi tiết</u></a>                                     
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3" style="margin-bottom: 30px;">
                                <div class="card bg-primary text-white mb-4"  style="border-radius: 5px; background-color: #FFCA00">
                                <br>
                                    <div style="margin-left: 15px; font-size: 16px">Danh sách chính thức<br>(<?php echo $soluong5 ;?> ứng viên)</div>
                                    <hr style="margin-bottom: 5px">
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a style="margin-left: 15px;color: white;" href="danh_sach_chinh_thuc.  php"><u>Chi tiết</u></a>                                     
                                    </div>
                                </div>
                            </div>                           
                        </div>              
                    </div>
                </main>
                </div>
                </div>
                

            <!-- /page content -->

            <?php include("bottom.php");?>
      </div>
    </div>

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="../vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="../vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="../vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="../vendors/Flot/jquery.flot.js"></script>
    <script src="../vendors/Flot/jquery.flot.pie.js"></script>
    <script src="../vendors/Flot/jquery.flot.time.js"></script>
    <script src="../vendors/Flot/jquery.flot.stack.js"></script>
    <script src="../vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="../vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="../vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="../vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="../vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="../vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="../vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="../vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../vendors/moment/min/moment.min.js"></script>
    <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
    
  </body>
</html>