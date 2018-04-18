<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tref_tanda_jasa".
 *
 * @property int $IdTandaJasa
 * @property string $NamaTandaJasa
 * @property string $LembagaPemberiTandaJasa
 * @property string $StatusTandaJasa
 * @property string $JenisTandaJasa
 */
class Reftandajasa extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tref_tanda_jasa';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['NamaTandaJasa', 'LembagaPemberiTandaJasa', 'JenisTandaJasa'], 'required'],
            [['NamaTandaJasa'], 'string', 'max' => 200],
            [['LembagaPemberiTandaJasa'], 'string', 'max' => 100],
            [['StatusTandaJasa', 'JenisTandaJasa'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IdTandaJasa' => 'Id Tanda Jasa',
            'NamaTandaJasa' => 'Nama Tanda Jasa',
            'LembagaPemberiTandaJasa' => 'Lembaga Pemberi Tanda Jasa',
            'StatusTandaJasa' => 'Status Tanda Jasa',
            'JenisTandaJasa' => 'Jenis Tanda Jasa',
        ];
    }
}
