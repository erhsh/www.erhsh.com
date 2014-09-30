<?php

class R {

	public static function getRedis() {
		$redis = new Redis();
		$redis->connect("localhost", 63790);
		return $redis;
	}

}


$redis = R::getRedis();

print_r($redis);
