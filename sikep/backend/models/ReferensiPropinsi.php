<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tref_propinsi".
 *
 * @property int $IdPropinsi
 * @property string $NamaPropinsi
 * @property int $IdPulau
 */
class ReferensiPropinsi extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tref_propinsi';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['NamaPropinsi', 'IdPulau'], 'required'],
            [['IdPulau'], 'integer'],
            [['NamaPropinsi'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IdPropinsi' => 'Id Propinsi',
            'NamaPropinsi' => 'Nama Propinsi',
            'IdPulau' => 'Id Pulau',
        ];
    }
}
