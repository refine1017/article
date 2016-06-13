<?php

require_once __DIR__ . "/vendor/autoload.php";

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

$log = new Logger('Test');
$log->pushHandler(new StreamHandler('./monolog.log', Logger::WARNING));

$log->warning('This is a warning log', array("context"));
$log->error('This is a error log', array("context"));