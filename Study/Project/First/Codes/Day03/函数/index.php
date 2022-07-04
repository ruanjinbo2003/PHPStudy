<?php
declare(strict_types=1);
function add($a, $b) {
    return $a + $b ;
}
/**
 * 函数:具有一定的封装性.可重复使用性,把一堆代码写在函数中,在使用的时候,调用即可,调用1次执行一次
 * 格式 function 函数名(变量1,变量2) {
        代码语句
 *      如果有返回值,则采用return 关键字进行返回
 * }
 * 调用 函数名(参数1,参数2);
 */

/*function sub() { //方法上的参数,形参
    echo 1-2;
}
sub();  //传递的参数为实参,*/

/*function sub1($a, $b) {
    return $a - $b;
}
echo sub1(3.5,20);*/

/*function a () {
    echo "执行了a函数";
}
function b () {
    echo "执行了b函数";
}

function c ($a,$b) {
    echo $a + $b;
}
function d($a,$b) {
    echo $a - $b;
}
$func = "d";
$func(1,2);*/


//匿名函数
$sum = function($a,$b) {
    return $a + $b;
};
$result = $sum(3,5);
//echo $result;

//箭头函数,需要在PHP7.4版本及以上才可以使用
$sum1 = fn($a,$b)=>print($a+$b);
$sum1(3,40);


