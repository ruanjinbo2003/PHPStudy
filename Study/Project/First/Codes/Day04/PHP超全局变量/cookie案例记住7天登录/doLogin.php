<?php
$userArr = $_POST;
$username = $userArr['username'];
$password = $userArr['pwd'];
$check = "";
if(isset($userArr['check'])) {
    $check = $userArr['check'];
}

if($username != 'admin') {
    exit("用户名不正确");
}
$sqlPassword = "e10adc3949ba59abbe56e057f20f883e";
if(md5($password) != $sqlPassword) {
    exit("密码不正确");
}
if($check == 'on') {
    //7天免登录
    $time = time() + 7*24*60*60;
    setcookie("username",$username,$time);
}else{
    //关闭浏览器就进行退出登录
    setcookie("username",$username);
}
?>
<script>
    window.location.href = "admin.php";
</script>
