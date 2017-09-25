<?php

$redis = new Redis();
$redis ->connect('127.0.0.1',6379);
echo $redis->ping() . '<br/>'; //+Pong



$redis ->hMset('lijun:hashList',['age'=>27,'children'=>'lizhirui']);

//hash 配置 一系列操作
//var_dump($redis ->hGet('lijun:hashList','name')); echo '<br/>'; //lijun
//var_dump($redis ->hGetAll('lijun:hashList')); echo '<br/>';//获取所有的键值对
//var_dump($redis ->hKeys('lijun:hashList')); echo '<br/>';//获取所有的key
//var_dump($redis ->hVals('lijun:hashList'));echo '<br/>'; //获取所有的值
//var_dump($redis ->hLen('lijun:hashList'));  echo '<br/>';//获取key中字段的长度
//var_dump($redis ->hExists('lijun:hashList','age'));echo '<br/>'; //检验是否存在
//var_dump($redis ->hDel('lijun:hashList','age')); echo '<br/>';//删除字段
//var_dump($redis ->hMGet('lijun:hashList',['name','sex'])); echo '<br/>';// 获取多个字段

//hash   设置
//echo  $redis ->hMset('lijun:hashList',['name'=>'lijun','age'=>27,'sex'=>'男']);



//list  弹出list 值
//echo $redis ->lPop('lijun:listkey');

//list  一次性多个赋值
//echo $redis ->lPush('lijun:listkey','111','222','333','444');

//$redis ->lPush('listkey','111');
//$redis ->lPush('listkey','222');
//$redis ->lPush('listkey','333');
//$redis ->lPush('listkey','444');


//redis 的键创建在指定文件夹下
//$redis ->set('lijun:name','lijun');
//$redis ->set('lijun:age','27');
//$redis ->set('lijun:sex','男');


//移动一个键到其他库
//$redis ->select(0);
//$redis ->move('name',1);



//获取键  pattern
//var_dump($redis ->keys('*'));






//设置一个可以的生存时间
//$redis ->set('name','lijun');
//$redis ->expire('name',50);



//exists是否存在
//$redis ->set('name','lijun');
//echo $redis ->exists('name');

//简单的设置和获取key
//$redis ->set('name','lijun');    --set
//echo $redis->get('name');        --get
//$redis ->del('name');            --del


//echo  $redis->flushAll(); //清楚所有库的keys
//echo  $redis->flushDb(); //清楚当前库所有的keys
//$count = $redis->dbSize(); 当前库keys数量
