<?php

declare(strict_types=1);

// phpinfo();

//ini_set('memory_limit', '512M');
//echo ini_get('memory_limit');

$app = include __DIR__ . "/../src/App/bootstrap.php";

$app->run();

// echo __DIR__;
