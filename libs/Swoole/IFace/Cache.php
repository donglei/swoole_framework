<?php
namespace Swoole\IFace;

interface Cache
{
    /**
     * 设置缓存
     * @param $key
     * @param $value
     * @param $expire
     * @return unknown_type
     */
    function set($key,$value,$expire=0);
    /**
     * 获取缓存值
     * @param $key
     * @return unknown_type
     */
    function get($key);
    /**
     * 删除缓存值
     * @param $key
     * @return unknown_type
     */
    function delete($key);
}