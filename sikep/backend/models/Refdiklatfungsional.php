<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tref_diklatfungsional".
 *
 * @property int $IdJenisDiklatFungsional
 * @property string $NamaJenisDiklatFungsional
 */
class Refdiklatfungsional extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tref_diklatfungsional';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['NamaJenisDiklatFungsional'], 'required'],
            [['NamaJenisDiklatFungsional'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IdJenisDiklatFungsional' => 'Id Jenis Diklat Fungsional',
            'NamaJenisDiklatFungsional' => 'Nama Jenis Diklat Fungsional',
        ];
    }
}
