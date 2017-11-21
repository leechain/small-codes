<?php

/**
 * @Author: lee li
 * @Date:   2017-11-21 10:22:57
 * @Last Modified by:   lee li
 * @Last Modified time: 2017-11-21 10:30:07
 */

// 类的封装性

class ATM{

	// 受保护的
	protected function password(){
		echo "123123";
	}

	// 公共的
	public function checkpwd($pwd){
		return $pwd==$this->password();
	}

}

$a=new ATM();
if($a->checkpwd("123123")){
	echo "密码正确";
}else{
	echo "密码错误";
}