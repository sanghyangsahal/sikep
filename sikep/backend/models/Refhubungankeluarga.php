<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tref_hubungan_keluarga".
 *
 * @property int $IdHubunganKeluarga
 * @property string $JenisHubunganKeluarga
 */
class Refhubungankeluarga extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tref_hubungan_keluarga';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['JenisHubunganKeluarga'], 'required'],
            [['JenisHubunganKeluarga'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IdHubunganKeluarga' => 'Id Hubungan Keluarga',
            'JenisHubunganKeluarga' => 'Jenis Hubungan Keluarga',
        ];
    }
}
