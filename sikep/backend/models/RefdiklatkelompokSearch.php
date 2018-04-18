<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Refdiklatkelompok;

/**
 * RefdiklatkelompokSearch represents the model behind the search form of `backend\models\Refdiklatkelompok`.
 */
class RefdiklatkelompokSearch extends Refdiklatkelompok
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idKelompokDiklat'], 'integer'],
            [['NamaKelompokDiklat'], 'safe'],
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
        $query = Refdiklatkelompok::find();

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
            'idKelompokDiklat' => $this->idKelompokDiklat,
        ]);

        $query->andFilterWhere(['like', 'NamaKelompokDiklat', $this->NamaKelompokDiklat]);

        return $dataProvider;
    }
}
