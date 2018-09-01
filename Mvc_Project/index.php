<?php 
header('content-type:text/html;charset=utf8');
//定义常量
define('PATH',__DIR__.'/');
define('APP_PATH',__DIR__.'/app');
//启动框架
include_once 'lib/Mvc.php';
$obj = new \lib\Mvc();
$obj -> action();