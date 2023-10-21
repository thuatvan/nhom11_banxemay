
<?php
session_start();
ob_start();
include "model/connect.php";
 include "view/header.php";
 include "dao/product.php";
 include "dao/category.php";
 include "dao/taikhoan.php";
 include "dao/lichhen.php";
 include "dao/nhanvien.php";
 include "global.php";

 $listdanhmuc = loadall_danhmuc();
 $listproduct = loadall_sanpham_trangchu();
 $top10product = top10_product_trangchu();
 $listnhanvien = loadall_nhanvien();
 if (isset($_GET['action'])) {
  $action = $_GET['action'];
  switch ($action) {
    // menu
    case 'loadfullsanpham':
$loadallsanpham = loadall_sanpham();
include "view/sanpham/fullsanpham.php";
    break;
    // Tài Khoản

    case 'dangxuat':
      session_unset();
          header("location:index.php");
         break;
         
    case 'dangnhapadmin':
   header("location:./admin/index.php");
         break;

    case 'dangky':
        unset($_SESSION['dangky']);
       if (isset($_POST['dangky'])&&($_POST['dangky'])) {
        $name_taikhoan = $_POST['name_taikhoan'];
        $pass_taikhoan = $_POST['pass_taikhoan'];
        $email_taikhoan = $_POST['email_taikhoan'];
        $phone_taikhoan = $_POST['phone_taikhoan'];
        insert_taikhoan($name_taikhoan,$pass_taikhoan,$email_taikhoan,$phone_taikhoan);
        $thongbao1 = $_SESSION['dangky']['thongbao'];
       }
      include "view/taikhoan/dangky.php";
      break;
  
    case 'dangnhap':
        unset($_SESSION['dangnhap']);
        if (isset($_POST['dangnhap'])) {
        $name_taikhoan = $_POST['name_taikhoan'];
        $pass_taikhoan = $_POST['pass_taikhoan'];
       
        $check_user = check_user($name_taikhoan,$pass_taikhoan);
        if (is_array($check_user)) {
        $_SESSION['taikhoan'] = $check_user;
            header("location:index.php");
            }
      else{
          $thongbao = $_SESSION['dangnhap']['thongbao'];
        }
      }
      include "view/taikhoan/dangnhap.php";
      break;

    case 'edit_taikhoan':
       if (isset($_POST['capnhap'])) {
        $id_taikhoan = $_POST['id_taikhoan'];
        $name_taikhoan = $_POST['name_taikhoan'];
        $pass_taikhoan = sha1($_POST['pass_taikhoan']);
        $email_taikhoan = $_POST['email_taikhoan'];
        $phone_taikhoan = $_POST['phone_taikhoan'];
        capnhaptaikhoan($id_taikhoan,$name_taikhoan,$pass_taikhoan,$email_taikhoan,$phone_taikhoan);
        $_SESSION['taikhoan'] =  check_user($name_taikhoan,$pass_taikhoan);
        header("location:index.php?action=edit_taikhoan");
           $thongbao = "Cập Nhập Thành Công";
       }
      include "view/taikhoan/edit_taikhoan.php";
      break;

    case 'quenmatkhau':
       if (isset($_POST['quenmatkhau'])) {
        $email_taikhoan = $_POST['email_taikhoan'];
       
      $quenmatkhau = quenmatkhau($email_taikhoan);
         if (is_array($quenmatkhau)) {
          $thongbao="Mật Khẩu Của Bạn Là: ".$quenmatkhau['pass_taikhoan'];
         } else {
          $thongbao= "Email Không Tồn Tại";
         }
        }
      include "view/taikhoan/quenmatkhau.php";
      break;

    case 'lienhe':
      
      include "view/lienhe/lienhe.php";
      break;
    case 'uudai':
      
      include "view/uudai/uudai.php";
      break;
    

      // Sản Phẩm và thêm lịch hẹn

    case 'sanphamchitiet':
      
      if (isset($_GET['id_sanpham'])&&($_GET['id_sanpham']>0)) {
        $id_sanpham = $_GET['id_sanpham'];
     
      $onesp = loadone_sanpham($id_sanpham);
      extract($onesp);
     
      $spcungloai=list_sanpham_cungloai($id_sanpham,$id_danhmuc);
      include "view/sanpham/sanphamchitiet.php";
      }
      unset($_SESSION['btn_insert_lichhen']);
      if(isset($_POST["btn_insert_lichhen"])){
      $id_taikhoan = $_POST['id_taikhoan'];
      $id_sanpham = $_GET['id_sanpham'];
  if(!isset($_SESSION['cart'])){
        $_SESSION['cart'] = array(); // Nếu chưa, tạo một giỏ hàng trống
    }

    // Thêm sản phẩm vào giỏ hàng
    $cartItem = array(
        'id_sanpham' => $id_sanpham,
        'id_taikhoan' => $id_taikhoan
    );
    $_SESSION['cart'][] = $cartItem;

    // Chuyển hướng đến trang xem giỏ hàng
    header("location:index.php?action=xemgiohang");
      // insert_lichhen($id_taikhoan,$id_sanpham,$date_lichhen,$hours_lichhen,$description_lichhen);   
      if(empty($_SESSION['btn_insert_lichhen'])){
      // header("location:index.php?action=donelichhen");
    }
    else{    
          echo '<script>alert("Đặt lịch không Thành Công!")</script>';
          echo header("refresh: 0");                 
    }
    
  }   
      
       $listnhanvien = loadall_nhanvien();
      break;
    case 'xemgiohang':
        include "view/sanpham/giohang.php";
      break;
   

      case 'sanpham':
        if (isset($_POST['kyw']) && ($_POST['kyw'] != "")) { 
          $kyw = $_POST['kyw']; 
        } else { 
          $kyw = "";
        }
      
        if (isset($_POST['price_sanpham']) && ($_POST['price_sanpham'] != "")) {
          $price_range = $_POST['price_sanpham'];
        } else { 
          $price_range = ""; 
        }
      
        if (isset($_GET['id_danhmuc']) && ($_GET['id_danhmuc'] > 0)) { 
          $id_danhmuc = $_GET['id_danhmuc']; 
        } else { 
          $id_danhmuc = 0; 
        }
      
        $tendanhmuc = load_tendanhmuc($id_danhmuc); 
        $danhsachsanphamcungloai = loadall_sanpham_cungloai1($kyw, $id_danhmuc, $price_range); // Thêm $price_range vào hàm tìm kiếm
        include "view/sanpham/sanpham.php";
      
        break;
    case 'thanhtoan':
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $hoTen = $_POST['hoTen'];
    $soDienThoai = $_POST['soDienThoai'];
    $diaChi = $_POST['diaChi'];

   
      global $host, $userhost, $passhost, $dbname; 
      $conn = mysqli_connect($host, $userhost, $passhost, $dbname);

    foreach ($_SESSION['cart'] as $cartItem) {
        $id_sanpham = $cartItem['id_sanpham'];
        $id_taikhoan = $cartItem['id_taikhoan'];


        $query = "INSERT INTO giohang (id_sanpham, id_taikhoan, hoTen, soDienThoai, diaChi)
                  VALUES ('$id_sanpham', '$id_taikhoan', '$hoTen', '$soDienThoai', '$diaChi')";

        if (mysqli_query($conn, $query)) {
      
            unset($_SESSION['cart']);
            echo "Đã thanh toán thành công!";
        } else {
            echo "Lỗi khi thêm vào bảng giohang: " . mysqli_error($conn);
        }
    }



}
      include "view/giohang/thanhtoan.php";
      
      break;

      // Đăng nhập nhân viên

      case "dangnhapnhanvien":
        if (isset($_POST['dangnhapnhanvien'])) {
          $taikhoan_nhanvien = $_POST['taikhoan_nhanvien'];
          $pass_nhanvien = $_POST['pass_nhanvien'];
         
          $check_user_nv = check_user_nv($taikhoan_nhanvien,$pass_nhanvien);
          if (is_array($check_user_nv)) {
          $_SESSION['nhanvien'] = $check_user_nv;
          header("location:index.php");
              }
     else{
      $thongbao = $_SESSION['dangnhapnhanvien']['thongbao'];
         }
        }
        include "view/nhanvien/dangnhap.php";
        break;
        case 'dangxuatnhanvien':
          session_unset();
              header("location:index.php");
             break;
      //xem lịch tư vấn của nhân viên
      case "xemlichtuvan":
        if(isset($_GET['id_nhanvien'])){
          $id_nhanvien = $_GET['id_nhanvien'];
        }
        $listlichtuvan = load_lichtuvan_nhanvien($id_nhanvien);
            include "view/nhanvien/lichtuvan.php";
        break;        
      //Xem lịch hẹn của khách hàng

      case "xemlichhen";
      if(isset($_GET['id_taikhoan'])){
        $id_taikhoan = $_GET['id_taikhoan'];
      }
      $listlichhen = load_lichhen_khachhang($id_taikhoan);
          include "view/lichhen/lichhen.php";
      break;
    
    default:
      include "view/trangchu.php";
      break;
  }
}else {
       include "view/trangchu.php";
}
 include "view/footer.php";
?>