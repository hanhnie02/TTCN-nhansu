<?php
    $hoten = $_POST['HoTen'];
    $sodienthoai = $_POST['SoDienThoai'];
    $email = $_POST['Email'];
    $gioitinh = $_POST['GioiTinh'];
    $ngaysinh = $_POST['Ngaysinh'];
    $diachi = $_POST['DiaChi'];
    $chuyenmon = $_POST['ChuyenMon'];
    $vitriut = $_POST['VTungtuyen'];
    $cv = $_POST['CV'];

    // Chàn dữ liệu vào bảng tbl_lien_he
    // Bước 1: Kết nối đến CSDL 
  //******* Chỗ này dùng cho xampp
	$host = "localhost";
	$dbname = "thuctap";
	$dbusername = "root";
	$dbpassword = "";
	
	$ketnoi = mysqli_connect($host, $dbusername, $dbpassword, $dbname);


    // Bước 2: Chèn dữ liệu vào bảng Liên hệ
    $sql = "
    INSERT INTO `tblungvien` (
        `hoten`, 
        `SDT`, 
        `email`, 
        `gioitinh`, 
        `ngaysinh`,
        `diachi`,
        `VitriUT`,
        `chuyenmon`,
        `CV`) 
    VALUES (
        '".$hoten."',
        '".$sodienthoai."',
        '".$email."',
        '".$gioitinh."',
        '".$ngaysinh."',
        '".$diachi."',
        '".$vitriut."',
        '".$chuyenmon."',
        '".$cv."')";
    
    // Xem câu lệnh SQL viết có đúng hay không?
    // echo $sql;

    // Cho thực thi câu lệnh SQL trên
   // mysqli_query($ketnoi, $sql);
    if($ketnoi->query($sql)===TRUE)
    {
?>
    <script type="text/javascript">
    window.alert("Gửi thành công. Chúng tôi sẽ hồi đáp bạn sớm nhất có thể!");
    window.location="blog-listingindex.php";
    </script>
<?php 
    }
    else
        header("location:loi.php?error=$error");
?>
