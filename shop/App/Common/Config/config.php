<?php
if (!defined("HDPHP_PATH"))exit('No direct script access allowed');
//更多配置请查看hdphp/Config/config.php
return array_merge(

    require 'shop/data/config/db.inc.php',//注意路径 引用相对于index.php的位置
    require 'shop/data/config/config.inc.php',//
    array(
        //默认访问应用
        'DEFAULT_APP'   => 'Index',
        //模板文件后缀
        'TPL_FIX'       =>'.php',
        'TPL_ERROR'     => GROUP_PATH.'Common/Template/error.php',     //错误信息模板
        'TPL_SUCCESS'   => GROUP_PATH.'Common/Template/success.php',   //正确信息模板
    )
);
?>
