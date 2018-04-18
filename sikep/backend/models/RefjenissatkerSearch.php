<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Refjenissatker;

/**
 * RefjenissatkerSearch represents the model behind the search form of `backend\models\Refjenissatker`.
 */
class RefjenissatkerSearch extends Refjenissatker
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['IdJenisSatker', 'IdLingkunganPeradilan'], 'integer'],
            [['NamaJenisSatker'], 'safe'],
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
        $query = Refjenissatker::find();

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
            'IdJenisSatker' => $this->IdJenisSatker,
            'IdLingkunganPeradilan' => $this->IdLingkunganPeradilan,
        ]);

        $query->andFilterWhere(['like', 'NamaJenisSatker', $this->NamaJenisSatker]);

        return $dataProvider;
    }
}
