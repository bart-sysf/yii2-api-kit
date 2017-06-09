<?php

namespace app\models;

use yii\web\IdentityInterface;

class Account extends BaseAccount implements IdentityInterface
{
    public static function findIdentity($id)
    {
        return self::findOne($id);
    }

    public static function findIdentityByAccessToken($token, $type = null)
    {
        return self::findOne(['api_key' => $token]);
    }

    public function getId()
    {
        return $this->id;
    }

    public function getAuthKey()
    {
        return $this->api_key;
    }

    public function validateAuthKey($authKey)
    {
        return (bool)$this->api_key == $authKey;
    }
}
