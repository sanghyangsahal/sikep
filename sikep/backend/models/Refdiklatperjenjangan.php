<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tref_diklat_perjenjangan".
 *
 * @property int $idDiklatPerjenjangan
 * @property int $levelDiklatPerjenjangan
 * @property string $namaDiklatPerjenjangan
 */
class Refdiklatperjenjangan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tref_diklat_perjenjangan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['levelDiklatPerjenjangan'], 'required'],
            [['levelDiklatPerjenjangan'], 'integer'],
            [['namaDiklatPerjenjangan'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idDiklatPerjenjangan' => 'Id Diklat Perjenjangan',
            'levelDiklatPerjenjangan' => 'Level Diklat Perjenjangan',
            'namaDiklatPerjenjangan' => 'Nama Diklat Perjenjangan',
        ];
    }
}
