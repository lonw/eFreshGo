<?php
error_reporting(E_ALL ^ E_NOTICE);

preg_match('/^([a-z\-]+)/i', $_SERVER['HTTP_ACCEPT_LANGUAGE'], $matches);
$lang = $matches[1];

switch ($lang) {
        case 'en' :
                header('Location: index.html');
                break;
        case 'zh-TW' :
                header('Location: cn.html');
                break;
        case 'zh-CN' :
                header('Location: cn.html');
                break;
        case 'zh-HK' :
                header('Location: cn.html');
                break;
        default:
                header('Location: cn.html');
                break;
}
?>
