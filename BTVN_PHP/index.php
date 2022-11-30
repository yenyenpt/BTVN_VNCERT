<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Bai1</h2>
<?php

    $a = array(31,80,23,60,9,160,45,8,200);
    for ($i = 0; $i < count($a); $i++) {
        for($j = $i +1; $j < count($a); $j++) {
            if($a[$i] < $a[$j]) {
                $tg = $a[$i];
                $a[$i] = $a[$j];
                $a[$j] = $tg;
            }
        }
    }
    echo 'Số lớn nhất trong mảng trên là: '.$a[0];
    ?>

    <h2>Bai2</h2>
    <?php
    $a = array(3,5,10,39,29,3);
    for($i=0; $i < count($a); $i++) {
        if($i+1 == count($a)-$i || $i == count($a)-$i) {
            break;
        }
        $tg = $a[$i];
        $a[$i] = $a[count($a)-($i+1)];
        $a[count($a)-($i+1)]= $tg;   
    }
    
    echo 'Mảng sau khi sắp xếp la: ';
    foreach($a as $value) {
        echo $value.'. ';
    }
    ?>
    <h2>Bai3</h2>
    <?php
    $a = array(2,30,12,39,45,73,10);
    for ($i = 0; $i < count($a); $i++) {
        for($j = $i +1; $j < count($a); $j++) {
            if($a[$i] > $a[$j]) {
                $tg = $a[$i];
                $a[$i] = $a[$j];
                $a[$j] = $tg;
            }
        }
    }
    echo 'Mảng sau khi đươc sắp xếp tăng dần: ';
    foreach($a as $value) {
        echo $value.'. ';
    }
    ?>
    <h2>Bai4</h2>
    <?php
    $string = '        pHạM ThỊ yếN           ';
    $newString = ucwords(strtolower(trim($string)));
    echo 'Chuỗi chuẩn hóa là: '.$newString;
    ?> 

    <h2>Bai5</h2>
    <?php
        $name ='Pham Thi Yen';
        $aName = explode(' ', $name);
        echo 'Họ : '.$aName[0];
        echo '<br/>';
        echo 'Đệm : '; for($i = 1; $i <= count($aName) -2; $i++) { echo $aName[$i].' ' ;};
        echo '<br/>';
        echo 'Tên : '.$aName[count($aName) - 1];
    ?>
    <h2>Bai6</h2>
    <?php
    $string = 'SovlelvoS';
    $curentString = $string;
    for($i = 0; $i < strlen($string); $i++) {
        if($i+1 == strlen($string)-$i || $i == strlen($string)-$i) {
            break;
        }
        $tg = $string[$i];
        $string[$i] = $string[strlen($string)-($i+1)];
        $string[strlen($string)-($i+1)]= $tg;   
    }
    if($curentString == $string) {
        echo $curentString.' Đây là chuỗi Palindrome ';
    } else {
        echo $curentString.'  Đây không phải là chuỗi Palindrome ';
      

    }
    ?>


    
</body>
</html>
