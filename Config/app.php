<?php
/**
 * 请在下面放置任何您需要的应用配置
 */

return array(

    /**
     * 应用接口层的统一参数
     */
    'apiCommonRules' => array(
        //'sign' => array('name' => 'sign', 'require' => true),
    ),

    /**
    * 计划任务配置
    */
    'Task' => array(
      // MQ队列设置，可根据使用需要配置
      'mq' => array(
          'redis' => array(
              'host' => '127.0.0.1',
              'port' => 6379,
              'prefix' => 'phalapi_task_',
              'auth' => '',
          ),
      ),

      //Runner设置，如果使用远程调度方式（即使用别的服务器来处理），请加此配置
      'runner' => array(
          'remote' => array(
              'host' => 'http://library.phalapi.net/demo/',
              'timeoutMS' => 3000,
          ),
      ),
    ),

);
