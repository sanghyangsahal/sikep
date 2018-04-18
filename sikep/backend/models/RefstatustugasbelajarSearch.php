<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\ReferensiStatusTugasBelajar;

/**
 * RefstatustugasbelajarSearch represents the model behind the search form of `backend\models\ReferensiStatusTugasBelajar`.
 */
class RefstatustugasbelajarSearch extends ReferensiStatusTugasBelajar
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['IdStatusTugasBelajar'], 'integer'],
            [['NamaStatusTugasBelajar'], 'safe'],
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
        $query = ReferensiStatusTugasBelajar::find();

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
            'IdStatusTugasBelajar' => $this->IdStatusTugasBelajar,
        ]);

        $query->andFilterWhere(['like', 'NamaStatusTugasBelajar', $this->NamaStatusTugasBelajar]);

        return $dataProvider;
    }
}
