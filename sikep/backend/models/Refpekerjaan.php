<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tref_pekerjaan".
 *
 * @property int $IdPekerjaan
 * @property string $NamaPekerjaan
 */
class Refpekerjaan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tref_pekerjaan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['NamaPekerjaan'], 'required'],
            [['NamaPekerjaan'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IdPekerjaan' => 'Id Pekerjaan',
            'NamaPekerjaan' => 'Nama Pekerjaan',
        ];
    }
}
