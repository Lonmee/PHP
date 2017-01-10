<html>
<head>
    <meta charset="UTF-8">
    <title>雇员信息列表</title>
    <style>
        .menu_bar {
            padding: 0;
        }

        .menu_bar li {
            list-style: none;
            display: inline;
            padding: 0 8px;
        }

        .menu_bar li:first-child {
            padding-left: 4px;
        }

        div.employ_div {
            width: auto;
            height: 160px;
        }

        .employ_div table {
            float: left;
            margin: 4px;
        }
    </style>
</head>
<body>
<h2>雇员列表</h2>
<ul class="menu_bar">
    <li><a href="#">管理用户</a></li>
    <li><a href="#">添加用户</a></li>
    <li><a href="#">查询用户</a></li>
    <li><a href="#">退出系统</a></li>
    <li><a href="login.php">注销登录</a></li>
</ul>
<?php
$pageSize = 5;
$curPage = empty($_GET['curPage']) ? 1 : $_GET['curPage'];
$mysqli = new mysqli('win.lonmee.com', 'root', 'usbw', 'employee');
if ($mysqli->error) {
    die($mysqli->error);
}
$mysqli->set_charset('utf8');
$sql = "SELECT COUNT(id) FROM employees";
$resCount = $mysqli->query($sql);
if (!empty($resCount)) {
    $resCount = $resCount->fetch_row();
    $rowCount = $resCount[0];
}

$totalPage = ceil($rowCount / $pageSize);

$sql = "SELECT * FROM employees LIMIT " . ($curPage - 1) * $pageSize . ", $pageSize";
$mysqli_result = $mysqli->query($sql);
echo "<div class=employ_div>";
echo "<table class='table' border='1' bordercolor='green' cellspacing='0'>
<tr>
<th>ID</th>
<th>姓名</th>
<th>级别</th>
<th>邮箱</th>
<th>薪资</th>
<th>删除</th>
<th>修改</th>
</tr>";
for ($i = 0; $i < $mysqli_result->num_rows; $i++) {
    $row = $mysqli_result->fetch_assoc();
    echo "<tr>";
    foreach ($row as $item => $value) {
        echo "<td>$value</td>";
    }
    echo "<td><a href='#'>删除</a></td><td><a href='#'>修改</a></td></tr>";
}
echo "</table></div>";

//for ($i = 1; $i <= $totalPage; $i++) {
//    echo "<a href='employees.php?curPage=$i'>$i</a>&nbsp;";
//}
if ($curPage > 1) {
    $prepage = $curPage - 1;
    echo "<a href='employees.php?curPage=$prepage'>上一页</a>&nbsp;";
}

if ($curPage < $totalPage) {
    $nextPage = $curPage + 1;
    echo "<a href='employees.php?curPage=$nextPage'>下一页</a>&nbsp;";
}

$mysqli_result->free();
$mysqli->close();
?>
</body>
</html>