<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tref_tingkat_pendidikan".
 *
 * @property int $IdRefTingkatPendidikan
 * @property int $UrutanTingkatPendidikan
 * @property string $KodeTingkatPendidikan
 * @property string $NamaTingkatPendidikan
 * @property string $DeskripsiTingkatPendidikan
 * @property int $IdPangkatGolonganTingkatanPendidikan
 * @property string $GolonganMulaiTingkatPendidikan
 */
class Reftingkatpendidikan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tref_tingkat_pendidikan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['UrutanTingkatPendidikan', 'IdPangkatGolonganTingkatanPendidikan'], 'integer'],
            [['KodeTingkatPendidikan'], 'string', 'max' => 5],
            [['NamaTingkatPendidikan'], 'string', 'max' => 50],
            [['DeskripsiTingkatPendidikan'], 'string', 'max' => 100],
            [['GolonganMulaiTingkatPendidikan'], 'string', 'max' => 15],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IdRefTingkatPendidikan' => 'Id Ref Tingkat Pendidikan',
            'UrutanTingkatPendidikan' => 'Urutan Tingkat Pendidikan',
            'KodeTingkatPendidikan' => 'Kode Tingkat Pendidikan',
            'NamaTingkatPendidikan' => 'Nama Tingkat Pendidikan',
            'DeskripsiTingkatPendidikan' => 'Deskripsi Tingkat Pendidikan',
            'IdPangkatGolonganTingkatanPendidikan' => 'Id Pangkat Golongan Tingkatan Pendidikan',
            'GolonganMulaiTingkatPendidikan' => 'Golongan Mulai Tingkat Pendidikan',
        ];
    }
}
