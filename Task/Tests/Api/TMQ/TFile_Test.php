<?php
/**
 * PhpUnderControl_ApiTMQTFile_Test
 *
 * 针对 ../../../Api/TMQ//TFile.php Api_TMQ_TFile 类的PHPUnit单元测试
 *
 * @author: Aevit 20160229
 */

require_once dirname(__FILE__) . '/../../test_env.php';

if (!class_exists('Api_TMQ_TFile')) {
    require dirname(__FILE__) . '/../../../Api/TMQ//TFile.php';
}

class PhpUnderControl_ApiTMQTFile_Test extends PHPUnit_Framework_TestCase
{
    public $apiTMQTFile;

    protected function setUp()
    {
        parent::setUp();

        $this->apiTMQTFile = new Api_TMQ_TFile();
    }

    protected function tearDown()
    {
    }


    /**
     * @group testGetRules
     */
    public function testGetRules()
    {
        $rs = $this->apiTMQTFile->getRules();
    }

    /**
     * @group testGo
     */
    public function testGo()
    {
        //Step 1. 构建请求URL
        $url = 'app_key=mini&sign=&service=TMQ_TFile.Go';

        //Step 2. 执行请求
        $rs = PhalApi_Helper_TestRunner::go($url);
        // var_dump($rs);

        //Step 3. 验证
        $this->assertNotEmpty($rs);
        $this->assertArrayHasKey('code', $rs);

        $this->assertEquals(0, $rs['code']);

    }

}
