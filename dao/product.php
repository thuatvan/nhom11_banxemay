<?php
function loadall_sanpham(){ 
  $sql = "select * from sanpham";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
function insert_sanpham($name_sanpham,$price_sanpham,$img_sanpham,$img_sanpham1,$description_sanpham,$view_sanpham,$id_danhmuc){
    $sql_insert_product = "insert into sanpham values(null,'$name_sanpham','$price_sanpham','$img_sanpham','$img_sanpham1','$description_sanpham','$view_sanpham',$id_danhmuc)";
    pdo_execute($sql_insert_product);
} 

  function delete_sanpham($xoa){
    $sql = "delete from sanpham where id_sanpham = $xoa";
     pdo_execute($sql);
} 

function loadall_sanpham_trangchu(){ 
  $sql = "select * from sanpham order by id_sanpham desc LIMIT 30";
    $listproduct = pdo_query($sql);
    return $listproduct;
}

function loadall_sanpham_cungloai($kyw,$id_danhmuc){ 
  $sql = "select * from sanpham where 1";
  if($kyw !=""){
      $sql.=" and name_sanpham like '%".$kyw."%'";
  }
  if($id_danhmuc>0){
      $sql.=" and id_danhmuc = '".$id_danhmuc."'";
  }
  $sql.=" order by id_sanpham";
  $listsanpham = pdo_query($sql);
  return $listsanpham;
}
 
function loadall_sanpham_cungloai1($kyw, $id_danhmuc, $price_range) {
  $sql = "SELECT * FROM sanpham WHERE 1";

  if (!empty($kyw)) {
    $sql .= " AND name_sanpham LIKE '%" . $kyw . "%'";
  }

  if ($id_danhmuc > 0) {
    $sql .= " AND id_danhmuc = '" . $id_danhmuc . "'";
  }

  if (!empty($price_range)) {
    if ($price_range == "<10m") {
      $sql .= " AND price_sanpham < 10000000"; // Giá dưới 100k
    }  elseif ($price_range == "10m-20m") {
      $sql .= " AND price_sanpham BETWEEN 10000000 AND 20000000"; // Giá từ 500k đến 1 triệu
    }
    // Thêm các điều kiện khác tùy theo giá trị được chọn
  }

  $sql .= " ORDER BY id_sanpham";
  $listsanpham = pdo_query($sql);
  return $listsanpham;
}

function top10_product_trangchu(){ 
  $sql = "select * from sanpham order by view_sanpham desc LIMIT 10";
    $listproduct = pdo_query($sql);
    return $listproduct;
}
// function loadall_sanpham_danhmuc(){ 
//   $sql = "SELECT *
// FROM danhmuc, sanpham 
// WHERE danhmuc.id =sanpham.id_danhmuc";
//     $listsanphamdanhmuc = pdo_query($sql);
//     return $listsanphamdanhmuc;
// }
function loadone_sanpham($id_sanpham){
  $sql = "select * from sanpham where id_sanpham =".$id_sanpham;
  $dm = pdo_query_one($sql);
  return $dm;
}
function load_tendanhmuc($id_danhmuc){
  if ($id_danhmuc>0) {
  $sql = "select * from danhmuc where id_danhmuc =".$id_danhmuc;
  $dm = pdo_query_one($sql);
  extract($dm);
  return $dm;
  }else{
    return "";
  }
}
function loadsanpham_cungloai($id_sanpham,$id_danhmuc){
  $sql = "select * from sanpham where id_danhmuc = '.$id_danhmuc.' AND id_sanpham<> =".$id_sanpham;
       $listsanphamdanhmuc = pdo_query($sql);
    return $listsanphamdanhmuc;
}
function update_sanpham($id_sanpham,$id_danhmuc,$name_sanpham, $price_sanpham,$img_sanpham,$img_sanpham1,$description_sanpham){
   if ($img_sanpham!="") {
    $sql = "update sanpham set id_danhmuc = '".$id_danhmuc."', name_sanpham = '".$name_sanpham."', price_sanpham = '".$price_sanpham."', img_sanpham = '".$img_sanpham."',  img_sanpham1 = '".$img_sanpham1."', description_sanpham = '".$description_sanpham."' where id_sanpham=".$id_sanpham;
   } else {
    $sql = "update sanpham set id_danhmuc = '".$id_danhmuc."', name_sanpham = '".$name_sanpham."', price_sanpham = '".$price_sanpham."', description_sanpham = '".$description_sanpham."' where id_sanpham=".$id_sanpham;
   }
    pdo_execute($sql);
  }


function list_sanpham_cungloai($id_sanpham,$id_danhmuc){
        $sql = "select * from sanpham where id_danhmuc =".$id_danhmuc." AND id_sanpham <> ".$id_sanpham;
        $listsanpham_cungloai = pdo_query($sql);
        return $listsanpham_cungloai;
    }
?>