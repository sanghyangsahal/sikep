<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Refbentukmuka;

/**
 * RefbentukmukaSearch represents the model behind the search form of `backend\models\Refbentukmuka`.
 */
class RefbentukmukaSearch extends Refbentukmuka
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idBentukMuka'], 'integer'],
            [['namaBentukMuka'], 'safe'],
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
        $query = Refbentukmuka::find();

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
            'idBentukMuka' => $this->idBentukMuka,
        ]);

        $query->andFilterWhere(['like', 'namaBentukMuka', $this->namaBentukMuka]);

        return $dataProvider;
    }
}
