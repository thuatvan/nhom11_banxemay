<?php
if(is_array($category)){
  extract($category);
}
?>
<article class="h-full ml-14 mt-14 mb-10 md:ml-64 text-black">

  <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
      <form action="index.php?action=update_category" method="POST">
        <label class="">Mã loại</label> <br>
        <input
          class="shadow appearance-none border rounded  py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
          name="maloai" value="auto number" readonly>
        <br>
        <input type="hidden" name="id_danhmuc"
          value="<?php if(isset($id_danhmuc)&&($id_danhmuc>0)) echo $id_danhmuc ;?>">
        <label for="">Danh mục</label> <br>
        <input
          class="bg-gray-200 appearance-none border-2 border-gray-200 rounded py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500"
          type="text" name="name_danhmuc" value="<?=$name_danhmuc?>">
        <br><br>
        <button
          class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline "
          type="submit" name="update_category" class="btn-update">Cập Nhập</button>
      </form>
    </div>
  </div>
</article>