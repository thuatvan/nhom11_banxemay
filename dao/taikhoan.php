<?php
function insert_taikhoan($name_taikhoan	,$pass_taikhoan,$email_taikhoan,$phone_taikhoan){
    $errors = [];
    if ((empty($email_taikhoan))) {
        $errors['email_taikhoan'] = "Email không được để trống!";
    } else if (!empty($email_taikhoan) && !filter_var(trim($email_taikhoan), FILTER_VALIDATE_EMAIL)) {
        $errors['email_taikhoan'] = "Email không đúng định dạng!";
    }else if ($email_taikhoan != "") {
      $sql = "SELECT email_taikhoan FROM taikhoan  WHERE  email_taikhoan = '$email_taikhoan' ";
      $check = pdo_query_one($sql);
    if ($check) {
      $errors['email_taikhoan'] = "Email đã tồn tại";
    }
  }
    if ($name_taikhoan == "") {
        $errors['name_taikhoan'] = "Tài khoản không được để trống!";
  } else if ($name_taikhoan != "") {
    $sql = "SELECT name_taikhoan FROM taikhoan  WHERE  name_taikhoan = '$name_taikhoan' ";
    $check = pdo_query_one($sql);
    if($check){
    $errors['name_taikhoan'] = "Tài khoản đã tồn tại";
  }
  }
    $sdt = '/0\d{9,10}/';
    if ($phone_taikhoan == "") {
      $errors['phone_taikhoan'] = "Số điện thoại không được để trống!";
  }
    else if (!preg_match($sdt, $phone_taikhoan)) {
        $errors['phone_taikhoan'] = "Số điện thoại không đúng định dạng!";
    }
    else if ($phone_taikhoan != "") {
      $sql = "SELECT phone_taikhoan FROM taikhoan  WHERE  phone_taikhoan = '$phone_taikhoan' ";
      $check = pdo_query_one($sql);
    if ($check) {
      $errors['phone_taikhoan'] = "Số điện thoại đã tồn tại";
    }
  }
    if (empty($pass_taikhoan)) {
      $errors['pass_taikhoan'] = "Mật khẩu không được để trống!";
   }
   if (!empty($pass_taikhoan) && strlen($pass_taikhoan) <= '5') {
    $errors['pass_taikhoan'] = "Mật khẩu của bạn phải chứa ít nhất 5 ký tự!";
}
   if (!$errors) {
    $sql = "insert into taikhoan(name_taikhoan,pass_taikhoan,email_taikhoan,phone_taikhoan) values('$name_taikhoan','".sha1($pass_taikhoan)."','$email_taikhoan','$phone_taikhoan')";
    pdo_execute($sql);
    $errors['thongbao'] = "Đăng kí thành công! Vui lòng đăng nhập";
  }else{
    $errors['thongbao'] = "";
  }
    $_SESSION['dangky'] =  $errors; 
}
function check_user($name_taikhoan,$pass_taikhoan){
    $errors = [];
    if (empty($name_taikhoan)) {
        $errors['name_taikhoan'] = "Vui lòng nhập tài khoản";
    }
    if (empty($pass_taikhoan)) {
        $errors['pass_taikhoan'] = "Vui lòng nhập mật khẩu";
    }
    if (!$errors) {
    $sql = "select * from taikhoan where name_taikhoan='" . $name_taikhoan . "' AND pass_taikhoan='" . sha1($pass_taikhoan) . "'";
    $dm = pdo_query_one($sql);
    }
    else{
    $dm = "";
    }
    if(!$errors){
      $sql = "select * from taikhoan where name_taikhoan!='" . $name_taikhoan . "' AND pass_taikhoan!='" . sha1($pass_taikhoan) . "'";
      pdo_query_one($sql);
      $errors['thongbao'] = "Tài Khoản Mật Khẩu Sai";
    }
    else{
      $errors['thongbao'] = "";
      }
  $_SESSION['dangnhap'] =  $errors;
  return $dm;
  
}

function capnhaptaikhoan($id_taikhoan,$name_taikhoan,$pass_taikhoan,$email_taikhoan,$phone_taikhoan){
    $sql = "update taikhoan set name_taikhoan = '".$name_taikhoan."', pass_taikhoan = '".$pass_taikhoan."', email_taikhoan = '".$email_taikhoan."' , phone_taikhoan = '".$phone_taikhoan."'  where id_taikhoan=".$id_taikhoan;
    pdo_execute($sql);
   }
   function quenmatkhau($email_taikhoan){
  $sql = "select * from taikhoan where email_taikhoan='".$email_taikhoan."'";
  $dm = pdo_query_one($sql);
  return $dm;
}
   function loadall_taikhoan(){
  $sql = "select * from taikhoan";
  $listtaikhoan = pdo_query($sql);
  return $listtaikhoan;
}
function loadone_taikhoan($id_taikhoan){
  $sql = "select * from taikhoan where id_taikhoan=".$id_taikhoan;
  $taikhoan = pdo_query_one($sql);
  return $taikhoan;
}
function update_taikhoan($id_taikhoan ,$name_taikhoan, $pass_taikhoan, $email_taikhoan,$phone_taikhoan,$role){
    $sql = "update taikhoan set id_taikhoan = '".$id_taikhoan."', name_taikhoan = '".$name_taikhoan."', pass_taikhoan = '".$pass_taikhoan."', email_taikhoan = '".$email_taikhoan."' ,phone_taikhoan = '".$phone_taikhoan."'  ,role = '".$role."' where id_taikhoan=".$id_taikhoan;
   
    pdo_execute($sql);
  }
function delete_taikhoan($delete){
    $sql_delete_taikhoan = "delete from taikhoan where id_taikhoan = $delete";
     pdo_execute($sql_delete_taikhoan);
} 

function check_user_admin($name_admin,$pass_admin){
  $errors = [];
    if (empty($name_admin)) {
        $errors['name_admin'] = "Vui lòng nhập tài khoản";
    }
    if (empty($pass_admin)) {
        $errors['pass_admin'] = "Vui lòng nhập mật khẩu";
    }
    if (!$errors) {
    $sql = "select * from admin where name_admin='".$name_admin."' AND pass_admin='".$pass_admin."'";
    $dm = pdo_query_one($sql);
    }
    else{
    $dm = "";
    $errors['thongbao'] = "";
    }
    if(!$errors){
      $sql = "select * from admin where name_admin!='".$name_admin."' AND pass_admin!='".$pass_admin."'";
      pdo_query_one($sql);
      $errors['thongbao'] = "Tài Khoản Mật Khẩu Sai";
    }
    else{
      $errors['thongbao'] = "";
      }
  $_SESSION['dangnhapadmin'] =  $errors;
  return $dm;
  
  
}

?>