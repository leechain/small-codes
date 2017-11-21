<?php

/**
 * @Author: lee li
 * @Date:   2017-11-21 08:40:19
 * @Last Modified by:   lee li
 * @Last Modified time: 2017-11-21 08:58:28
 */

// this是谁

// this指对象

class Film{
	public $name="曹禺";
	public $art="雷雨";
	public function action(){
		echo $this->name."拍电影";
	}
}

$a=new Film();
$a->action();

echo "<hr/>";

$b=new Film();
$b->name="张艺谋";
$b->action();