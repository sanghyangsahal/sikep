<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tref_pendidikanmiliter".
 *
 * @property int $idPendidikanMilter
 * @property string $NamaPendidikanMiliter
 */
class Refpendidikanmiliter extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tref_pendidikanmiliter';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['NamaPendidikanMiliter'], 'required'],
            [['NamaPendidikanMiliter'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idPendidikanMilter' => 'Id Pendidikan Milter',
            'NamaPendidikanMiliter' => 'Nama Pendidikan Militer',
        ];
    }
}
