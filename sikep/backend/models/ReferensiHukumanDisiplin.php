<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tref_hukuman_disiplin".
 *
 * @property int $idHukumanDisiplin
 * @property string $NamaHukumanDisiplin
 * @property string $TingkatHukumanDisiplin
 */
class ReferensiHukumanDisiplin extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tref_hukuman_disiplin';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['NamaHukumanDisiplin'], 'string', 'max' => 100],
            [['TingkatHukumanDisiplin'], 'string', 'max' => 1],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idHukumanDisiplin' => 'Id Hukuman Disiplin',
            'NamaHukumanDisiplin' => 'Nama Hukuman Disiplin',
            'TingkatHukumanDisiplin' => 'Tingkat Hukuman Disiplin',
        ];
    }
}
