<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tref_negara".
 *
 * @property int $IdNegara
 * @property string $KodeNegara
 * @property string $NamaNegara
 */
class Refnegara extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tref_negara';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['KodeNegara', 'NamaNegara'], 'required'],
            [['KodeNegara'], 'string', 'max' => 4],
            [['NamaNegara'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IdNegara' => 'Id Negara',
            'KodeNegara' => 'Kode Negara',
            'NamaNegara' => 'Nama Negara',
        ];
    }
}
