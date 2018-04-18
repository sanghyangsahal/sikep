<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tref_gajitunjangan".
 *
 * @property int $IdRefGajiTunjangan
 * @property string $KodeGajiTunjangan
 * @property string $NamaGajiTunjangan
 * @property int $IdGajiPokok
 * @property int $Tunjangan
 * @property int $RemunisasiGajiTunjangan
 */
class Refgajitunjangan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tref_gajitunjangan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['IdGajiPokok', 'Tunjangan', 'RemunisasiGajiTunjangan'], 'integer'],
            [['KodeGajiTunjangan'], 'string', 'max' => 3],
            [['NamaGajiTunjangan'], 'string', 'max' => 192],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IdRefGajiTunjangan' => 'Id Ref Gaji Tunjangan',
            'KodeGajiTunjangan' => 'Kode Gaji Tunjangan',
            'NamaGajiTunjangan' => 'Nama Gaji Tunjangan',
            'IdGajiPokok' => 'Id Gaji Pokok',
            'Tunjangan' => 'Tunjangan',
            'RemunisasiGajiTunjangan' => 'Remunisasi Gaji Tunjangan',
        ];
    }
}
