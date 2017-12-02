<?php

/**
 * @Author: lee li
 * @Date:   2017-12-02 10:21:51
 * @Last Modified by:   lee li
 * @Last Modified time: 2017-12-02 10:31:14
 */

//寻找首尾字母相同的单词

// $str='txt mum high low';

// $patt='/\b([a-z])\w+\1\b/';

// preg_match_all($patt, $str, $res);

// var_dump($res);


// 将手机号中间的4位替换成****

$str='15850691317 17721529552';

$patt='/(\d{3})\d{4}(\d{4})/';

echo preg_replace($patt, '\1****\2', $str);
