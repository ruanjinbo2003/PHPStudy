<?php
/**
 * print_r($_FILES);
 * Array (
 *    [photo] =>
 *        Array ( [name] => 1.jpg [full_path] => 1.jpg [type] => image/jpeg [tmp_name] => C:\Users\Administrator\AppData\Local\Temp\php47A2.tmp [error] => 0 [size] => 4092 ) )
 *
 * print_r($_FILES['photo]);
 * Array (
 *    [name] => 2.jpg
 *    [full_path] => 2.jpg
 *    [type] => image/jpeg
 *    [tmp_name] => C:\Users\Administrator\AppData\Local\Temp\php13BA.tmp
 *    [error] => 0
 *    [size] => 94003   单位是 B  （字节）
 * )
 *
 * Array ( [name] => test.txt [full_path] => test.txt
 * [type] => text/plain [tmp_name] => C:\Users\Administrator\AppData\Local\Temp\php3A2B.tmp [error] => 0 [size] => 12 )
 *
 */

//1.接收表单提交过来的文件
$files = $_FILES['photo'];
//2.判断接收到的文件信息有没有发生错误
if($files['error']!=0) {
    //echo "发生错误,上传失败";return;
    exit("发生错误,上传失败");
}
//3.如果没有发生错误，检测图片的类型
//3.1 检测图片类型，需要与系统限定上传的格式进行匹配
//$fileTypeStr = $files['type'];  //  image/jpeg
//3.2 此时获取图片类型的扩展名,把字符串拆分成一个数组
//$fileTypeArr = explode('/',$fileTypeStr);
//$fileType = $fileTypeArr[1];  //得到了图片上传的格式
//3.3 需要设置系统限定上传图片的格式
$systemUploadImageExt = 'text/plain';
//3.4 判断所上传的图片是否在系统设定上传图片数组中
//if(!in_array($fileType,$systemUploadImageExt)) {
    //exit("上传的图片格式不正确");
//}
if($files['type'] != $systemUploadImageExt) {
    exit("文件格式不正确");
}
//4.如果正确，检测上传图片的大小
// 单位 1024 B = 1Kb
// 1024KB = 1MB  (1兆)
// 1024MB = 1GB  (1G)
// 1024 GB = 1TB (1T)
$uploadMaxSize = 1024*1024*2; //2m

if($files['size'] > $uploadMaxSize) {
    exit("上传的文件超过系统限制的大小");
}
//5.图片大小检测通过后，生成一个路径
//5.1 路径 由  目录 + 文件名 组成
//5.2 生成一个目录
$dir = "./files/".date("Y-m-d")."/";
if(!is_dir($dir)) {
    //@mkdir($dir);  //只能创建一级目录
    @mkdir($dir,"0777",true);  //可以创建多级目录
}
//16600000003681.jpg
//5.3 生成一个随机的文件名
$fileName = upload . phptime() .".txt";
//5.4 生成一个图片所需要保存的路径
$path = $dir.$fileName;
//6. 保存上传的图片
$bool = move_uploaded_file($files['tmp_name'],$path);
if($bool) {
    echo "上传文件成功";
}else{
    echo "上传文件失败";
}



