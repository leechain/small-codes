<?php

/**
 * @Author: lee li
 * @Date:   2017-11-22 09:05:41
 * @Last Modified by:   lee li
 * @Last Modified time: 2017-11-22 09:10:38
 */

class Par{
	public function __construct(){
		echo rand(100,999);
	}
}

class Son extends Par{
	public function __construct(){
		parent::__construct();
		echo "<hr/>";
		echo 1;
	}
}

new Son();