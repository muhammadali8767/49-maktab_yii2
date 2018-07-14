<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "virtual".
 *
 * @property integer $id
 * @property string $fio
 * @property string $tashkilot
 * @property string $nomer
 * @property string $email
 * @property string $manzil
 * @property string $passport
 * @property string $turi
 * @property string $mavzu
 * @property string $xabar
 * @property string $fayl
 */
class Virtual extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'virtual';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fio', 'nomer', 'email', 'manzil', 'passport', 'mavzu', 'xabar'], 'required'],
            [['turi', 'xabar'], 'string'],
            [['fio', 'tashkilot', 'nomer', 'email', 'manzil', 'passport', 'mavzu', 'fayl'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
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
