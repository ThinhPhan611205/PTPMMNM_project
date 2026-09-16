<!DOCTYPE html>
<html>
<head>
    <title>Bang cuu chuong</title>
</head>
<body>

<?php
for ($i = 1; $i <= 10; $i++) {
    echo "<h3>Bảng cửu chương $i</h3>";
    for ($j = 1; $j <= 10; $j++) {
        echo "$i x $j = " . ($i * $j) . "<br>";
    }
    echo "<hr>";
}
?>

</body>
</html>