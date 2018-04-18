<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Reffungsionalperjenjangan;

/**
 * ReffungsionalperjenjanganSearch represents the model behind the search form of `backend\models\Reffungsionalperjenjangan`.
 */
class ReffungsionalperjenjanganSearch extends Reffungsionalperjenjangan
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['IdRefFungsionalPerjenjangan', 'ParentIdRefFungsionalPerjenjangan'], 'integer'],
            [['NamaFungsionalPerjenjangan'], 'safe'],
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
        $query = Reffungsionalperjenjangan::find();

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
            'IdRefFungsionalPerjenjangan' => $this->IdRefFungsionalPerjenjangan,
            'ParentIdRefFungsionalPerjenjangan' => $this->ParentIdRefFungsionalPerjenjangan,
        ]);

        $query->andFilterWhere(['like', 'NamaFungsionalPerjenjangan', $this->NamaFungsionalPerjenjangan]);

        return $dataProvider;
    }
}
