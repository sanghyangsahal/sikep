<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tref_komposisi_hakim".
 *
 * @property int $IdKomposisiHakim
 * @property int $KodeSatkerKomposisiHakim
 * @property int $MinimalJumlahKomposisiHakim
 * @property int $MaksimalJumlahKomposisiHakim
 * @property double $BalancingScoreKomposisiHakim
 */
class Refkomposisihakim extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tref_komposisi_hakim';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['KodeSatkerKomposisiHakim', 'MinimalJumlahKomposisiHakim', 'MaksimalJumlahKomposisiHakim'], 'required'],
            [['KodeSatkerKomposisiHakim', 'MinimalJumlahKomposisiHakim', 'MaksimalJumlahKomposisiHakim'], 'integer'],
            [['BalancingScoreKomposisiHakim'], 'number'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IdKomposisiHakim' => 'Id Komposisi Hakim',
            'KodeSatkerKomposisiHakim' => 'Kode Satker Komposisi Hakim',
            'MinimalJumlahKomposisiHakim' => 'Minimal Jumlah Komposisi Hakim',
            'MaksimalJumlahKomposisiHakim' => 'Maksimal Jumlah Komposisi Hakim',
            'BalancingScoreKomposisiHakim' => 'Balancing Score Komposisi Hakim',
        ];
    }
}
