<div class="flex items-center justify-center  bg-gray-100">
  <div class="px-8 py-6 mx-4 mt-4 text-left bg-white shadow-lg md:w-1/3 lg:w-1/3 sm:w-1/3">
    <div class="flex justify-center">
      <img src="https://bizweb.dktcdn.net/100/443/045/themes/844966/assets/logo.png?1695197142389" alt="" class="w-[100px]">
    </div>
    <h3 class="text-2xl font-bold text-center mt-[10px]">Cập Nhập Tài Khoản</h3>
    <?php
if(isset($_SESSION['taikhoan']) &&(is_array($_SESSION['taikhoan']))){ 
  extract($_SESSION['taikhoan']); 
}
    ?>
    <form action="index.php?action=edit_taikhoan" method="POST">
      <div class="mt-4">
        <div>
          <label class="block">Tên Đăng Nhập<label>
              <input type="text" name="name_taikhoan" placeholder="Tên đăng nhập"
                class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600"
                value="<?=$name_taikhoan?>">
        </div>
        
        <div class="mt-4">
          <label class="block">Mật Khẩu<label>
              <input type="password" placeholder="Password" name="pass_taikhoan	"
                class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600"
                value="<?=$pass_taikhoan?>">
        </div>
        <div class="mt-4">
          <label class="block" for="email">Email<label>
              <input type="text" placeholder="Email" name="email_taikhoan"
                class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600"
                value="<?=$email_taikhoan?>">
        </div>
        
        <div class="mt-4">
          <label class="block">Số Điện Thoại<label>
              <input type="text" placeholder="Số điện thoại" name="phone_taikhoan"
                class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600"
                value="<?=$phone_taikhoan?>">
        </div>

        <div class="flex">
          <input type="hidden" name="id_taikhoan" value="<?=$id_taikhoan?>">
          <input class="w-full px-6 py-2 mt-4 text-white bg-blue-600 rounded-lg hover:bg-blue-900" type="submit"
            value="Cập Nhập" name="capnhap">
        </div>

      </div>
    </form>
    <h2 class="text-[red] text-center">
      <?php
if(isset($thongbao)&&($thongbao!="")){  
  echo $thongbao;
}
?>
    </h2>
  </div>
</div>