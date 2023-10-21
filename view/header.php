<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Trang web bán xe máy</title>
  <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.5/dist/flowbite.min.css" />
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="./content/css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
    integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<style>
.dropdown-content {
  display: none;
  position: absolute;
  background-color: white;
  z-index: 1;
  color: black;
  list-style: none;

}

.dropdown-content p {
  text-align: center;
  width: 170px;
  height: 60px;
  font-weight: bold;
}

.dropdown:hover .dropdown-content {
  display: block;
  transition-duration: 700ms;
}






.subnav-content {
  display: none;
  position: absolute;
  text-align: center;
  background-color: black;
  width: 100px;

  z-index: 1;
  transition-duration: 3s;

}



.subnav:hover .subnav-content {
  display: block;


}
</style>

<body>
  <header>
    <div class="flex justify-between h-[90px] leading-[90px]">
      <a href="index.php"><img src="https://bizweb.dktcdn.net/100/443/045/themes/844966/assets/logo.png?1695197142389" alt="" class="w-[150px] h-[90px] object-contain "></a>
      <nav class="">
        <ul id="menu"
          class="flex md:gap-[35px] hidden  fixed top-0 left-0 flex flex-col justify-center items-center bg-[blue]  w-full h-screen md:bg-transparent md:relative md:h-auto md:flex-row  md:flex z-50">
          <li class="text-[19px] md:hover:text-[blue] text-white md:text-black transition"><a href="index.php">TRANG
              CHỦ</a></li>
          <!-- <div class="subnav">
            <li class="text-[19px] md:hover:text-[blue] text-white md:text-black transiton"><a
                href="index.php?action=loadfullsanpham">SẢN PHẨM</a></li>
            <?php
          $sql="select * from danhmuc "; 
          $listdanhmuc = pdo_query($sql); 
          foreach($listdanhmuc as $danhmuc){
    	      extract($danhmuc);
            echo '<span class="subnav-content  text-white hover:bg-[white] hover:text-black">
              <a href="index.php?action=sanpham&id_danhmuc='.$id_danhmuc. '"> '.$name_danhmuc.'</a>
            </span>';
          }
          ?>
          </div> -->
          <button id="dropdownDefault" data-dropdown-toggle="dropdown"
            class="text-black text-[19px]  font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
            type="button"><a href="#">SẢN PHẨM</a><svg class="ml-2 w-4 h-4" aria-hidden="true" fill="none"
              stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
            </svg></button>
          <!-- Dropdown menu -->
          <div id="dropdown" class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700">
            <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefault">
              <?php
              $sql="select * from danhmuc "; 
              $listdanhmuc = pdo_query($sql); 
              foreach($listdanhmuc as $danhmuc){
    	        extract($danhmuc);
              ?>
              <li>
                <a href="index.php?action=sanpham&id_danhmuc=<?php echo $danhmuc['id_danhmuc']?>"
                  class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"><?php echo $danhmuc['name_danhmuc']?></a>
              </li>
              <?php }?>
            </ul>
          </div>


          <li class="text-[19px] md:hover:text-[blue] text-white md:text-black transiton"><a href="index.php?action=lienhe">LIÊN HỆ</a></li>
          <li class="text-[19px] md:hover:text-[blue] text-white md:text-black transition"><a href="index.php?action=uudai">MUA XE TRẢ GÓP</a>
          </li>
        

          <div class="text-[20px] md:hidden text-white">
            <a href="index.php?action=dangky"> <i class="fa-solid fa-user "><span class="pl-[15px]">Tài
                  Khoản Mobile</span></i></a>
          </div>
        </ul>
      </nav>

      <!-- Form search topnav -->
      <div class="text-[20px] hidden md:block md:flex md:items-center md:gap-[25px]">
        <form class="flex items-center" action="index.php?action=sanpham" method="post">
         
          
          <label for="default-search"
            class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>


            <div class="relative">
  <select name="price_sanpham" id="price_sanpham" class=" border-none w-[100px] focus:border-none">
    <option value="">Lọc Giá</option>
    <option value="<10m">Dưới 10 triệu</option>
    <option value="10m-20m">10 triệu - 20 triệu</option>
  </select>
</div>

          <div class="relative">
          
            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
              <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor"
                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
              </svg>
            </div>
            <input type="text" name="kyw" id="default-search"
              class="block w-full p-4 pl-10 pr-24 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 "
              placeholder="............." >
              
            <button type="submit" name="timkiem"
              class="text-white absolute right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Tìm
              kiếm</button>
          </div>
        </form>
