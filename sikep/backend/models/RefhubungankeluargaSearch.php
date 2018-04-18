<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Refhubungankeluarga;

/**
 * RefhubungankeluargaSearch represents the model behind the search form of `frontend\models\Refhubungankeluarga`.
 */
class RefhubungankeluargaSearch extends Refhubungankeluarga
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['IdHubunganKeluarga'], 'integer'],
            [['JenisHubunganKeluarga'], 'safe'],
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
        $query = Refhubungankeluarga::find();

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
            'IdHubunganKeluarga' => $this->IdHubunganKeluarga,
        ]);

        $query->andFilterWhere(['like', 'JenisHubunganKeluarga', $this->JenisHubunganKeluarga]);

        return $dataProvider;
    }
}
