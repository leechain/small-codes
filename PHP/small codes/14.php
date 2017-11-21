<?php

/**
 * @Author: lee li
 * @Date:   2017-11-21 13:49:31
 * @Last Modified by:   lee li
 * @Last Modified time: 2017-11-21 14:09:33
 */

// 三种权限的详解

class Qx{
	public $a="a";
	public function aa(){
		echo $this->a;
	}

	protected $b="b";
	public function bb(){
		echo $this->b;
	}

	private $c="c";
	public function cc(){
		echo $this->c;
	}
}

class Tqx extends Qx{
	public function aas(){
		echo $this->a;
	}

	public function bbs(){
		echo $this->b;
	}

	public function ccs(){
		echo $this->c;
	}
}


$qa=new Tqx();
//外部可以调用
// echo $qa->a;
// 内部可以调用
// echo $qa->aa();
// 子类可以调用
// echo $qa->aas();

// 外部不可以调用
// echo $qa->b;
// 内部可以调用
// echo $qa->bb();
// 子类可以调用
// echo $qa->bbs();

// 外部不可以调用
// echo $qa->c;
// 内部可以调用
// echo $qa->cc();
// 子类不可以调用
// echo $qa->ccs();

/*

三种权限的总结
public ：    外部可调用 内部可调用 子类可调用
protected ： 外部不可以调用 内部可调用 子类可调用
private ：   外部不可以调用 内部可以调用 子类不可以调用

*/


