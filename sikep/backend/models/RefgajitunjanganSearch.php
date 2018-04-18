<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Refgajitunjangan;

/**
 * RefgajitunjanganSearch represents the model behind the search form of `backend\models\Refgajitunjangan`.
 */
class RefgajitunjanganSearch extends Refgajitunjangan
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['IdRefGajiTunjangan', 'IdGajiPokok', 'Tunjangan', 'RemunisasiGajiTunjangan'], 'integer'],
            [['KodeGajiTunjangan', 'NamaGajiTunjangan'], 'safe'],
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
        $query = Refgajitunjangan::find();

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
            'IdRefGajiTunjangan' => $this->IdRefGajiTunjangan,
            'IdGajiPokok' => $this->IdGajiPokok,
            'Tunjangan' => $this->Tunjangan,
            'RemunisasiGajiTunjangan' => $this->RemunisasiGajiTunjangan,
        ]);

        $query->andFilterWhere(['like', 'KodeGajiTunjangan', $this->KodeGajiTunjangan])
            ->andFilterWhere(['like', 'NamaGajiTunjangan', $this->NamaGajiTunjangan]);

        return $dataProvider;
    }
}
