<?php
/**
 * PhpUnderControl_ApiTTaskMQ_Test
 *
 * 针对 ../../Api/TTaskMQ.php Api_TTaskMQ 类的PHPUnit单元测试
 *
 * @author: Aevit 20160229
 */

require_once dirname(__FILE__) . '/../test_env.php';

if (!class_exists('Api_TTaskMQ')) {
    require dirname(__FILE__) . '/../../Api/TTaskMQ.php';
}

class PhpUnderControl_ApiTTaskMQ_Test extends PHPUnit_Framework_TestCase
{
    public $apiTTaskMQ;

    protected function setUp()
    {
        parent::setUp();

        $this->apiTTaskMQ = new Api_TTaskMQ();
    }

    protected function tearDown()
    {
    }


    /**
     * @group testGetRules
     */
    public function testGetRules()
    {
        $rs = $this->apiTTaskMQ->getRules();
    }

    /**
     * @group testGo
     */
    public function testGo()
    {
        //Step 1. 构建请求URL
        $url = 'app_key=mini&sign=&service=TTaskMQ.Go';

        //Step 2. 执行请求
        $rs = PhalApi_Helper_TestRunner::go($url);
        // var_dump($rs);

        //Step 3. 验证
        $this->assertNotEmpty($rs);
        $this->assertArrayHasKey('code', $rs);

        $this->assertEquals(0, $rs['code']);

    }

}
