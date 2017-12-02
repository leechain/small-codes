<?php

/**
 * @Author: lee li
 * @Date:   2017-12-02 09:49:37
 * @Last Modified by:   lee li
 * @Last Modified time: 2017-12-02 09:51:17
 */
$str='hello o2o 250';

// 匹配纯字母或纯数字
$patt='/\b[a-zA-Z]+\b|\b[0-9]+\b/';


preg_match_all($patt, $str, $src);
var_dump($src);