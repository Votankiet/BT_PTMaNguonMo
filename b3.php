<form method="post" action="">
    Nhập số nguyên F: <input type="text" name="a"><br>
    <input type="submit" value="Tính toán">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Lấy giá trị của biến a và b từ biểu mẫu
    $a = intval($_POST['a']);
}
    $doC = 5/9*($a-32);
    echo "do C can tim la: $doC"

?>