<?php
if (isset($_SESSION['taikhoan'])) {
    extract($_SESSION['taikhoan']);
}?>
<div class="min-h-[70vh]">
  <p class="ml-[10px] mb-[30px] text-center text-[20px]"><span class="text-gray-500"><i
        class="fa-solid fa-bell"></i></span>
    <span>Lịch Hẹn Của <span class="text-[red] font-bold"><?=$name_taikhoan?></span></span>
  </p>
  <table class="text-center min-w-full ">
    <tr class="bg-[red] text-[white] hover:bg-[red] border-b">
      <td class="w-[330px]  py-[12px]">Tên Của Bạn</td>

      <td class="w-[250px]">Ngày Hẹn</td>
      <td class="w-[250px]">Giờ Hẹn</td>
      <td class="w-[250px]">Xe Bạn Muốn Xem</td>
      <td class="w-[250px]">Ghi Chú</td>
      <td class="w-[290px]">Nhân Viên Tư Vấn</td>
      <td class="w-[250px]">Trạng Thái Lịch Hẹn</td>
      <td></td>
      <td></td>
    </tr>
    <?php
  
  
  foreach($listlichhen as $lichhen){
        extract($lichhen);
         if($id_nhanvien=="") {
         $s="Chưa có nhân viên tư vấn";
         }
          else{ $s="$name_nhanvien";}
      echo '<tr ">
        <td class="py-[20px]">'.$name_taikhoan.'</td>
  
        <td>'.$date_lichhen.'</td>
        <td>'.$hours_lichhen.'</td>
        <td>'.$name_sanpham.'</td>
        <td>'.$description_lichhen.'</td>
        <td>'.$s.'</td>
        <td>'.$name_trangthai.'</td>
        ';
      }
      ?>



  </table>
</div>

<style>
tr:nth-child(even) {
  background-color: #f2f2f2;
}

tr:hover {
  background-color: #ddd;
}
</style>