<a href="index.php?action=xemgiohang">
<i class="fa-solid fa-cart-shopping"></i>
</a>
        <?php
          if (isset($_SESSION['taikhoan'])) {
           extract($_SESSION['taikhoan']);
           ?>
        <div class=" dropdown ">
          <span class="mr-[60px]"> <a class="hover:text-[blue] " href="#"> <i class="fa-solid fa-user "><span
                  class="pl-[5px]"></span></i>
              <?=$name_taikhoan?></a></span>

          <div class="dropdown-content ">
            <a href="index.php?action=xemlichhen&id_taikhoan=<?=$id_taikhoan?>">
              <p class="hover:bg-[black] hover:text-white  text-[15px] cursor-pointer ">Lịch hẹn</p>
            </a>
            <a href="index.php?action=quenmatkhau">
              <p class="hover:bg-[black] hover:text-white  text-[15px] cursor-pointer">Quên mật khẩu</p>
            </a>
            <a href="index.php?action=edit_taikhoan">
              <p class="hover:bg-[black] hover:text-white  text-[15px] cursor-pointer">Sửa tài khoản
              </p>
            </a>
            <?php
            if ($role == 1 ) {
            ?>
            <a href="index.php?action=dangnhapadmin">
              <p class="hover:bg-[black] hover:text-white  text-[15px] cursor-pointer">Đăng nhập admin</p>
            </a>
            <?php
            }
            ?>
            <hr>
            <a href="index.php?action=dangxuat">
              <p class="hover:bg-[black] hover:text-white text-[15px] cursor-pointer"><i
                  class="fa-solid fa-right-to-bracket"></i> Đăng Xuất</p>
            </a>
          </div>
        </div>
      </div>

      <?php
        }elseif (isset($_SESSION['nhanvien'])) {
          extract($_SESSION['nhanvien']); 
          ?>
      <div class=" dropdown ">
        <span class="mr-[60px]"> <a class="hover:text-[blue] " href="#"> <i class="fa-solid fa-user "><span
                class="pl-[5px]"></span></i>
            <?=$name_nhanvien?></a></span>

        <div class="dropdown-content ">
          <a href="index.php?action=xemlichtuvan&id_nhanvien=<?=$id_nhanvien?>">
            <p class="hover:bg-[black] hover:text-white  text-[15px] cursor-pointer ">Xem lịch Tư Vấn</p>
          </a>
          <hr>
          <a href="index.php?action=dangxuat">
            <p class="hover:bg-[black] hover:text-white text-[15px] cursor-pointer"><i
                class="fa-solid fa-right-to-bracket"></i> Đăng Xuất</p>
          </a>
        </div>
      </div>
    </div>

    <?php
        }else{
          ?>
    <!-- <div class=" dropdown">
      <i class="fa-solid fa-user "><span class="pl-[5px]"></span></i>Tài
      Khoản
      <div class="dropdown-content w-[140px] text-center font-bold">
        <a href="index.php?action=dangnhap">
          <div class="hover:bg-[black] hover:text-white  text-[15px] cursor-pointer font-bold"><i
              class="fa-solid fa-right-to-bracket"></i> Đăng Nhập</div>
        </a>
        <a href="index.php?action=dangky">
          <div class="hover:bg-[black] hover:text-white  text-[15px]  cursor-pointer font-bold"><i
              class="fa-solid fa-user-pen"></i> Đăng Ký</div>
        </a>
        <a href="index.php?action=dangnhapnhanvien">
          <div class="hover:bg-[black] hover:text-white  text-[15px]  cursor-pointer font-bold"><i
              class="fa-solid fa-user-pen"></i> Nhân Viên</div>
        </a>
      </div>
    </div> -->
    <div class="antialiased">
      <div class="group inline-block relative">
        <button
          class="text-gray-700 font-semibold py-4 px-10 rounded inline-flex items-center text-lg"
        >
          <span class="mr-1">Tài khoản</span>
          <svg
            class="fill-current h-4 w-4"
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 20 20"
          >
            <path
              d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"
            />
          </svg>
        </button>
        <ul
          class="absolute hidden text-gray-700 pt-1 group-hover:block transiton z-10 text-base">
          <li class="">
            <a
            class="rounded-t bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap"
            href="index.php?action=dangnhap"
            ><i class="fa-solid fa-right-to-bracket px-2"></i>Đăng nhập</a>
          </li>
          <li class="">
            <a
              class="bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap"
              href="index.php?action=dangky"
              ><i class="fa-solid fa-user-plus px-2"></i>Đăng kí</a>
          </li>
          <li class="">
            <a
              class="rounded-b bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap"
              href="index.php?action=dangnhapnhanvien"
              ><i class="fa-solid fa-user-plus px-2"></i>Nhân viên</a>
          </li>
        </ul>
      </div>
    </div>
    </div>
    <?php
}
?>
    <div id="menu-icon" class="md:hidden z-50 ml-[60px] text-[20px] ">
      <i class="fa-solid fa-bars border-[2px] py-3 px-3 "></i>
    </div>

    </div>
  </header>

  <script src="https://unpkg.com/flowbite@1.5.5/dist/flowbite.js"></script>
</body>