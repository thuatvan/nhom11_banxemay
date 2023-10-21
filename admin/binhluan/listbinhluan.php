<article class="h-full ml-14 mt-[20px] mb-10 md:ml-64 text-black">
  <p class="ml-[10px] mb-[30px] "><span class="text-gray-500"><i class="fa-solid fa-house"></i> Trang Chủ ></span>
    <span>Quản Lý
      Bình Luận</span>
  </p>

  <table class="text-center   min-w-full">
    <tr class="bg-[red] text-[white] hover:bg-[red] border-b">
      <td class="w-[40px] py-[12px]">ID</td>
      <td class="w-[150px]">Nội Dung</td>
      <td class="w-[150px]">ID User</td>
      <td class="w-[150px]">ID Sản Phẩm</td>
      <td class="w-[150px]">Ngày Bình Luận</td>
      <td></td>
    </tr>
    <?php 
foreach($listbinhluan as $binhluan){
    	extract($binhluan);
    echo '<tr>
      <td>'.$id_binhluan. '</td>
      <td>' . $content_binhluan.'</td>
      <td>' . $id_taikhoan	. '</td>
      <td>' . $id_sanpham. '</td>
      <td>' . $date_binhluan. '</td>
      
    <td class="w-[30px] py-[20px]">
   <p class="ml-[10px] bg-[red] text-white px-[5px] py-[3px] rounded-md"> <a
        href="index.php?action=delete_binhluan&id_binhluan='.$id_binhluan.'"><i class="fa-solid fa-trash"></i></a></p>
    </td>
    </tr>';
    }
    ?>



  </table>
</article>

<!-- END Product -->

</div>
</div>


<style>
tr:nth-child(even) {
  background-color: #f2f2f2;
}

tr:hover {
  background-color: #ddd;
}
</style>