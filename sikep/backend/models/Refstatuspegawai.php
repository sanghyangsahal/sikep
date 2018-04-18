<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tref_statuspegawai".
 *
 * @property int $idStatusPegawai
 * @property string $StatusPegawai
 * @property string $Keterangan
 */
class Refstatuspegawai extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tref_statuspegawai';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['StatusPegawai'], 'required'],
            [['StatusPegawai'], 'string', 'max' => 100],
            [['Keterangan'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idStatusPegawai' => 'Id Status Pegawai',
            'StatusPegawai' => 'Status Pegawai',
            'Keterangan' => 'Keterangan',
        ];
    }
}
