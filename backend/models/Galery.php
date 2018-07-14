<?php

namespace backend\models;

use Yii;

class Galery extends \yii\db\ActiveRecord
{
    public $file;
    public static function tableName()
    {
        return 'galery';
    }
    public function rules()
    {
        return [
            [['image'], 'required'],
            ['file','file'],
            [['image'], 'string', 'max' => 255],
        ];
    }
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'image' => 'Fotosurat',
        ];
    }
}