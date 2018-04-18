<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tref_golongan_darah".
 *
 * @property int $idGolonganDarah
 * @property string $namaGolonganDarah
 */
class Refgolongandarah extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tref_golongan_darah';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['namaGolonganDarah'], 'required'],
            [['namaGolonganDarah'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idGolonganDarah' => 'Id Golongan Darah',
            'namaGolonganDarah' => 'Nama Golongan Darah',
        ];
    }
}
