<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\ReferensiBank;

/**
 * RefbankSearch represents the model behind the search form of `backend\models\ReferensiBank`.
 */
class RefbankSearch extends ReferensiBank
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['IdBank'], 'integer'],
            [['NamaBank', 'KodeBank'], 'safe'],
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
        $query = ReferensiBank::find();

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
            'IdBank' => $this->IdBank,
        ]);

        $query->andFilterWhere(['like', 'NamaBank', $this->NamaBank])
            ->andFilterWhere(['like', 'KodeBank', $this->KodeBank]);

        return $dataProvider;
    }
}
