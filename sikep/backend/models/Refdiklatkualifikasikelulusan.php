<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tref_diklat_kualifikasi_kelulusan".
 *
 * @property int $IdDiklatKualifikasiLulusan
 * @property string $NamaKualifikasiLulusan
 * @property int $UrutanKualifikasiLulusan
 */
class Refdiklatkualifikasikelulusan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tref_diklat_kualifikasi_kelulusan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['NamaKualifikasiLulusan', 'UrutanKualifikasiLulusan'], 'required'],
            [['UrutanKualifikasiLulusan'], 'integer'],
            [['NamaKualifikasiLulusan'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IdDiklatKualifikasiLulusan' => 'Id Diklat Kualifikasi Lulusan',
            'NamaKualifikasiLulusan' => 'Nama Kualifikasi Lulusan',
            'UrutanKualifikasiLulusan' => 'Urutan Kualifikasi Lulusan',
        ];
    }
}
