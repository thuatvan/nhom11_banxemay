<div class="flex items-center justify-center  bg-gray-100">
  <div class="px-8 py-6 mx-4 mt-4 text-left bg-white shadow-lg md:w-1/3 lg:w-1/3 sm:w-1/3">
    <div class="flex justify-center">
      <img src="https://bizweb.dktcdn.net/100/443/045/themes/844966/assets/logo.png?1695197142389" alt="" class="w-[100px]">
    </div>
    <?php
    





// if($_SERVER['REQUEST_METHOD'] == 'POST'){
//       //Khai báo mảng để báo lỗi
//       $error = [];
//       //Validate tài khoản
//       if(empty(trim($_POST['name_taikhoan']))){
//         $error['name_taikhoan']['required'] = "Vui lòng nhập tên tài khoản";
//       }
//       else{
//         if(strlen(trim($_POST['name_taikhoan']))<3){
//           $error['name_taikhoan']['min'] = "Tài khoản phải lớn hơn 3 kí tự";
//         }
//       }
//       //validate mật khẩu
//       if(empty(trim($_POST['pass_taikhoan']))){
//         $error['pass_taikhoan']['required'] = "Vui lòng nhập tên tài khoản";
//       }
//       else{
//         if(strlen(trim($_POST['pass_taikhoan']))<5){
//           $error['pass_taikhoan']['min'] = "Tài khoản phải lớn hơn 5 kí tự";
//         }
//       }
//       //validate email
//       if(empty(trim($_POST['email_taikhoan']))){
//         $error['email_taikhoan']['required'] = "Vui lòng nhập email";
//       }
//       else{
//         if(!filter_var(trim($_POST['email_taikhoan']),FILTER_VALIDATE_EMAIL)){
//           $error['email_taikhoan']['invaild'] = "Email không hợp lệ";
//         }
//       }
//     }



?>
    <h3 class="text-2xl font-bold text-center mt-[10px]">Đăng Ký</h3>
    <form action="index.php?action=dangky" method="POST">
      <div class="mt-4">
        <div>
          <label class="block">Tên Đăng Nhập<label>
              <input type="text" name="name_taikhoan" placeholder="Tên đăng nhập"
                class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600"
                >
                <br>
                <small style="color: red;"><?php if (isset($_SESSION['dangky']['name_taikhoan'])) : ?>
                                                <?= $_SESSION['dangky']['name_taikhoan'] ?>
                                           <?php endif ?></small>               
        </div>
        <div class="mt-4">
          <label class="block">Mật Khẩu<label>
              <input type="password" placeholder="Password" name="pass_taikhoan"
                class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600"
                >
                <small style="color: red;"><?php if (isset($_SESSION['dangky']['pass_taikhoan'])) : ?>
                                                <?= $_SESSION['dangky']['pass_taikhoan'] ?>
                                            <?php endif ?></small>                 
        </div>
        <div class="mt-4">
          <label class="block" for="email">Email<label>
              <input type="text" placeholder="Email" name="email_taikhoan"
                class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600"
                >
                <small style="color: red;"><?php if (isset($_SESSION['dangky']['email_taikhoan'])) : ?>
                                                <?=$_SESSION['dangky']['email_taikhoan'] ?>
                                            <?php endif ?></small>
        </div>
        <div class="mt-4">
          <label class="block">Số Điện Thoại<label>
              <input type="text" placeholder="Số điện thoại" name="phone_taikhoan"
                class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600"
                >
                <small style="color: red;"><?php if (isset($_SESSION['dangky']['phone_taikhoan'])) : ?>
                                                <?=$_SESSION['dangky']['phone_taikhoan'] ?>
                                            <?php endif ?></small>
              
        </div>

        <div class="flex">
          <input class="w-full px-6 py-2 mt-4 text-white bg-blue-600 rounded-lg hover:bg-blue-900" type="submit"
            value="Đăng Ký" name="dangky">
        </div>
        <div class="mt-6 text-grey-dark">
          Bạn đã có tài khoản ?
          <a class="text-blue-600 hover:underline" href="index.php?action=dangnhap">
            Đăng Nhập
          </a>
        </div>
      </div>
    </form>
    <h2 class="text-[red]">
      <?php
if(isset($thongbao1)&&($thongbao1!="")){  
  echo $thongbao1;
}
?>
    </h2>
  </div>
</div>