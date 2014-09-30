<?php

include "/var/www/www.erhsh.com/frontend/PSRedis/lib/PSRedis/Client.php";

use PSRedis\Client;

$sentinel = new Client('localhost','26379');


print_r($sentinel);
