<?php
require_once 'Emp.php';
session_start();
$_SESSION['name'] = 'lonmee';
$_SESSION['array'] = ['name' => 'lunar', 'sex' => 'femal', 'age' => 35];
$_SESSION['emp'] = new Emp(1, 'lonmee', 1, 'lonmee@126.com', 100);
