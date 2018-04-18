<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Refsukubangsa;

/**
 * RefsukubangsaSearch represents the model behind the search form of `backend\models\Refsukubangsa`.
 */
class RefsukubangsaSearch extends Refsukubangsa
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['IdSukuBangsa'], 'integer'],
            [['NamaSukuBangsa'], 'safe'],
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
        $query = Refsukubangsa::find();

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
            'IdSukuBangsa' => $this->IdSukuBangsa,
        ]);

        $query->andFilterWhere(['like', 'NamaSukuBangsa', $this->NamaSukuBangsa]);

        return $dataProvider;
    }
}
