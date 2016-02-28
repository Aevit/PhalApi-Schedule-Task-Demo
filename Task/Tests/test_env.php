<?php
/**
 * demo接口测试入口
 * @author dogstar 2015-01-28
 */

require_once dirname(__FILE__) . '/../../Demo/Tests/test_env.php';

DI()->loader->addDirs(array('Library', 'Task'));

//日记纪录 - Explorer
DI()->logger = new PhalApi_Logger_Explorer(
	PhalApi_Logger::LOG_LEVEL_DEBUG | PhalApi_Logger::LOG_LEVEL_INFO | PhalApi_Logger::LOG_LEVEL_ERROR);
