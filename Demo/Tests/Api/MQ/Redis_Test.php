<?php
/**
 * PhpUnderControl_ApiMQRedis_Test
 *
 * 针对 ../../../Api/MQ/Redis.php Api_MQ_Redis 类的PHPUnit单元测试
 *
 * @author: Aevit 20160228
 */

require_once dirname(__FILE__) . '/../../test_env.php';

if (!class_exists('Api_MQ_Redis')) {
    require dirname(__FILE__) . '/../../../Api/MQ/Redis.php';
}

class PhpUnderControl_ApiMQRedis_Test extends PHPUnit_Framework_TestCase
{
    public $apiMQRedis;

    protected function setUp()
    {
        parent::setUp();

        $this->apiMQRedis = new Api_MQ_Redis();
    }

    protected function tearDown()
    {
    }


    /**
     * @group testGetRules
     */
    public function testGetRules()
    {
        $rs = $this->apiMQRedis->getRules();
    }

    /**
     * @group testGo
     */
    public function testGo()
    {
        //Step 1. 构建请求URL
        $url = 'app_key=mini&sign=&service=MQ_Redis.Go';

        //Step 2. 执行请求
        $rs = PhalApi_Helper_TestRunner::go($url);
        // var_dump($rs);

        //Step 3. 验证
        $this->assertNotEmpty($rs);
        $this->assertArrayHasKey('code', $rs);

        $this->assertEquals(0, $rs['code']);

    }

}
