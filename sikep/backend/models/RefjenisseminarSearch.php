<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Refjenisseminar;

/**
 * RefjenisseminarSearch represents the model behind the search form of `backend\models\Refjenisseminar`.
 */
class RefjenisseminarSearch extends Refjenisseminar
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['IdJenisSeminar'], 'integer'],
            [['NamaJenisSeminar'], 'safe'],
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
        $query = Refjenisseminar::find();

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
            'IdJenisSeminar' => $this->IdJenisSeminar,
        ]);

        $query->andFilterWhere(['like', 'NamaJenisSeminar', $this->NamaJenisSeminar]);

        return $dataProvider;
    }
}
