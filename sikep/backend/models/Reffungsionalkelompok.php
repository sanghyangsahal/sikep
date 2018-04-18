<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tref_fungsional_kelompok".
 *
 * @property int $IdFungsionalKelompok
 * @property string $NamaFungsionalKelompok
 */
class Reffungsionalkelompok extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tref_fungsional_kelompok';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['NamaFungsionalKelompok'], 'required'],
            [['NamaFungsionalKelompok'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IdFungsionalKelompok' => 'Id Fungsional Kelompok',
            'NamaFungsionalKelompok' => 'Nama Fungsional Kelompok',
        ];
    }
}
