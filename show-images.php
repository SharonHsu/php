
<?php
include('header.php');
for ($i=1; $i<=5; $i++) {
    if ($i%5==1) {
        echo "<br>";
    }
    echo "<a href='image/$i.jpg'><img src='image/$i.jpg' alt='$i.jpg' width=100 height=80></a>";
} 
include('footer.php');
?>


