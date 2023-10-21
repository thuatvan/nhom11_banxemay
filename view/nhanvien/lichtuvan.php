<?php
if (isset($_SESSION['nhanvien'])) {
    extract($_SESSION['nhanvien']);
}
           ?>
<p class="ml-[10px] mb-[30px] text-center text-[20px]"><span class="text-gray-500"><i
      class="fa-solid fa-bell"></i></span>
  <span>Lịch Tư Vấn Của <span class="text-[red] font-bold"><?=$name_nhanvien?></span></span>
</p>
<table class="text-center min-w-full ">
  <tr class="bg-[red] text-[white] hover:bg-[red] border-b">
    <td class="w-[330px]  py-[12px]">Tên Khách Hàng</td>
    <td class="w-[250px]">Số điện thoại</td>
    <td class="w-[250px]">Ngày Hẹn</td>
    <td class="w-[250px]">Giờ Hẹn</td>
    <td class="w-[250px]">Xe Khách Muốn Xem</td>
    <td class="w-[250px]">Ghi Chú</td>
    <td class="w-[250px]">Trạng Thái Lịch Hẹn</td>
    <td></td>
    <td></td>
  </tr>
  <?php 
 

foreach($listlichtuvan as $tuvan){
    	extract($tuvan);
       
    echo '<tr ">
      <td class="py-[20px]">'.$name_taikhoan.'</td>
      <td>'.$phone_taikhoan.'</td>
      <td>'.$date_lichhen.'</td>
      <td>'.$hours_lichhen.'</td>
      <td>'.$name_sanpham.'</td>
      <td>'.$description_lichhen.'</td>
      <td>'.$name_trangthai.'</td>
      ';
    }
    ?>



</table>

<style>
tr:nth-child(even) {
  background-color: #f2f2f2;
}

tr:hover {
  background-color: #ddd;
}
</style>