<?php
/**
 * Created by PhpStorm.
 * User: jiang
 * Date: 2018/8/8
 * Time: 10:05
 */

namespace jxw\bjd;


class JWTUserParam
{
    public $user_id;
    public $user_name;
    public $avatar;
    public $nickname;
    public $user_type;
    public $user_level;
    public $recode;

    /**
     * JWTUserParam constructor.
     * @param $userId
     * @param $userName
     * @param $avatar
     * @param $nickname
     * @param $userType
     * @param $userLevel
     * @param $recode
     */
    private function __construct($userId, $userName, $avatar, $nickname, $userType, $userLevel, $recode)
    {
        $this->user_id = $userId;
        $this->user_name = $userName;
        $this->avatar = $avatar;
        $this->nickname = $nickname;
        $this->user_type = $userType;
        $this->user_level = $userLevel;
        $this->recode = $recode;
    }

    /**
     * 获取实例
     * @param $user_id
     * @param $user_name
     * @param $avatar
     * @param $nickname
     * @param $userType
     * @param $userLevel
     * @param $recode
     * @return JWTUserParam
     * @throws BaseException
     */
    public static function getInstance($user_id, $user_name, $avatar, $nickname, $userType, $userLevel, $recode){
            if (empty($user_id) || empty($nickname) || empty($userType)) {
            throw new BaseException('param_not_exists');
        }
        return new self($user_id, $user_name, $avatar, $nickname, $userType, $userLevel, $recode);
    }

    /**
     * @return mixed
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * @param mixed $user_id
     */
    public function setUserId($user_id)
    {
        $this->user_id = $user_id;
    }

    /**
     * @return mixed
     */
    public function getUserName()
    {
        return $this->user_name;
    }

    /**
     * @param mixed $user_name
     */
    public function setUserName($user_name)
    {
        $this->user_name = $user_name;
    }

    /**
     * @return mixed
     */
    public function getAvatar()
    {
        return $this->avatar;
    }

    /**
     * @param mixed $avatar
     */
    public function setAvatar($avatar)
    {
        $this->avatar = $avatar;
    }

    /**
     * @return mixed
     */
    public function getNickname()
    {
        return $this->nickname;
    }

    /**
     * @param mixed $nickname
     */
    public function setNickname($nickname)
    {
        $this->nickname = $nickname;
    }

    /**
     * @return mixed
     */
    public function getUserType()
    {
        return $this->user_type;
    }

    /**
     * @param mixed $user_type
     */
    public function setUserType($user_type)
    {
        $this->user_type = $user_type;
    }

    /**
     * @return mixed
     */
    public function getUserLevel()
    {
        return $this->user_level;
    }

    /**
     * @param mixed $user_level
     */
    public function setUserLevel($user_level)
    {
        $this->user_level = $user_level;
    }


    public function toArray(){
        return json_decode(json_encode($this), true);
    }
}