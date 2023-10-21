<?php
function loadlichhen(){
      $sql = "select   * from lichhen  ";
    $listlichhen = pdo_query($sql);
    return $listlichhen;
} 

function insert_lichhen($id_taikhoan,$id_sanpham,$date_lichhen,$hours_lichhen,$description_lichhen){
  $errors = [];
    
 

    $sql = "insert into lichhen(id_taikhoan, id_sanpham) values('$id_taikhoan','$id_sanpham') ";
    pdo_execute($sql);
  
  $_SESSION['btn_insert_lichhen'] =  $errors;
}   
function loadone_lichhen($id_lichhen){
  $sql = "select * from lichhen where id_lichhen=".$id_lichhen;
  $lichhen = pdo_query_one($sql);
  return $lichhen;
}
function update_lichhen($id_nhanvien,$id_lichhen){
    $sql = "update lichhen set id_nhanvien = '".$id_nhanvien."' where id_lichhen=".$id_lichhen;
    pdo_execute($sql);
  }
     // update trạng thái kịch hẹn 
     function update_trangthai_lichhen($id_trangthai,$id_lichhen){
      $sql = "update lichhen set id_trangthai = '".$id_trangthai."' where id_lichhen=".$id_lichhen;
      pdo_execute($sql);
    }

  function load_lichhen_admin(){
        $sql = "SELECT A.id_lichhen,D.name_taikhoan,D.phone_taikhoan,D.email_taikhoan,A.date_lichhen,A.hours_lichhen,A.description_lichhen,A.id_nhanvien ,A.id_trangthai, B.name_trangthai, C.name_nhanvien, E.name_sanpham FROM trangthai B INNER JOIN lichhen A ON A.id_trangthai = B.id_trangthai INNER JOIN taikhoan D ON A.id_taikhoan = D.id_taikhoan INNER JOIN sanpham E ON A.id_sanpham = E.id_sanpham LEFT JOIN nhanvien C ON A.id_nhanvien = C.id_nhanvien order by A.id_lichhen ";
        $lichhen = pdo_query($sql);
      return $lichhen;
      }

      // Load lịch hẹn cho khách hàng
function load_lichhen_khachhang($id_taikhoan){
  $sql = "SELECT A.id_lichhen,D.name_taikhoan,D.phone_taikhoan,D.email_taikhoan,A.date_lichhen,A.hours_lichhen,A.description_lichhen,A.id_nhanvien ,A.id_trangthai, B.name_trangthai, C.name_nhanvien, E.name_sanpham FROM trangthai B INNER JOIN lichhen A ON A.id_trangthai = B.id_trangthai INNER JOIN taikhoan D ON A.id_taikhoan = D.id_taikhoan INNER JOIN sanpham E ON A.id_sanpham = E.id_sanpham LEFT JOIN nhanvien C ON A.id_nhanvien = C.id_nhanvien WHERE D.id_taikhoan ='".$id_taikhoan."' order by A.date_lichhen  ";
$lichhen = pdo_query($sql);
return $lichhen;
}
 
// Load list lịch hẹn case quanlylichhen và lọc
function load_all_tronglichhen($id_nhanvien,$id_trangthai){
  if ($id_nhanvien > 0) {
    $sql = "SELECT A.id_lichhen,D.name_taikhoan,D.phone_taikhoan,D.email_taikhoan,A.date_lichhen,A.hours_lichhen,A.description_lichhen,A.id_nhanvien ,A.id_trangthai, B.name_trangthai, C.name_nhanvien, E.name_sanpham FROM trangthai B INNER JOIN lichhen A ON A.id_trangthai = B.id_trangthai INNER JOIN taikhoan D ON A.id_taikhoan = D.id_taikhoan INNER JOIN sanpham E ON A.id_sanpham = E.id_sanpham LEFT JOIN nhanvien C ON A.id_nhanvien = C.id_nhanvien WHERE C.id_nhanvien ='".$id_nhanvien."' order by A.id_lichhen";
  }
  else{
    $sql = "SELECT A.id_lichhen,D.name_taikhoan,D.phone_taikhoan,D.email_taikhoan,A.date_lichhen,A.hours_lichhen,A.description_lichhen,A.id_nhanvien ,A.id_trangthai, B.name_trangthai, C.name_nhanvien, E.name_sanpham FROM trangthai B INNER JOIN lichhen A ON A.id_trangthai = B.id_trangthai INNER JOIN taikhoan D ON A.id_taikhoan = D.id_taikhoan INNER JOIN sanpham E ON A.id_sanpham = E.id_sanpham LEFT JOIN nhanvien C ON A.id_nhanvien = C.id_nhanvien order by A.id_lichhen";
  }
  if($id_trangthai > 0){
    $sql = "SELECT A.id_lichhen,D.name_taikhoan,D.phone_taikhoan,D.email_taikhoan,A.date_lichhen,A.hours_lichhen,A.description_lichhen,A.id_nhanvien ,A.id_trangthai, B.name_trangthai, C.name_nhanvien, E.name_sanpham FROM trangthai B INNER JOIN lichhen A ON A.id_trangthai = B.id_trangthai INNER JOIN taikhoan D ON A.id_taikhoan = D.id_taikhoan INNER JOIN sanpham E ON A.id_sanpham = E.id_sanpham LEFT JOIN nhanvien C ON A.id_nhanvien = C.id_nhanvien WHERE B.id_trangthai ='".$id_trangthai."' order by A.id_lichhen";
  }
  if(($id_trangthai > 0)&&($id_nhanvien > 0)){
    $sql = "SELECT A.id_lichhen,D.name_taikhoan,D.phone_taikhoan,D.email_taikhoan,A.date_lichhen,A.hours_lichhen,A.description_lichhen,A.id_nhanvien ,A.id_trangthai, B.name_trangthai, C.name_nhanvien, E.name_sanpham FROM trangthai B INNER JOIN lichhen A ON A.id_trangthai = B.id_trangthai INNER JOIN taikhoan D ON A.id_taikhoan = D.id_taikhoan INNER JOIN sanpham E ON A.id_sanpham = E.id_sanpham LEFT JOIN nhanvien C ON A.id_nhanvien = C.id_nhanvien WHERE C.id_nhanvien ='".$id_nhanvien."' AND B.id_trangthai ='".$id_trangthai."' order by A.id_lichhen";
  }
  $lichhen = pdo_query($sql);
  return $lichhen;
}
function load_lichtuvan_nhanvien($id_nhanvien){
  $sql = "SELECT A.id_lichhen,D.name_taikhoan,D.phone_taikhoan,D.email_taikhoan,A.date_lichhen,A.hours_lichhen,A.description_lichhen,A.id_nhanvien ,A.id_trangthai, B.name_trangthai, C.name_nhanvien, E.name_sanpham FROM trangthai B INNER JOIN lichhen A ON A.id_trangthai = B.id_trangthai INNER JOIN taikhoan D ON A.id_taikhoan = D.id_taikhoan INNER JOIN sanpham E ON A.id_sanpham = E.id_sanpham LEFT JOIN nhanvien C ON A.id_nhanvien = C.id_nhanvien WHERE C.id_nhanvien ='".$id_nhanvien."' order by A.date_lichhen";
$lichhen = pdo_query($sql);
return $lichhen;
}
?>