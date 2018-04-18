<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Refgolonganruang;

/**
 * RefgolonganruangSearch represents the model behind the search form of `backend\models\Refgolonganruang`.
 */
class RefgolonganruangSearch extends Refgolonganruang
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idGolonganRuang', 'UrutanGolonganRuang', 'idFormatBKN', 'idTingkatPendidikanMinimal'], 'integer'],
            [['KodeGolonganRuang', 'NamaGolongan', 'Golongan', 'Ruang'], 'safe'],
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
        $query = Refgolonganruang::find();

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
            'idGolonganRuang' => $this->idGolonganRuang,
            'UrutanGolonganRuang' => $this->UrutanGolonganRuang,
            'idFormatBKN' => $this->idFormatBKN,
            'idTingkatPendidikanMinimal' => $this->idTingkatPendidikanMinimal,
        ]);

        $query->andFilterWhere(['like', 'KodeGolonganRuang', $this->KodeGolonganRuang])
            ->andFilterWhere(['like', 'NamaGolongan', $this->NamaGolongan])
            ->andFilterWhere(['like', 'Golongan', $this->Golongan])
            ->andFilterWhere(['like', 'Ruang', $this->Ruang]);

        return $dataProvider;
    }
}
