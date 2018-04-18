<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tref_sukubangsa".
 *
 * @property int $IdSukuBangsa
 * @property string $NamaSukuBangsa
 */
class Refsukubangsa extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tref_sukubangsa';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['NamaSukuBangsa'], 'required'],
            [['NamaSukuBangsa'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IdSukuBangsa' => 'Id Suku Bangsa',
            'NamaSukuBangsa' => 'Nama Suku Bangsa',
        ];
    }
}
