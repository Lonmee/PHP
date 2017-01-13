<?php
/**
 * Created by PhpStorm.
 * User: Lonmee
 * Date: 1/13/2017
 * Time: 1:16 PM
 */

$bookid = $_GET['bookid'];
$bookname = $_GET['bookname'];
if (isset($_GET['PHPSESSID'])) {
    session_id($_GET['PHPSESSID']);
}
session_start();
$_SESSION[$bookid] = $bookname;

echo "加入购物车";
echo "<a href='BookShop.php?".SID."'>返回继续购买</a>";