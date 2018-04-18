<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tref_kecamatan".
 *
 * @property int $IdKecamatan
 * @property string $NamaKecamatan
 * @property int $idKabupaten
 */
class Refkecamatan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tref_kecamatan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['NamaKecamatan', 'idKabupaten'], 'required'],
            [['idKabupaten'], 'integer'],
            [['NamaKecamatan'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IdKecamatan' => 'Id Kecamatan',
            'NamaKecamatan' => 'Nama Kecamatan',
            'idKabupaten' => 'Id Kabupaten',
        ];
    }
}
