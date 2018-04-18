<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Refjurusan;

/**
 * RefjurusanSearch represents the model behind the search form of `frontend\models\Refjurusan`.
 */
class RefjurusanSearch extends Refjurusan
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['IdJurusan', 'idTingkatPendidikan'], 'integer'],
            [['KodeJurusan', 'NamaJurusan'], 'safe'],
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
        $query = Refjurusan::find();

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
            'IdJurusan' => $this->IdJurusan,
            'idTingkatPendidikan' => $this->idTingkatPendidikan,
        ]);

        $query->andFilterWhere(['like', 'KodeJurusan', $this->KodeJurusan])
            ->andFilterWhere(['like', 'NamaJurusan', $this->NamaJurusan]);

        return $dataProvider;
    }
}
