<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tref_jurusan".
 *
 * @property int $IdJurusan
 * @property string $KodeJurusan
 * @property string $NamaJurusan
 * @property int $idTingkatPendidikan
 */
class Refjurusan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tref_jurusan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['KodeJurusan'], 'required'],
            [['idTingkatPendidikan'], 'integer'],
            [['KodeJurusan'], 'string', 'max' => 4],
            [['NamaJurusan'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IdJurusan' => 'Id Jurusan',
            'KodeJurusan' => 'Kode Jurusan',
            'NamaJurusan' => 'Nama Jurusan',
            'idTingkatPendidikan' => 'Id Tingkat Pendidikan',
        ];
    }
}
