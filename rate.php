<?php  
include('header.php');
    $dtype = array("美金", "港幣", "英鎊");
    $rate = array(27.38, 3.405, 35.61);
?>

<form action="rate.php" method="post">
要換算的幣別：
<select name=dtypeindex>
<?php
    for($i=0; $i<count($dtype); $i++){
        echo "<option value=$i>" . $dtype[$i] . "</option>";
    }
?>
</select>
<br>

要換算的金額：<input type="text" name="dollar" value=1000 size=8>元
<input type="submit" value='換算'> 
</form>
<?php
    $i = $_POST["dtypeindex"]; //顯示資訊
    $dollar = $_POST["dollar"]; 
    if ($i==""){
        $i=0;
    }
    if ($dollar==""){
        $dollar=1000;
    }
    echo $dtype[$i] . ":" . $dollar . "元等於台幣" .
    round($dollar*$rate[$i], 2) . "元";
?>

<?php  
include('footer.php');
?>

