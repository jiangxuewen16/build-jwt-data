<?php
/**
 * Created by PhpStorm.
 * User: jiang
 * Date: 2018/6/15
 * Time: 17:20
 */

namespace jxw\bjd;

use Firebase\JWT\JWT;

abstract class Head
{
    public $token;      //验证token -> json web token
    public $time;       //返回时间
    protected $jwtKey;      //jwt key

    public abstract function toArray();

    /**
     * 验证jwt
     * @param $key
     * @return object
     */
    public function verifyToken($key)
    {
        $jwtInfo = JWT::decode($this->token, $key, array('HS256'));
        return $jwtInfo;
    }

    /**
     * 构建jwt
     * @param array $tokenParam
     * @param $key
     * @return string
     */
    public static function buildToken(array $tokenParam, $key)
    {
        $jwt = JWT::encode($tokenParam, $key);
        return $jwt;
    }
}