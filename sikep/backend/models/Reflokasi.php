<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tref_lokasi".
 *
 * @property int $IdLokasi
 * @property string $NamaLokasi
 */
class Reflokasi extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tref_lokasi';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['NamaLokasi'], 'required'],
            [['NamaLokasi'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IdLokasi' => 'Id Lokasi',
            'NamaLokasi' => 'Nama Lokasi',
        ];
    }
}
