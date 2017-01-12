<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
<h1>管理员登录系统</h1>
<form action="loginProcess.php" method="post">
    <table>
        <tr>
            <td>用户id</td>
            <td><input type="text" name="id" value=<?php session_start(); echo $_SESSION['name']; ?>></td>
        </tr>
        <tr>
            <td>密&nbsp;&nbsp;&nbsp;&nbsp;码</td>
            <td><input type="password" name="pwd"></td>
        </tr>
        <tr>
            <td><input type="submit" value="登&nbsp;&nbsp;&nbsp;&nbsp;录"></td>
            <td><input type="reset" value="重新填写"></td>
        </tr>
</form>
<?php
if (!empty($_GET['errno'])) {
    switch ($_GET['errno']) {
        case '1':
            echo "<font color='#a52a2a', size='3'>your name or password is wrong</font> ";
            break;
    }
}
?>
</body>
</html>