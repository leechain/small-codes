<?php

/**
 * @Author: lee li
 * @Date:   2017-12-02 09:40:56
 * @Last Modified by:   lee li
 * @Last Modified time: 2017-12-02 10:27:55
 */

$str='god good goooood  gooooooooooood';

// $patt='/\b\w{4}\b/';
// $patt='/\b\w{4,}\b/';
// $patt='/\b\w{6,10}\b/';


// preg_match_all($patt, $str, $src);
// var_dump($src);


$patt='/go+d/';

echo preg_replace($patt, 'god', $str);