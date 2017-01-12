<?php
/**
 * Created by PhpStorm.
 * User: Lonmee
 * Date: 1/13/17
 * Time: 12:34 AM
 */

require_once 'Emp.php';
session_start();
var_dump($_SESSION);

$emp = $_SESSION['emp'];
echo $emp->getEmail();