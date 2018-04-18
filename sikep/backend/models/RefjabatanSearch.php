<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Refjabatan;

/**
 * RefjabatanSearch represents the model behind the search form of `backend\models\Refjabatan`.
 */
class RefjabatanSearch extends Refjabatan
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['IdNamaJabatan', 'UrutanJabatan', 'IdPosisiJabatan', 'UsiaPensiunJabatan'], 'integer'],
            [['NamaJabatan', 'SingkatanNamaJabatan', 'KeteranganNamaJabatan'], 'safe'],
            [['MinimumAngaKreditJabatan'], 'number'],
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
        $query = Refjabatan::find();

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
            'IdNamaJabatan' => $this->IdNamaJabatan,
            'UrutanJabatan' => $this->UrutanJabatan,
            'IdPosisiJabatan' => $this->IdPosisiJabatan,
            'UsiaPensiunJabatan' => $this->UsiaPensiunJabatan,
            'MinimumAngaKreditJabatan' => $this->MinimumAngaKreditJabatan,
        ]);

        $query->andFilterWhere(['like', 'NamaJabatan', $this->NamaJabatan])
            ->andFilterWhere(['like', 'SingkatanNamaJabatan', $this->SingkatanNamaJabatan])
            ->andFilterWhere(['like', 'KeteranganNamaJabatan', $this->KeteranganNamaJabatan]);

        return $dataProvider;
    }
}
