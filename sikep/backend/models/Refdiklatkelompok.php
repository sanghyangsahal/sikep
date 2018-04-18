<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tref_diklat_kelompok".
 *
 * @property int $idKelompokDiklat
 * @property string $NamaKelompokDiklat
 */
class Refdiklatkelompok extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tref_diklat_kelompok';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['NamaKelompokDiklat'], 'required'],
            [['NamaKelompokDiklat'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idKelompokDiklat' => 'Id Kelompok Diklat',
            'NamaKelompokDiklat' => 'Nama Kelompok Diklat',
        ];
    }
}
