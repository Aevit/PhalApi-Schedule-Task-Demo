<?php

class Domain_MQ_File {

    public function asyncGo($yourParam = '') {

        // 可在此增加自己代码进行其他一些操作

        // 增加MQ计划任务
        DI()->taskLite->add('TaskMQ.Go', array('your_param' => $yourParam));
        DI()->logger->info('add File MQ', array('your_param' => $yourParam));

        // 可在此增加自己代码进行其他一些操作

        return true;
    }
}
