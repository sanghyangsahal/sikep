<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tref_agama".
 *
 * @property int $idAgama
 * @property string $NamaAgama
 */
class Refagama extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tref_agama';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['NamaAgama'], 'required'],
            [['NamaAgama'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idAgama' => 'Id Agama',
            'NamaAgama' => 'Nama Agama',
        ];
    }
}
