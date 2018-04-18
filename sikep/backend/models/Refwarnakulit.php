<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tref_warna_kulit".
 *
 * @property int $IdWarnaKulit
 * @property string $NamaWarnaKulit
 */
class Refwarnakulit extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tref_warna_kulit';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['NamaWarnaKulit'], 'required'],
            [['NamaWarnaKulit'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IdWarnaKulit' => 'Id Warna Kulit',
            'NamaWarnaKulit' => 'Nama Warna Kulit',
        ];
    }
}
