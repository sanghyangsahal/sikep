<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\ReferensiHukumanDisiplin;

/**
 * RefhukumandisiplinSearch represents the model behind the search form of `backend\models\ReferensiHukumanDisiplin`.
 */
class RefhukumandisiplinSearch extends ReferensiHukumanDisiplin
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idHukumanDisiplin'], 'integer'],
            [['NamaHukumanDisiplin', 'TingkatHukumanDisiplin'], 'safe'],
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
        $query = ReferensiHukumanDisiplin::find();

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
            'idHukumanDisiplin' => $this->idHukumanDisiplin,
        ]);

        $query->andFilterWhere(['like', 'NamaHukumanDisiplin', $this->NamaHukumanDisiplin])
            ->andFilterWhere(['like', 'TingkatHukumanDisiplin', $this->TingkatHukumanDisiplin]);

        return $dataProvider;
    }
}
