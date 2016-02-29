<?php
require_once dirname(__FILE__) . '/../../Public/init.php';
//require_once '/home/dogstar/projects/library.phalapi.net/Public/init.php';

DI()->loader->addDirs(array('./Demo', './Library', './Library/Task/Task', './Task'));

var_dump('start a crontab');

//更改日记纪录 - 以防apps和nobody用户有权限冲突
DI()->logger = new PhalApi_Logger_File(API_ROOT . '/Runtime/task',
    PhalApi_Logger::LOG_LEVEL_DEBUG | PhalApi_Logger::LOG_LEVEL_INFO | PhalApi_Logger::LOG_LEVEL_ERROR);

try {
    $progress = new Task_Progress();
    $progress->run();
} catch (Exception $ex) {
    echo $ex->getMessage();
    echo "\n\n";
    echo $ex->getTraceAsString();
    // notify ...
}
