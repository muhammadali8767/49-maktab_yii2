<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "news".
 *
 * @property integer $id
 * @property string $title
 * @property string $short
 * @property string $text
 * @property string $image
 * @property string $posted_time
 */
class News extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'news';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'short', 'text', 'image', 'posted_time'], 'required'],
            [['short', 'text'], 'string'],
            [['posted_time'], 'safe'],
            [['title', 'image'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'short' => 'Short',
            'text' => 'Text',
            'image' => 'Image',
            'posted_time' => 'Posted Time',
        ];
    }
}
