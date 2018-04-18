<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tref_universitas".
 *
 * @property int $idUniversitas
 * @property int $IdTingkatPendidikan
 * @property int $IdNegara
 * @property string $KodeUniversitas
 * @property string $NamaUniversitas
 * @property string $DeskripsiUniversitas
 * @property string $SingkatanUniversitas
 */
class ReferensiUniversitas extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tref_universitas';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['IdTingkatPendidikan', 'IdNegara'], 'integer'],
            [['IdNegara', 'KodeUniversitas', 'NamaUniversitas'], 'required'],
            [['KodeUniversitas'], 'string', 'max' => 4],
            [['NamaUniversitas'], 'string', 'max' => 100],
            [['DeskripsiUniversitas'], 'string', 'max' => 150],
            [['SingkatanUniversitas'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idUniversitas' => 'Id Universitas',
            'IdTingkatPendidikan' => 'Id Tingkat Pendidikan',
            'IdNegara' => 'Id Negara',
            'KodeUniversitas' => 'Kode Universitas',
            'NamaUniversitas' => 'Nama Universitas',
            'DeskripsiUniversitas' => 'Deskripsi Universitas',
            'SingkatanUniversitas' => 'Singkatan Universitas',
        ];
    }
}
