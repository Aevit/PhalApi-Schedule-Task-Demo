<?php

class Domain_AllTime_Schedule {

    public function asyncGo($yourParam = '') {

        // 可在此增加自己代码进行其他一些操作

        var_dump($yourParam);
        DI()->logger->info('all time schedule', array('your_param' => $yourParam));

        // 可在此增加自己代码进行其他一些操作

        return true;
    }
}
