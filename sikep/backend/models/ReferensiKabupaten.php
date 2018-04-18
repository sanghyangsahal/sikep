<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tref_kabupaten".
 *
 * @property int $idKabupaten
 * @property string $NamaKabupaten
 * @property string $kodeKabupaten
 * @property int $idPropinsi
 */
class ReferensiKabupaten extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tref_kabupaten';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['NamaKabupaten', 'kodeKabupaten'], 'required'],
            [['idPropinsi'], 'integer'],
            [['NamaKabupaten'], 'string', 'max' => 50],
            [['kodeKabupaten'], 'string', 'max' => 4],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idKabupaten' => 'Id Kabupaten',
            'NamaKabupaten' => 'Nama Kabupaten',
            'kodeKabupaten' => 'Kode Kabupaten',
            'idPropinsi' => 'Id Propinsi',
        ];
    }
}
