<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tref_fungsional_alasan".
 *
 * @property int $IdRefFungsionalAlasan
 * @property int $IdStatusFungsional
 * @property string $NamaRefFungsionalAlasan
 */
class Reffungsionalalasan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tref_fungsional_alasan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['IdStatusFungsional', 'NamaRefFungsionalAlasan'], 'required'],
            [['IdStatusFungsional'], 'integer'],
            [['NamaRefFungsionalAlasan'], 'string', 'max' => 30],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IdRefFungsionalAlasan' => 'Id Ref Fungsional Alasan',
            'IdStatusFungsional' => 'Id Status Fungsional',
            'NamaRefFungsionalAlasan' => 'Nama Ref Fungsional Alasan',
        ];
    }
}
