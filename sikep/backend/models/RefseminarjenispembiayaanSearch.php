<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Refseminarjenispembiayaan;

/**
 * RefseminarjenispembiayaanSearch represents the model behind the search form of `backend\models\Refseminarjenispembiayaan`.
 */
class RefseminarjenispembiayaanSearch extends Refseminarjenispembiayaan
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['IdJenisPembiayaanSeminar'], 'integer'],
            [['KodeJenisPembiayaanSeminar', 'NamaJenisPembiayaanSeminar'], 'safe'],
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
        $query = Refseminarjenispembiayaan::find();

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
            'IdJenisPembiayaanSeminar' => $this->IdJenisPembiayaanSeminar,
        ]);

        $query->andFilterWhere(['like', 'KodeJenisPembiayaanSeminar', $this->KodeJenisPembiayaanSeminar])
            ->andFilterWhere(['like', 'NamaJenisPembiayaanSeminar', $this->NamaJenisPembiayaanSeminar]);

        return $dataProvider;
    }
}
