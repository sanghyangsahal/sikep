<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Reflokasi;

/**
 * ReflokasiSearch represents the model behind the search form of `backend\models\Reflokasi`.
 */
class ReflokasiSearch extends Reflokasi
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['IdLokasi'], 'integer'],
            [['NamaLokasi'], 'safe'],
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
        $query = Reflokasi::find();

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
            'IdLokasi' => $this->IdLokasi,
        ]);

        $query->andFilterWhere(['like', 'NamaLokasi', $this->NamaLokasi]);

        return $dataProvider;
    }
}
