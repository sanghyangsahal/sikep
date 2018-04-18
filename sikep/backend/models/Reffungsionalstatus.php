<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tref_fungsional_status".
 *
 * @property int $idRefFungsionalStatus
 * @property string $NamaRefFungsionalStatus
 */
class Reffungsionalstatus extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tref_fungsional_status';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['NamaRefFungsionalStatus'], 'required'],
            [['NamaRefFungsionalStatus'], 'string', 'max' => 30],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idRefFungsionalStatus' => 'Id Ref Fungsional Status',
            'NamaRefFungsionalStatus' => 'Nama Ref Fungsional Status',
        ];
    }
}
