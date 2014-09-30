<?php

class TestController extends Yaf_Controller_Abstract {
	public function testAction() {
		Yaf_Dispatcher::getInstance()->disableView();

		$redis = R::getRedis();
		$foo = $redis->get("foo");
		echo $foo;
	}
}
