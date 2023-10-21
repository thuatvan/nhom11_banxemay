<?php
          if (isset($_SESSION['nhanvien'])) {
           extract($_SESSION['nhanvien']);
           ?>
        <div class=" dropdown ">
          <span class="mr-[60px]"> <a class="hover:text-[blue] " href="#"> <i class="fa-solid fa-user "><span
                  class="pl-[5px]"></span></i>
              <?=$taikhoan_nhanvien?></a></span>

          <div class="dropdown-content ">
            <?php
            if ($trangthai == 0 ) {
            ?>
            <a href="index.php?action=lichlamviec">
              <p class="hover:bg-[black] hover:text-white  text-[15px] cursor-pointer">Xem lịch làm việc</p>
            </a>
            <?php
            }
            ?>
            <hr>
            <a href="index.php?action=dangxuatnhanvien">
              <p class="hover:bg-[black] hover:text-white text-[15px] cursor-pointer"><i
                  class="fa-solid fa-right-to-bracket"></i> Đăng Xuất</p>
            </a>
          </div>
        </div>
      </div>
    <?php
}
?>