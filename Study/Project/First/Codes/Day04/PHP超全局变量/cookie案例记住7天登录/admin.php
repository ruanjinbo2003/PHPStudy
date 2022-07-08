<?php
if(!isset($_COOKIE['username']) || $_COOKIE['username']=='') {
    echo "<h1 style='color: red'>对不起，您还没有进行登录</h1>";
    echo "<a href='login.html'>点击此处进行登录</a>";
    return;
}
$username = $_COOKIE['username'];
echo "<h1 style='color:green;'>管理员:{$username}您好，欢迎登录后台</h1>";