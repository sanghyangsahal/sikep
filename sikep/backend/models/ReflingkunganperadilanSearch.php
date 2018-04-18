<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\ReferensiLingkunganPeradilan;

/**
 * ReflingkunganperadilanSearch represents the model behind the search form of `backend\models\ReferensiLingkunganPeradilan`.
 */
class ReflingkunganperadilanSearch extends ReferensiLingkunganPeradilan
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idLingkunganPeradilan'], 'integer'],
            [['NamaLingkunganPeradilan'], 'safe'],
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
        $query = ReferensiLingkunganPeradilan::find();

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
            'idLingkunganPeradilan' => $this->idLingkunganPeradilan,
        ]);

        $query->andFilterWhere(['like', 'NamaLingkunganPeradilan', $this->NamaLingkunganPeradilan]);

        return $dataProvider;
    }
}
