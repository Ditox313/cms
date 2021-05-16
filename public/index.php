<?php
require_once  '../config/init.php';

require_once  LIBS . '/functions.php';

$app = new \ishop\App();

debug($app::$app->getProperties());
?>