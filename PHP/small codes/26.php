<?php

/**
 * @Author: lee li
 * @Date:   2017-11-23 15:56:21
 * @Last Modified by:   lee li
 * @Last Modified time: 2017-11-23 20:26:23
 */

// 命名空间

/*
多个人一起开发项目，函数名很容易重复。
用了类之后，类之间的方法名被类隔开，重名也没关系。
但如果项目更加大，类名也有可能重复，怎么办？
可以引入命名空间，声明某个空间，避免重名。
*/

/*
namespace的声明，必须在页面第一行
namespace声明后，其他的类、函数都被封锁在命名空间内
require/include其他带有命名空间的页面，自身的空间，并没有受干扰
如果想明确的使用某空间下的类，可以从根空间，逐步寻找，如\zixueit\Class();
如果频繁用某个空间下的类，可以用use声明
自动加载函数的参数，包含“空间路径\类名”
*/

namespace xiling;

include '26_1.php';

class Shuai{
	public function __construct(){
		echo 11;
	}
}

new Shuai();

use xixie\Shuai as s;

new s();
