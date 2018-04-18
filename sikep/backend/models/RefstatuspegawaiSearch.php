<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Refstatuspegawai;

/**
 * RefstatuspegawaiSearch represents the model behind the search form of `backend\models\Refstatuspegawai`.
 */
class RefstatuspegawaiSearch extends Refstatuspegawai
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idStatusPegawai'], 'integer'],
            [['StatusPegawai', 'Keterangan'], 'safe'],
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
        $query = Refstatuspegawai::find();

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
            'idStatusPegawai' => $this->idStatusPegawai,
        ]);

        $query->andFilterWhere(['like', 'StatusPegawai', $this->StatusPegawai])
            ->andFilterWhere(['like', 'Keterangan', $this->Keterangan]);

        return $dataProvider;
    }
}
