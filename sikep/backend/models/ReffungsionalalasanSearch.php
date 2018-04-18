<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Reffungsionalalasan;

/**
 * ReffungsionalalasanSearch represents the model behind the search form of `backend\models\Reffungsionalalasan`.
 */
class ReffungsionalalasanSearch extends Reffungsionalalasan
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['IdRefFungsionalAlasan', 'IdStatusFungsional'], 'integer'],
            [['NamaRefFungsionalAlasan'], 'safe'],
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
        $query = Reffungsionalalasan::find();

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
            'IdRefFungsionalAlasan' => $this->IdRefFungsionalAlasan,
            'IdStatusFungsional' => $this->IdStatusFungsional,
        ]);

        $query->andFilterWhere(['like', 'NamaRefFungsionalAlasan', $this->NamaRefFungsionalAlasan]);

        return $dataProvider;
    }
}
