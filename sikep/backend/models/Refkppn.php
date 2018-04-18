<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tref_kppn".
 *
 * @property int $IdKPPN
 * @property string $KodeKPPN
 * @property string $NamaKPPN
 * @property string $KotaKPPN
 */
class Refkppn extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tref_kppn';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['KodeKPPN'], 'required'],
            [['KodeKPPN'], 'string', 'max' => 3],
            [['NamaKPPN', 'KotaKPPN'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IdKPPN' => 'Id Kppn',
            'KodeKPPN' => 'Kode Kppn',
            'NamaKPPN' => 'Nama Kppn',
            'KotaKPPN' => 'Kota Kppn',
        ];
    }
}
