<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "notifications".
 *
 * @property integer $id
 * @property string $title
 * @property string $short
 * @property string $text
 * @property string $image
 * @property string $posted_tume
 */
class Notifications extends \yii\db\ActiveRecord
{
    public $file;
    public static function tableName()
    {
        return 'notifications';
    }

    /**
     * @inheritdoc
     */
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

    /**
     * @inheritdoc
     */
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
