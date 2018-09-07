<?php
/**
 * Created by PhpStorm.
 * User: jiang
 * Date: 2018/6/15
 * Time: 16:47
 */
namespace jxw\bjd;

class RequestHead extends Head
{
    public $version;
    public $platform;

    private function __construct($token, $time, $version, $platform)
    {
        $this->token = $token;
        $this->time = $time;
        $this->version = $version;
        $this->platform = $platform;
    }

    public static function build($head)
    {
        return new self($head['token'], $head['time'], $head['version'], $head['platform']);
    }

    public function toArray()
    {
        return json_decode(json_encode($this), true);
    }

    /*public function verifyToken($key)
    {
        $jwtInfo = \Firebase\JWT\JWT::decode($this->token, $key, array('HS256'));
        return $jwtInfo;
    }*/
}