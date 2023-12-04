  <style>
    .hinhanh {text-align: center;
      color:white;
      padding-top: 10px;
      padding-bottom: 0px;
    }
  </style>      
  <?php
                      // Bước 1: Kết nối đến CSDL
                      include("../config/dbconfig.php");
                      $ketnoi = mysqli_connect($host, $dbusername, $dbpassword, $dbname);
                      mysqli_set_charset($ketnoi, 'UTF8');

                      //Bước 2: Hiển thị các dữ liệu trong bảng tbl_admin ra đây
                      $sql = "
                        SELECT * 
                        FROM tblquanly";
                      $dulieu = mysqli_query($ketnoi, $sql);
                      $row = mysqli_fetch_array($dulieu);
    ?>    
            
            <div class="logo"><a href="index.php" class="site_title"> <img style="width: 55%; height: auto; margin-left: 17%; margin-right: auto; " src="images/logo2.png" ></a></div>
            <div class="clearfix"></div>

           
            <!-- menu profile quick info -->
            <div class="profile clearfix" >
              <div class="hinhanh">
                <span>Xin chào</span>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />
          
           

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu" >
              <div class="menu_section">
                
                <ul class="nav side-menu">
                  <li><a  href="./dashboard.php"><i class="fa fa-home"></i>Hệ thống quản lý</a></li>
            
                  <li><a><i class="fa fa-desktop"></i> Quản trị Nhân viên <span  class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu" >
                      <li><a href="tin_tuc_them_moi.php">Tạo nhân viên mới</a></li>
                      <li><a href="danh_sach_nhan_vien.php">Danh sách nhân viên</a></li>
                      <li><a href="cham_cong.php">Chấm công nhân viên</a></li>
                    </ul>
                  </li>
                   <li><a><i class="fa fa-table"></i> Quản trị Ứng viên<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="admin-them-moi.php">Tạo Ứng viên mới </a></li>
                      <li><a href="danh_sach_ung_vien.php">Danh sách ứng viên</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-table"></i> Quản trị Admin<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="sanpham-them-moi.php">Tạo người dùng mới</a></li>
                      <li><a href="danh_sach_admin.php">Danh sách người dùng</a></li>
                    </ul>
                  </li>
                      <li><a><i class="fa fa-table"></i> Quản trị bài đăng  <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="dm-them-moi.php">Tạo bài đăng mới</a></li>
                      <li><a href="danh_sach_bai_dang.php">Danh sách bài đăng</a></li>
                    </ul>
                  </li>

            

                  <li><a href="danh_sach_phong_van.php"><i class="fa fa-bar-chart-o"></i> Danh sách phỏng vấn</a></li>

                  <li><a href="danh_sach_thu_viec.php"><i class="fa fa-bar-chart-o"></i> Danh sách thử việc</a></li>
                  <li><a href="danh_sach_chinh_thuc.php"><i class="fa fa-bar-chart-o"></i>Danh sách chính thức</a></li>
              </div>
            </div>
            <!-- /sidebar menu -->




            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav" style="background-color:#212529">
          <div class="nav_menu" style="background-color:#212529">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i style="color: white" class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a style="color: white" href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> ADMIN
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="index.php"><i class="fa fa-sign-out pull-right"></i> Đăng xuất</a></li>
                  </ul>
                </li>

                
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->