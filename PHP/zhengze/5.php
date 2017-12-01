<?php

/**
 * @Author: lee li
 * @Date:   2017-12-01 21:57:12
 * @Last Modified by:   lee li
 * @Last Modified time: 2017-12-01 22:11:40
 */

$str='a   b   hello     world';

$patt='/\s{1,}/'

echo preg_replace($patt,' ', $str);

exit;

$str='tomorrow is anthor day,o2o,you dont bird me i dont bird you';


$patt='/\w{1,}/';

preg_match_all($patt, $str, $src);

var_dump($src);