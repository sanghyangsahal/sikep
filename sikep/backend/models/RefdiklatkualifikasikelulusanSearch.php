<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Refdiklatkualifikasikelulusan;

/**
 * RefdiklatkualifikasikelulusanSearch represents the model behind the search form of `backend\models\Refdiklatkualifikasikelulusan`.
 */
class RefdiklatkualifikasikelulusanSearch extends Refdiklatkualifikasikelulusan
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['IdDiklatKualifikasiLulusan', 'UrutanKualifikasiLulusan'], 'integer'],
            [['NamaKualifikasiLulusan'], 'safe'],
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
        $query = Refdiklatkualifikasikelulusan::find();

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
            'IdDiklatKualifikasiLulusan' => $this->IdDiklatKualifikasiLulusan,
            'UrutanKualifikasiLulusan' => $this->UrutanKualifikasiLulusan,
        ]);

        $query->andFilterWhere(['like', 'NamaKualifikasiLulusan', $this->NamaKualifikasiLulusan]);

        return $dataProvider;
    }
}
