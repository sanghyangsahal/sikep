<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tref_golonganruang".
 *
 * @property int $idGolonganRuang
 * @property int $UrutanGolonganRuang
 * @property string $KodeGolonganRuang
 * @property string $NamaGolongan
 * @property string $Golongan
 * @property string $Ruang
 * @property int $idFormatBKN
 * @property int $idTingkatPendidikanMinimal
 *
 * @property TmstPegawai[] $tmstPegawais
 */
class Refgolonganruang extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tref_golonganruang';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['UrutanGolonganRuang', 'KodeGolonganRuang', 'NamaGolongan', 'Golongan', 'Ruang'], 'required'],
            [['UrutanGolonganRuang', 'idFormatBKN', 'idTingkatPendidikanMinimal'], 'integer'],
            [['KodeGolonganRuang'], 'string', 'max' => 3],
            [['NamaGolongan'], 'string', 'max' => 50],
            [['Golongan', 'Ruang'], 'string', 'max' => 15],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idGolonganRuang' => 'Id Golongan Ruang',
            'UrutanGolonganRuang' => 'Urutan Golongan Ruang',
            'KodeGolonganRuang' => 'Kode Golongan Ruang',
            'NamaGolongan' => 'Nama Golongan',
            'Golongan' => 'Golongan',
            'Ruang' => 'Ruang',
            'idFormatBKN' => 'Id Format Bkn',
            'idTingkatPendidikanMinimal' => 'Id Tingkat Pendidikan Minimal',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTmstPegawais()
    {
        return $this->hasMany(TmstPegawai::className(), ['KodeGolonganRuang' => 'idGolonganRuang']);
    }
}
