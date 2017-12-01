<?php

/**
 * @Author: lee li
 * @Date:   2017-12-01 14:55:32
 * @Last Modified by:   lee li
 * @Last Modified time: 2017-12-01 14:57:09
 */

$str='hi,this is his history.';

$patt='/hi/';

preg_match_all($patt, $str, $src);

var_dump($src);