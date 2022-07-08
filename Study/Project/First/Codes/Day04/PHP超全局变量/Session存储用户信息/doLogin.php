<?php


$userArr = $_POST;
$username = $userArr['username'];
$password = $userArr['pwd'];
$id = $userArr['id'];
if($username != 'admin') {
    exit("用户名不正确");
}
$sqlPassword = "e10adc3949ba59abbe56e057f20f883e";
if(md5($password) != $sqlPassword) {
    exit("密码不正确");
}
//说明已经登录成功
session_start();
$_SESSION['id'] = $id;
$_SESSION["username"] = $username;
$_SESSION["password"] = $password;
?>
<script>
    window.location.href = "./admin.php";
</script>




