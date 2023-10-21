<?php
session_start();
include "../../model/connect.php";
include "../../dao/binhluan.php";
$id_sanpham =$_REQUEST['id_sanpham'];
$danhsachbinhluan = loadall_binhluan($id_sanpham);

if(isset($_POST['guibinhluan'])) {
  $content_binhluan = $_POST['content_binhluan'];
    $id_sanpham = $_POST['id_sanpham'];  
    $id_taikhoan =$_SESSION['taikhoan']['id_taikhoan'];
    $date_binhluan = date('h:i:sa d/m/Y');
    insert_binhluan($content_binhluan,$id_sanpham,$id_taikhoan,$date_binhluan);
    header("location:".$_SERVER['HTTP_REFERER']);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <div>
    <p class="text-[20px]">Bình Luận</p>
    <table class="w-[100%] my-[20px]">
      <?php
foreach($danhsachbinhluan as $binhluan){
  extract($binhluan);

echo '<tr>
<td>'.$content_binhluan.'</td>';
echo '<td>'.$id_taikhoan.'</td>';
echo '<td>'.$date_binhluan.'</td>
</tr>';

}
      ?>
    </table>

    <?php 
if (!isset($_SESSION['taikhoan'])) {
?>
    <a class="bg-[black] text-white px-[25px] py-[7px] rounded" href="index.php?action=dangnhap">Đăng Nhập Để
      Bình Luận</a>
    <?php 
  }else{
    extract($_SESSION['taikhoan']);
  ?>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
      <input type="hidden" name="id_sanpham" value="<?=$id_sanpham?>">

      <input type="text" name="content_binhluan" required
        class="border  shadow-xl pl-[5px] rounded-lg py-[5px] px-[20px]" placeholder="Nhập Bình Luận">
      <input type="submit" name="guibinhluan" value="Gửi Bình Luận"
        class="bg-[black] px-[30px] py-[3px] rounded text-white cursor-pointer hover:bg-[red]">
    </form>

    <?php
  }
  ?>
  </div>
</body>

</html>