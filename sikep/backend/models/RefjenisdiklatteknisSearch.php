<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Refjenisdiklatteknis;

/**
 * RefjenisdiklatteknisSearch represents the model behind the search form of `backend\models\Refjenisdiklatteknis`.
 */
class RefjenisdiklatteknisSearch extends Refjenisdiklatteknis
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['IdJenisDiklat', 'IdDiklatKelompok', 'IdDiklatSektor'], 'integer'],
            [['NamaJenisDiklatTeknis'], 'safe'],
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
        $query = Refjenisdiklatteknis::find();

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
            'IdJenisDiklat' => $this->IdJenisDiklat,
            'IdDiklatKelompok' => $this->IdDiklatKelompok,
            'IdDiklatSektor' => $this->IdDiklatSektor,
        ]);

        $query->andFilterWhere(['like', 'NamaJenisDiklatTeknis', $this->NamaJenisDiklatTeknis]);

        return $dataProvider;
    }
}
