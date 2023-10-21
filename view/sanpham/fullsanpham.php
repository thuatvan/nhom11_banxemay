    <article class="w-[100%] ">
      <h1 style="font-family: 'Roboto', sans-serif;"
        class="text-[30px] ml-[20px] border-l-[5px] border-black pl-[10px]">
        Tất Cả Sản Phẩm
      </h1>

      <div class="grid grid-cols-1 md:grid-cols-4 gap-[15px]" style="padding: 10px 20px;">
        <?php
     foreach($loadallsanpham as $sanpham){
    	extract($sanpham);
      $hinh = $img_path.$img_sanpham;
        echo '
        <div class="shadow-2xl product " style="padding: 20px 25px;">
      <a href="index.php?action=sanphamchitiet&id='.$id_sanpham. '">    <img class="w-[280px] h-[210px]" src="'.$hinh.'"> </a>
        <p class="font-bold text-[20px] text-center mt-[10px]">
          '.$name_sanpham.'
        </p>
        <p class="flex items-center gap-[3px] justify-center text-[yellow] my-[10px]">
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        </p>
        <div class="text-center">
          <p class="mt-[20px] text-[22px] text-[red] font-bold">
            '.number_format($price_sanpham).' VNĐ
          </p>
        </div>

        <div class="flex items-center justify-center my-[30px] gap-[40px]">
          <button style="transition: 0.5s;"
            class="bg-[black] px-[20px] py-[5px] text-white font-bold border-[black] border border-[3px] hover:bg-[white] hover:text-[black] "><a href="index.php?action=sanphamchitiet&id_sanpham='.$id_sanpham. '">Xem Chi Tiết</a></button>
       
        </div>
      </div>';
      }
      ?>
      </div>
    </article>