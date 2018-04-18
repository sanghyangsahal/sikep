<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tref_jenis_diklat_teknis".
 *
 * @property int $IdJenisDiklat
 * @property int $IdDiklatKelompok
 * @property int $IdDiklatSektor
 * @property string $NamaJenisDiklatTeknis
 */
class Refjenisdiklatteknis extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tref_jenis_diklat_teknis';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['IdDiklatKelompok', 'IdDiklatSektor', 'NamaJenisDiklatTeknis'], 'required'],
            [['IdDiklatKelompok', 'IdDiklatSektor'], 'integer'],
            [['NamaJenisDiklatTeknis'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IdJenisDiklat' => 'Id Jenis Diklat',
            'IdDiklatKelompok' => 'Id Diklat Kelompok',
            'IdDiklatSektor' => 'Id Diklat Sektor',
            'NamaJenisDiklatTeknis' => 'Nama Jenis Diklat Teknis',
        ];
    }
}
