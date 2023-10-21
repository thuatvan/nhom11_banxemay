<?php
if (isset($_GET['id_sanpham'])) $id_sanpham=$_GET['id_sanpham']; else $id_sanpham=0;
   global $host, $userhost, $passhost, $dbname; 
                
$servername = $host;
$username = $userhost;
$password = $passhost;
$dbname = $dbname;

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "UPDATE sanpham SET view_sanpham=view_sanpham+1 WHERE id_sanpham=".$id_sanpham;

if ($conn->query($sql) === TRUE) {
  // echo "Record updated successfully";
} else {
  // echo "Error updating record: " . $conn->error;
}

$sql = "SELECT * FROM sanpham where id_sanpham=".$id_sanpham;
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    // echo "id: " . $row["id"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>

<main style="padding: 0px 30px;">

  <div class="flex">
    <aside class="w-[20%]  hidden md:block">
      <div class="shadow-2xl">
        <h1 class="bg-[black] text-white text-center py-[10px]">Danh Mục</h1>
        <?php
       
        foreach($listdanhmuc as $danhmuc){
    	extract($danhmuc);
 echo ' <div class="">
          <a href="index.php?action=sanpham&id_danhmuc='.$id_danhmuc. '"> <p style="transition: 0.5s;" class="py-[5px] pl-[10px] hover:bg-[black] hover:text-white cursor-pointer">
            '.$name_danhmuc.'
        </p></a>
        <hr>

      </div>';
      }
      ?>
      </div>
      <br>
      <br>
      <img src="https://img.pikbest.com/origin/05/82/32/72SpIkbEsTBbF.jpg!f305cw" alt="">
      <br>
      <img src="data:image/jpeg;base64,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">
      <br>
      <img src="data:image/jpeg;base64,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" alt="">
      <br>
      <br>
      <br>





    </aside>

    <article class="w-[80%] ">
      <div class="grid grid-cols-2">
        <?php
      extract($onesp);
      ?>
        <?php
      $hinh = $img_path.$img_sanpham;
      echo '
       <img class="w-[500px] " src="'.$hinh.'">

     ';
      ?>
        <div>

          <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
            <h2 class="text-sm title-font text-gray-500 tracking-widest">Thông Tin</h2>
            <h1 class="text-gray-900 text-3xl title-font font-medium mb-1">
              <?=$name_sanpham?>
            </h1>
            <p class="flex items-center gap-[3px] text-[black] my-[10px]">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star "></i>
              <i class="fa-solid fa-star "></i>
            </p>
            <h1 class="text-[red] text-[25px]">
              <?=number_format($price_sanpham)?> VNĐ
            </h1>
   <form action="" method="post">
                <div class="modal-content" style="display:none;">
                  <span class="close">&times;</span>
                  <h1 class="text-center text-[40px] font-bold">Đặt Lịch Hẹn</h1>
                  <div class="mt-[20px]" style="padding: 0px 50px;">
                    <div>
                      <h1 class="text-[25px]" style="font-family: Arial, Helvetica, sans-serif;">Thông Tin Khách Hàng
                      </h1>
                      <div class="my-[20px]">
                        <input name="id_taikhoan"
                          class="hidden bg-gray-200 appearance-none border-2 border-gray-200 rounded py-2 px-4 text-gray-700 leading-tight focus:outline-none  "
                          type="text" value="<?=$id_taikhoan?>" readonly>
                        <label for="" class="ml-[20px]">Họ và tên</label>
                        <input name="name_taikhoan"
                          class="bg-gray-200 appearance-none border-2 border-gray-200 rounded py-2 px-4 text-gray-700 leading-tight focus:outline-none"
                          type="text" value="<?=$name_taikhoan?>" readonly>


                        <label class="ml-[60px]" for="">Số Điện Thoại</label>
                        <input name="phone_taikhoan"
                          class="bg-gray-200 appearance-none border-2 border-gray-200 rounded py-2 px-4 text-gray-700 leading-tight focus:outline-none "
                          type="text" value="<?=$phone_taikhoan?>" readonly>
                        <label class="ml-[60px]" for="">Email</label>
                        <input name="email_taikhoan"
                          class="bg-gray-200 appearance-none border-2 border-gray-200 rounded py-2 px-4 text-gray-700 leading-tight focus:outline-none "
                          type="text" value="<?=$email_taikhoan?>" readonly>
                      </div>
                      <p class="text-[blue] text-[14px]">Bạn Muốn Cập Nhập Thông Tin ? <span
                          class="text-[red] cursor-pointer"><a href="index.php?action=edit_taikhoan">Bấm Vào
                            Đây</a></span></p>
                    </div>
                    <div>
                 

                    </div>
                    <div>
                      <h1 class="text-[25px]" style="font-family: Arial, Helvetica, sans-serif;">Tên Xe Muốn Xem</h1>
                      <input
                        class="bg-gray-200 appearance-none border-2 border-gray-200 rounded py-2 px-4 text-gray-700 leading-tight focus:outline-none ml-[20px]"
                        type="text" name="name_sanpham" value="<?=$name_sanpham?>" readonly>
                    </div>
                    <div>
                      <!-- <h1 class="text-[25px]" style="font-family: Arial, Helvetica, sans-serif;">Tên Xe Muốn Xem</h1> -->
                      <!-- <input
                        class="hidden bg-gray-200 appearance-none border-2 border-gray-200 rounded py-2 px-4 text-gray-700 leading-tight focus:outline-none ml-[20px]"
                        type="text" name="id_sanpham" value="<?=$id_sanpham?>" readonly> -->
                    </div>
                 

                  </div>

               
                </div>
            
            <button id="myBtn" name="btn_insert_lichhen"
              class="bg-[black] text-white px-[25px] py-[7px] mt-[20px] rounded hover:bg-[white] hover:text-[black] hover:border-[1px] hover:border-[black] duration-700">Thêm Vào Giỏ Hàng</button>  </form>
            <?php
    if(!isset($_SESSION["taikhoan"]) && !isset($_SESSION["nhanvien"])) {
          ?>
            <div id="myModal" class="modal pt-[300px]">
    
              <!-- <div class="modal-content ">
                <span class="close">&times;</span>
                <p><a href="index.php?action=dangnhap">Vui Lòng Đăng Nhập !</a> </p>
              </div> -->

            </div>
            <?php
           }
           elseif(isset($_SESSION["nhanvien"])){
            extract($_SESSION['nhanvien']);
            ?>
            <div id="myModal" class="modal pt-[300px]">
              <!-- Modal content -->
              <div class="modal-content ">
                <span class="close">&times;</span>
                <p><a href="#">Bạn đang đăng nhập với tư cách nhân viên !</a> </p>
              </div>

            </div>
            <?php
           }else{
             extract($_SESSION['taikhoan']);
              
             ?>
            <div id="myModal" class="modal">
              <!-- Modal content -->
              <!-- <form action="" method="post">
                <div class="modal-content">
                  <span class="close">&times;</span>
                  <h1 class="text-center text-[40px] font-bold">Đặt Lịch Hẹn</h1>
                  <div class="mt-[20px]" style="padding: 0px 50px;">
                    <div>
                      <h1 class="text-[25px]" style="font-family: Arial, Helvetica, sans-serif;">Thông Tin Khách Hàng
                      </h1>
                      <div class="my-[20px]">
                        <input name="id_taikhoan"
                          class="hidden bg-gray-200 appearance-none border-2 border-gray-200 rounded py-2 px-4 text-gray-700 leading-tight focus:outline-none  "
                          type="text" value="<?=$id_taikhoan?>" readonly>
                        <label for="" class="ml-[20px]">Họ và tên</label>
                        <input name="name_taikhoan"
                          class="bg-gray-200 appearance-none border-2 border-gray-200 rounded py-2 px-4 text-gray-700 leading-tight focus:outline-none"
                          type="text" value="<?=$name_taikhoan?>" readonly>


                        <label class="ml-[60px]" for="">Số Điện Thoại</label>
                        <input name="phone_taikhoan"
                          class="bg-gray-200 appearance-none border-2 border-gray-200 rounded py-2 px-4 text-gray-700 leading-tight focus:outline-none "
                          type="text" value="<?=$phone_taikhoan?>" readonly>
                        <label class="ml-[60px]" for="">Email</label>
                        <input name="email_taikhoan"
                          class="bg-gray-200 appearance-none border-2 border-gray-200 rounded py-2 px-4 text-gray-700 leading-tight focus:outline-none "
                          type="text" value="<?=$email_taikhoan?>" readonly>
                      </div>
                      <p class="text-[blue] text-[14px]">Bạn Muốn Cập Nhập Thông Tin ? <span
                          class="text-[red] cursor-pointer"><a href="index.php?action=edit_taikhoan">Bấm Vào
                            Đây</a></span></p>
                    </div>
                    <div>
                 

                    </div>
                    <div>
                      <h1 class="text-[25px]" style="font-family: Arial, Helvetica, sans-serif;">Tên Xe Muốn Xem</h1>
                      <input
                        class="bg-gray-200 appearance-none border-2 border-gray-200 rounded py-2 px-4 text-gray-700 leading-tight focus:outline-none ml-[20px]"
                        type="text" name="name_sanpham" value="<?=$name_sanpham?>" readonly>
                    </div>
                    <div>
                    <?=$id_sanpham?>
                    </div>
                 

                  </div>

                  <button id="myBtn" name="btn_insert_lichhen"
                    class="ml-[43%] mt-[20px] bg-[blue] text-[white] py-[10px] px-[30px] rounded-[6px]">Đặt Lịch
                    Hẹn</button>
                </div>
              </form> -->

            </div>
            <?php
 
           }?>
          </div>
        </div>


      </div>

      <div class="shadow-2xl text-center">
        <p class="text-[20px]">Mô Tả</p>
        <?php
      
      $hinh1 = $img_path.$img_sanpham1;
      echo '
       <img class="w-[500px] " src="'.$hinh1.'">

     ';
      ?>
        <p style="padding: 20px 40px;"><?=$description_sanpham?></p>
      </div>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
      <script>
      $(document).ready(function() {
        $("#binhluan").load("view/binhluan/binhluanform.php", {
          id_sanpham: <?=$id_sanpham?>
        });
      });
      </script>
      <div id="binhluan">

      </div>
    </article>

  </div>
</main>

<style>
/* The Modal (background) */
.modal {
  display: none;
  /* Hidden by default */
  position: fixed;
  /* Stay in place */
  z-index: 100;
  /* Sit on top */
  left: 0;
  top: 0;
  width: 100%;
  /* Full width */
  height: 100%;
  /* Full height */
  overflow: auto;
  /* Enable scroll if needed */
  background-color: rgb(0, 0, 0);
  /* Fallback color */
  background-color: rgba(0, 0, 0, 0.4);
  /* Black w/ opacity */
}

/* Modal Content/Box */
.modal-content {

  border-radius: 30px;
  background-color: #fefefe;
  margin-top: 2%;
  margin-left: 11%;
  /* 15% from the top and centered */
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
  /* Could be more or less, depending on screen size */
}

/* The Close Button */
.close {
  color: #aaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: black;
  text-decoration: none;
  cursor: pointer;
}
</style>

<body>

</body>
<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>