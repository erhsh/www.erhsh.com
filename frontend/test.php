<?php
/*
namespace com\erhsh\test;

use com\erhsh\test\AAA;

$aaa = new AAA();

$aaa->f();

echo 123;

*/


$redis = new Redis();

print_r($redis);


$redis->connect("127.0.0.1",63790);

try {
	$pingResult=$redis->ping();
} catch (RedisException $e) {
	print_r("exception happened!");
}
print_r("<br>".$pingResult);

$result = $redis->set('aaa','xxx');

print_r("<br>set result: ".$result);

$result = $redis->get('aaa');

print_r("<br>get result: ".$result);

