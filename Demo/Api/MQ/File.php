<?php
/**
 * File MQ触发类
 *
 * @author: Aevit 20160228
 */

class Api_MQ_File extends PhalApi_Api {

	public function getRules() {
        return array(
            'go' => array(
    			'yourParam' => array(
					'name' => 'your_param',
					'type' => 'string',
					'default' => 'hey, guys, this is File MQ Type',
					'require' => false,
					'desc' => '这是你自定义的参数',
    			),
            ),
        );
	}

	/**
	 * Redis MQ触发接口
	 * @desc 触发File MQ的接口，增加一个计划任务
	 * @return int code 结果状态，0表示正常返回
	 * @return string msg 提示信息
	 */
	public function go() {
		$rs = array('code' => 0, 'msg' => '');

		$domain = new Domain_MQ_File();
		$domain->asyncGo($this->yourParam);

		return $rs;
	}
}
