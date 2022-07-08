<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Session获取用户信息</title>
</head>
<body>
<div style="width: 100%;height: 500px;background-color:hotpink">
    <div>I D ：<?php echo $_SESSION['id'] ?></div>
    <div>用户名：<?php echo $_SESSION['username'] ?></div>
    <div>密 码 ：<?php echo $_SESSION['password'] ?></div>
</div>
</body>
</html>