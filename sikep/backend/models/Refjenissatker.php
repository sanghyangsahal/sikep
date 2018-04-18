<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tref_jenis_satker".
 *
 * @property int $IdJenisSatker
 * @property string $NamaJenisSatker
 * @property int $IdLingkunganPeradilan
 */
class Refjenissatker extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tref_jenis_satker';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['NamaJenisSatker', 'IdLingkunganPeradilan'], 'required'],
            [['IdLingkunganPeradilan'], 'integer'],
            [['NamaJenisSatker'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IdJenisSatker' => 'Id Jenis Satker',
            'NamaJenisSatker' => 'Nama Jenis Satker',
            'IdLingkunganPeradilan' => 'Id Lingkungan Peradilan',
        ];
    }
}
