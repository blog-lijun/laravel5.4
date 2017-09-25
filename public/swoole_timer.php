<?php

function timeout($t){
    echo time() . ": timer  #$t\n";
}
swoole_timer_tick(1000,'timeout',1); //定时任务

//3000ms后执行此函数
swoole_timer_after(3000, function ($name) {
    echo "after 3000ms: echo myName is $name \n";
},'lijun');