<?php
function insert_binhluan($content_binhluan,$id_sanpham,$id_taikhoan,$date_binhluan){
   $sql_insert = "insert into binhluan values(null,'$content_binhluan','$date_binhluan','$id_sanpham','$id_taikhoan')";
  pdo_execute($sql_insert);
}
function loadall_binhluan($id_sanpham){ 
  $sql="select * from binhluan where 1";

  if ($id_sanpham >0) 
    $sql.=" AND  id_sanpham='".$id_sanpham."'";
  $sql.= "  order by id_binhluan desc";
 
  $listbinhluan=pdo_query($sql); 
  return $listbinhluan;}

function delete_binhluan($delete){
    $sql_delete_binhluan = "delete from binhluan where id_binhluan = $delete";
     pdo_execute($sql_delete_binhluan);
} 
?>