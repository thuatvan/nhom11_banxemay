<article class="h-full ml-14 mt-[20px] mb-10 md:ml-64 text-black">
  <p class="ml-[10px] mb-[30px] "><span class="text-gray-500"><i class="fa-solid fa-house"></i> Trang Chủ ></span>
    <span>Quản Lý
      Sản Phẩm</span>
  </p>

  <form action="index.php?action=quanlysanpham" method="post" class="mb-[20px] text-center">
    <input type="text" name="kyw"
      class="shadow appearance-none border rounded  py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline rounded-[10px]"
      placeholder="Tìm Kiếm Sản Phẩm">
    <select name="id_danhmuc"
      class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500  p-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 mb-[20px]">>
      <option value="0" selected>Tất Cả Sản Phẩm</option>
      <?php foreach ($listdanhmuc as $danhmuc) { 
      extract ($danhmuc); 
      echo '<option value="'.$id_danhmuc.'"> '.$name_danhmuc.' </option>'; 
    } 
    ?>
    </select>
    <span class="bg-[red] hover:bg-[blue] text-white px-[10px] py-[5px] rounded-[10px]"><input class="cursor-pointer"
        type="submit" value="Tìm Kiếm" name="filter"> <i class="fa-solid fa-magnifying-glass"></i> </span>

  </form>

  <table class="text-center min-w-full">
    <tr class="bg-[red] text-[white] hover:bg-[red] border-b">
      <td class="w-[50px] py-[12px]">STT</td>
      <td class="w-[150px]">Tên Sản Phẩm</td>
      <td class="w-[150px]">Giá</td>
      <td class="w-[100px]">Ảnh</td>
      <td class="w-[100px]">Mô Tả</td>
      <td class="w-[100px]">Lượt Xem</td>
      <td class="w-[130px]">Danh Mục</td>

      <td colspan="2" class="text-[white] text-[20px]"> <a href="index.php?action=add_product"><i
            class="fa-solid fa-cart-plus"></i>
        </a>
      </td>

    </tr>
    <?php 
foreach($listsanpham as $sanpham) {
    	extract($sanpham);
    $hinhpath = "../uploads/".$img_sanpham;
    $suasp="index.php?action=edit_product&id_sanpham=".$id_sanpham;
    $xoasp = "index.php?action=delete_sanpham&id_sanpham=".$id_sanpham;
    if (is_file($hinhpath)) {
    $img_sanpham="<img width='100px' src='".$hinhpath."'>";
    }else{
    $img_sanpham = "<p width='100px'>Chưa Có Hình Ảnh</p>";
    }?>

    <tr>
      <td><?=$id_sanpham?></td>
      <td><?=$name_sanpham?></td>
      <td><?=number_format($price_sanpham)?> VNĐ</td>
      <td class="py-[20px]"><?=$img_sanpham?></td>
      <td>
        <p style="
     width: 250px;
    text-overflow: ellipsis;
    overflow: hidden;
    white-space: nowrap;"><?=$description_sanpham?></p>
      </td>
      <td><?=$view_sanpham?></td>
      <td><?=$id_danhmuc?></td>
      <td class="w-[30px]">
        <p class="bg-[blue] text-white px-[5px] py-[3px] rounded-md"><a href="<?=$suasp?>"><i
              class="fa-solid fa-pen-to-square"></i></a></p>
      </td>
      <td class="w-[30px]">
        <p class="ml-[10px] bg-[red] text-white px-[5px] py-[3px] rounded-md"> <a
            href="javascript:confirmDelete('<?=$xoasp?>')"><i class="fa-solid fa-trash"></i></a></p>
      </td>
    </tr>
    <?php }
    ?>
    <script>
    function confirmDelete(deleUrl) {
      if (confirm("Bạn chắc chắn muốn xóa sản phẩm này?")) {
        document.location = deleUrl;
      }
    }
    </script>


  </table>
</article>

<!-- END Product -->

</div>
</div>


</body>

</html>

<style>
tr:nth-child(even) {
  background-color: #f2f2f2;
}

tr:hover {
  background-color: #ddd;
}
</style>