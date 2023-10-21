<?php
if(is_array($sanpham)){
  extract($sanpham);
}
 $hinhpath = "../uploads/".$img_sanpham;
   $hinh="<img width='300px' height='200px' src=".$hinhpath.">";
 $hinhpath1 = "../uploads/".$img_sanpham1;
   $hinh1="<img width='300px' height='200px' src=".$hinhpath1.">";


?>

<article class="h-full ml-14 mt-14 mb-10 md:ml-64 text-black">
  <form action="index.php?action=updateproduct" method="post" class="grid " style="padding: 0px 50px;"
    enctype="multipart/form-data">
    <input
      class="bg-gray-200 appearance-none border-2 border-gray-200 rounded py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500"
      type="hidden" name="id_sanpham" value="<?=$id_sanpham?>">
    <p class="text-[20px] ">Tên Sản Phẩm</p>
    <input
      class="bg-gray-200 appearance-none border-2 border-gray-200 rounded py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500"
      type="text" name="name_sanpham" value="<?=$name_sanpham?>">


    

   
    <p class="text-[20px] ">Giá Sản Phẩm</p>
    <input
      class="bg-gray-200 appearance-none border-2 border-gray-200 rounded py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500"
      type="number" name="price_sanpham" value="<?=$price_sanpham?>">
    <p class="text-[20px] ">Up Ảnh Mới</p>
    <input
      class="bg-gray-200 appearance-none border-2 border-gray-200 rounded py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500"
      type="file" name="img_sanpham">
    <p class="text-[20px] ">Ảnh Cũ</p>
    <?=$hinh?>
    <p class="text-[20px] ">Up Ảnh Mô tả</p>
    <input
      class="bg-gray-200 appearance-none border-2 border-gray-200 rounded py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500"
      type="file" name="img_sanpham1">
  
    <p class="text-[20px] ">Ảnh Cũ Mô tả</p>
    <?=$hinh1?>
    <p class="text-[20px] ">Mô Tả</p>
    <textarea name="description_sanpham" id="description_sanpham"
      class="bg-gray-200 appearance-none border-2 border-gray-200 rounded py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500"
      cols="30" rows="10">
     <?=$description_sanpham?>
    </textarea>


    <p class="text-[20px]  hidden">Lượt Xem</p>
    <input
      class="bg-gray-200 appearance-none border-2 border-gray-200 rounded py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500"
      type="hidden" name="view" readonly>
    <p class="text-[20px] ">Danh Mục</p>
    <select
      class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
      name="id_danhmuc" required>
      <?php
              
       foreach ($listdanhmuc as $danhmuc) { 
        extract($danhmuc); 
        if($id_danhmuc==$id_danhmuc) $s="selected"; else $s="";
       echo '<option value="'.$id_danhmuc.'" '.$s.'>'.$name_danhmuc.'</option>';
       }
           ?>


    </select>

    <br>

    <input class="bg-[red] text-white mt-[20px] px-5 py-2 cursor-pointer hover:bg-[blue]" type="submit"
      value="Sửa Sản Phẩm" name="update">

  </form>

</article>

</body>


</html>