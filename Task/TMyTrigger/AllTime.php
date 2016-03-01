<?php

class TMyTrigger_AllTime implements Task_Progress_Trigger {

    protected function getService() {
        return 'AllTime_Schedule.Go';
    }

    public function fire($params) {
        $mq = new Task_MQ_Array();
        $runner = new Task_Runner_Local($mq);

        $service = $this->getService();
        $mq->add($service, array('your_param' => 'hey, guys, this is all_time schedule Type - 全量计划任务'));

        $rs = $runner->go($service);

        DI()->logger->debug($service, array('your_param' => 'hey, guys, this is all_time schedule Type - 全量计划任务', 'rs' => $rs));

        return true;
    }
}
