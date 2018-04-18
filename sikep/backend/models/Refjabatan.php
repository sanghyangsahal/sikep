<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tref_jabatan".
 *
 * @property int $IdNamaJabatan
 * @property int $UrutanJabatan
 * @property int $IdPosisiJabatan
 * @property string $NamaJabatan
 * @property string $SingkatanNamaJabatan
 * @property string $KeteranganNamaJabatan
 * @property int $UsiaPensiunJabatan
 * @property double $MinimumAngaKreditJabatan
 */
class Refjabatan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tref_jabatan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['UrutanJabatan', 'IdPosisiJabatan', 'NamaJabatan'], 'required'],
            [['UrutanJabatan', 'IdPosisiJabatan', 'UsiaPensiunJabatan'], 'integer'],
            [['MinimumAngaKreditJabatan'], 'number'],
            [['NamaJabatan', 'SingkatanNamaJabatan'], 'string', 'max' => 150],
            [['KeteranganNamaJabatan'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IdNamaJabatan' => 'Id Nama Jabatan',
            'UrutanJabatan' => 'Urutan Jabatan',
            'IdPosisiJabatan' => 'Id Posisi Jabatan',
            'NamaJabatan' => 'Nama Jabatan',
            'SingkatanNamaJabatan' => 'Singkatan Nama Jabatan',
            'KeteranganNamaJabatan' => 'Keterangan Nama Jabatan',
            'UsiaPensiunJabatan' => 'Usia Pensiun Jabatan',
            'MinimumAngaKreditJabatan' => 'Minimum Anga Kredit Jabatan',
        ];
    }
}
