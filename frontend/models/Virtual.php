<?php

namespace frontend\models;

use Yii;

class Virtual extends \yii\db\ActiveRecord
{
    //public $verifyCode;
    public $file;
    public static function tableName()
    {
        return 'virtual';
    }
    public function rules()
    {
        return [
            [['fio', 'nomer', 'email', 'manzil', 'passport', 'mavzu', 'xabar'], 'required'],
            [['turi', 'xabar'], 'string'],
            [ 'email', 'email'],
            [ 'file', 'file'],
            [['fio', 'tashkilot', 'nomer', 'manzil', 'passport', 'mavzu', 'fayl'], 'string', 'max' => 255],
            //['verifyCode', 'captcha'],
        ];
    }
   public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'fio' => 'Fio',
            'tashkilot' => 'Tashkilot',
            'nomer' => 'Nomer',
            'email' => 'Email',
            'manzil' => 'Manzil',
            'passport' => 'Passport',
            'turi' => 'Turi',
            'mavzu' => 'Mavzu',
            'xabar' => 'Xabar',
            'fayl' => 'Fayl',
        ];
    }
}