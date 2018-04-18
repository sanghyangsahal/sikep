<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tref_rambut".
 *
 * @property int $IdJenisRambut
 * @property string $NamaJenisRambut
 */
class Reframbut extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tref_rambut';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['NamaJenisRambut'], 'required'],
            [['NamaJenisRambut'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IdJenisRambut' => 'Id Jenis Rambut',
            'NamaJenisRambut' => 'Nama Jenis Rambut',
        ];
    }
}
