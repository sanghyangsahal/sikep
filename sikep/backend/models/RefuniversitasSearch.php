<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\ReferensiUniversitas;

/**
 * RefuniversitasSearch represents the model behind the search form of `backend\models\ReferensiUniversitas`.
 */
class RefuniversitasSearch extends ReferensiUniversitas
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idUniversitas', 'IdTingkatPendidikan', 'IdNegara'], 'integer'],
            [['KodeUniversitas', 'NamaUniversitas', 'DeskripsiUniversitas', 'SingkatanUniversitas'], 'safe'],
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
        $query = ReferensiUniversitas::find();

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
            'idUniversitas' => $this->idUniversitas,
            'IdTingkatPendidikan' => $this->IdTingkatPendidikan,
            'IdNegara' => $this->IdNegara,
        ]);

        $query->andFilterWhere(['like', 'KodeUniversitas', $this->KodeUniversitas])
            ->andFilterWhere(['like', 'NamaUniversitas', $this->NamaUniversitas])
            ->andFilterWhere(['like', 'DeskripsiUniversitas', $this->DeskripsiUniversitas])
            ->andFilterWhere(['like', 'SingkatanUniversitas', $this->SingkatanUniversitas]);

        return $dataProvider;
    }
}
