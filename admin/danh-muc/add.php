<article class="h-full ml-14 mt-[20px] mb-10 md:ml-64 text-black ">
  <p class="ml-[10px] mb-[30px] "><span class="text-gray-500"><i class="fa-solid fa-house"></i> Trang Chủ ></span>
    <span>Quản Lý Danh Mục</span>
  </p>
  <div class=" items-center ">
    <div class="ml-[20px]">
      <form method="POST">
        <label class="">Mã loại</label> <br>
        <input
          class="shadow appearance-none  rounded  py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
          name="ma_loai" value="auto number" readonly>
        <br>
        <label for="">Danh mục</label> <br>
        <input
          class="bg-gray-200 appearance-none -2 -gray-200 rounded py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:-purple-500 border"
          type="
          text" name="category" placeholder="Danh mục" required> <br>
        <button
          class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline mt-[20px]"
          type="submit" name="addCate" class="btn-insert">Thêm
          mới</button>
      </form>
    </div>

    <div class="ml-[20px] mt-[30px]">
      <table class="shadow-2xl  text-center  md:mt-[20px]">
        <thead>
          <tr class="bg-[red] text-[white] hover:bg-[red] -b">
            <th class="w-[50px] py-[12px]">STT</th>
            <th class="w-[150px] ">Tên</th>
            <th colspan="3">Quản trị</th>

          </tr>
        </thead>
        <?php 
  $kq =  loadall_danhmuc();
  $stt = 0;
  foreach($kq as $row){
    ?>
        <tbody>

          <tr class="">
            <td class="">
              <?= $stt += 1 ?>
            </td>
            <td class="">
              <?php echo $row["name_danhmuc"]  ?>
            </td>
            <td class="pr-[15px] py-[10px] px-[20px]">
              <p
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                <a href="index.php?action=edit_category&id_danhmuc=<?php echo $row['id_danhmuc']?>"><i
                    class="fa-solid fa-pen-to-square"></i></a>
              </p>
            </td>
            <td>
            <td class="pr-[15px]">
              <p
                class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                <a onclick="return confirm('Bạn có muốn xóa không?')"
                  href="index.php?action=delete_category&id_danhmuc=<?php echo $row['id_danhmuc']?>"><i
                    class="fa-solid fa-trash"></i></a>
              </p>

            </td>
            </td>
          </tr>
        </tbody>
        <?php 
  }
    ?>
      </table>

    </div>

  </div>
</article>
<style>
tr:nth-child(even) {
  background-color: #f2f2f2;
}

tr:hover {
  background-color: #ddd;
}
</style>