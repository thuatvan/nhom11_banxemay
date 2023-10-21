<article class="h-full ml-14 mt-14 mb-10 md:ml-64 text-black">
  <form method="post" class="grid " style="padding: 0px 50px;" enctype="multipart/form-data">
    <p class="text-[20px] ">Tên Nhân Viên</p>
    <input
      class="bg-gray-200 appearance-none border-2 border-gray-200 rounded py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500"
      type="text" name="name_nhanvien">
      <p class="text-[20px] ">Tên đăng nhập Nhân Viên</p>
    <input
      class="bg-gray-200 appearance-none border-2 border-gray-200 rounded py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500"
      type="text" name="taikhoan_nhanvien">
      <p class="text-[20px] ">Mật Khẩu</p>
    <input
      class="bg-gray-200 appearance-none border-2 border-gray-200 rounded py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500"
      type="text" name="pass_nhanvien">

    <p class="text-[20px] ">Ảnh Nhân Viên</p>
    <input
      class="bg-gray-200 appearance-none border-2 border-gray-200 rounded py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500"
      type="file" name="img_nhanvien">
    <p class="text-[20px] ">Thông Tin Nhân Viên</p>
    <input
      class="bg-gray-200 appearance-none border-2 border-gray-200 rounded py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500"
      type="text" name="thongtin_nhanvien">
    <p class="text-[20px]  ">Số Điện Thoại</p>
    <input
      class="bg-gray-200 appearance-none border-2 border-gray-200 rounded py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500"
      type="text" name="phone_nhanvien">
    <input type="hidden" name="trangthai">



    <input class="bg-[red] text-white mt-[20px] px-5 py-2 cursor-pointer hover:bg-[blue]"
      type="submit" value="Thêm Mới" name="btn_insert_nhanvien">

  </form>

</article>