<?php 
//实例化
2     $redis = new Redis();
3     //连接数据库
4     $redis->connect('127.0.0.1',6379);
5     //授权,password为你设置的授权密码,如未设置,可不使用该方法
6     //$redis->auth(password);
7     //keys方法,查询所有key
8     $keys = $redis->keys("*");
9     var_dump($keys);
?>