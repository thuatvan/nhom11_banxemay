<body class="bg-gray-100 ml-[300px]">
    <div class="container mx-auto py-8 text-center" >
        <h1 class="text-2xl font-semibold mb-4">Danh sách Giỏ Hàng</h1>
        
        <table class="table-auto w-full bg-white shadow-md rounded-lg">
            <thead>
                <tr>
                    <th class="px-4 py-2">ID</th>
                    <th class="px-4 py-2">Sản phẩm</th>
                    <th class="px-4 py-2">Tên Khách Hàng</th>
                    <th class="px-4 py-2">Số Điện Thoại</th>
                    <th class="px-4 py-2">Địa Chỉ</th>
                </tr>
            </thead>
            <tbody>
       <?php
global $host, $userhost, $passhost, $dbname; 
$conn = mysqli_connect($host, $userhost, $passhost, $dbname);

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['delete'])) {

    $id_giohang_to_delete = $_POST['delete'];

   
    $query_delete = "DELETE FROM giohang WHERE id_giohang = $id_giohang_to_delete";
    $result_delete = mysqli_query($conn, $query_delete);

    if ($result_delete) {
        echo "<script>alert('Xóa giỏ hàng thành công !')</script>";
    } else {
        echo "Lỗi  " . mysqli_error($conn);
    }
}

$query_select = "SELECT g.id_giohang, s.name_sanpham, g.hoTen, g.soDienThoai, g.diaChi FROM giohang g
                  JOIN sanpham s ON g.id_sanpham = s.id_sanpham";
$result_select = mysqli_query($conn, $query_select);


while ($row = mysqli_fetch_assoc($result_select)) {
    echo "<tr>";
    echo "<td class='px-4 py-2'>" . $row['id_giohang'] . "</td>";
    echo "<td class='px-4 py-2'>" . $row['name_sanpham'] . "</td>";
    echo "<td class='px-4 py-2'>" . $row['hoTen'] . "</td>";
    echo "<td class='px-4 py-2'>" . $row['soDienThoai'] . "</td>";
    echo "<td class='px-4 py-2'>" . $row['diaChi'] . "</td>";
   
  echo "<td class='px-4 py-2'><form method='POST' action=''><button type='submit' name='delete' value='" . $row['id_giohang'] . "' class='bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600'>Xóa</button></form></td>";

    echo "</tr>";
}



?>


            </tbody>
        </table>
    </div>
</body>