<?php

/**
 * @Author: lee li
 * @Date:   2017-12-01 20:53:01
 * @Last Modified by:   lee li
 * @Last Modified time: 2017-12-01 20:54:59
 */

$arr=array('12345678','15856891238','3289','12356896895689');

$patt='/^[^47]{11}$/';//利用补集来写正则表达式

foreach ($arr as $key => $value) {
	
	preg_match_all($patt, $value, $src);

	var_dump($src);

}