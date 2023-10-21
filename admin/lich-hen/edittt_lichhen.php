<?php
if(is_array($lichhen)){
  extract($lichhen);
}
?>
<article class="h-full ml-14 mt-14 mb-10 md:ml-64 text-black">
  <form action="index.php?action=updatetrangthai" method="post" class="grid " style="padding: 0px 50px;"
    enctype="multipart/form-data">
    <input
      class="bg-gray-200 appearance-none border-2 border-gray-200 rounded py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500 hidden"
      type="text" name="id_lichhen" value="<?=$id_lichhen?>" readonly>

    <p class="text-[20px] ">Trạng Thái Lịch Hẹn</p>
    <select
      class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
      name="id_trangthai" required>

      <?php
       foreach ($listtrangthai as $trangthai) { 
        extract($trangthai); 
        
        if($id_trangthai==$id_trangthai) $s="selected"; else $s="";
       echo '<option value="'.$id_trangthai.'" '.$s.'>'.$name_trangthai.'</option>';
       }
           ?>
      
    </select>

    <br>
    <input class="bg-[red] text-white mt-[20px] px-5 py-2 cursor-pointer hover:bg-[blue]" type="submit"
      value="Sủa Trạng Thái" name="updatetrangthai">

  </form>

</article>

</body>


</html>