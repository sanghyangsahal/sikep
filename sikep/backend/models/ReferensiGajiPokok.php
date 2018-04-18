<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tref_gajipokok".
 *
 * @property int $idGajiPokok
 * @property string $Tahun
 * @property int $idGolonganRuang
 * @property string $Golongan
 * @property int $MasaKerja
 * @property int $GajiPokok
 */
class ReferensiGajiPokok extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tref_gajipokok';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Tahun', 'idGolonganRuang', 'Golongan', 'MasaKerja', 'GajiPokok'], 'required'],
            [['Tahun'], 'safe'],
            [['idGolonganRuang', 'MasaKerja', 'GajiPokok'], 'integer'],
            [['Golongan'], 'string', 'max' => 25],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idGajiPokok' => 'Id Gaji Pokok',
            'Tahun' => 'Tahun',
            'idGolonganRuang' => 'Id Golongan Ruang',
            'Golongan' => 'Golongan',
            'MasaKerja' => 'Masa Kerja',
            'GajiPokok' => 'Gaji Pokok',
        ];
    }
}
