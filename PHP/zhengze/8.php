<?php

/**
 * @Author: lee li
 * @Date:   2017-12-02 09:56:50
 * @Last Modified by:   lee li
 * @Last Modified time: 2017-12-02 09:59:10
 */

// 贪婪模式与非贪婪模式

$str='ksd good gooood gooooooooood hnsjd bmml';

//贪婪模式
$patt='/g.+d/';


// 非贪婪模式
$patt='/g.+?d/';

preg_match_all($patt, $str, $src);
var_dump($src);