<?php
/**
 * Created by PhpStorm.
 * User: Lonmee
 * Date: 1/13/2017
 * Time: 1:09 PM
 */
if (isset($_GET['PHPSESSID'])) {
    session_id($_GET['PHPSESSID']);
}
session_start();
$sid = session_id();
echo "<h1>Welcome to shopping</h1>
    <a href=\"ShopProcess.php?bookid=i1&bookname=n1&".SID."\">name1</a><br>
    <a href=\"ShopProcess.php?bookid=i2&bookname=n2&".SID."\">name2</a><br>
    <a href=\"ShopProcess.php?bookid=i3&bookname=n3&".SID."\">name3</a><br>
    <a href=\"ShopProcess.php?bookid=i4&bookname=n4&".SID."\">name4</a><br>
    <hr>
    <a href=\"chart.php?".SID."\">checkout list</a>";

session_set_save_handler()