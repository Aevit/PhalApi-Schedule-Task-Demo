<?php
/**
 * Demo 统一入口
 */

require_once dirname(__FILE__) . '/../init.php';

//装载你的接口
// DI()->loader->addDirs('Demo');
DI()->loader->addDirs(array('Demo', 'Task'));

/** ---------------- 响应接口请求 ---------------- **/

$api = new PhalApi();
$rs = $api->response();
$rs->output();
