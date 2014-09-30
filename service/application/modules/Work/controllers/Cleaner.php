<?php

class CleanerController extends Yaf_Controller_Abstract{

	public function cleanDeskAction() {
		Yaf_Dispatcher::getInstance()->disableView();

		echo "cleaner clean desk";
	}

	public function cleanFloorAction() {
		Yaf_Dispatcher::getInstance()->disableView();

		echo "coder clean floor";
	}

}
