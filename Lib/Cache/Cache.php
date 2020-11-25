<?php

namespace Lib\Cache;

/**
 * Class Cache
 * @package Lib\Cache
 *
 * Условный класс работы с кешем
 */
class Cache
{
    /**
     * @param $cachId
     * @param $data
     * @return string
     */
    public static function remember($cachId, $data){
        return 'cache';
    }
}