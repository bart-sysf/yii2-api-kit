<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "account".
 *
 * @property integer $id
 * @property string $email
 * @property string $password
 * @property string $api_key
 */
class BaseAccount extends \app\models\BaseActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'account';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['email', 'password', 'api_key'], 'required'],
            [['email', 'password', 'api_key'], 'string', 'max' => 255],
            [['email'], 'unique'],
            [['api_key'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'email' => 'Email',
            'password' => 'Password',
            'api_key' => 'Api Key',
        ];
    }
}
