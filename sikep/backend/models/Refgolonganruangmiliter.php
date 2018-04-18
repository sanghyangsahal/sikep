<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tref_golonganruangmiliter".
 *
 * @property int $IdPangkatMiliter
 * @property string $JenisAngkatanMiliter
 * @property string $JenjangMiliter
 * @property string $NamaPangkatMiliter
 */
class Refgolonganruangmiliter extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tref_golonganruangmiliter';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['JenisAngkatanMiliter', 'JenjangMiliter', 'NamaPangkatMiliter'], 'required'],
            [['JenisAngkatanMiliter', 'JenjangMiliter'], 'string', 'max' => 3],
            [['NamaPangkatMiliter'], 'string', 'max' => 30],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IdPangkatMiliter' => 'Id Pangkat Militer',
            'JenisAngkatanMiliter' => 'Jenis Angkatan Militer',
            'JenjangMiliter' => 'Jenjang Militer',
            'NamaPangkatMiliter' => 'Nama Pangkat Militer',
        ];
    }
}
