<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tref_posisi_jabatan".
 *
 * @property int $IdPosisiJabatan
 * @property string $KodePosisiJabatan
 * @property int $LevelPosisiJabatan
 * @property int $UrutanPosisiJabatan
 * @property string $NamaPosisiJabatan
 * @property string $KeteranganPosisiJabatan
 */
class Refposisijabatan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tref_posisi_jabatan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['KodePosisiJabatan', 'NamaPosisiJabatan'], 'required'],
            [['LevelPosisiJabatan', 'UrutanPosisiJabatan'], 'integer'],
            [['KodePosisiJabatan'], 'string', 'max' => 2],
            [['NamaPosisiJabatan'], 'string', 'max' => 50],
            [['KeteranganPosisiJabatan'], 'string', 'max' => 30],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IdPosisiJabatan' => 'Id Posisi Jabatan',
            'KodePosisiJabatan' => 'Kode Posisi Jabatan',
            'LevelPosisiJabatan' => 'Level Posisi Jabatan',
            'UrutanPosisiJabatan' => 'Urutan Posisi Jabatan',
            'NamaPosisiJabatan' => 'Nama Posisi Jabatan',
            'KeteranganPosisiJabatan' => 'Keterangan Posisi Jabatan',
        ];
    }
}
