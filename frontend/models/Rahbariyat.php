<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "rahbariyat".
 *
 * @property integer $id
 * @property string $lavozim
 * @property string $fio
 * @property string $image
 * @property string $qabul
 * @property string $malumot
 */
class Rahbariyat extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'rahbariyat';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['lavozim', 'fio', 'image', 'qabul', 'malumot'], 'required'],
            [['lavozim', 'fio', 'image', 'qabul', 'malumot'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'lavozim' => 'Lavozim',
            'fio' => 'Fio',
            'image' => 'Image',
            'qabul' => 'Qabul',
            'malumot' => 'Malumot',
        ];
    }
}
