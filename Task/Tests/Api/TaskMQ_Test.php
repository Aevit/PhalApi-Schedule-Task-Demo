<?php
/**
 * PhpUnderControl_ApiTaskMQ_Test
 *
 * 针对 ../../Api/TaskMQ.php Api_TaskMQ 类的PHPUnit单元测试
 *
 * @author: Aevit 20160228
 */

require_once dirname(__FILE__) . '/../test_env.php';

if (!class_exists('Api_TaskMQ')) {
    require dirname(__FILE__) . '/../../Api/TaskMQ.php';
}

class PhpUnderControl_ApiTaskMQ_Test extends PHPUnit_Framework_TestCase
{
    public $apiTaskMQ;

    protected function setUp()
    {
        parent::setUp();

        $this->apiTaskMQ = new Api_TaskMQ();
    }

    protected function tearDown()
    {
    }


    /**
     * @group testGetRules
     */
    public function testGetRules()
    {
        $rs = $this->apiTaskMQ->getRules();
    }

    /**
     * @group testGo
     */
    public function testGo()
    {
        //Step 1. 构建请求URL
        $url = 'app_key=mini&sign=&service=TaskMQ.Go';

        //Step 2. 执行请求
        $rs = PhalApi_Helper_TestRunner::go($url);
        // var_dump($rs);

        //Step 3. 验证
        $this->assertNotEmpty($rs);
        $this->assertArrayHasKey('code', $rs);

        $this->assertEquals(0, $rs['code']);
    }

}
