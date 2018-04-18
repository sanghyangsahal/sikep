<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Refposisijabatan;

/**
 * RefposisijabatanSearch represents the model behind the search form of `frontend\models\Refposisijabatan`.
 */
class RefposisijabatanSearch extends Refposisijabatan
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['IdPosisiJabatan', 'LevelPosisiJabatan', 'UrutanPosisiJabatan'], 'integer'],
            [['KodePosisiJabatan', 'NamaPosisiJabatan', 'KeteranganPosisiJabatan'], 'safe'],
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
        $query = Refposisijabatan::find();

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
            'IdPosisiJabatan' => $this->IdPosisiJabatan,
            'LevelPosisiJabatan' => $this->LevelPosisiJabatan,
            'UrutanPosisiJabatan' => $this->UrutanPosisiJabatan,
        ]);

        $query->andFilterWhere(['like', 'KodePosisiJabatan', $this->KodePosisiJabatan])
            ->andFilterWhere(['like', 'NamaPosisiJabatan', $this->NamaPosisiJabatan])
            ->andFilterWhere(['like', 'KeteranganPosisiJabatan', $this->KeteranganPosisiJabatan]);

        return $dataProvider;
    }
}
