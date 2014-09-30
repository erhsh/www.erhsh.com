<?php

class CoderController extends Yaf_Controller_Abstract{

	public function codeAction() {
		Yaf_Dispatcher::getInstance()->disableView();

		echo "coder coding";
	}

	public function writeAction() {
		Yaf_Dispatcher::getInstance()->disableView();

		echo "coder writing";
	}

}
