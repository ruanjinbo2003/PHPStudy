<?php
/*declare(encoding='utf-8');*/
/*$arr = [1,2,3,4,5,6,7,8];
foreach($arr as $key => $value) {
    echo $key."----->".$value;
    echo "<br />";
}*/

/*$brr = ['a'=>1,'b'=>2,'c'=>3,'d'=>4];
foreach ($brr as $key => $val) {
    echo $key."----->".$val;
    echo "<br />";
}

echo $brr['b'];*/

/*for ($i = 1; $i<10; $i++) {
    for ($j = 1; $j<=$i;$j++) {
        if($j>=5) {
            continue 2;
        }
        echo $j."x".$i."=".$i*$j."&nbsp;&nbsp;";
    }
    echo "<p></p>";
}*/
/*
declare(ticks = 1) {
    echo "这是declare(ticks = 1)";
}
echo "--------------";
declare(ticks = 2) {
    echo "这是declare(ticks = 2)";
}
echo "--------------";*/

function add ($a , $b) {
    //return $a + $b >= 6 ? '错' : '对';
    if($a + $b > 5) return "错";
    return "对";

}
$result = add(2,3);
echo $result;





