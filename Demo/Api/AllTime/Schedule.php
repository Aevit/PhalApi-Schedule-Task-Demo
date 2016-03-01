<?php
/**
 * 全量计划任务触发类
 *
 * @author: Aevit 20160228
 */

class Api_AllTime_Schedule extends PhalApi_Api {

	public function getRules() {
        return array(
            'go' => array(
    			'yourParam' => array(
					'name' => 'your_param',
					'type' => 'string',
					'default' => 'hey, guys, this is all_time schedule Type - 全量计划任务',
					'require' => false,
					'desc' => '这是你自定义的参数',
    			),
            ),
        );
	}

	/**
	 * 全量处理接口
	 * @desc 全量计划任务处理接口
	 * @return int code 结果状态，0表示正常返回
	 * @return string msg 提示信息
	 */
	public function go() {
		$rs = array('code' => 0, 'msg' => '');

		$domain = new Domain_AllTime_Schedule();
		$domain->asyncGo($this->yourParam);

		return $rs;
	}
}
