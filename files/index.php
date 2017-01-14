<?php
/**
 * Created by PhpStorm.
 * User: Lonmee
 * Date: 1/13/17
 * Time: 10:32 PM
 */

$dir = '/tmp';
$files1 = scandir($dir);
$files2 = scandir($dir, 1);

print_r($files1);
print_r($files2);
