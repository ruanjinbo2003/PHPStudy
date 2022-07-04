<?php
/**
 * 案例，0到9，a到z,A到Z中随机生成4个字母或数字组成验证码,并把验证码进行反转输出
 *  str_shuffle()  随机生成一个新的字符串
 *  strlen()  求字符串长度
 *  strrev() 反转函数
 *  substr() 截取字符串
 *  strtoupper() 把小写字母转换为大写字母
 *  .=  拼接符号
 *  .
 */

$str = "abcdefghijklmnopqrstuvwxyz";
$str.= strtoupper($str)."0123456789";   //$str = $str.strtoupper($str)."0123456789";
$str = str_shuffle($str);
$str = substr($str,strlen($str)-20,4);
echo $str = strrev($str);




