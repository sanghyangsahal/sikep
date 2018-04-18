<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\RefStatusperkawinan;

/**
 * RefStatusperkawinansearch represents the model behind the search form of `backend\models\RefStatusperkawinan`.
 */
class RefStatusperkawinansearch extends RefStatusperkawinan
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idStatusKawin'], 'integer'],
            [['namaStatusKawin'], 'safe'],
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
        $query = RefStatusperkawinan::find();

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
            'idStatusKawin' => $this->idStatusKawin,
        ]);

        $query->andFilterWhere(['like', 'namaStatusKawin', $this->namaStatusKawin]);

        return $dataProvider;
    }
}
