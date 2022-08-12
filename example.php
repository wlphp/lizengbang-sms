<?php
// +----------------------------------------------------------------------
// | 王磊 [ Programming makes me happy ]
// +----------------------------------------------------------------------
// | Copyright (c) 2022 08 12  http://www.wlphp.com All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: wl < 613154514@qq.com >
// +----------------------------------------------------------------------

use lizengbang\Sms;
require "vendor/autoload.php";

$appid="10000010";
$appkey="w3f9116714b194c7fa696c6907b8d6910l"; //此秘钥只是示例，请使用正确秘钥
$api_url="http://lizengbang.waiwubang.com/";
$destnumbers="18601062631";
$msg="【真诚软件】您的短信验证码是1234";

$obj = new  Sms($api_url,$appid,$appkey);
$rs=$obj->sendsms($destnumbers,$msg);
print_r($rs);
