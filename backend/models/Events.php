<?php

namespace backend\models;

use Yii;

class Events extends \yii\db\ActiveRecord
{
    public $file;
    public static function tableName()
    {
        return 'events';
    }
    public function rules()
    {
        return [
            [['title', 'short', 'text', 'image', 'posted_tume'], 'required'],
            [['text'], 'string'],
            ['file','file'],
            [['posted_tume'], 'safe'],
            [['title', 'short', 'image'], 'string', 'max' => 255],
        ];
    }
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Sarlavha',
            'short' => 'Qisqacha ma\'lumot',
            'text' => 'Matn',
            'image' => 'Surat',
            'posted_tume' => 'E\'lon qilingan vaqt',
        ];
    }
}
