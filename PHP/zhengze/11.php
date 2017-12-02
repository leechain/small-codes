<?php

/**
 * @Author: lee li
 * @Date:   2017-12-02 10:59:47
 * @Last Modified by:   lee li
 * @Last Modified time: 2017-12-02 11:02:35
 */

// 匹配中文

$str='李';//纯的
$str='李4';//杂的

$patt='/^[\x{4e00}-\x{9fa5}]$/u';

echo preg_match_all($patt, $str)?'纯的':'杂的';