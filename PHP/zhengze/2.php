<?php

/**
 * @Author: lee li
 * @Date:   2017-12-01 15:12:27
 * @Last Modified by:   lee li
 * @Last Modified time: 2017-12-01 15:13:59
 */

$str='hi,this is his history.';

// $patt='/\bhi\b/'; //单词边界
$patt='/\Bhi\B/';

preg_match_all($patt, $str, $src);

var_dump($src);