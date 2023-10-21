<article class="h-full ml-14 mt-[20px] mb-10 md:ml-64 text-black">
  <p class="ml-[10px] mb-[30px] "><span class="text-gray-500"><i class="fa-solid fa-house"></i> Trang Chủ ></span>
    <span>Quản Lý
      Tài Khoản</span>
  </p>

  <table class="text-center  min-w-full ">
    <tr class="bg-[red] text-[white] hover:bg-[red] border-b">
      <td class="w-[150px]  py-[12px]">Mã Tài Khoản</td>
      <td class="w-[150px]">Tên Tài Khoản</td>
      <td class="w-[150px]">Mật Khẩu</td>
      <td class="w-[150px]">Email</td>
      <td class="w-[150px]">Số Điện Thoại</td>
      <td class="w-[130px]">Quyền</td>
      <td colspan="2"></td>
      <td></td>

    </tr>
    <?php 
foreach($listtaikhoan as $taikhoan){
    	extract($taikhoan);
    echo '<tr>
      <td>'.$id_taikhoan . '</td>
      <td>' . $name_taikhoan.'</td>
      <td>' . $pass_taikhoan. '</td>
      <td>' . $email_taikhoan. '</td>
      <td>' . $phone_taikhoan. '</td>
      <td>' . $role. '</td>
      <td></td>
  <td class=" mb-[30px] w-[50px] ">
      <p class="bg-[blue] text-white px-[5px] py-[3px] rounded-md my-[30px]"><a href="index.php?action=edit_taikhoan&id_taikhoan='.$id_taikhoan. '"><i class="fa-solid fa-pen-to-square"></i></a></p>
    </td>
    <td class="  w-[50px] ">
   <p class="ml-[10px] bg-[red] text-white px-[5px] py-[3px] rounded-md my-[30px]"> <a
        href="index.php?action=delete_taikhoan&id_taikhoan='.$id_taikhoan.'"><i class="fa-solid fa-trash"></i></a></p>
    </td>
   
    </tr>';
    }
    ?>



  </table>
</article>

<!-- END Product -->

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