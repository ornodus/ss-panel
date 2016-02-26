<?php

namespace App\Services;

use Smarty;

class View
{
    public static function getSmarty(){
        $smarty=new smarty(); //实例化smarty
        $smarty->settemplatedir(BASE_PATH.'/resources/views/'.Config::get('theme').'/'); //设置模板文件存放目录
        $smarty->setcompiledir("gs://sound-url.appspot.com/achievotmp/compiled/"); //设置生成文件存放目录
        $smarty->setcachedir("gs://sound-url.appspot.com/achievotmp/cache/"); //设置缓存文件存放目录
        // add config
        $smarty->assign('config',Config::getPublicConfig());
        $smarty->assign('user',Auth::getUser());
        return $smarty;
    }

}
