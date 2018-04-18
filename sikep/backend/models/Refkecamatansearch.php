<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Refkecamatan;

/**
 * Refkecamatansearch represents the model behind the search form of `backend\models\Refkecamatan`.
 */
class Refkecamatansearch extends Refkecamatan
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['IdKecamatan', 'idKabupaten'], 'integer'],
            [['NamaKecamatan'], 'safe'],
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
        $query = Refkecamatan::find();

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
            'IdKecamatan' => $this->IdKecamatan,
            'idKabupaten' => $this->idKabupaten,
        ]);

        $query->andFilterWhere(['like', 'NamaKecamatan', $this->NamaKecamatan]);

        return $dataProvider;
    }
}
