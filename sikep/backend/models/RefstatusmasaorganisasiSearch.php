<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Refstatusmasaorganisasi;

/**
 * RefstatusmasaorganisasiSearch represents the model behind the search form of `frontend\models\Refstatusmasaorganisasi`.
 */
class RefstatusmasaorganisasiSearch extends Refstatusmasaorganisasi
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['IDStatusMasaOrganisasi'], 'integer'],
            [['NamaStatusMasaOrganisasi'], 'safe'],
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
        $query = Refstatusmasaorganisasi::find();

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
            'IDStatusMasaOrganisasi' => $this->IDStatusMasaOrganisasi,
        ]);

        $query->andFilterWhere(['like', 'NamaStatusMasaOrganisasi', $this->NamaStatusMasaOrganisasi]);

        return $dataProvider;
    }
}
