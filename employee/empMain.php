<html>
<head>
    <meta charset="UTF-8">
    <title>管理员：<?php echo $_GET['name']?></title>
</head>
<body>
<?php
echo '欢迎'.urldecode($_GET['name']);
?>
<h1>主界面</h1>
<a href="employees.php">管理用户</a><br>
<a href="#">添加用户</a><br>
<a href="#">查询用户</a><br>
<a href="login.php">退出系统</a><br>
</body>
</html>