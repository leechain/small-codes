<?php

/**
 * @Author: lee li
 * @Date:   2017-12-01 15:20:59
 * @Last Modified by:   lee li
 * @Last Modified time: 2017-12-01 15:25:04
 */

$arr=array('12345678','15856891238','3289','12356896895689');

$patt='/^[1235689]{11}$/';//大括号为要找的个数

foreach ($arr as $key => $value) {
	
	preg_match_all($patt, $value, $src);

	var_dump($src);

}
