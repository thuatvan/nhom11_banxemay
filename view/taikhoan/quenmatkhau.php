<div class="flex items-center justify-center  bg-gray-100">
  <div class="px-8 py-6 mx-4 mt-4 text-left bg-white shadow-lg md:w-1/3 lg:w-1/3 sm:w-1/3">
    <div class="flex justify-center">
      <img src="https://bizweb.dktcdn.net/100/443/045/themes/844966/assets/logo.png?1695197142389" alt="" class="w-[100px]">
    </div>
    <h3 class="text-2xl font-bold text-center mt-[10px]">Quên Mật Khẩu</h3>
    <form action="index.php?action=quenmatkhau" method="POST">
      <div class="mt-4">
        <label class="block" for="email">Email<label>
            <input type="text" placeholder="Email" name="email_taikhoan"
              class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
      </div>
      <div class="flex">
        <input class="w-full px-6 py-2 mt-4 text-white bg-blue-600 rounded-lg hover:bg-blue-900" type="submit"
          value="Lấy Lại Mật Khẩu" name="quenmatkhau">
      </div>
      <h2 class="text-[red]">
        <?php
if(isset($thongbao)&&($thongbao!="")){  
  echo $thongbao;
}
?>
      </h2>
  </div>
  </form>

</div>
</div>