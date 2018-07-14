<?php
namespace backend\models;

use yii\base\Model;
use common\models\User;

class SignupForm extends Model
{
    public $username;
    public $email;
    public $password;
    public function rules()
    {
        return [
            ['username', 'trim'],
            ['username', 'required', 'message' => 'Foydalanuvchi nomi kiritilishi shart.'],
            ['username', 'unique', 'targetClass' => '\common\models\User', 'message' => 'Bu foydalanuvchi nomi oldin ro\'yxatga olingan.'],
            ['username', 'string', 'min' => 2, 'max' => 255],
            ['email', 'trim'],
            ['email', 'required', 'message' => 'Elektron pochta kiritilishi shart.'],
            ['email', 'email', 'message' => 'Elektron pochta noto\'g\'ri kiritilgan.'],
            ['email', 'string', 'max' => 255],
            ['email', 'unique', 'targetClass' => '\common\models\User', 'message' => 'Bu elektron pochta oldin ro\'yxatga olingan.'],
            ['password', 'required', 'message' => 'Parol kiritilishi shart.'],
            ['password', 'string', 'min' => 6],
        ];
    }
    public function attributeLabels()
    {
        return [
            'username' => 'Foydalanuvchi nomi',
            'password' => 'Parol',
            'email' => 'Elektron pochta',
        ];
    }
    public function signup()
    {
        if (!$this->validate()) {
            return null;
        }
        $user = new User();
        $user->username = $this->username;
        $user->email = $this->email;
        $user->setPassword($this->password);
        $user->generateAuthKey();
        return $user->save() ? $user : null;
    }
}