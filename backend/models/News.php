<?php
namespace backend\models;
use Yii;
class News extends \yii\db\ActiveRecord
{
    public $file;
    public static function tableName()
    {
        return 'news';
    }
    public function rules()
    {
        return [
            [['title', 'short', 'text', 'image', 'posted_time'], 'required'],
            [['short', 'text'], 'string'],
            [['posted_time'], 'safe'],
            [['title', 'image'], 'string', 'max' => 255],
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
            'posted_time' => 'E\'lon qilingan vaqt',
        ];
    }
}