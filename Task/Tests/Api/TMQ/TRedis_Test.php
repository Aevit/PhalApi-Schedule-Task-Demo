<?php
/**
 * PhpUnderControl_ApiTMQTRedis_Test
 *
 * 针对 ../../../Api/TMQ//TRedis.php Api_TMQ_TRedis 类的PHPUnit单元测试
 *
 * @author: Aevit 20160229
 */

require_once dirname(__FILE__) . '/../../test_env.php';

if (!class_exists('Api_TMQ_TRedis')) {
    require dirname(__FILE__) . '/../../../Api/TMQ//TRedis.php';
}

class PhpUnderControl_ApiTMQTRedis_Test extends PHPUnit_Framework_TestCase
{
    public $apiTMQTRedis;

    protected function setUp()
    {
        parent::setUp();

        $this->apiTMQTRedis = new Api_TMQ_TRedis();
    }

    protected function tearDown()
    {
    }


    /**
     * @group testGetRules
     */
    public function testGetRules()
    {
        $rs = $this->apiTMQTRedis->getRules();
    }

    /**
     * @group testGo
     */
    public function testGo()
    {
        //Step 1. 构建请求URL
        $url = 'app_key=mini&sign=&service=TMQ_TRedis.Go';

        //Step 2. 执行请求
        $rs = PhalApi_Helper_TestRunner::go($url);
        // var_dump($rs);

        //Step 3. 验证
        $this->assertNotEmpty($rs);
        $this->assertArrayHasKey('code', $rs);

        $this->assertEquals(0, $rs['code']);

    }

}
