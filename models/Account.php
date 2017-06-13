<?php

namespace app\models;

use Yii;
use yii\web\IdentityInterface;

class Account extends BaseAccount implements IdentityInterface
{
    public function rules()
    {
        return [
            [['email', 'password'], 'required'],
            [['email', 'password'], 'string', 'max' => 255],
            [['email'], 'unique'],
            [['api_key'], 'safe'],
        ];
    }

    public function beforeSave($insert)
    {
        if (parent::beforeSave($insert)) {
            $this->api_key = Yii::$app->security->generateRandomString(); //todo check unique (KeyHelper)
            $this->password = Yii::$app->security->generatePasswordHash($this->password);

            return true;
        }

        return false;
    }

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
