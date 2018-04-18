<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Refpekerjaan;

/**
 * RefpekerjaanSearch represents the model behind the search form of `backend\models\Refpekerjaan`.
 */
class RefpekerjaanSearch extends Refpekerjaan
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['IdPekerjaan'], 'integer'],
            [['NamaPekerjaan'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Refpekerjaan::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'IdPekerjaan' => $this->IdPekerjaan,
        ]);

        $query->andFilterWhere(['like', 'NamaPekerjaan', $this->NamaPekerjaan]);

        return $dataProvider;
    }
}
