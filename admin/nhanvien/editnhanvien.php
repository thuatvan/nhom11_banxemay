<?php
if(is_array($nhanvien)){
  extract($nhanvien);
}
 $hinhnhanvien = "../uploads/".$img_nhanvien;
   $hinhnv="<img width='300px' height='200px' src=".$hinhnhanvien.">";


?>

<article class="h-full ml-14 mt-14 mb-10 md:ml-64 text-black">
  <form action="index.php?action=updatenhanvien" method="post" class="grid " style="padding: 0px 50px;"
    enctype="multipart/form-data">
    <input
      class="bg-gray-200 appearance-none border-2 border-gray-200 rounded py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500"
      type="hidden" name="id_nhanvien" value="<?=$id_nhanvien?>">
    <p class="text-[20px] ">Tên Nhân Viên</p>
    <input
      class="bg-gray-200 appearance-none border-2 border-gray-200 rounded py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500"
      type="text" name="name_nhanvien" value="<?=$name_nhanvien?>">
      <p class="text-[20px] ">Tên đăng nhập Nhân Viên</p>
    <input
      class="bg-gray-200 appearance-none border-2 border-gray-200 rounded py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500"
      type="text" name="taikhoan_nhanvien" value="<?=$taikhoan_nhanvien?>">
      <p class="text-[20px] ">Mật Khẩu</p>
    <input
      class="bg-gray-200 appearance-none border-2 border-gray-200 rounded py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500"
      type="text" name="pass_nhanvien" value="<?=$pass_nhanvien?>">

    <p class="text-[20px] ">Up Ảnh Mới</p>
    <input
      class="bg-gray-200 appearance-none border-2 border-gray-200 rounded py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500"
      type="file" name="img_nhanvien">
    <p class="text-[20px] ">Ảnh Cũ</p>
    <?=$hinhnv?>

    <p class="text-[20px] ">Thông Tin</p>
    <input type="text" name="thongtin_nhanvien"
      class="bg-gray-200 appearance-none border-2 border-gray-200 rounded py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500"
      value=" <?=$thongtin_nhanvien?>">
    <p class="text-[20px] ">Số Điện Thoại</p>
    <input
      class="bg-gray-200 appearance-none border-2 border-gray-200 rounded py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500"
      type="text" name="phone_nhanvien" value=" <?=$phone_nhanvien?>">

    <input class="bg-[red] text-white mt-[20px] px-5 py-2 cursor-pointer hover:bg-[blue]" type="submit"
      value="Sửa Nhân Viên" name="updatenhanvien">

  </form>

</article>