<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ADMIN</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://cdn.lordicon.com/pzdvqjsp.js"></script>
  <style>
  @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap');

  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Roboto', sans-serif;
  }
  </style>
</head>


<body>

  <div>
    <!-- Sidebar -->
    <div
      class="fixed grid top-0 left-0 w-14 hover:w-64 md:w-64 bg-white h-full text-black transition-all duration-300 border border-r-[1px] z-10 sidebar shadow-2xl">
      <div class="overflow-y-auto overflow-x-hidden flex flex-col justify-between flex-grow">
        <ul class="flex flex-col py-4 space-y-1">

          <li>
            <a href="index.php?action=home"
              class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-[red] text-white-600 hover:text-white-800 border-l-4 hover:border-[blue] hover:text-white pr-6">
              <span class="inline-flex justify-center items-center ml-4">
                <i class="fa-solid fa-house"></i>
              </span>
              <span class="ml-2 text-sm tracking-wide truncate">Trang Chủ</span>
            </a>
          </li>

          <li>
            <a href="index.php?action=quanlydanhmuc"
              class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-[red] text-white-600 hover:text-white-800 border-l-4 hover:border-[blue] hover:text-white pr-6">
              <span class="inline-flex justify-center items-center ml-4">
                <i class="fa-solid fa-bars-progress"></i>
              </span>
              <span class="ml-2 text-sm tracking-wide truncate">Quản Lý Danh Mục</span>
            </a>
          </li>
          <li>
            <a href="index.php?action=quanlysanpham"
              class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-[red] text-white-600 hover:text-white-800 border-l-4 hover:border-[blue] hover:text-white pr-6">
              <span class="inline-flex justify-center items-center ml-4">
                <i class="fa-solid fa-box-open"></i>
              </span>
              <span class="ml-2 text-sm tracking-wide truncate">Quản Lý Sản Phẩm</span>

            </a>
          </li>
          <li>
            <a href="index.php?action=quanlytaikhoan"
              class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-[red] text-white-600 hover:text-white-800 border-l-4 hover:border-[blue] hover:text-white pr-6">
              <span class="inline-flex justify-center items-center ml-4">
                <i class="fa-solid fa-users"></i>
              </span>
              <span class="ml-2 text-sm tracking-wide truncate">Quản Lý Tài Khoản</span>
            </a>
          </li>
          <li>
            <a href="index.php?action=quanlynhanvien"
              class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-[red] text-white-600 hover:text-white-800 border-l-4 hover:border-[blue] hover:text-white pr-6">
              <span class="inline-flex justify-center items-center ml-4">
                <i class="fa-solid fa-users"></i>
              </span>
              <span class="ml-2 text-sm tracking-wide truncate">Quản Lý Nhân Viên</span>
            </a>
          </li>
          <li>
            <a href="index.php?action=danhsachbinhluan"
              class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-[red] text-white-600 hover:text-white-800 border-l-4 hover:border-[blue] hover:text-white pr-6">
              <span class="inline-flex justify-center items-center ml-4">
                <i class="fa-solid fa-comments"></i>
              </span>
              <span class="ml-2 text-sm tracking-wide truncate">Quản Lý Bình Luận</span>
            </a>
          </li>
          <li>
            <a href="index.php?action=quanlygiohang"
              class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-[red] text-white-600 hover:text-white-800 border-l-4 hover:border-[blue] hover:text-white pr-6">
              <span class="inline-flex justify-center items-center ml-4">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                  xmlns="http://www.w3.org/2000/svg">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9">
                  </path>
                </svg>
              </span>
              <span class="ml-2 text-sm tracking-wide truncate">Quản Lý Giỏ Hàng</span>
              <span
                class="hidden md:block px-2 py-0.5 ml-auto text-xs font-medium tracking-wide text-blue-500 bg-indigo-50 rounded-full">New</span>
            </a>
          </li>
          <li class="px-5 hidden md:block">
            <div class="flex flex-row items-center mt-5 h-8">
              <div class="text-sm font-light tracking-wide text-gray-400 uppercase">Tài Khoản</div>
            </div>
          </li>
          <li>
            <a href="#"
              class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-[red] text-white-600 hover:text-white-800 border-l-4 hover:border-[blue] hover:text-white pr-6">
              <span class="inline-flex justify-center items-center ml-4">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                  xmlns="http://www.w3.org/2000/svg">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                </svg>
              </span>
              <?php
              if(isset($_SESSION['admin'])){
                extract($_SESSION['admin']);
                echo ' <span class="ml-2 text-sm tracking-wide truncate">'.$name_admin.'</span>';
              }
              else{
               echo ' <span class="ml-2 text-sm tracking-wide truncate">ADMIN</span>';
              }

              ?>

            </a>
          </li>
          <li>
            <a href="index.php?action=dangxuatadmin"
              class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-[red] text-white-600 hover:text-white-800 border-l-4 hover:border-[blue] hover:text-white pr-6">
              <span class="inline-flex justify-center items-center ml-4">
                <i class="fa-solid fa-right-from-bracket"></i>
              </span>
              <span class="ml-2 text-sm tracking-wide truncate">Đăng Xuất</span>
            </a>
          </li>
        </ul>

      </div>
    </div>
    <!-- ./Sidebar -->
  </div>



</body>

</html>