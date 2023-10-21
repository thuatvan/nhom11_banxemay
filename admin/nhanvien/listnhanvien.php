<article class="h-full ml-14 mt-[20px] mb-10 md:ml-64 text-black">
  <p class="ml-[10px] mb-[30px] "><span class="text-gray-500"><i class="fa-solid fa-house"></i> Trang Chủ ></span>
    <span>Quản Lý
      Nhân Viên</span>
  </p>


  <table class="text-center  min-w-full ">
    <tr class="bg-[red] text-[white] hover:bg-[red] border-b">
      <td class="w-[150px] py-[12px]">Mã Nhân Viên</td>
      <td class="w-[150px]">Tên Nhân Viên</td>
      <td class="w-[150px]">Tên đăng nhập</td>
      <td class="w-[150px]">Mật Khẩu</td>
      <td class="w-[150px]">Ảnh Nhân Viên</td>
      <td class="w-[150px]">Thông Tin</td>
      <td class="w-[150px]">Số Điện Thoại</td>
      <td class="w-[150px]">Trạng Thái</td>
      <td colspan="3" class="text-[white] text-[20px]"> <a href="index.php?action=add_nhanvien"><i
            class="fa-solid fa-person-circle-plus"></i>
        </a>
      </td>
      <td></td>
    </tr>
    <?php 
foreach($listnhanvien as $taikhoan){
    	extract($taikhoan);
       if($trangthai=="0") {
       $s="đang làm";
       }
        else $s="đã nghỉ";
      $hinhpath = "../uploads/".$img_nhanvien;
      $suanv = "index.php?action=edit_nhanvien&id_nhanvien=".$id_nhanvien;
      $xoanv ="index.php?action=delete_nhanvien&id_nhanvien=".$id_nhanvien;
      $khnv ="index.php?action=kichhoat_nhanvien&id_nhanvien=".$id_nhanvien;
    if (is_file($hinhpath)) {
    $img_nhanvien="<img width='120px' src='".$hinhpath."'>";
    }else{
    $img_nhanvien = "no photo";
    }?>
    <tr>
      <td><?=$id_nhanvien?></td>
      <td><?=$name_nhanvien?></td>
      <td><?=$taikhoan_nhanvien?></td>
      <td><?=$pass_nhanvien?></td>
      <td class="py-[30px]"><?=$img_nhanvien?></?>
      <td><?=$thongtin_nhanvien?></td>
      <td>+84<?=$phone_nhanvien?></td>
      <td><?=$s?></td>

      <td class="mb-[30px]">
        <p class="bg-[blue] text-white px-[5px] py-[3px] rounded-md"><a href="<?=$suanv?>"><i
              class="fa-solid fa-pen-to-square"></i></a></p>
      </td>
      <td class="">
        <p class="ml-[10px] bg-[red] text-white  px-[3px] py-[3px] rounded-md"> <a
            href="javascript:confirmDelete('<?=$xoanv?>')"><i class="fa-solid fa-user-large-slash"></i></a></p>
      </td>
      <td class="">
        <p class="ml-[10px] bg-[red] text-white px-[3px] py-[3px] rounded-md"> <a
            href="javascript:confirmDeletee('<?=$khnv?>')"><i class="fa-solid fa-user-plus"></i></a></p>
      </td>
    </tr>
    <?php }
    ?>
    <script>
    function confirmDelete(deleUrl) {
      if (confirm("Bạn chắc chắn muốn khóa nhân viên này?")) {
        document.location = deleUrl;
      }
    }

    function confirmDeletee(deleUrl) {
      if (confirm("Bạn chắc chắn muốn kích hoạt nhân viên này?")) {
        document.location = deleUrl;
      }
    }
    </script>
  </table>
</article>


</div>
</div>


</body>

<style>
tr:nth-child(even) {
  background-color: #f2f2f2;
}

tr:hover {
  background-color: #ddd;
}
</style>