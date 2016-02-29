<?php
/**
 * PhpUnderControl_ApiMQDB_Test
 *
 * 针对 ../../../Api/MQ/DB.php Api_MQ_DB 类的PHPUnit单元测试
 *
 * @author: Aevit 20160229
 */

require_once dirname(__FILE__) . '/../../test_env.php';

if (!class_exists('Api_MQ_DB')) {
    require dirname(__FILE__) . '/../../../Api/MQ/DB.php';
}

class PhpUnderControl_ApiMQDB_Test extends PHPUnit_Framework_TestCase
{
    public $apiMQDB;

    protected function setUp()
    {
        parent::setUp();

        $this->apiMQDB = new Api_MQ_DB();
    }

    protected function tearDown()
    {
    }


    /**
     * @group testGetRules
     */
    public function testGetRules()
    {
        $rs = $this->apiMQDB->getRules();
    }

    /**
     * @group testGo
     */
    public function testGo()
    {
        //Step 1. 构建请求URL
        $url = 'app_key=mini&sign=&service=MQ_DB.Go';

        //Step 2. 执行请求
        $rs = PhalApi_Helper_TestRunner::go($url);
        // var_dump($rs);

        //Step 3. 验证
        $this->assertNotEmpty($rs);
        $this->assertArrayHasKey('code', $rs);

        $this->assertEquals(0, $rs['code']);

    }

}
