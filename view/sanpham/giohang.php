<?php


if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array(); 
}

if (isset($_GET['remove'])) {
    $removeId = $_GET['remove'];
    foreach ($_SESSION['cart'] as $key => $cartItem) {
        if ($cartItem['id_sanpham'] == $removeId) {
            unset($_SESSION['cart'][$key]);
        }
    }
}

echo "<div class=' pl-[120px] pr-[120px] mt-10 p-4 bg-gray-100 rounded shadow '>";
echo "<h2 class='text-2xl font-semibold mb-4'>Giỏ hàng của bạn:</h2>";

echo "<form action='index.php?action=thanhtoan' method='POST' class='mb-4'>";
echo "<label class='block font-semibold mb-2' for='hoTen'>Họ và tên:</label>";
echo "<input required type='text' id='hoTen' name='hoTen' class='border rounded px-3 py-2 w-full focus:outline-none focus:border-blue-500'>";

echo "<label class='block font-semibold mb-2' for='soDienThoai'>Số Điện Thoại:</label>";
echo "<input required type='text' id='soDienThoai' name='soDienThoai' class='border rounded px-3 py-2 w-full focus:outline-none focus:border-blue-500'>";

echo "<label class='block font-semibold mb-2' for='diaChi'>Địa Chỉ:</label>";
echo "<input required type='text' id='diaChi' name='diaChi' class='border rounded px-3 py-2 w-full focus:outline-none focus:border-blue-500'>";


echo "<ul class='space-y-4'>";
foreach ($_SESSION['cart'] as $cartItem) {
    $id_sanpham = $cartItem['id_sanpham'];
    $id_taikhoan = $cartItem['id_taikhoan'];

    global $host, $userhost, $passhost, $dbname; 
    $conn = mysqli_connect($host, $userhost, $passhost, $dbname);
    $query = "SELECT name_sanpham, price_sanpham, img_sanpham FROM sanpham WHERE id_sanpham = $id_sanpham";
    $result = mysqli_query($conn, $query);
    $product = mysqli_fetch_assoc($result);

    echo "<li class='flex items-center space-x-4'>";
    echo "<img src='$img_path{$product['img_sanpham']}' alt='Sản phẩm' class='w-20 h-20'>";
    echo "<div>";
    echo "<h3 class='text-xl font-semibold'>{$product['name_sanpham']}</h3>";
    echo "<p class='text-gray-500'>Giá: {$product['price_sanpham']}đ</p>";
    echo "<a href='index.php?action=xemgiohang&remove=$id_sanpham' class='text-red-500 hover:underline'>Xóa khỏi giỏ hàng</a>";
    echo "</div>";
    echo "</li>";

    mysqli_close($conn);
}

echo "</ul>";

echo "<button type='submit' class='block mt-4 py-2 px-4 bg-blue-500 text-white font-semibold rounded hover:bg-blue-600'>Thanh toán</button>";
echo "</form>";

