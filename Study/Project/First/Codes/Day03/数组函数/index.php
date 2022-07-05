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
/*$arr = ['5'=>"a",'4'=>"b",'7'=>"c",'8'=>"a",'9'=>"c",'3'=>"b"];
$brr = array_values($arr);
print_r($brr);*/
/*$arr = [
    ['name'=>'张三','age'=>18,'gender'=>'男'],
    ['name'=>'李四','age'=>30,'gender'=>'女'],
    ['name'=>'王五','age'=>33,'gender'=>'男'],
    ['name'=>'赵六','age'=>28,'gender'=>'男'],
    ['name'=>'田七','age'=>38,'gender'=>'女']
];
$brr = array_column($arr,"gender");
sort($brr);
print_r($brr);*/
echo "------------------\n";
//$input_array = array('a', 'b', 'c', 'd', 'e', 'f');
//print_r(array_chunk($input_array, 5));
//print_r(array_chunk($input_array, 2, true));

/**
 * 求奇数
 */
$arr = [1,2,'3',4,"5",6,7,8,"zhangsan","8"];
function filterString($v) {
    if(gettype($v) == 'integer') {
        return $v;
    }
    /*if($v != 3) {
        return $v;
    }*/
}
$brr = array_filter($arr,'filterString');
print_r($brr);

/*$a = array_fill(0, 3, "age");
$b = array_fill(-2, 4, 'pear');
//print_r($a);
print_r($b);*/

/*function cube($n)
{
    return ($n * $n * $n);
}

$a = [1, 2, 3, 4, 5];
$b = array_map('cube', $a);
print_r($b);*/

$base = array("orange", "banana", "apple", "raspberry");
$replacements = array("pineapple", 3=>"cherry");
$replacements2 = array(3 => "grape");

$basket = array_replace($base, $replacements,$replacements2);







