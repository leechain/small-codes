<?php

/**
 * @Author: lee li
 * @Date:   2017-12-02 10:07:13
 * @Last Modified by:   lee li
 * @Last Modified time: 2017-12-02 10:11:04
 */

// 匹配手机号码

$str='联系方式15850691317，备用电话17721529552，QQ123678,身份证号23412413789064537';

$patt='/\b1[3578]\d{9}\b/';

preg_match_all($patt, $str, $res);

var_dump($res);