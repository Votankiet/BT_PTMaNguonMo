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
$x = -($b/$a);
echo "x can tim la: $x"

?>