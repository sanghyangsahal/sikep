<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tref_status_masa_organisasi".
 *
 * @property int $IDStatusMasaOrganisasi
 * @property string $NamaStatusMasaOrganisasi
 */
class Refstatusmasaorganisasi extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tref_status_masa_organisasi';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['NamaStatusMasaOrganisasi'], 'required'],
            [['NamaStatusMasaOrganisasi'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IDStatusMasaOrganisasi' => 'Idstatus Masa Organisasi',
            'NamaStatusMasaOrganisasi' => 'Nama Status Masa Organisasi',
        ];
    }
}
