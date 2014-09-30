<?php
/*

application.directory	 	
application.ext	"php"	
application.view.ext	"phtml"	
application.modules	"index"	
application.library	application.directory . "/library"	
application.library.directory	application.directory . "/library"	
application.library.namespace	""	
application.bootstrap	application.directory . "/Bootstrap" . application.ext	
application.baseUri	""	
application.dispatcher.defaultRoute	 	
application.dispatcher.throwException	1	
application.dispatcher.catchException	0	
application.dispatcher.defaultModule	"index"	
application.dispatcher.defaultController	"index"	
application.dispatcher.defaultAction	"index"	
application.system	 


$config = array(
        "application"=>array(
		"directory" => "/var/www/www.erhsh.com/frontend/ap",
		"ext" => "php",
		"modules" => "Index,Service",
		"view" => array(
			"ext" => "phtml"
		)
	)
);

*/


define("APP_PATH", dirname(__DIR__)."/service");

$app = new Yaf_Application(APP_PATH . "/conf/application.ini", "dev");

$app->run();

exit();


