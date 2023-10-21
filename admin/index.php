<?php 
session_start();
ob_start();
if(isset($_SESSION['admin'])){
include "../model/connect.php"; 
include "./sidebar.php"; 
include "../dao/category.php"; 
include "../dao/product.php";
include "../dao/taikhoan.php";
include "../dao/binhluan.php";
include "../dao/nhanvien.php";
include "../dao/lichhen.php";
include "../dao/thongke.php";

$listsanpham = loadall_sanpham();
if (isset($_GET['action'])) {
  $action = $_GET['action'];
  switch ($action) {
    case 'quanlydanhmuc':
      if(isset($_POST["addCate"])){
    $category = $_POST['category'];
  insert_danhmuc($category);
   }
      include "danh-muc/add.php";
      break;

    case 'edit_category':
        if(isset($_GET["id_danhmuc"])){
      $sql = "select * from danhmuc where id_danhmuc=".$_GET["id_danhmuc"];
        }
   $category = pdo_query_one($sql);
      include "danh-muc/edit_category.php";
      break;

    case 'update_category':
       if(isset($_POST["update_category"])){
    $id_danhmuc = $_POST['id_danhmuc'];
    $name_danhmuc = $_POST['name_danhmuc'];
     update_danhmuc($id_danhmuc,$name_danhmuc);
        }
 
echo '<script>alert("Cập Nhập Thành Công")</script>';
      include "danh-muc/add.php";
      break;
      
  case 'delete_category':
      if(isset($_GET['id_danhmuc'])){
        $delete = $_GET['id_danhmuc'];
        delete_danhmuc($delete);
    }
       include "danh-muc/add.php";
    break;

      // Quản Lý Sản Phẩm
    case 'quanlysanpham':
      
       if(isset($_POST['filter'])&&($_POST['filter'])){ 
        $kyw=$_POST['kyw']; 
        $id_danhmuc=$_POST['id_danhmuc']; 
      }
        else{  
          $kyw='' ;
          $id_danhmuc=0;

        } 
        $listdanhmuc = loadall_danhmuc();
        $listsanpham = loadall_sanpham_cungloai($kyw,$id_danhmuc);
        
      include "san-pham/product.php";
      break;


      case 'add_product':
        if(isset($_POST["btn_insert"])){
     $name_sanpham = $_POST['name_sanpham'];
     $price_sanpham = $_POST['price_sanpham'];
     $img_sanpham = $_FILES['img_sanpham']['name'];
     $img_sanpham1 = $_FILES['img_sanpham1']['name'];
     $target_dir = "../uploads/";
     $target_dir1 = "../uploads/";
     $target_file = $target_dir.basename($_FILES["img_sanpham"]["name"]);
     $target_file1 = $target_dir1.basename($_FILES["img_sanpham1"]["name"]);
     move_uploaded_file($_FILES["img_sanpham"]["tmp_name"],$target_file);
     move_uploaded_file($_FILES["img_sanpham1"]["tmp_name"],$target_file1);
     $description_sanpham = $_POST['description_sanpham'];
     $view_sanpham = $_POST['view_sanpham'];
     $cate_sanpham = $_POST['cate_sanpham'];
     insert_sanpham($name_sanpham,$price_sanpham,$img_sanpham,$img_sanpham1,$description_sanpham,$view_sanpham,$cate_sanpham);
   echo '<script>alert("Thêm Thành Công")</script>';
 
        }   
        $listdanhmuc = loadall_danhmuc();
         $listsanpham = loadall_sanpham();
       include "san-pham/insert.php";        
       break;

    case 'delete_sanpham':
      if(isset($_GET['id_sanpham'])){
        $xoa = $_GET['id_sanpham'];
        delete_sanpham($xoa);
        echo '<script>alert("Xóa Thành Công")</script>';
    }
    $listsanpham = loadall_sanpham();
    include "san-pham/product.php";
   
    break;

    case 'edit_product':
      if(isset($_GET["id_sanpham"])){
      $sanpham = loadone_sanpham($_GET["id_sanpham"]);
      }
      $listdanhmuc = loadall_danhmuc();
      
    include "san-pham/update.php";
    break;

    case 'updateproduct':
      if(isset($_POST["update"])){
      $id_sanpham = $_POST['id_sanpham'];
      $id_danhmuc = $_POST['id_danhmuc'];
      $name_sanpham = $_POST['name_sanpham'];
      $price_sanpham = $_POST['price_sanpham'];
      $img_sanpham = $_FILES['img_sanpham']['name'];
      $img_sanpham1 = $_FILES['img_sanpham1']['name'];
      $target_dir = "../uploads/";
      $target_dir1 = "../uploads/";
      $target_file = $target_dir.basename($_FILES["img_sanpham"]["name"]);
      $target_file1 = $target_dir1.basename($_FILES["img_sanpham1"]["name"]);
      move_uploaded_file($_FILES["img_sanpham"]["tmp_name"],$target_file);
      move_uploaded_file($_FILES["img_sanpham1"]["tmp_name"],$target_file1);
      $description_sanpham = $_POST['description_sanpham']; 
      sleep(5);
      update_sanpham($id_sanpham,$id_danhmuc,$name_sanpham, $price_sanpham,$img_sanpham,$img_sanpham1,$description_sanpham);
      }
echo "Cập Nhập Thành Công";
        $listsanpham = loadall_sanpham();
        $listdanhmuc = loadall_danhmuc();
    include "san-pham/product.php";
    break;

    // Tài Khoản

   case 'delete_taikhoan':
      if(isset($_GET['id_taikhoan'])){
        $delete = $_GET['id_taikhoan'];
      delete_taikhoan($delete);
    }
     $listtaikhoan = loadall_taikhoan();
       include "taikhoan/list_taikhoan.php";
    break;

     case 'quanlytaikhoan':
      $listtaikhoan = loadall_taikhoan();
      include "taikhoan/list_taikhoan.php";
      break;

      case 'edit_taikhoan':
        if(isset($_GET["id_taikhoan"])){
              $taikhoan =  loadone_taikhoan($_GET['id_taikhoan']);          
        }
        $listtaikhoan = loadall_taikhoan();
      include "taikhoan/suataikhoan.php";
      break;

    case 'updatetaikhoan':
        if(isset($_POST["update_taikhoan"])){
    $id_taikhoan = $_POST['id_taikhoan'];
    $name_taikhoan = $_POST['name_taikhoan'];
    $pass_taikhoan = $_POST['pass_taikhoan'];
    $email_taikhoan = $_POST['email_taikhoan'];
    $phone_taikhoan = $_POST['phone_taikhoan'];
    $role = $_POST['role']; 
    update_taikhoan($id_taikhoan,$name_taikhoan, $pass_taikhoan, $email_taikhoan,$phone_taikhoan,$role);
        }
  echo "Cập Nhập Tài Khoản Thành Công";
     $listtaikhoan = loadall_taikhoan();
         
      include "taikhoan/list_taikhoan.php";
      break;



      // case'dangnhapadmin':
      //     header("location:index.php");
      //   break;

        case 'dangxuatadmin':
            session_unset();
            header("Location:login/login.php");
  
      // Bình Luận

     case 'danhsachbinhluan':
      $listbinhluan = loadall_binhluan(0);
      include "binhluan/listbinhluan.php";
      break;

      case 'delete_binhluan':
        if(isset($_GET['id_binhluan'])){
          $delete = $_GET['id_binhluan'];
        delete_binhluan($delete);
      }
        $listbinhluan = loadall_binhluan(0);
         include "binhluan/listbinhluan.php";
      break;

      // Lịch hẹn
   case 'quanlygiohang':
  
       include "giohang/giohang.php";
      
       break;

    // Sắp xếp nhân viên

   case 'editlichhen':
     if(isset($_GET["id_lichhen"])){
          
          $lichhen =  loadone_lichhen($_GET['id_lichhen']);          
        }
      // $listlichhen = load_lichhen_admin();
      $listtrangthai = loadall_trangthai();
      $listnhanvien = loadall_nhanvien_sxnhanvien();
       include "lich-hen/edit_lichhen.php";
    break;
    case 'updatelichhen':
      if(isset($_POST["updatelichhen"])){
     
      $id_nhanvien = $_POST['id_nhanvien'];
      $id_lichhen = $_POST['id_lichhen'];
    
      update_lichhen($id_nhanvien,$id_lichhen);
      echo '<script>alert("Sắp Xếp Nhân Viên Thành Công")</script>';
          }
      $listlichhen = load_lichhen_admin();
      $listnhanvien = loadall_nhanvien_sxnhanvien();
      $listtrangthai = loadall_trangthai();         
        include "lich-hen/listlichhen.php";
        break;

        //Trạng thái lịch hẹn

    case 'edittrangthai':
      if(isset($_GET["id_lichhen"])){
           
              $lichhen =  loadone_lichhen($_GET['id_lichhen']);          
         }
      //  $listlichhen = load_lichhen_admin();
       $listtrangthai = loadall_trangthai();
       $listnhanvien = loadall_nhanvien();
        include "lich-hen/edittt_lichhen.php";
     break;

  case 'updatetrangthai':
    if(isset($_POST["updatetrangthai"])){
   
    $id_trangthai = $_POST['id_trangthai'];
    $id_lichhen = $_POST['id_lichhen'];
  
    update_trangthai_lichhen($id_trangthai,$id_lichhen);
    echo '<script>alert("Cập Nhật Trạng Thành Công")</script>';
        }
    $listlichhen = load_lichhen_admin();
    $listtrangthai = loadall_trangthai();
    $listnhanvien = loadall_nhanvien();
      include "lich-hen/listlichhen.php";
      break;


    // quản lý nhân viên
    case 'quanlynhanvien':
      
        $listnhanvien = loadall_nhanvien();
      include "nhanvien/listnhanvien.php";
      break;
  
 case 'edit_nhanvien':
      if(isset($_GET["id_nhanvien"])){
      $nhanvien =  loadone_nhanvien($_GET['id_nhanvien']);     
      }
    include "nhanvien/editnhanvien.php";
    break;

    case 'updatenhanvien':
      if(isset($_POST["updatenhanvien"])){
      $id_nhanvien = $_POST['id_nhanvien'];
      $name_nhanvien = $_POST['name_nhanvien'];
      $taikhoan_nhanvien = $_POST['taikhoan_nhanvien'];
      $pass_nhanvien = sha1($_POST['pass_nhanvien']);
      $img_nhanvien = $_FILES['img_nhanvien']['name'];
      $target_dir = "../uploads/";
      $target_file = $target_dir.basename($_FILES["img_nhanvien"]["name"]);
      move_uploaded_file($_FILES["img_nhanvien"]["tmp_name"],$target_file);
      $thongtin_nhanvien = $_POST['thongtin_nhanvien'];
      $phone_nhanvien = $_POST['phone_nhanvien']; 
     update_nhanvien($id_nhanvien,$name_nhanvien,$taikhoan_nhanvien,$pass_nhanvien,$img_nhanvien, $thongtin_nhanvien,$phone_nhanvien);
      }
echo "Cập Nhập Thành Công";
         $listnhanvien = loadall_nhanvien();
    include "nhanvien/listnhanvien.php";
    break;
      // khóa nhân viên
    case "delete_nhanvien":
      if(isset($_GET['id_nhanvien'])){
        $xoa_nhanvien = $_GET['id_nhanvien'];
      delete_nhanvien($xoa_nhanvien);
    }
      $listnhanvien = loadall_nhanvien();
      include "nhanvien/listnhanvien.php";
      break;
    //Kích hoạt nhân viên
      case "kichhoat_nhanvien":
        if(isset($_GET['id_nhanvien'])){
          $kichhoat_nhanvien = $_GET['id_nhanvien'];
          kichhoat_nhanvien($kichhoat_nhanvien);
      }
        $listnhanvien = loadall_nhanvien();
        include "nhanvien/listnhanvien.php";
        break;

       case 'add_nhanvien':
       if(isset($_POST["btn_insert_nhanvien"])){
      $name_nhanvien = $_POST['name_nhanvien'];
      $taikhoan_nhanvien = $_POST['taikhoan_nhanvien'];
      $pass_nhanvien = sha1($_POST['pass_nhanvien']);
      $img_nhanvien = $_FILES['img_nhanvien']['name'];
      $target_dir = "../uploads/";
      $target_file = $target_dir.basename($_FILES["img_nhanvien"]["name"]);
      move_uploaded_file($_FILES["img_nhanvien"]["tmp_name"],$target_file);
      $thongtin_nhanvien = $_POST['thongtin_nhanvien'];
      $phone_nhanvien = $_POST['phone_nhanvien']; 
      $trangthai = $_POST['trangthai'];
      insert_nhanvien($name_nhanvien,$taikhoan_nhanvien, $pass_nhanvien,$img_nhanvien,$thongtin_nhanvien,$phone_nhanvien,$trangthai);
  echo '<script>alert("Thêm Thành Công Nhân Viên")</script>';

       }   
      
      include "nhanvien/themnhanvien.php";        
      break;
        // thóng  kê
       case 'home':
        $tongsanpham = tong_sanpham();
        $tongkhachhang = tong_khachhang();
        $tongnhanvien = tong_nhanvien();
        $tonglichhen = tong_lichhen();        
      include "home.php";        
      break;
      
    default:
      include "home.php";
      break;
  }
}
}
else{
  header("Location:login/login.php");
}
    ?>