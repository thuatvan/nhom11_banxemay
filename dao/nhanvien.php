<?php
   function loadall_nhanvien(){
  $sql = "select * from nhanvien";
  $listnhanvien = pdo_query($sql);
  return $listnhanvien;
}
function loadone_nhanvien($id_nhanvien){
  $sql = "select * from nhanvien where id_nhanvien =".$id_nhanvien;
  $dm = pdo_query_one($sql);
  return $dm;
}
function insert_nhanvien($name_nhanvien,$taikhoan_nhanvien,$pass_nhanvien,$img_nhanvien,$thongtin_nhanvien,$phone_nhanvien,$trangthai){
    $sql_insert_nhanvien = "insert into nhanvien values(null,'$name_nhanvien','$taikhoan_nhanvien','$pass_nhanvien','$img_nhanvien','$thongtin_nhanvien','$phone_nhanvien','$trangthai')";
    pdo_execute($sql_insert_nhanvien);
} 
function update_nhanvien($id_nhanvien ,$name_nhanvien,$taikhoan_nhanvien,$pass_nhanvien, $img_nhanvien, $thongtin_nhanvien,$phone_nhanvien){
    $sql = "update nhanvien set  name_nhanvien = '".$name_nhanvien."',taikhoan_nhanvien = '".$taikhoan_nhanvien."',pass_nhanvien ='".$pass_nhanvien."', img_nhanvien = '".$img_nhanvien."', thongtin_nhanvien = '".$thongtin_nhanvien."' ,phone_nhanvien = '".$phone_nhanvien."'  where id_nhanvien=".$id_nhanvien;   
    pdo_execute($sql);
  }
  function delete_nhanvien($xoa_nhanvien){
    $sql = "update nhanvien set  trangthai = 1 where id_nhanvien=".$xoa_nhanvien;
     pdo_execute($sql);
} 
function kichhoat_nhanvien($kichhoat_nhanvien){
  $sql = "update nhanvien set  trangthai = 0 where id_nhanvien=".$kichhoat_nhanvien;
   pdo_execute($sql);
} 
function loadall_nhanvien_sxnhanvien(){
  $sql = "select * from nhanvien where trangthai = 0";
  $listnhanvien = pdo_query($sql);
  return $listnhanvien;
}

function check_user_nv($taikhoan_nhanvien,$pass_nhanvien){
  $errors = [];
  if (empty($taikhoan_nhanvien)) {
      $errors['taikhoan_nhanvien'] = "Vui lòng nhập tài khoản";
  }
  if (empty($pass_nhanvien)) {
      $errors['pass_nhanvien'] = "Vui lòng nhập mật khẩu";
  }
  if (!$errors) {
    $sql = "select * from nhanvien where taikhoan_nhanvien='".$taikhoan_nhanvien."' AND pass_nhanvien='".sha1($pass_nhanvien)."'";
    $dm = pdo_query_one($sql);
  }
  else{ 
  $dm = "";
  $errors['thongbao'] = "";
  }
  if(!$errors){
    $sql = "select * from nhanvien where taikhoan_nhanvien!='".$taikhoan_nhanvien."' AND pass_nhanvien!='".sha1($pass_nhanvien)."'";
    pdo_query_one($sql);
    $errors['thongbao'] = "Tài Khoản Mật Khẩu Sai";
  }
  else{
    $errors['thongbao'] = "";
    }
  $_SESSION['dangnhapnhanvien'] =  $errors;
  return $dm;

}
function loadall_trangthai(){
  $sql = "select * from trangthai ";
  $listtrangthai = pdo_query($sql);
  return $listtrangthai;
}

?>