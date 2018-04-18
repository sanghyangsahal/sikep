<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tref_fungsional_perjenjangan".
 *
 * @property int $IdRefFungsionalPerjenjangan
 * @property int $ParentIdRefFungsionalPerjenjangan
 * @property string $NamaFungsionalPerjenjangan
 */
class Reffungsionalperjenjangan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tref_fungsional_perjenjangan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ParentIdRefFungsionalPerjenjangan'], 'integer'],
            [['NamaFungsionalPerjenjangan'], 'required'],
            [['NamaFungsionalPerjenjangan'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IdRefFungsionalPerjenjangan' => 'Id Ref Fungsional Perjenjangan',
            'ParentIdRefFungsionalPerjenjangan' => 'Parent Id Ref Fungsional Perjenjangan',
            'NamaFungsionalPerjenjangan' => 'Nama Fungsional Perjenjangan',
        ];
    }
}
