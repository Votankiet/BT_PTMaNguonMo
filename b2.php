<form method="post" action="">
    Nhập số nguyên a: <input type="text" name="a"><br>
    Nhập số nguyên b: <input type="text" name="b"><br>
    <input type="submit" value="Tính toán">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Lấy giá trị của biến a và b từ biểu mẫu
    $a = intval($_POST['a']);
    $b = intval($_POST['b']);
}
    // Kiểm tra xem a và b đã nhập là số nguyên hợp lệ hay không
    if (is_numeric($a) && is_numeric($b)) {
        // Tính phần dư khi chia a cho b
        $phanDu = $a % $b;

        // Hiển thị kết quả
        echo "Phần dư khi chia $a cho $b là: $phanDu";
    } else {
        echo "Vui lòng nhập hai số nguyên hợp lệ.";
    }

?>