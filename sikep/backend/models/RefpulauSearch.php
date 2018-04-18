<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Refpulau;

/**
 * RefpulauSearch represents the model behind the search form of `backend\models\Refpulau`.
 */
class RefpulauSearch extends Refpulau
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['IdPulau'], 'integer'],
            [['NamaPulau'], 'safe'],
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
        $query = Refpulau::find();

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
            'IdPulau' => $this->IdPulau,
        ]);

        $query->andFilterWhere(['like', 'NamaPulau', $this->NamaPulau]);

        return $dataProvider;
    }
}
