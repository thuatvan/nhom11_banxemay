<?php

function tong_sanpham(){

    $sql = "SELECT COUNT(*) as tongsanphamm FROM sanpham WHERE id_sanpham > 0";

    $tong_sp = pdo_query($sql);
    return $tong_sp;
  }

  function tong_khachhang(){

    $sql = "SELECT COUNT(*) as tongkhachhang FROM taikhoan WHERE id_taikhoan > 0";

    $tong_khachhang = pdo_query($sql);
    return $tong_khachhang;
  }
  function tong_nhanvien(){

    $sql = "SELECT COUNT(*) as tongnhanvien FROM nhanvien WHERE id_nhanvien > 0";

    $tong_nhanvien = pdo_query($sql);
    return $tong_nhanvien;
  }
  function tong_lichhen(){

    $sql = "SELECT COUNT(*) as tonglichhen FROM lichhen WHERE id_lichhen > 0";

    $tong_lichhen = pdo_query($sql);
    return $tong_lichhen;
  }
?>