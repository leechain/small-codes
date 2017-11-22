<?php

/**
 * @Author: lee li
 * @Date:   2017-11-22 10:28:53
 * @Last Modified by:   lee li
 * @Last Modified time: 2017-11-22 10:37:47
 */

// 自动加载

/*
知识点
实例化某个类时，如MYSQL类，需要先require('path/to/mysql.php');
如果类比较多，目录也比较多，require文件时，将会变得麻烦，
我们需要一个自动化的解决方法——自动加载

用法：
声明一个函数，并注册为"自动加载函数"，
当系统发现某个类不存在时，会调用此函数，我们可以在函数中加载需要的类文件
*/
function myload($name){
	include './'.$name.'.class.php';
}

// 注册一个函数为自动加载函数
sql_autoload_register('myload');//new不存在类的时候，就会来找我


new Mysql('qq');