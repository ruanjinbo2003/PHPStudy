<?php
/**
 * if 语句，条件判断语句
 * boolean 取值范围 true  false
 * if (条件语句) {
     语句块;
 * }
 *
 * if (条件语句) {

 * }else{

 * }
 * if (条件语句) {

 * }else if(条件语句2){

 * }else{

 * }
 */
/**
 * 求10是奇数还是偶数
 * 能被2整除，是偶数，否则是奇数
 */
/*$a = 11;
if($a % 2 == 0) {
    echo $a."是偶数";
}else{
    echo $a."是奇数";
}*/

/*$b = "abc";
if($b > 10) {
    echo "a";
}
if ($b == 10) {
    echo "b";
}
if($b < 10){
    echo "未知";
}*/

/*$now = 7;
$wather = "下雨";

if($now >=6) {
    if($wather == "下雨") {
        echo "在家";
    }else{
        echo "外出游玩";
    }
}else{
    echo "去公司上班";
}*/


/**
 * switch (变量) {
       case 变量值 :
 *       语句;
 *       break;
 *      case 变量值2 :
 *       语句;
 *       break;
 *      default :
 *       语句;
 *       break;
 * }
 */

$week = 3;
$wather = '天晴';
if($week > 0 && $week < 8) {
    switch ($week){
        case 1 :
            echo "星期一";
            break;
        case 2 :
            echo "星期二";
            break;
        case 3 :
            echo "星期三";
            exit;
        case 4 :
            echo "星期四";
            break;
        case 5 :
            echo "星期五";
            break;
        case 6 :

        case 7 :
            if($wather == '天晴') {
                echo "外出游玩";
            }else{
                echo "在家";
            }
            break;
        default:
            echo "星期日";
            break;
    }
}else{
    echo "您输入的数字有错误";
}
