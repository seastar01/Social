<!--设置自动刷新 -->
<meta http-equiv="refresh" content="60" />
<?php
/* vim: set expandtab tabstop=4 shiftwidth=4: */
// +----------------------------------------------------------------------+
// | PHP version 5                                                        |
// +----------------------------------------------------------------------+
// | Copyright (c) 1997-2004 The PHP Group                                |
// +----------------------------------------------------------------------+
// | This source file is subject to version 3.0 of the PHP license,       |
// | that is bundled with this package in the file LICENSE, and is        |
// | available through the world-wide-web at the following url:           |
// | http://www.php.net/license/3_0.txt.                                  |
// | If you did not receive a copy of the PHP license and are unable to   |
// | obtain it through the world-wide-web, please send a note to          |
// | license@php.net so we can mail you a copy immediately.               |
// +----------------------------------------------------------------------+
// | Authors: Original Author <author@example.com>                        |
// |          Your Name <you@example.com>                                 |
// +----------------------------------------------------------------------+
//
// $Id:$
//检测网址字数，如果字数大于原先字数，就是发信息了。
include 'public/conn.php'; //引入配置文件
$str = file_get_contents($url);
$num = strlen($str);
if (intval($num) > intval($number)) {
    echo '对方主页更新了，请注意';
} else {
    echo '对方没有更新，更新时，会提示';
}
?>
<br/>
<?php
echo '当前字数为' . $num . '个字符，请修改配置文件';
?>
