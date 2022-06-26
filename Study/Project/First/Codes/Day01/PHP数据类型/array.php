<?php
/*$arr = array(1,2,3,4,5);
$arr2 = [1,2,3,4,5];
print_r($arr);
print_r($arr2);

$a = 1;
$b = 2;
$c = 3;

$arr3 = [$a,$b,$c];
print_r($arr3);
echo "<br />一维索引数组取值开始<br />";
echo $arr3[0];
echo "<br />";
echo $arr3[1];
echo "<br />";
echo $arr3[2];
echo "<br />一维索引数组取值结束<br />";

$arr4 = ["aa"=>1,"bb"=>2,"cc"=>3];
var_dump($arr4);

echo "<br />一维关联数组取值开始<br />";
echo $arr4["aa"];
echo "<br />";
echo $arr4["bb"];
echo "<br />";
echo $arr4["cc"];
echo "<br />一维关联数组取值结束<br />";

echo "<p>=======二维数组===========</p>";
$arr5 = [[1,2,3],[4,5],[7,"abc"]];
var_dump($arr5);

echo "<br />二维数组取值开始<br />";
echo $arr5[0][1];   // 2
echo "<br />";
echo $arr5[1][0];   // 4
echo "<br />";
echo $arr5[2][1];  // abc
echo "<br />二维数组取值结束<br />";*/

//二维数组的关联数组
$arr6 = ["first"=>["A"=>"a","b","c"],"second"=>["d","e","f"]];
var_dump($arr6);

echo $arr6["first"]["A"];  //a
echo $arr6["first"][1];  //b

if(is_array(3)) {
    echo "是数组";
}else{
    echo "不是数组";
}

echo "<br />PHP的输出函数<br />";
//PHP的输出函数
//第一种: echo
$age = 18;
echo $age;
echo "<br />";
//第二种: print
print $age;
echo "<br />";
//第三种: print()
print($age);
echo "<br />";
//第四种: print_r()  数组打印函数
print_r($arr6);
echo "<br />";
//第五种: var_dump()  数组打印函数
var_dump($arr6);
echo "<br />";
$sex = "男";
var_dump($sex);
echo "<br />";
$age = 25;
var_dump($age);






