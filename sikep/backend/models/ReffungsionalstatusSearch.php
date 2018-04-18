<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Reffungsionalstatus;

/**
 * ReffungsionalstatusSearch represents the model behind the search form of `frontend\models\Reffungsionalstatus`.
 */
class ReffungsionalstatusSearch extends Reffungsionalstatus
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idRefFungsionalStatus'], 'integer'],
            [['NamaRefFungsionalStatus'], 'safe'],
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
        $query = Reffungsionalstatus::find();

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
            'idRefFungsionalStatus' => $this->idRefFungsionalStatus,
        ]);

        $query->andFilterWhere(['like', 'NamaRefFungsionalStatus', $this->NamaRefFungsionalStatus]);

        return $dataProvider;
    }
}
