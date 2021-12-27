<?php  
    include('header.php');

    $names = array('小黃', '小明', '小華');
    $height = array(175, 165, 170);
    $weights = array(45, 55, 60);
    for($i=0; $i<count($names); $i++){
        $bmi =  $weights[$i] / ($height[$i]/100)**2;
        echo $names[$i] . "的BMI是" . round($bmi,2) . "<br>";

    }
    include('footer.php');
?>
