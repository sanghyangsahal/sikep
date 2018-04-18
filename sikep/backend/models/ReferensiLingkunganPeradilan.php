<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tref_lingkungan_peradilan".
 *
 * @property int $idLingkunganPeradilan
 * @property string $NamaLingkunganPeradilan
 */
class ReferensiLingkunganPeradilan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tref_lingkungan_peradilan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['NamaLingkunganPeradilan'], 'required'],
            [['NamaLingkunganPeradilan'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idLingkunganPeradilan' => 'Id Lingkungan Peradilan',
            'NamaLingkunganPeradilan' => 'Nama Lingkungan Peradilan',
        ];
    }
}
