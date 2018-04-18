<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Refgolonganruangmiliter;

/**
 * RefgolonganruangmiliterSearch represents the model behind the search form of `backend\models\Refgolonganruangmiliter`.
 */
class RefgolonganruangmiliterSearch extends Refgolonganruangmiliter
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['IdPangkatMiliter'], 'integer'],
            [['JenisAngkatanMiliter', 'JenjangMiliter', 'NamaPangkatMiliter'], 'safe'],
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
        $query = Refgolonganruangmiliter::find();

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
            'IdPangkatMiliter' => $this->IdPangkatMiliter,
        ]);

        $query->andFilterWhere(['like', 'JenisAngkatanMiliter', $this->JenisAngkatanMiliter])
            ->andFilterWhere(['like', 'JenjangMiliter', $this->JenjangMiliter])
            ->andFilterWhere(['like', 'NamaPangkatMiliter', $this->NamaPangkatMiliter]);

        return $dataProvider;
    }
}
