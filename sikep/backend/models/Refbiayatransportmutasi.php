<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tref_biaya_transport_mutasi".
 *
 * @property int $idBiayaTransport
 * @property int $KodeSatkerAsalMutasi
 * @property int $KodeSatkerTujuanMutasi
 * @property int $BiayaDaratTrasnportMutasi
 * @property int $BiayaLautTrasnportMutasi
 * @property int $UangHarianIiiMutasi
 * @property int $UangHarianViMutasi
 * @property int $JarakJarakTrasnportMutasi
 * @property int $TIketTransportMutasi
 */
class Refbiayatransportmutasi extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tref_biaya_transport_mutasi';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['KodeSatkerAsalMutasi', 'KodeSatkerTujuanMutasi'], 'required'],
            [['KodeSatkerAsalMutasi', 'KodeSatkerTujuanMutasi', 'BiayaDaratTrasnportMutasi', 'BiayaLautTrasnportMutasi', 'UangHarianIiiMutasi', 'UangHarianViMutasi', 'JarakJarakTrasnportMutasi', 'TIketTransportMutasi'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idBiayaTransport' => 'Id Biaya Transport',
            'KodeSatkerAsalMutasi' => 'Kode Satker Asal Mutasi',
            'KodeSatkerTujuanMutasi' => 'Kode Satker Tujuan Mutasi',
            'BiayaDaratTrasnportMutasi' => 'Biaya Darat Trasnport Mutasi',
            'BiayaLautTrasnportMutasi' => 'Biaya Laut Trasnport Mutasi',
            'UangHarianIiiMutasi' => 'Uang Harian Iii Mutasi',
            'UangHarianViMutasi' => 'Uang Harian Vi Mutasi',
            'JarakJarakTrasnportMutasi' => 'Jarak Jarak Trasnport Mutasi',
            'TIketTransportMutasi' => 'Tiket Transport Mutasi',
        ];
    }
}
