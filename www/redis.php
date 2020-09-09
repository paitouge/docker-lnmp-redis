<?php

$redis = new Redis();
$redis->connect('redis', 6379);
$redis->set('k1','v1');
echo $redis->get('k1');
