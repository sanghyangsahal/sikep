<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Refagama;

/**
 * RefagamaSearch represents the model behind the search form of `app\models\Refagama`.
 */
class RefagamaSearch extends Refagama
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idAgama'], 'integer'],
            [['NamaAgama'], 'safe'],
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
        $query = Refagama::find();

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
            'idAgama' => $this->idAgama,
        ]);

        $query->andFilterWhere(['like', 'NamaAgama', $this->NamaAgama]);

        return $dataProvider;
    }
}
