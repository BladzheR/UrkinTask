<?php
/**
 * @author: Sergey Kudryavtsev <bladzher@yandex.ru>
 * @since 14.08.14
 */

 define("BASE_DIR", __DIR__);

spl_autoload_register(function ($className){
    require_once BASE_DIR.'/'.str_replace('\\', '/', $className).'.php';
});