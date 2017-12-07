<?php
/**
 * Created by PhpStorm.
 * User: Lonmee
 * Date: 1/13/2017
 * Time: 1:23 PM
 */

echo '<meta charset="utf-8">';
echo "<h1>当前已选商品</h1>";
if (isset($_GET['PHPSESSID'])) {
    session_id($_GET['PHPSESSID']);
}
session_start();
foreach ($_SESSION as $item => $value) {
    echo "<br/>书号:$item 书名:$value";
}
echo "<br/><a href='BookShop.php'>返回继续购买</a>";