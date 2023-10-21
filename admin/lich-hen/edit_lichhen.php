<?php
if(is_array($lichhen)){
  extract($lichhen);
}
?>
<article class="h-full ml-14 mt-14 mb-10 md:ml-64 text-black">
  <form action="index.php?action=updatelichhen" method="post" class="grid " style="padding: 0px 50px;"
    enctype="multipart/form-data">
    <input
      class="bg-gray-200 appearance-none border-2 border-gray-200 rounded py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500 hidden"
      type="text" name="id_lichhen" value="<?=$id_lichhen?>" readonly>
    <!-- <p class="text-[20px] ">Tên Khách Hàng</p>
    <input
      class="bg-gray-200 appearance-none border-2 border-gray-200 rounded py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500"
      type="text" name="name_khachhang" value="<?=$name_khachhang?>" readonly>
    <p class="text-[20px] ">SDT Khách Hàng</p>
    <input
      class="bg-gray-200 appearance-none border-2 border-gray-200 rounded py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500"
      type="number" name="phone_khachhang" value="<?=$phone_khachhang?>" readonly>
    <p class="text-[20px] ">Email Khách Hàng</p>
    <input
      class="bg-gray-200 appearance-none border-2 border-gray-200 rounded py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500"
      type="text" name="email_khachhang" value="<?=$email_khachhang?>" readonly>
    <p class="text-[20px] ">Ngày Hẹn</p>
    <input
      class="bg-gray-200 appearance-none border-2 border-gray-200 rounded py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500"
      type="text" name="date_lichhen" value="<?=$date_lichhen?>" readonly>
    <p class="text-[20px] ">Giờ Hẹn</p>
    <input
      class="bg-gray-200 appearance-none border-2 border-gray-200 rounded py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500"
      type="text" name="hours_lichhen" value="<?=$hours_lichhen?>" readonly>
    <p class="text-[20px] ">Xe Muốn Xem</p>
    <input
      class="bg-gray-200 appearance-none border-2 border-gray-200 rounded py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500"
      type="text" name="name_sanpham" value="<?=$name_sanpham?>" readonly>


    <p class="text-[20px] ">Mô Tả</p>
    <textarea name="description_lichhen" readonly
      class="bg-gray-200 appearance-none border-2 border-gray-200 rounded py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500"
      name="" id="" cols="30" rows="10">
     <?=$description_lichhen?>
    </textarea> -->

    <p class="text-[20px] ">Nhân Viên Tư Vấn</p>
    <select
      class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
      name="id_nhanvien" required>

      <?php
       foreach ($listnhanvien as $nhanvien) { 
        extract($nhanvien); 
        
        if($id_nhanvien==$id_nhanvien) $s="selected"; else $s="";
       echo '<option value="'.$id_nhanvien.'" '.$s.'>'.$name_nhanvien.'</option>';
       }
           ?>

      
    </select>

    <br>
    <input class="bg-[red] text-white mt-[20px] px-5 py-2 cursor-pointer hover:bg-[blue]" type="submit"
      value="SX Nhân Viên" name="updatelichhen">

  </form>

</article>

</body>


</html>