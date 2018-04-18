<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tref_alasanpensiun".
 *
 * @property int $idAlasanPensiun
 * @property string $AlasanPensiun
 * @property string $Keterangan
 */
class Refalasanpensiun extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tref_alasanpensiun';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['AlasanPensiun'], 'required'],
            [['AlasanPensiun'], 'string', 'max' => 100],
            [['Keterangan'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idAlasanPensiun' => 'Id Alasan Pensiun',
            'AlasanPensiun' => 'Alasan Pensiun',
            'Keterangan' => 'Keterangan',
        ];
    }
}
