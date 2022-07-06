<?php
/*$arr = array(1,2,3,"4",5,[2,1,0]);
$brr = [1,2,3,4,5,6];
var_dump($arr);*/
/*$crr = range("0","9");
print_r($crr);*/
//$drr = array(1,2,3,"4",5,[2,1,0],"nihao");
//echo count($drr);
//echo sizeof($drr);
/*for ($i= 0;$i<count($drr);$i++) {
    if(!is_array($drr[$i])){
        echo $drr[$i]."\n";
    }else{
        for ($j= 0;$j<count($drr[$i]);$j++) {
            echo $drr[$i][$j]."\n";
        }
    }
}*/
/*$str = "1,2,3,4,5,6";
$arr = explode(",",$str);
$str1 = implode("--",$arr);
echo $str1;*/

/*$arr = ["zhangsan","lisi","wangwu","zhaoliu","tianqi"];
if(in_array("wangwu",$arr)){
    echo "找到了";
}else{
    echo "没有找到";
}*/
/*$arr = ["lisi","zhangsan","lisi","wangwu","zhaoliu","tianqi","zhaoliu","tianqi"];
$brr = array_unique($arr);
print_r($brr);*/

$arr = [4,5,6,7,8];
echo array_unshift($arr,"3","4","5");
print_r($arr);

array_push($arr,"9");
print_r($arr);

array_shift($arr);
print_r($arr);

array_pop($arr);
print_r($arr);

/*list($a,$b,$c) = $arr;
echo $a,$b,$c;*/
/*echo "\n============\n";
$arr1 = [1,2,3,6,5];
$arr2 = [1,2,4,5,7];
/*$arr3 = array_intersect($arr1,$arr2);
print_r($arr3);*/
/*$arr4 = array_diff($arr2,$arr1);
print_r($arr4);*/

/*$arr = [1,2,1,3,3,4,5,6,7,8,9,10,7,8,9,10,8,9,10];
$brr = array_flip(array_flip($arr));
print_r($brr);*/
/*$arr1 = [1,2,3];
$arr2 = [4,5,6];
$arr3 = ["zhangsan",8,9];
$brr = array_merge($arr1,$arr2,$arr3);
print_r($brr);
$strArr = ['name'=>'zhangsan','age'=>20,'gender'=>'man'];
$flag = key_exists('name',$strArr);
//echo $flag;

$key = array_rand($strArr);
echo $strArr[$key];
print_r($strArr);
$strBrr = array_reverse($strArr);
print_r($strBrr);

print_r(array_reverse([1,2,3,4,5,6,7]));*/

//echo array_search("3",[1,2,3,4,5,6,7],false);

//$array = array('a' => 'blue', 'b' => 'red', 'c' => 'green', 'd' => 'red');

//echo $key = array_search('green', $array,true); // $key = 2;

/*$input = array("red", "green", "blue", "yellow");
array_splice($input, 2,1,["zhangsan","lisi","wangwu"]);
print_r($input);*/

//echo array_sum(range(1,10));
/*$arr = range(1,10);
shuffle($arr);
print_r($arr);*/
//$strBrr = array_reverse($arr);
/*$arr = [3=>"e",5=>"d",6=>"a",0=>"b",4=>"c",7=>"d"];
echo "\n未排序\n";
print_r($arr);
//sort($arr);  //升序排列数组
//rsort($arr);  //降序排列数组
//ksort($arr); //升序按数组的键进行排列
krsort($arr); //降序按数组的键进行排列
echo "\n排序后\n";
print_r($arr);*/

/*$arr = ["a","b","c","a","c","b","c","a","b","c"];
$brr = array_count_values($arr);
print_r($brr);*/

$arr = ['name'=>"zhangsan","age"=>20,"sex"=>'男'];
/*$brr = array_keys($arr);
print_r($brr);*/
/*$crr = array_values($arr);
print_r($crr);*/

/*$students = [
    ["name"=>"张三","age"=>18,"sex"=>"男","score"=>98],
    ["name"=>"李四","age"=>20,"sex"=>"女","score"=>96],
    ["name"=>"王五","age"=>21,"sex"=>"男","score"=>95],
    ["name"=>"赵六","age"=>20,"sex"=>"女","score"=>94],
];
$newArr = array_column($students,"score");
print_r($newArr);*/


/*$arr = [1,2,3,4,5,6];
$brr = array_chunk($arr,3);
print_r($brr);*/

/*$arr = [1,2,3,4,"5",6,"7",8,"zhangsan","wangwu"];
/**
 * 给定一个值，判断是否是奇数，如果是，则返回
 * @param $v
 * @return mixed|void
 */

function odd($v) {
    if(gettype($v)== 'integer' && $v % 2 != 0) {
        return $v;
    }
}
$brr = array_filter($arr,'odd',1);
print_r($brr);

/*$a = [1,2,3,4,5];
function cube($n) {
    return pow($n,4);  // return $n * $n * $n;
}
$b = array_map('cube',$a);
print_r($b);*/

/*$arr = array_fill(-10,19,0);
print_r($arr);*/

/*$a = ['红色','白色','绿色','粉色','青色'];
$b = [-2=>'橙色','黄色'];
$c = [5=>'绿色',6=>'蓝色',7=>'紫色'];
$newArr = array_replace($a,$b,$c);
print_r($newArr);*/


