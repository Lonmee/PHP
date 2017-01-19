<?php
/**
 * Created by PhpStorm.
 * User: Lonmee
 * Date: 1/19/2017
 * Time: 6:11 PM
 */

$redis = new Redis();
$redis->connect('127.0.0.1', 6379);

$redis->set('name', 'lonmee');

echo "Stored string in redis:: " . $redis->get("name");