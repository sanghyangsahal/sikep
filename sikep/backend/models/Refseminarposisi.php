<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tref_seminar_posisi".
 *
 * @property int $IdSeminarPosisi
 * @property string $NamaSeminarPosisi
 */
class Refseminarposisi extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tref_seminar_posisi';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['NamaSeminarPosisi'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IdSeminarPosisi' => 'Id Seminar Posisi',
            'NamaSeminarPosisi' => 'Nama Seminar Posisi',
        ];
    }
}
