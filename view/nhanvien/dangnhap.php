<div class="flex items-center justify-center bg-gray-100">
  <div class="px-8 py-6 mx-4 mt-4 text-left bg-white shadow-lg md:w-1/3 lg:w-1/3 sm:w-1/3">
    <div class="flex justify-center">
      <img src="https://bizweb.dktcdn.net/100/443/045/themes/844966/assets/logo.png?1695197142389" alt="" class="w-[100px]">
    </div>
    <h3 class="text-2xl font-bold text-center mt-[10px]">Đăng Nhập Với Tư Cách Nhân Viên</h3>

    <form action="index.php?action=dangnhapnhanvien" method="POST">
      <div class="mt-4">
        <div>
          <label class="block">Tên Đăng Nhập<label>
              <input type="text" name="taikhoan_nhanvien" placeholder="Tên đăng nhập"
                class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600"
                >
                <small style="color: red;"><?php if (isset($_SESSION['dangnhapnhanvien']['taikhoan_nhanvien'])) : ?>
                                                <?= $_SESSION['dangnhapnhanvien']['taikhoan_nhanvien'] ?>
                                            <?php endif ?></small>
        </div>
        <div class="mt-4">
          <label class="block">Mật Khẩu<label>
              <input type="password" placeholder="Password" name="pass_nhanvien"
                class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600"
                >
                <small style="color: red;"><?php if (isset($_SESSION['dangnhapnhanvien']['pass_nhanvien'])) : ?>
                                                <?= $_SESSION['dangnhapnhanvien']['pass_nhanvien'] ?>
                                            <?php endif ?></small>
        </div>
        <h2 class="text-[red]">
          <?php
if(isset($thongbao)&&($thongbao!="")){  
  echo $thongbao;
}
?>
        </h2>


        <div class="flex">
          <input class="w-full px-6 py-2 mt-4 text-white bg-blue-600 rounded-lg hover:bg-blue-900" type="submit"
            value="Đăng Nhập" name="dangnhapnhanvien">
        </div>
      </div>
    </form>

  </div>
</div>