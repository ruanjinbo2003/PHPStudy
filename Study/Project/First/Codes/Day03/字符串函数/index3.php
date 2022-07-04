<?php
$str = "   fdgdsg   dgsdg   ";
//echo trim($str);
//echo ltrim($str);
//echo rtrim($str);

/*$password = "1234567";
echo md5($password);
$userPassword = "e10adc3949ba59abbe56e057f20f883e";
if(md5($password) != $userPassword) {
    echo "密码错误";
}else{
    echo "登录成功";
}*/
/*$password = "123456";
//echo crypt($password,"a10000@sadd");

$pwd = password_hash($password,PASSWORD_DEFAULT); //不固定
$pwd1 = password_hash($password,PASSWORD_BCRYPT);  //固定60位 加密失败，返回false
//$2y$10$TMdB6hCGPULgkqBJ1LM3tOiQ5/Kuh7b8dEJgXzA.xlrvY1epdAAXC
//$2y$10$5zfW69zbZ3C2nKlRawBJNOfsldC2ZYe4e.1jba2Q4Dgw4tvUWE2jO
//$2y$10$efvNHLz1qG17pAx4.Eo4nuXKEb4fmchwr0jn3fMbfN/zhbMcZWjOq
$pwds = '$2y$10$TMdB6hCGPULgkqBJ1LM3tOiQ5/Kuh7b8dEJgXzA.xlrvY1epdAAXC';
if(!password_verify($password,$pwds)) {
    echo "密码错误";
}else {
    echo "登录成功";
}*/

//echo chr(97);

//echo ord('A');

/*echo htmlspecialchars_decode("&lt;span&gt;红色&lt;/span&gt;");
echo "\n";
echo htmlspecialchars("<span>红色</span>");*/

/*$string = "张三\n\r李四\r\n王五\r\n赵六";
echo nl2br($string);*/
/*$num = 123789.665;
echo number_format($num,3);*/

$str = "id=123&order=desc";
parse_str($str,$result);
print_r($result);
