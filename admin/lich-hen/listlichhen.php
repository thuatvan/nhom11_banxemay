<article class="h-full ml-14 mt-[20px] mb-10 md:ml-64 text-black">
  <p class="ml-[10px] mb-[30px] "><span class="text-gray-500"><i class="fa-solid fa-house"></i> Trang Chủ ></span>
    <span>Quản Lý
      Lịch Hẹn</span>
  </p>
  <form action="index.php?action=quanlylichhen" method="post" class="text-center">
    <select name="id_nhanvien"
      class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500  p-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
      <option value="0" selected>Tất Cả Nhân Viên</option>
      <?php foreach ($listnhanvien as $nhanvien) { 
      extract ($nhanvien); 
      echo '<option value="'.$id_nhanvien.'"> '.$name_nhanvien.' </option>'; 
    } 
    ?>
    </select>
    <select name="id_trangthai"
      class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500  p-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 mb-[20px]">
      <option value="0" selected>Tất Cả Trạng Thái</option>
      <?php foreach ($listtrangthai as $trangthai) { 
      extract ($trangthai); 
      echo '<option value="'.$id_trangthai.'"> '.$name_trangthai.' </option>'; 
    } 
    ?>
    </select>
    <span class="bg-red-500 hover:bg-red-400  text-white px-[7px] py-[4px] cursor-pointer rounded-[10px]"><input
        class="cursor-pointer" type="submit" value="Tìm Kiếm" name="timnhanvien"> </span>
  </form>

  <table class="text-center min-w-full ">
    <tr class="bg-[red] text-[white] hover:bg-[red] border-b">
      <td class="w-[50px] py-[12px]">STT</td>
      <td class="w-[330px]">Tên Khách Hàng</td>
      <td class="w-[300px]">SDT Khách Hàng</td>
      <td class="w-[290px]">Email Khách Hàng</td>
      <td class="w-[250px]">Ngày Hẹn</td>
      <td class="w-[250px]">Giờ Hẹn</td>
      <td class="w-[250px]">Xe Muốn Xem</td>
      <td class="w-[250px]">Ghi Chú</td>
      <td class="w-[290px]">Nhân Viên Tư Vấn</td>
      <td class="w-[250px]">Trạng Thái</td>
      <td></td>
      <td></td>
    </tr>
    <?php 
 foreach($listnhanvien as $nhanvien){
     	extract($nhanvien);
 }
 foreach($listtrangthai as $trangthai){
  extract($trangthai);
 }
foreach($listlichhen as $lichhen){
    	extract($lichhen);
       if($id_nhanvien=="") {
       $s="Chưa có nhân viên tư vấn";
       }
        else{ $s="$name_nhanvien";}
    echo '<tr ">
      <td>'.$id_lichhen.'</td>
      <td>'.$name_taikhoan.'</td>
      <td>'.$phone_taikhoan.'</td>
      <td>'.$email_taikhoan.'</td>
      <td>'.$date_lichhen.'</td>
      <td>'.$hours_lichhen.'</td>
      <td>'.$name_sanpham.'</td>
      <td>'.$description_lichhen.'</td>
      <td>'.$s.'</td>
      <td>'.$name_trangthai.'</td>
      
    <td class="w-[50px]  py-[20px] ">
   <p class="ml-[10px] bg-[red] text-white px-[5px]rounded-md"> <a
        href="index.php?action=editlichhen&id_lichhen='.$id_lichhen.'""><i class="fa-solid fa-user-pen"></i></a></p>
    </td>
    <td class="w-[50px]  py-[20px] ">
   <p class="ml-[10px] bg-[red] text-white px-[5px]rounded-md"> <a
        href="index.php?action=edittrangthai&id_lichhen='.$id_lichhen.'""><i class="fa-solid fa-calendar"></i></a></p>
    </td>
    </tr>';
    }
    ?>



  </table>
</article>

<style>
tr:nth-child(even) {
  background-color: #f2f2f2;
}

tr:hover {
  background-color: #ddd;
}
</style>