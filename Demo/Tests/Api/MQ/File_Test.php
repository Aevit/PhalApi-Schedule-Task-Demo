<?php
/**
 * PhpUnderControl_ApiMQFile_Test
 *
 * 针对 ../../../Api/MQ/File.php Api_MQ_File 类的PHPUnit单元测试
 *
 * @author: Aevit 20160228
 */

require_once dirname(__FILE__) . '/../../test_env.php';

if (!class_exists('Api_MQ_File')) {
    require dirname(__FILE__) . '/../../../Api/MQ/File.php';
}

class PhpUnderControl_ApiMQFile_Test extends PHPUnit_Framework_TestCase
{
    public $apiMQFile;

    protected function setUp()
    {
        parent::setUp();

        $this->apiMQFile = new Api_MQ_File();
    }

    protected function tearDown()
    {
    }


    /**
     * @group testGetRules
     */
    public function testGetRules()
    {
        $rs = $this->apiMQFile->getRules();
    }

    /**
     * @group testGo
     */
    public function testGo()
    {
        //Step 1. 构建请求URL
        $url = 'app_key=mini&sign=&service=MQ_File.Go';

        //Step 2. 执行请求
        $rs = PhalApi_Helper_TestRunner::go($url);
        // var_dump($rs);

        //Step 3. 验证
        $this->assertNotEmpty($rs);
        $this->assertArrayHasKey('code', $rs);

        $this->assertEquals(0, $rs['code']);

    }

}
