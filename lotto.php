
<?php
include('header.php');
echo "號碼：";
for ($i=1; $i<=6; $i++) {
        echo "<button>" . rand(1, 49) . "</button>";
    }
echo "<br>特別號：<button>" . rand(1, 49) . "</button>";
include('footer.php');
?>