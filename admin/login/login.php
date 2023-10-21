<?php 
include "../../model/connect.php";
include "../../dao/taikhoan.php";
session_start();
unset($_SESSION['dangnhapadmin']);
if (isset($_POST['dangnhapadmin'])) {
  $name_admin = $_POST['name_admin'];
  $pass_admin = $_POST['pass_admin'];
 
  $check_user = check_user_admin($name_admin,$pass_admin);
  
  if (is_array($check_user)) {
  $_SESSION['admin'] = $check_user;
   header("Location:../../admin/index.php");
     
      }
else{
  $thongbao = $_SESSION['dangnhapadmin']['thongbao'];
 }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Đăng Nhập ADMIN</title>
</head>

<body>

  <section class="flex flex-col md:flex-row h-screen items-center">

    <div class="bg-indigo-600 hidden lg:block w-full md:w-1/2 xl:w-2/3 h-screen">
      <img src="https://cdn.honda.com.vn/motorbikes/August2023/UDRtvNv71RxATkuwhW0V.jpg" alt="" class="w-full h-full object-cover">
    </div>

    <div class="bg-white w-full md:max-w-md lg:max-w-full md:mx-auto md:mx-0 md:w-1/2 xl:w-1/3 h-screen px-6 lg:px-16 xl:px-12
        flex items-center justify-center">

      <div class="w-full h-100">


        <h1 class="text-xl md:text-2xl font-bold leading-tight mt-12">Đăng Nhập</h1>

        <form class="mt-6" action="" method="POST">
          <div>
            <label class="block text-gray-700">Tên Tài Khoản</label>
            <input type="text" name="name_admin" id="" placeholder="Tên Tài Khoản"
              class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none"
              autofocus autocomplete >
              <small style="color: red;"><?php if (isset($_SESSION['dangnhapadmin']['name_admin'])) : ?>
                                                <?= $_SESSION['dangnhapadmin']['name_admin'] ?>
                                            <?php endif ?></small>
          </div>

          <div class="mt-4">
            <label class="block text-gray-700">Mật Khẩu</label>
            <input type="password" name="pass_admin" id="" placeholder="Mật Khẩu" class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500
                focus:bg-white focus:outline-none">
                <small style="color: red;"><?php if (isset($_SESSION['dangnhapadmin']['pass_admin'])) : ?>
                                                <?= $_SESSION['dangnhapadmin']['pass_admin'] ?>
                                            <?php endif ?></small>
          </div>

          <h2 class="text-[red] mt-[20px]">
            <?php
if(isset($thongbao)&&($thongbao!="")){  
  echo $thongbao;
}
?>
          </h2>
          <button type="submit" class="w-full block bg-indigo-500 hover:bg-indigo-400 focus:bg-indigo-400 text-white font-semibold rounded-lg
              px-4 py-3 mt-6" name="dangnhapadmin">Đăng Nhập</button>
        </form>

        <hr class="my-6 border-gray-300 w-full">



      </div>
    </div>

  </section>
</body>

</html>